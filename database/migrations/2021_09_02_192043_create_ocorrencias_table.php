<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOcorrenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ocorrencias', function (Blueprint $table) {
            $table->id();
            $table->String('ocorrencia')->required()->unique();
            $table->String('oficio')->required();
            $table->String('perito')->required();
            $table->date('entrada')->required();
            $table->decimal('dias')->required()->default(0);
            $table->enum('status',['Aberto','Andamento','Finalizado'])->default('Aberto');
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
        Schema::dropIfExists('ocorrencias');
    }
}
