<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function vehicle($id){
        $retorno = array();
        $retorno["id"] = $id;
        $retorno["model"] = "Hyundai HB20";
        $retorno["model_details"] = "TREKKING 1.3 FLEX AUTOMÁTICO 18/19";
        $retorno["price"] = 899.90;

        $retorno["photos"] = array();

        for($i = 1; $i <= 4; $i++){
            $photo = array();
            $photo["photo"] = "https://via.placeholder.com/390x293.png?text=".$i;
            $photo["thumb"] = "https://via.placeholder.com/89x61.png?text=".$i;
            $retorno["photos"][] = $photo;
        }


        $retorno["photos"] = [
            [
                "photo"=>asset("/default_photos/photo1.png"),
                "thumb"=>asset("/default_photos/thumb1.png"),
            ],
            [
                "photo"=>asset("/default_photos/thumb2.png"),
                "thumb"=>asset("/default_photos/thumb2.png"),
            ],
            [
                "photo"=>asset("/default_photos/thumb3.png"),
                "thumb"=>asset("/default_photos/thumb3.png"),
            ],
            [
                "photo"=>asset("/default_photos/thumb4.png"),
                "thumb"=>asset("/default_photos/thumb4.png"),
            ],
        ];
        $retorno["informations"] = [
            [
                "icon"=>asset("/default_icons/km_icone.png"),
                "title"=>"KM",
                "value"=>"0 KM",
            ],
            [
                "icon"=>asset("/default_icons/combustivel_icone.png"),
                "title"=>"COMBUSTÍVEL",
                "value"=>"GASOLINA",
            ],
            [
                "icon"=>asset("/default_icons/cambio_icone.png"),
                "title"=>"CÂMBIO",
                "value"=>"AUTOMÁTICO",
            ],
            [
                "icon"=>asset("/default_icons/portas_icone.png"),
                "title"=>"PORTAS",
                "value"=>"4",
            ],
            [
                "icon"=>asset("/default_icons/ar_icone.png"),
                "title"=>"AR CONDICIONADO",
                "value"=>"SIM",
            ],
            [
                "icon"=>asset("/default_icons/airbag_icone.png"),
                "title"=>"AIRBAG",
                "value"=>"SIM",
            ],
            [
                "icon"=>asset("/default_icons/abs_icone.png"),
                "title"=>"FREIO ABS",
                "value"=>"SIM",
            ],
        ];
        $retorno["colors"] = [
            [
                "id"=>1,
                "title"=>"Vermelho Magic",
                "value"=>"#9e0404",
            ],
            [
                "id"=>2,
                "title"=>"Prata",
                "value"=>"#999999",
            ],
            [
                "id"=>3,
                "title"=>"Preto",
                "value"=>"#000000",
            ],
            [
                "id"=>4,
                "title"=>"Branco",
                "value"=>"#ffffff",
            ],
        ];

        $retorno["periods"] = [
            [
                "id"=>1,
                "period"=>12,
                "title"=>"12 meses",
            ],
            [
                "id"=>2,
                "period"=>24,
                "title"=>"24 meses",
            ],
            [
                "id"=>3,
                "period"=>36,
                "title"=>"36 meses",
            ],
            [
                "id"=>4,
                "period"=>48,
                "title"=>"48 meses",
            ],
        ];

        $retorno["franchises"] = [
            [
                "id"=>1,
                "km"=>1000,
                "value"=>"1.000 km",
            ],
            [
                "id"=>2,
                "km"=>2000,
                "value"=>"2.000 km",
            ],
            [
                "id"=>3,
                "km"=>3000,
                "value"=>"3.000 km",
            ],
            [
                "id"=>4,
                "km"=>4000,
                "value"=>"4.000 km",
            ],
        ];


        return response()->json(["ok"=>1,"error"=>0,"vehicle"=>$retorno]);
    }
}
