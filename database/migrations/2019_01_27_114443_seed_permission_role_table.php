<?php

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedPermissionRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permission_role', function (Blueprint $table) {
            $permissions = Permission::all();
            $role_id = Role::query()->first()->id;

            foreach ($permissions as $permission){
                $data = [
                    'role_id' => $role_id,
                    'permission_id' => $permission->id
                ];
                \App\Models\PermissionRole::query()->create($data);
            }


//            $permissions = [1,2,3,4,5];
//            foreach($permissions as $permission){
//                DB::table('permission_role')->insert(
//                    ['permission_id' => $permission,'role_id'=>1]
//                );
//            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permission_role', function (Blueprint $table) {
            //
        });
    }
}
