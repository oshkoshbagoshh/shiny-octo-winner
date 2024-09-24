<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            // Example: Adding a new column
            $table->string('new_column')->nullable();

            // Example: Modifying an existing column
            // $table->string('existing_column')->nullable()->change();

            // Example: Dropping a column
            // $table->dropColumn('unnecessary_column');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            // Reverse the changes made in the up() method

            // Example: Dropping the new column
            $table->dropColumn('new_column');

            // Example: Reverting a modified column
            // $table->string('existing_column')->change();

            // Example: Adding back a dropped column
            // $table->string('unnecessary_column');
        });
    }
}
