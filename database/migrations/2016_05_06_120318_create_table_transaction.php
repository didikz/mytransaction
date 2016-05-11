<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTransaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('issued_type', ['income', 'outcome'])->default('income');
            $table->unsignedInteger('issued_value')->index();
            $table->string('issued_by', 100)->nullable();
            $table->string('issued_image', 100)->nullable();
            $table->mediumText('issued_description')->nullable();
            $table->unsignedInteger('user_id')->index();
            $table->dateTime('issued_date');
            $table->tinyInteger('issued_status')->default(1);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('transactions');
    }
}
