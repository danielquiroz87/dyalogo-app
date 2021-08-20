<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUSUARITable extends Migration
{
    public function up()
    {
        Schema::create('USUARI', function (Blueprint $table) {

        $table->increments(USUARI_ConsInte__b);
        $table->string('USUARI_Codigo____b',50)->nullable()->default('NULL');
        $table->string('USUARI_Clave_____b',253);
        $table->string('USUARI_Nombre____b',253);
        $table->string('USUARI_Cargo_____b',253)->nullable()->default('NULL');
        $table->integer('USUARI_ConsInte__PERUSU_b',10)->nullable()->default('NULL');
        $table->string('USUARI_Identific_b',50)->nullable()->default('NULL');
        $table->smallInteger('USUARI_Bloqueado_b',5)->default('0');
        $table->datetime('USUARI_FechCrea__b')->nullable()->default('NULL');
        $table->string('USUARI_UsuaCrea__b',253)->nullable()->default('NULL');
        $table->integer('USUARI_ConsInte__PROYEC_b',11)->nullable()->default('NULL');
        $table->string('USUARI_Foto______b')->nullable()->default('NULL');
        $table->string('USUARI_Correo___b')->nullable()->default('NULL');
        $table->string('USUARI_passCorreo_b')->nullable()->default('NULL');
        $table->time('USUARI_HorIniLun_b')->nullable()->default('NULL');
        $table->time('USUARI_HorFinLun_b')->nullable()->default('NULL');
        $table->time('USUARI_HorIniMar_b')->nullable()->default('NULL');
        $table->time('USUARI_HorFinMar_b')->nullable()->default('NULL');
        $table->time('USUARI_HorIniMie_b')->nullable()->default('NULL');
        $table->time('USUARI_HorFinMie_b')->nullable()->default('NULL');
        $table->time('USUARI_HorIniJue_b')->nullable()->default('NULL');
        $table->time('USUARI_HorFinJue_b')->nullable()->default('NULL');
        $table->time('USUARI_HorIniVie_b')->nullable()->default('NULL');
        $table->time('USUARI_HorFinVie_b')->nullable()->default('NULL');
        $table->time('USUARI_HorIniSab_b')->nullable()->default('NULL');
        $table->time('USUARI_HorFinSab_b')->nullable()->default('NULL');
        $table->time('USUARI_HorIniDom_b')->nullable()->default('NULL');
        $table->time('USUARI_HorFinDom_b')->nullable()->default('NULL');
        $table->time('USUARI_HorIniFes_b')->nullable()->default('NULL');
        $table->time('USUARI_HorFinFes_b')->nullable()->default('NULL');
        $table->primary('USUARI_ConsInte__b');

        });
    }

    public function down()
    {
        Schema::dropIfExists('USUARI');
    }
}