<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXmlEnviadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xml_enviados', function (Blueprint $table) {
            $table->id();
            $table->string('xml_send');
            $table->string('xml_response');
            $table->integer('id_evento');
            $table->integer('estado');
            $table->string('numero_secuencia');
            $table->string('time_send');
            $table->string('time_response');
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
        Schema::dropIfExists('xml_enviados');
    }
}
