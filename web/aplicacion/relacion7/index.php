<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
include_once(dirname(__FILE__) . "/../../scripts/Librerias/validacion.php");
//controlador
$barraUbi = [
    [
        "TEXTO"=>"Inicio",
        "LINK" =>"/index.php"
    ],
    [
        "TEXTO"=>"Relacion 7",
        "LINK" =>""
    ]
];

$arrayPuntos =[];
$errores = [];

if (isset($_POST["guardar"])){
    try{
    $pX = $_POST["coordX"];
    $pY = $_POST["coordY"];
    $color = $_POST["color"];
    $grosor = $_POST["grosor"] ?? "";

    if ($pX == null || $pY == null || $color == null || $grosor == null)
        throw new Error("Todos los valores deben de rellenarse");
    if (!validaEntero($pX,0,500,0) || !validaEntero($pY,0,500,0))
        throw new Error("Las coordenadas deben de estar entre 0 y 500");

    }catch(Error $e){

    }
}
    
//dibuja la plantilla de la vista
inicioCabecera("RELACION 7");
cabecera();
finCabecera();
inicioCuerpo("RELACION7", $barraUbi);
cuerpo(); //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera() {}
//vista
function cuerpo()
{
?>

<?php
    formulario();


}
function formulario(){
    ?>
    <form method="post">
        <label for="">Coordenada X:</label>
        <input type="number" name="coordX"><br>
        <label for="">Coordenada Y:</label>
        <input type="number" name="coordY"><br>
        <label for="">Color: </label>
        <select name="color" id="color">
            <?php
                foreach (Punto::COLORES as $colorIng => $arrayRes){
                    echo "<option value='$colorIng'>{$arrayRes["nombre"]}</option>";

                }
            ?>
        </select><br>
        <label for="">Grosor: </label><br>
            <?php
                foreach (Punto::GROSORES as $nuGrosor => $nombre){
                    echo "<input type='radio' name = 'grosor' value = '$nuGrosor'>$nombre<br>";
                }
            ?>
        <button name="guardar">Guardar Punto</button><br>
        <br>
        <h3>Resumen Puntos</h3>
        <textarea name="puntosCreados" id=""></textarea>
    </form>
<?php
}
 



