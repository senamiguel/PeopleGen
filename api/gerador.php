<?php 
$pessoas = [];
if(isset($_GET['number'])){
    $numero = $_GET['number'];
    $response = file_get_contents("https://randomuser.me/api/?results=".$numero);
    $response = json_decode($response);
    if(isset($numero) && $numero > 0 && $numero <= 20){
        echo "<h1> Escolha um número </h1>";
        foreach($response->results as $pessoa ) {
            $pessoas[] = [
                'nome' => $pessoa->name->first,
                'sobrenome' => $pessoa->name->last,
                'username'=> $pessoa->login->username,
                'foto'=> $pessoa->picture->large
            ];
        }
    }
    else{
        echo "<h1>Número inválido!</h1>";
    }
}
else{
    echo "<h1> Escolha um número </h1>";
    $pessoas = "Escolha um número";
}