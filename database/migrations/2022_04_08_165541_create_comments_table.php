<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('news_id');
            $table->unsignedBigInteger('student_id');
            // $table->unsignedBigInteger('admin_id');
            $table->string('comment', 700);
            $table->timestamps();
            $table->foreign('news_id')->references('id')->on('news');
            $table->foreign('student_id')->references('id')->on('students');
            // $table->foreign('admin_id')->references('id')->on('admins');
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');
    }
};
