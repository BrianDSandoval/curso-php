<?php
/**
 * Created by PhpStorm.
 * User: BSANDOVAL
 * Date: 2/06/18
 * Time: 09:36 AM
 */

    /**
    * @param $param
    * @return string
    */
    function myFunction($param){
        echo "$param\n";
        return "Function executed\n";
    }

    echo  myFunction("myFuntion work");

    #Example dos - argumentos

    /**
     * @param int $int
     * @param string $string
     */
    function defaultValues($int = 1, $string = "cadena"){
        echo "$int\n";
        echo "$string\n";
    }

    defaultValues();
    defaultValues(5, "Cadena dos");

    ## TYPE DECLARATIONS ##

    #Example 3 - Tipo con valores primitivos
    /**
     * @param string $param1
     * @return number
     */
    function myFunctionWIthErrors(string $param1): int
    {
        echo "$param1\n";
        return 1;
    }

    myFunctionWIthErrors("MSJ: PARA VER EL ERROR, BORRA EL PARAMETRO");


    ## Operador SPLAT ...##
    function fucnWithVariableTypedVars(bool ... $array){
        echo json_encode($array);
    }

    fucnWithVariableTypedVars(1, "10","2.2", false);

    ## Funciones recursivas ##
    function factorial(int $n){
        if($n == 1)
            return 1;
        else
            return $n * factorial($n-1);
    }
    $result = factorial(3);
    echo  "\nFactorial: $result";