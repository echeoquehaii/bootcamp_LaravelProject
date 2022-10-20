<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class serviziController extends Controller
{
    public function servizi(){
        $services=[
            ["nome"=>"Visite Optometriche" ,
             "descrizione"=>"Stabilire con precisione la prescrizione per le lenti da vista",
             "dottore"=>"Mario Rossi" ,
             "prezzo"=>"non euro"],

            ["nome"=>"Ecografie" ,
             "descrizione"=>"Metodo con ultrasuoni per vedere gli organi",
             "dottore"=>"Mario Verdi" ,
             "prezzo"=>"90€"],
            
             ["nome"=>"OCT" ,
             "descrizione"=>"Esame per scansionare la cornea",
             "dottore"=>"Mario Bianchi" ,
             "prezzo"=>"10€"],

             ["nome"=>"Chirurgia estetica" ,
             "descrizione"=>"Procedura per diventare bellissimi",
             "dottore"=>"Giulio Rossi" ,
             "prezzo"=>"55€"],
    
        ];
        return view("servizi" , compact("services"));
    }
}
