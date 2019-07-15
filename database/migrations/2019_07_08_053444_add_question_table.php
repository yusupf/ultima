<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create('question', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 150);
            $table->timestamps();
            $table->softDeletes();
            $table->timestamp('server_timestamp')->nullable();
        });
        
        Schema::create('question_detail', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('question_id')->unsigned()->nullable();
            $table->foreign('question_id')->references('id')->on('question');
            $table->string('label', 2);
            $table->string('title', 150);
            $table->enum('is_answer', ['Y', 'N']);
            $table->timestamps();
            $table->softDeletes();
            $table->timestamp('server_timestamp')->nullable();
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
    }
}
