<?php
namespace App\Models;


class Listing{
    public static function all(){
        return  [
            [
                'id' => 1,
                'title' => 'listing One',
                'description' => 'thie is a description of text
                 the will e enterees int
                this array ; oidfsdfsoidfhs
                uhfsdhfsuihdfsduf'
            ],
             [
                'id' => 2,
                'title' => 'listing TWO',
                'description' => 'thie is a description of text
                 the will e enterees int
                this array ; oidfsdfsoidf
                hsuhfsdhfsuihdfsduf'
             ],
             [
                'id'=> 3,
                'title'=> 'listing three:',
                
                'description'=> 'this is another listing with age included. ============'
             ]
        
             ];
    }

public static function find($id){
    $listings = self::all();

    foreach($listings as $listing){
        if($listing['id'] == $id){
            return $listing;
        }
    }

}

}