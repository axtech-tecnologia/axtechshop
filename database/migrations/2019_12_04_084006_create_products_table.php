<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('slug');
            $table->unsignedbigInteger('category_id');
            $table->bigInteger('quantidade')->unsigned()->default(0);
            $table->decimal('preco_atual',12,2)->default(0);
            $table->decimal('preco_anterior',12,2)->default(0);
            $table->integer('porcentagem_desconto')->unsigned()->default(0);
            $table->text('descricao_curta');
            $table->text('descricao_longa');
            $table->text('especificacoes');
            $table->text('dados_de_interesse');
            $table->unsignedbigInteger('visitas')->default(0);
            $table->unsignedbigInteger('vendas')->default(0);
            $table->string('estado');
            $table->char('ativo',2);
            $table->char('sliderprincipal',2);
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
