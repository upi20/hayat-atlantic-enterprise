<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SessionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sessions')->delete();
        
        \DB::table('sessions')->insert(array (
            0 => 
            array (
                'id' => 'AMJMlzNIk4NkZCz3zeSiVKBo8iKsQF67JMlvoUDZ',
                'user_id' => 1,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36',
                'payload' => 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoialJTV1cza3lXSDNxNTRBeEpSMjdhVzU4bVppdmg2cThDb1h4NUVJYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9oYWUudGVzdC9sb2FkZXIvanMvYWRtaW4uanMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=',
                'last_activity' => 1667644348,
            ),
            1 => 
            array (
                'id' => 'LYWe3CexECO0x9FjLWQmdBw7ir0Q89UHJpUSU9hN',
                'user_id' => 1,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36 Edg/107.0.1418.56',
                'payload' => 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiMXByVEFhcEtBOVVwd1Y1cWhPR2htQzJ2Rzd5RFVtZURxU1V1OEo4ZSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMzoiaHR0cDovL2hhZS50ZXN0L2FkbWluL3BlbmdhbWJpbGFuIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTIyOiJodHRwOi8vaGFlLnRlc3QvYWRtaW4vbGFwb3Jhbi9wZW5nYW1iaWxhbi9jZXRha19sYXBvcmFuP2NvbHVtbnMlNUIwJTVEJTVCZGF0YSU1RD1ub19zdXJhdF9qYWxhbiZjb2x1bW5zJTVCMCU1RCU1Qm5hbWUlNUQ9bm9fc3VyYXRfamFsYW4mY29sdW1ucyU1QjElNUQlNUJkYXRhJTVEPXBlbnlld2Fhbl9rZXBhZGEmY29sdW1ucyU1QjElNUQlNUJuYW1lJTVEPXBlbnlld2Fhbl9rZXBhZGEmY29sdW1ucyU1QjIlNUQlNUJkYXRhJTVEPXRhbmdnYWxfc3RyJmNvbHVtbnMlNUIyJTVEJTVCbmFtZSU1RD10YW5nZ2FsJmNvbHVtbnMlNUIzJTVEJTVCZGF0YSU1RD10YW5nZ2FsX2tlbWJhbGlfc3RyJmNvbHVtbnMlNUIzJTVEJTVCbmFtZSU1RD10YW5nZ2FsX2tlbWJhbGkmZmlsdGVyJTVCc2FtcGFpX3RhbmdnYWwlNUQ9MjAyMi0xMS0zMCZmaWx0ZXIlNUJkYXJpX3RhbmdnYWwlNUQ9MjAyMi0xMC0wMSZvcmRlciU1QjAlNUQlNUJjb2x1bW4lNUQ9MiZvcmRlciU1QjAlNUQlNUJkaXIlNUQ9ZGVzYyZzZWFyY2glNUJ2YWx1ZSU1RD0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=',
                'last_activity' => 1669437356,
            ),
            2 => 
            array (
                'id' => 'nnBDyjfZC3qXTIBzYvos2bH4T3XuzxWuxPCDL2dr',
                'user_id' => 1,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36 Edg/107.0.1418.56',
                'payload' => 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiekhvZ3dSajZxVEdkYUd3ZGlwdW5iN0k5cFg5SVBFOGZRaTZRd255TyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozNDoiaHR0cDovL2hhZS50ZXN0L2FkbWluL3BlbmdlbWJhbGlhbiI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM0OiJodHRwOi8vaGFlLnRlc3QvbG9hZGVyL2pzL2FkbWluLmpzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9',
                'last_activity' => 1669490295,
            ),
            3 => 
            array (
                'id' => 'ujFpE2FlgGCbeDRr9UZcxw6NdoQJgONn4rbycfAO',
                'user_id' => NULL,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36 Edg/107.0.1418.56',
                'payload' => 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTEI0NWJZc3RUSG1rUDg5aHdIS29pYkxadGV2d05HTGtCaG80YU9sQSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0MjoiaHR0cDovL2hhZS50ZXN0L2FkbWluL3BlbmdlbWJhbGlhbi9saXN0LzMwIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly9oYWUudGVzdC9sb2FkZXIvanMvYXV0aC9sb2dpbi5qcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
                'last_activity' => 1669490223,
            ),
        ));
        
        
    }
}