<?php
function buscarCEP($cep)
{

    //remover o - do número
    $cep = str_replace("-", "", $cep);

    //buscar o cep na API
    @$url = file_get_contents("http://viacep.com.br/ws/$cep/json/");

    if (strlen($url) > 0) {

        return $url;
    } else {

        return "";
    }
}
echo buscarCEP($_POST["cep"]);
