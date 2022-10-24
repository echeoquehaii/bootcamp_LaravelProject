<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct(){

        $developers=[
            ["name"=>"Giorgia",
            "surname"=>"Angiolini",
            "position"=>"CEO",
            "img"=>"https://mdbcdn.b-cdn.net/img/new/fluid/city/113.webp",
            ],

            ["name"=>"Emanuele",
            "surname"=>"Isaia",
            "position"=>"Backend",
            "img"=>"https://mdbcdn.b-cdn.net/img/new/fluid/city/113.webp",
            ],

            ["name"=>"Carla",
            "surname"=>"Palladino",
            "position"=>"Frontend",
            "img"=>"https://mdbcdn.b-cdn.net/img/new/fluid/city/113.webp",
            ],

            ["name"=>"Michele",
            "surname"=>"Gramazio",
            "position"=>"Nientend",
            "img"=>"https://mdbcdn.b-cdn.net/img/new/fluid/city/113.webp",
            ],
        ];

        View::share('developers', $developers);
    }

}