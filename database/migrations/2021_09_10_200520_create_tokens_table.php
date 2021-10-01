<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tokens', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('provedor');

            $table->string('nome_fantasia', 96);
            $table->string('token', 96)->unique();
            $table->date('data_cadastro');
            $table->date('data_ativacao')->nullable();

            $table->string('ixc_domain', 64)->nullable();
            $table->string('ixc_addr', 15)->nullable();
            $table->enum('method', ['HTTP', 'HTTPS'])->default('HTTPS');
            $table->integer('vsn');

            $table->enum('ativo', ['S', 'N'])->default('N');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tokens');
    }
}
