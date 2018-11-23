<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFunc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->string('nomeusuario');
            $table->string('cidade');
            $table->string('pais');
            $table->string('cep', 10);
            $table->dropColumn('updated_at');
            $table->dropColumn('created_at');
        });
    }

    public function down()
    {
        Schema::drop('cars');
    }
}
