<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
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
    <label for="">Coordenada X:</label>
    <input type="text"><br>
    <br>
    <label for="">Coordenada Y:</label>
    <input type="text"><br>
    <br>
    <label for="">Color: </label>
    <select name="color" id="color">
        <?php
            foreach (Punto::COLORES as $colorIng => $arrayRes){
                echo "<option value='$colorIng'>{$arrayRes["nombre"]}</option>";

            }
        ?>
    </select>
<?php
}
 



