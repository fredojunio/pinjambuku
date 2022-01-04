<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTopinjamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pinjams', function (Blueprint $table) {
            $table->foreign('bookId')
            ->references('id')
            ->on('books')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('userId')
            ->references('id')
            ->on('users')
            ->onUpdate('cascade')
            ->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pinjams', function (Blueprint $table) {
            //
        });
    }
}
