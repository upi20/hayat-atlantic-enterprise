<?php

namespace App\Models\Menu;

use App\Models\RoleHasMenu;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Admin extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $table = 'p_menu';
    const tableName = 'p_menu';

    public static function menuHasRole(?int $user_id = null, $all = false)
    {
        $tableNames = config('permission.table_names');
        $table = self::tableName;
        $t_user_has_role = $tableNames['model_has_roles'];
        $t_role_has_menu = RoleHasMenu::tableName;
        DB::statement("SET SQL_MODE=''");
        $menu = DB::table($table)->select([
            "$table.id",
            "$table.parent_id",
            "$table.title",
            "$table.icon",
            "$table.route",
            "$table.sequence",
            DB::raw("b.title as parent"),
            DB::raw("$table.active as status"),
            "$table.type",
        ]);

        if ($user_id) {
            $menu->join("$t_role_has_menu", "$t_role_has_menu.menu_id", '=', "$table.id");
            $menu->join("$t_user_has_role", "$t_user_has_role.role_id", '=', "$t_role_has_menu.role_id");
            $menu->where("$t_user_has_role.model_id", '=', $user_id);
        }
        if (!$all) {
            $menu->where("$table.active", '=', 1);
        }

        $menu->leftJoin("$table as b", "b.id", "=", "$table.parent_id");
        $menu->groupBy("$table.id");
        $menu->orderBy("$table.sequence", 'asc');

        return $menu->get();
    }

    public static function findEdit($id)
    {
        $tableNames = config('permission.table_names');
        $table = self::tableName;
        DB::statement("SET SQL_MODE=''");
        $menu = DB::table($table)->select([
            "$table.id",
            "$table.parent_id",
            "$table.title",
            "$table.icon",
            "$table.route",
            "$table.sequence",
            "$table.active",
            DB::raw("concat(b.title, ' | ', b.route) as parent"),
            "$table.type",
        ]);
        $menu->where("$table.id", '=', $id);
        $menu->leftJoin("$table as b", "b.id", "=", "$table.parent_id");
        $menu = $menu->first();

        $t_hrole = RoleHasMenu::tableName;
        $t_roles = $tableNames['roles'];
        $role = RoleHasMenu::select([
            DB::raw("$t_roles.name as text"),
            DB::raw("$t_roles.id"),
        ])
            ->join($t_roles, "$t_roles.id", '=', "$t_hrole.role_id")
            ->where("$t_hrole.menu_id", '=', $id);

        $roles = $role->get();
        return [
            'menu' => $menu,
            'roles' => $roles,
        ];
    }
}
