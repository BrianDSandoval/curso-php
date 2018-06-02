<?php
/**
 * Created by PhpStorm.
 * User: BSandoval
 * Date: 2/06/18
 * Time: 10:41 AM
 */
    function myCustomerFunc(array &$data, callable $callback){
        call_user_func($callback, $data); #muestra el primer estado
        array_push($data, 4);
        call_user_func($callback, $data); #muestra el segundo estado
        array_push($data, 5);
        call_user_func($callback, $data); #muestra el tercer estado
    }

    function logger($dataCallBack){
        var_dump($dataCallBack);
        //createFile($dataCallBack);
    }

    function createFile($array){
        $file = fopen("callableFile.txt", "a");
        foreach ($array as $dto):
            fwrite($file, "$dto\n");
        endforeach;
        fclose($file);
    }

    $myArray = [1,2,3];
    logger($myArray);
    myCustomerFunc($myArray, 'logger');
    logger($myArray);