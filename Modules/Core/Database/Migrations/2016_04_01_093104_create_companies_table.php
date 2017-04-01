<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account_key')->unique();
            $table->string('company_name')->index('company_name');
            $table->boolean('isactive')->default(1);
            $table->boolean('is_delete')->default(0);
            $table->string('logo');
            $table->boolean('use_logo');

            $table->unsignedInteger('timezone_id')->nullable();
            $table->unsignedInteger('date_format_id')->nullable();
            $table->unsignedInteger('datetime_format_id')->nullable();
            $table->unsignedInteger('currency_id')->nullable();

            $table->softDeletes();
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
        Schema::dropIfExists('companies');
    }
}
