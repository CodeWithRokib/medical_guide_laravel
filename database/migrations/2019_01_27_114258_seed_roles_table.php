<?php

use App\Models\Role;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {
        Schema::table('roles', function (Blueprint $table) {
            Role::query()->create(['name'=>'Super Administrator','description'=>null]);
            Role::query()->create(['name'=>'Service Provider','description'=>null]);
            Role::query()->create(['name'=>'Customer','description'=>null]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('roles', function (Blueprint $table) {
            //
        });
    }
}
