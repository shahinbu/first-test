<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusAllTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::table('clients', function (Blueprint $table) {
            $table->tinyInteger('status')->default(1);
        });

        Schema::table('portfolio', function (Blueprint $table) {
            $table->tinyInteger('status')->default(1);
        });

        Schema::table('about_us', function (Blueprint $table) {
            $table->tinyInteger('status')->default(1);
        });

        Schema::table('service', function (Blueprint $table) {
            $table->tinyInteger('status')->default(1);
        });

        Schema::table('our_team', function (Blueprint $table) {
            $table->tinyInteger('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {

        Schema::table('clients', function($table) {
            $table->dropColumn('status');
        });

        Schema::table('portfolio', function($table) {
            $table->dropColumn('status');
        });

        Schema::table('about_us', function($table) {
            $table->dropColumn('status');
        });

        Schema::table('service', function($table) {
            $table->dropColumn('status');
        });

        Schema::table('our_team', function($table) {
            $table->dropColumn('status');
        });
    }

}
