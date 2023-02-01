<?php 

    // ho dovuto per forza mettere tutto in un file a parte non nell'index, sennò quando aprivo la pagina mi mostrava tutto il DOM a schermo

    $string = file_get_contents('todo-list.json'); //  mi vado a recuperare il contenuto di todo-list
    // var_dump($string) // controllo se me lo ha prelevato

    $lista_linguaggio = json_decode($string, true); // trasformo il valore da stringa ad un array
    // var_dump($lista_linguaggio); controllo se me lo ha trasformato

   
    header('Content-Type: application/json');

    echo json_encode($lista_linguaggio);

?>