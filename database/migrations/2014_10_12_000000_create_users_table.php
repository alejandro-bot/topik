<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name_korean')->unique();
            $table->string('name_english')->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->timestamp('age');
            $table->string('gender')->default(1);
            $table->string('nationality');
            $table->string('occupation');
            $table->string('reason');
            $table->string('purpose');
            $table->string('phone');
            $table->string('city');
            $table->timestamp('email_verified_at')->nullable();
            $table->text('tarjeta_identificacion')->nullable();  
            $table->text('foto')->nullable();
            $table->text('servicios_especiales')->nullable();
            $table->text('formato_registro')->nullable();
            $table->text('comprobante_pago')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
