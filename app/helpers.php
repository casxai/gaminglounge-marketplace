<?php


function listingImage($listing){
    return $listing && file_exists('storage/'.$listing) ? asset('storage/'.$listing) : asset('/img/banner/1.jpg');
}
