<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProfissionaisTecnologia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('profissionais_tecnologia', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('profissional_id');
            $table->foreign('profissional_id')->references('id')->on('profissionais')->onDelete('cascade');
            $table->unsignedBigInteger('tecnologia_id');
            $table->foreign('tecnologia_id')->references('id')->on('tecnologia')->onDelete('cascade');
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
        //
        Schema::dropIfExists('profissionais_tecnologia');
    }
    
}
