<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class serviziController extends BaseController
{
    public function servizi(){
        $services=[
            ["nome"=>"Visite Optometriche" ,
             "descrizione"=>"Stabilire la prescrizione per le lenti da vista",
             "dottore"=>"Mario Rossi" ,
             "prezzo"=>"30€", 
             "img" => "https://images.unsplash.com/photo-1505628346881-b72b27e84530?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
            ],

            ["nome"=>"Ecografie" ,
             "descrizione"=>"Metodo con ultrasuoni per vedere gli organi",
             "dottore"=>"Mario Verdi" ,
             "prezzo"=>"90€",
             "img" => "https://images.unsplash.com/photo-1534958210670-31215027cb02?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1051&q=80"
            ],
            
             ["nome"=>"OCT" ,
             "descrizione"=>"Esame per scansionare la cornea",
             "dottore"=>"Mario Bianchi" ,
             "prezzo"=>"10€",
             "img" => "https://images.unsplash.com/photo-1558237316-d4762d4b8ce7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDV8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
            ],

             ["nome"=>"Chirurgia estetica" ,
             "descrizione"=>"Procedura per diventare bellissimi",
             "dottore"=>"Giulio Rossi" ,
             "prezzo"=>"55€",
             "img" => "https://images.unsplash.com/photo-1579752220313-e8e7ba4e9370?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDEyfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60"
            ],

            ["nome"=>"OCT" ,
            "descrizione"=>"Esame per scansionare la cornea",
            "dottore"=>"Mario Bianchi" ,
            "prezzo"=>"10€",
            "img" => "https://images.unsplash.com/photo-1546421845-6471bdcf3edf?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
           ],

            ["nome"=>"Chirurgia estetica" ,
            "descrizione"=>"Procedura per diventare bellissimi",
            "dottore"=>"Giulio Rossi" ,
            "prezzo"=>"55€",
            "img" => "https://images.unsplash.com/photo-1585664811087-47f65abbad64?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80"
           ],
    
        ];
        return view("servizi" , compact("services"));
    }
}
