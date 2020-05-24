<?php

$file = fopen("./results.csv", "r");

$match = 0;
$nomatch = 0;

$t = time();

while(!feof($file)) {
    $line = fgets($file);
    if(preg_match(
        '/^(\d{4}\-01\-\d\d),(.+),(.+),(\d+),(\d+),.*$/i',
        $line,
        $m
    )
    ) {
        if($m[4] == $m[5]){
            printf("Empate: ");
        }elseif($m[4] > $m[5]){
            echo "local:   ";
        } else {
        echo "visitante";
    }
    printf("\t%s, %s [%d-%d]\n", $m[2], $m[3], $m[4], $m[5]);
    $match++;
} else {
    $nomatch++;
    }
}
fclose($file);

printf("\n\nmatch: %d\nno match: %d\n", $match, $nomatch);

printf("tiempo: %d segundos\n", time() - $t);