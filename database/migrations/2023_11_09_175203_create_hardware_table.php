<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('hardware', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 150);
            $table->string('marca', 150);
            $table->integer('quantidade');
            $table->dateTime('data_cadastro');
            $table->text('descricao');
            $table->string('imagem')->nullable(); 
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
        Schema::dropIfExists('hardware');
    }
};
