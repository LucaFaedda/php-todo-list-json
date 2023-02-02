<?php 

    // ho dovuto per forza mettere tutto in un file a parte non nell'index, sennò quando aprivo la pagina mi mostrava tutto il DOM a schermo

    $string = file_get_contents('todo-list.json'); //  mi vado a recuperare il contenuto di todo-list
    // var_dump($string) // controllo se me lo ha prelevato

    $lista_linguaggio = json_decode($string, true); // trasformo il valore da stringa ad un array true serve per dare l'ok a trasformarmelo in array associativo

    // var_dump($lista_linguaggio); controllo se me lo ha trasformato

    if(isset($_POST['nuovoItem'])){  // se è vero che c'è un valore POST allora avviene ---->
        $nuovo_item = $_POST['nuovoItem']; // passo il valore di $_POST d una nuova variabile

        $nuovo_array=[  // valido un nuovo array con valore name il valore deciso prima
            "name" => $nuovo_item,
            "fatto" => false,
        ];

        $lista_linguaggio[] = $nuovo_array; // sostiuisco il vecchio array precedentemente valorizzato con quello nuovo con il nuvo dato inserito

        file_put_contents('todo-list.json', json_encode($lista_linguaggio)); // vado ad inserire il dato nell'array 
    };

    

   
    header('Content-Type: application/json');

    echo json_encode($lista_linguaggio);

?>