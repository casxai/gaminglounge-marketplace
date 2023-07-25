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
        $listings = \DB::table('listings')->get();

        foreach ($listings as $listing) {
            $images = json_decode($listing->images);
            $updatedImages = [];

            foreach ($images as $image) {
                // Assuming the incorrect image path is "listings\image1.jpg"
                // Replace the backslash with the forward slash
                $updatedImages[] = str_replace('\\', '/', $image);
            }

            \DB::table('listings')
                ->where('id', $listing->id)
                ->update(['images' => json_encode($updatedImages)]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('listings', function (Blueprint $table) {
            //
        });
    }
};
