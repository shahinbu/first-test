<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShortDescriptionTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('short_description', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('title', ['service', 'portfolio', 'our_team', 'contact_us', 'about_us', 'clients', 'blogs'])->nullable();
            $table->longText('short_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('short_description');
    }

}
