<?php
/**
 * Created by PhpStorm.
 * User: BSANDOVAL
 * Date: 26/05/18
 * Time: 11:20 AM
 */

    /**Declaración de Funciones**/

    function mostratItem($key, $value)
    {
        return "<ol>$key => $value </ol>";
    }
?>


<?php
    //phpinfo();

    /** Nombre válido de las variables **/
    $miVar = "mi variable 1  ";

    $MiVar = "Mi Variable 2 ";
    $_miVar1 = "MI variable 3";


    /** Nombre de variables no válidas **/
    /*
    1mivar = "invalida";
    $1miVar = "inválida 2";
    */

    /** Se define en el arreglo get name, pero no se asigna.
     * Desde el navegador colocar localhost?name=ValorNombre
     **/
    echo  @$_GET['name'];

    /**Ambitos de Variables**/
    $a = " Variable Global";
    echo $a;

    function myFunction($a){

        $b = "Variable Local";
        echo $a;
    }

    myFunction($a);
    //echo  $b;

    /**Constantes-siempre son globales**/
    const miConstante = "Costante1"; //no pueden ir en estructuras de control
    define("miConstante2","miConstante2",false); //Se crean al vuelo, pueden ir dentro de estructuras de control
    echo "<br>";
    echo "<br>Valor Maximo Entero:". PHP_INT_MAX;
    echo "<br>Valor Minimo Entero:". PHP_INT_MIN ;
    echo "<br>Valor Max Float: ". PHP_FLOAT_MAX;
    echo "<br>Valor Min Float:". PHP_FLOAT_MIN;

    /**Usando comillas dobles**/
    $name = "Brian Sandoval";
    echo "<br>";
    echo "<br>Mi nombre es: \"$name\"";


    /**Utilizando explode**/
    $parametrosIn = "nombre=Brian&Apellido=Sandoval";
    $DatosSeparados = explode("&",$parametrosIn);
    echo "<br><br>";
    var_dump($DatosSeparados); //describe el detalle de la variable

    /**Utiliznando implode**/
    echo "<br><br>";
    $DatosUnidos = implode("&",$DatosSeparados);
    var_dump($DatosUnidos);

    /**Array asociativos**/
    echo "<br><br>";
    $arrayAsociativo = array("nombre" => "Brian",
    "edad"=> 22);

    echo $arrayAsociativo["nombre"]." ".$arrayAsociativo["edad"];


    /**Uso de Foreach**/
    $arrayAsociativoEXample = array(
        ["nombre" => "Brian", "edad"=> 22],
        ["nombre" => "Juan",  "edad"=> 27],
        ["nombre" => "Armando","edad"=> 32]
    );

    echo "<br><br>";
    ?>

<ul>
<?php
    /**Recorren estructuras**/
    foreach ($arrayAsociativoEXample as $value){
        echo "<li>".$value["nombre"]."</li>";

        /**Recorren datos de la estructura**/
        foreach ($value as $key => $dto):
            echo mostratItem($key, $dto);
        endforeach;

    }
?>
</ul>


<?php
    $value = @$cache[$key];











