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

                // Modify the 'description' column to 'text' type
                Schema::table('listings', function (Blueprint $table) {
                    $table->text('description')->change();
                });

                // Drop the 'status' column
                Schema::table('listings', function (Blueprint $table) {
                    $table->dropColumn('status');
                });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('listings', function (Blueprint $table) {
            $table->string('description')->change();
            $table->boolean('status')->default(true);
        });
    }
};
