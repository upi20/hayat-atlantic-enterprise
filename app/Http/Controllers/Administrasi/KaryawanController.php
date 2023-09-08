<?php

namespace App\Http\Controllers\Administrasi;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use League\Config\Exception\ValidationException;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class KaryawanController extends Controller
{
    private $validate_model = [
        'name' => ['required', 'string', 'max:255'],
        'no_telepon' => ['nullable', 'string'],
        'active' => ['required', 'int', 'in:1,0'],
        'nik' => ['required', 'string', 'max:16'],
    ];

    private $query = [];

    public function index(Request $request)
    {
        if (request()->ajax()) {
            return $this->datatable($request);
        }

        $user_role = Role::where('id', '<>', 1)->get();
        $page_attr = [
            'title' => 'Karyawan',
            'breadcrumbs' => [
                ['name' => 'Dashboard'],
            ]
        ];
        if (auth_has_role('General Manager')) {
            return view('gm.karyawan', compact('page_attr', 'user_role'));
        }
        return view('administrasi.karyawan', compact('page_attr', 'user_role'));
    }

    public function insert(Request $request): mixed
    {
        try {
            $request->validate(array_merge(['password' => ['required', 'string']], $this->validate_model));
            $model = new User();

            $model->name = $request->name;
            $model->no_telepon = $request->no_telepon;
            $model->nik = $request->nik;
            $model->active = $request->active;
            $model->jenis_kelamin = $request->jenis_kelamin;
            $model->password = Hash::make($request->password);
            $model->created_by = auth()->user()->id;
            $model->syncRoles([$request->role]);
            $model->save();

            return response()->json($model);
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function update(Request $request): mixed
    {
        try {
            $model = User::findOrFail($request->id);
            $request->validate(array_merge(['id' => ['required', 'int']], $this->validate_model));

            $model->name = $request->name;
            $model->no_telepon = $request->no_telepon;
            $model->nik = $request->nik;
            $model->active = $request->active;
            $model->jenis_kelamin = $request->jenis_kelamin;
            $model->syncRoles([$request->role]);

            if ($request->password) {
                $model->password = Hash::make($request->password);
            }

            $model->updated_by = auth()->user()->id;

            $model->save();
            return response()->json($model);
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function delete(User $model): mixed
    {
        try {
            $model->delete();
            return response()->json($model);
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function find(Request $request)
    {
        // list table
        $user = User::find($request->id);
        $role = $user->roles()->orderBy('id')->first();
        $user->role = is_null($role) ? null : $role->name;
        return $user;
    }

    public function datatable(Request $request): mixed
    {
        // list table
        $table = User::tableName;
        $tableNames = config('permission.table_names');
        $t_roles = $tableNames['roles'];
        $t_model_has_roles = $tableNames['model_has_roles'];

        // cusotm query
        // ========================================================================================================
        // creted at and updated at
        $date_format_fun = function (string $select, string $format, string $alias) use ($table): array {
            $str = <<<SQL
                (DATE_FORMAT($table.$select, '$format'))
            SQL;
            return [$alias => $str, ($alias . '_alias') => $alias];
        };

        $c_created = 'created';
        $c_created_str = 'created_str';
        $c_updated = 'updated';
        $c_updated_str = 'updated_str';
        $this->query = array_merge($this->query, $date_format_fun('created_at', '%d-%b-%Y', $c_created));
        $this->query = array_merge($this->query, $date_format_fun('created_at', '%W, %d %M %Y %H:%i:%s', $c_created_str));
        $this->query = array_merge($this->query, $date_format_fun('updated_at', '%d-%b-%Y', $c_updated));
        $this->query = array_merge($this->query, $date_format_fun('updated_at', '%W, %d %M %Y %H:%i:%s', $c_updated_str));

        // created_by
        $c_created_by = 'created_by_str';
        $t_created_by = 'b';
        $this->query[$c_created_by] = "$t_created_by.name";
        $this->query["{$c_created_by}_alias"] = $c_created_by;

        // updated_by
        $c_updated_by = 'updated_by_str';
        $t_updated_by = 'c';
        $this->query[$c_updated_by] = "$t_updated_by.name";
        $this->query["{$c_updated_by}_alias"] = $c_updated_by;

        // role
        $c_role = 'role_str';
        $this->query[$c_role] = <<<SQL
            (select name from $t_roles as z join $t_model_has_roles as y on y.role_id = z.id where $table.id = y.model_id order by z.id limit 1)
            SQL;
        $this->query["{$c_role}_alias"] = $c_role;

        // jenis kelamin
        $c_jenis_kelamin = 'jenis_kelamin_str';
        $this->query[$c_jenis_kelamin] = <<<SQL
            IF($table.jenis_kelamin = 'l', 'Laki-Laki', IF($table.jenis_kelamin = 'p', 'Perempuan', 'Belum Ditentukan'))
            SQL;
        $this->query["{$c_jenis_kelamin}_alias"] = $c_jenis_kelamin;

        $c_active = 'active_str';
        $this->query[$c_active] = <<<SQL
            IF($table.active = 1, 'Aktif', 'Tidak Aktif')
            SQL;
        $this->query["{$c_active}_alias"] = $c_active;

        // ========================================================================================================


        // ========================================================================================================
        // select raw as alias
        $sraa = function (string $col): string {
            return $this->query[$col] . ' as ' . $this->query[$col . '_alias'];
        };
        $model_filter = [
            $c_created,
            $c_created_str,
            $c_updated,
            $c_updated_str,
            $c_created_by,
            $c_updated_by,
            $c_role,
            $c_jenis_kelamin,
            $c_active,
        ];

        $to_db_raw = array_map(function ($a) use ($sraa) {
            return DB::raw($sraa($a));
        }, $model_filter);
        // ========================================================================================================


        // Select =====================================================================================================
        $model = User::select(array_merge([
            DB::raw("$table.*"),
        ], $to_db_raw))
            ->leftJoin("$table as $t_created_by", "$t_created_by.id", '=', "$table.created_by")
            ->leftJoin("$table as $t_updated_by", "$t_updated_by.id", '=', "$table.updated_by")
            ->leftJoin($t_model_has_roles, "$t_model_has_roles.model_id", '=', "$table.id")
            ->leftJoin($t_roles, "$t_roles.id", '=', "$t_model_has_roles.role_id")
            ->where("$t_roles.name", '<>', config('app.super_admin_role'));

        // Filter =====================================================================================================
        // filter check
        $f_c = function (string $param) use ($request): mixed {
            $filter = $request->filter;
            return isset($filter[$param]) ? $filter[$param] : false;
        };

        // filter ini menurut data model filter
        $f = [$c_role];
        // loop filter
        foreach ($f as $v) {
            if ($f_c($v)) {
                $model->whereRaw("{$this->query[$v]}='{$f_c($v)}'");
            }
        }

        // filter custom
        $filters = ['updated_by', 'created_by', 'jenis_kelamin', 'active'];
        foreach ($filters as  $f) {
            if ($f_c($f) !== false) {
                $model->whereRaw("$table.$f='{$f_c($f)}'");
            }
        }
        // ========================================================================================================


        // ========================================================================================================
        $datatable = Datatables::of($model)->addIndexColumn();

        // search
        // ========================================================================================================
        $query_filter = $this->query;
        $datatable->filter(function ($query) use ($model_filter, $query_filter, $table) {
            $search = request('search');
            $search = isset($search['value']) ? $search['value'] : null;
            if ((is_null($search) || $search == '') && count($model_filter) > 0) return false;

            // tambah pencarian
            $search_add = [
                "$table.name",
                "$table.no_telepon",
                "$table.nik",
                "$table.jenis_kelamin",
                "$table.updated_by",
                "$table.created_by",
            ];

            $search_arr = array_merge($model_filter, $search_add);

            // pake or where
            $search_str = "(";
            foreach ($search_arr as $k => $v) {
                $or = (($k + 1) < count($search_arr)) ? 'or' : '';
                $column = isset($query_filter[$v]) ? $query_filter[$v] : $v;
                $search_str .= "$column like '%$search%' $or ";
            }

            $search_str .= ")";
            $query->whereRaw($search_str);
        });
        // create datatable
        return $datatable->make(true);
    }
}
