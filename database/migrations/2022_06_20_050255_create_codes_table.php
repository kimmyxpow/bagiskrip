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
        Schema::create('codes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('hash')->unique();
            $table->text('script');
            $table->string('password')->nullable();
            $table->string('visibility_hash');
            $table->foreign('visibility_hash')->references('hash')->on('visibilities');
            $table->string('lang_hash');
            $table->foreign('lang_hash')->references('hash')->on('langs');
            $table->string('views')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('codes');
    }
};
