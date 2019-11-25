
<?php
	//pega as duas palavras pelo metodo post
    $palavra1 = $_POST['palavraa'];
    $palavra2 = $_POST['palavrab'];


    //remove os espaços
    $palavra1 = str_replace(" ","",$palavra1);
    $palavra2 = str_replace(" ","",$palavra2);

    //$palavra2 = 'cobra'; //strings to compare
    
    $anagrama = true;
    
    $palavra1 = str_split($palavra1);
    $palavra2 = str_split($palavra2);
    
    if(count($palavra1) == count($palavra2)){

        for($i = 0; $i < count($palavra1); $i++){

            if(!(in_array($palavra2[$i], $palavra1))){

                $anagrama = false;
                break;
            }
        }
        if($anagrama != false){
            echo 'Sao anagranas';
            header("Refresh: 2;url=index.html");
        }
        else{
            echo 'Não é um anagrama';
            header("Refresh: 2;url=index.html");
        }
    }
    else{
        echo 'Palavras com tamanhos diferentes';
        header("Refresh: 2;url=index.html");
    }
?>