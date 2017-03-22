<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoleAssignDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_assign_department', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id')->unsigned()->index('fk_role_id');
            $table->integer('department_id')->unsigned()->index('fk_department');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('role_assign_department');
    }
}
