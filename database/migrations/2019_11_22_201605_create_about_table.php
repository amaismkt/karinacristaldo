<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->string('subtitulo');
            $table->text('texto');
            $table->text('subtexto');
            $table->string('foto');
            $table->string('icone');
            $table->timestamps();
        });
        DB::table('about')->insert(
            array(
                'titulo' => 'Lorem Ipsum',
                'subtitulo' => 'Lorem Ipsum',
                'texto' => 'Acesse /painel para alterar as informações.',
                'subtexto' => 'Lorem Ipsum',
                'foto' => 'foto1.jpg',
                'icone' => 'mission.png'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about');
    }
}
