<?php
$array = array(
    "numero1" => 1,
    "numero2" => 2,
    "numero3" => 3,
    "numero4" => 4,
    "numero5" => 5
     );

echo $array["numero1"];

print_r($array);

$produtos = array(
    "produto1"=> array(
               "nome" =>"Danone",
               "quantidade"=>25,
               "preco"=>25.5
                ),
    "Produto2"=> array(
               "nome" =>"Gilete",
               "quantidade"=>35,
               "preco"=>10
    )

    );
    
    $produtos["produto1"]["nome"] = "Geraldo";

    print_r($produtos)


 ?>