<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id');
            $table->string('description', 700);
            $table->string('image');
            $table->string('num_of_reactions');
            $table->string('num_of_comments');
            $table->timestamps();
            $table->foreign('admin_id')->references('id')->on('admins');
        });
    }

    public function down()
    {
        Schema::dropIfExists('news');
    }
};
