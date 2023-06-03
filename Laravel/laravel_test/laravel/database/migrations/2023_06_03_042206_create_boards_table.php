<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boards', function (Blueprint $table) {
            // id(pk), title, content, created_at, updated_at, deleted_at, delete_flg, write_user_id
            $table->id();
            $table->string('title', 30);
            $table->string('content', 2000);
            $table->timestamps();
            $table->softDeletes();
            $table->char('delete_flg', 1)->default('0');
            // $table->bigInteger('write_user_id');
            $table->foreignId('write_user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boards');
    }
};
