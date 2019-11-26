<?php

do{
    $f = stream_get_line(STDIN, 10000, PHP_EOL);
    if($f!==false){
        $input[] = $f;
    }
}while($f!==false);

//var_dump($input);
// list() = $input;
// $line1 = array_shift($input);

// echo $output
