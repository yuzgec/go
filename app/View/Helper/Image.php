<?php


function removeImage(string $method){
    $method->media()->where('collection_name', 'page')->delete();
}

function imageupload(string $method, string $image, string $img_alt = null, int $rank = 99){

    if($method == 'update'){
        $method->media()->where('collection_name', 'page')->delete();
    }

    $w = Image::load($image)->getWidth();
    $h = Image::load($image)->getHeight();

    $method->media()->where('collection_name', 'page')->delete();

    $method->addMedia($image)->withCustomProperties(['width' => $w, 'height' => $h ,'image_alt' => $img_alt, 'rank' => $rank])->toMediaCollection('page');

}

function imagesupload(string $method, array $image, string $img_alt = null, int $rank = 99){
    foreach ($image as $item){

        $w = Image::load($item)->getWidth();
        $h = Image::load($item)->getHeight();

        $method->addMedia($item)->withCustomProperties(['width' => $w, 'height' => $h, 'image_alt' => $img_alt,'rank' => $rank ])->toMediaCollection('gallery');
    }
}

function imageRank(){
    return 'rank';
}
