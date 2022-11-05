<?php

namespace App\Models;


class Product 
{
    private static $products = [
        [   
            "card" => "card bg-danger bg-opacity-25 border border-5 border-danger shadow rounded-5",
            "image" => "https://singerindonesia.com//_assets/cimage/webroot/img.php?src=images/temp/1592367316_gN1oLjDlTHp5XsqQ4rC2.png",
            "slug" => "household-sewing-machines",
            "card-body" => "card-body text-center text-bg-danger bg-opacity-100 rounded-5 m-2 p-1",
            "card-title" => "Household Sewing Machines",
            "card-text" => "Mesin Jahit Rumah Tangga"
        ],
        [
            "card" => "card bg-primary bg-opacity-25 border border-5 border-primary shadow rounded-5",
            "image" => "https://singerindonesia.com//_assets/cimage/webroot/img.php?src=images/temp/1592368091_3WZxAjFD4ukELl0BP5Vt.png",
            "slug" => "industrial-sewing-machines",
            "card-body" => "card-body text-center text-bg-primary bg-opacity-100 rounded-5 m-2 p-1",
            "card-title" => "Industrial Sewing Machines",
            "card-text" => "Mesin Jahit Industri"
        ],
        [
            "card" => "card bg-dark bg-opacity-25 border border-5 border-dark shadow rounded-5",
            "image" => "https://singerindonesia.com//_assets/cimage/webroot/img.php?src=images/temp/1595567536_sgdvDZHn9o4wSJaNEx2X.png",
            "slug" => "furnitures",
            "card-body" => "card-body text-center text-bg-dark bg-opacity-100 rounded-5 m-2 p-1",
            "card-title" => "Furnitures",
            "card-text" => "Perabot Pendukung Mesin Jahit"
        ],
        [
            "card" => "card bg-warning bg-opacity-25 border border-5 border-warning shadow rounded-5",
            "image" => "https://singerindonesia.com//_assets/cimage/webroot/img.php?src=images/temp/1643777637_jHkV1rUqlMDvQsPRo2hT.png",
            "slug" => "accessories",
            "card-body" => "card-body text-center text-bg-warning bg-opacity-100 rounded-5 m-2 p-1",
            "card-title" => "Accessories",
            "card-text" => "Aksesoris Mesin Jahit"
        ],
        [
            "card" => "card bg-success bg-opacity-25 border border-5 border-success shadow rounded-5",
            "image" => "https://singerindonesia.com//_assets/cimage/webroot/img.php?src=images/temp/1596593997_njzlKghQ1XGrsav6DL0O.png",
            "slug" => "spare-parts",
            "card-body" => "card-body text-center text-bg-success bg-opacity-100 rounded-5 m-2 p-1",
            "card-title" => "Spare Parts",
            "card-text" => "Suku Cadang Mesin Jahit"
        ]
    ];

    public static function all()
    {
        return collect(self::$products);
    }

    public static function find($slug)
    {
        $products = static::all();
        return $products->firstWhere('slug', $slug);
    }
}