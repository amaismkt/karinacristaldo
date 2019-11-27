<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->string('endereco');
            $table->string('telefone');
            $table->string('emailContato');
            $table->timestamps();
        });
        DB::table('contact')->insert(
            array(
                'email' => 'exemplo@email.com',
                'endereco' => 'Rua dos bobos, nº 0',
                'telefone' => '(35)3535-3535',
                'emailContato' => 'contato@amaismkt.com.br'
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
        Schema::dropIfExists('contact');
    }
}
