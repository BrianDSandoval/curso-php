<?php
/**
 * Created by PhpStorm.
 * User: kmmx02-ubuntu
 * Date: 9/06/18
 * Time: 09:13 AM
 */

    $t = translateByFile("es", "hello");
    var_dump($t);
    function translateByFile(string $lang = "en", string $text) : string {

        switch($lang){
            case "es":

                break;

            case "en":

                break;
        }
        $fr = fopen('traductor.txt', 'r');
        $respose = "";

        while(false !== ( $line = fgetcsv($fr)) ){
            $line[1] = $line[1] ?? null;
            if(trim($line[0]) === trim($lang))
                if(trim($line[1]) == trim($text) )
                    $respose = trim($line[2]);
        }

        fclose($fr);

        if($respose != "" && $respose != null) {
            return $respose;
        }else{
            return $text;
        }
    }