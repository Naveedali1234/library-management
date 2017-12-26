<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Books extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->primary('barcode_id');
            //$table->integer('student_id')->nullable();
            //$table->string('accession_no')->unique();
            $table->string('title');
            $table->string('author');
            $table->string('place_of_publisher');
            $table->string('pages');
            $table->integer('cost');
            $table->string('size');
            $table->string('binding');
            $table->string('volume');
            $table->string('company');
            $table->string('publisher');
            $table->integer('year_of_publication');
            $table->string('company');
            $table->integer('isbn');
            $table->integer('quantity');
            $table->integer('remaining_quantity');
            $table->string('status');
            $table->string('bill_no');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
