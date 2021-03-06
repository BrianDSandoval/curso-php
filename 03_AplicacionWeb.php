<?php
/**
 * Created by PhpStorm.
 * User: BSandoval
 * Date: 2/06/18
 * Time: 12:00 PM
 */

    $lang = @$_GET['lang'];
    if(!$lang)
        $lang = "es";
    $title = "My First Page.";

    $dictionary = array(
        "en" => array(
            "Hello Sandoval" => "Hello Sandoval"
        ),
        "es" => array(
            "Hello Sandoval" => "Hola Sandoval"
        )
    );

    /**
     * @param string $lang
     * @param string $text
     * @return string
     */
    function translate(string $lang = "en", string $text): string {
        global $dictionary;
        if(array_key_exists($lang, $dictionary)){
            if(array_key_exists($text, $dictionary[$lang])){
                return $dictionary[$lang][$text];
            }else{
                return $text;
            }
        }
        return $text;
    }

    function translateByFile(string $lang = "en", string $text) : string {
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

    ?>

    <!doctype html>
    <html lang=<?php echo "\"$lang\"" ?>>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo $title ?></title>
    </head>
    <body>
        <h1> <?php echo translate($lang,"Hello Sandoval"); ?></h1>
        <h2> <?php echo translateByFile($lang,"Hello Sandoval"); ?></h2>
    </body>
    </html>
