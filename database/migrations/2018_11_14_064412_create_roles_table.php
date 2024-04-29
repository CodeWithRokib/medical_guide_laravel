<?php

use App\Models\Role;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->timestamps();
        });
        $role = "";
        for($i=1;$i<=2;$i++){
            if($i==1){
                $role="Admin";
            }else{
                $role="User";
            }
            Role::create([
                'name'=>$role
            ]);
        }



    }

    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
