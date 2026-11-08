<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
include_once '../../scripts/Librerias/validacion.php';

$barraUbi = [
    [
        "TEXTO" => "Inicio",
        "LINK" => "/index.php"
    ],
    [
        "TEXTO" => "Relacion5",
        "LINK" => "/aplicacion/relacion5"
    ]
];

inicioCabecera("2DAW APLICACION");
cabecera();
finCabecera();

inicioCuerpo("2DAW APLICACION", $barraUbi);
cuerpo();
finCuerpo();

// *******************************************************

function cabecera() {}

function cuerpo()
{
    $errores = [];
    $valores = [
        'nombre' => '',
        'fecha_nacimiento' => '',
        'dia' => '',
        'mes' => '',
        'anio' => '',
        'hora' => '',
        'estado' => '',
        'estudios' => [],
        'hermanos' => 0,
        'sueldo' => 1100
    ];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = strtoupper(trim($_POST['nombre']));
        if (!validaCadena($nombre, 25, '') || str_starts_with($nombre, 'H')) {
            $errores['nombre'] = "Nombre inválido";
        }
        $valores['nombre'] = $nombre;

        $contrasena = $_POST['contrasena'];
        $patron = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$_\-;<>@]).{8,15}$/';
        if (!validaExpresion($contrasena, $patron, '')) {
            $errores['contrasena'] = "Contraseña inválida";
        }

        $fecha_nacimiento = $_POST['fecha_nacimiento'];
        if (!validaFecha($fecha_nacimiento, '')) {
            $errores['fecha_nacimiento'] = "Fecha inválida";
        }
        $valores['fecha_nacimiento'] = $fecha_nacimiento;

        $dia = $_POST['dia'];
        $mes = $_POST['mes'];
        $anio = $_POST['anio'];
        $valores['dia']  = $dia;
        $valores['mes']  = $mes;
        $valores['anio'] = $anio;

        $fecha_carnet = "$dia/$mes/$anio";
        if (!validaFecha($fecha_carnet, '')) {
            $errores['fecha_carnet'] = "Fecha de carnet inválida";
        } else {
            $fnac = DateTime::createFromFormat('d/m/Y', $fecha_nacimiento);
            $mayorEdad = clone $fnac;
            $mayorEdad->add(new DateInterval('P18Y'));
            $fcarnet = DateTime::createFromFormat('d/m/Y', $fecha_carnet);
            if ($fcarnet < $mayorEdad) {
                $errores['fecha_carnet'] = "Debe ser mayor de edad";
            }
        }

        $hora = $_POST['hora'];
        if (!validaHora($hora, '')) $errores['hora'] = "Hora inválida";
        $valores['hora'] = $hora;

        $estado = $_POST['estado'] ?? null;
        $estado = isset($_POST['estado']) ? (int)$_POST['estado'] : null;
        if (!validaRango($estado, [1, 2, 3, 4])) $errores['estado'] = "Estado inválido";
        $valores['estado'] = $estado;

        $estudios = $_POST['estudios'] ?? [];
        $validos  = [0, 1, 2, 3, 4, 5];
        if (empty($estudios)) {
            $errores['estudios'] = "Debe seleccionar al menos uno";
        } elseif (in_array(0, $estudios) && count($estudios) > 1) {
            $estudios = [0];
        } elseif (array_diff($estudios, $validos)) {
            $errores['estudios'] = "Opción inválida";
        }
        $valores['estudios'] = $estudios;

        $hermanos = $_POST['hermanos'];
        if (!validaEntero($hermanos, 0, 20, 0)) $errores['hermanos'] = "Número inválido";
        $valores['hermanos'] = $hermanos;

        $sueldo = $_POST['sueldo'];
        if (!validaReal($sueldo, 1000, 150000, 1100)) $errores['sueldo'] = "Sueldo inválido";
        $valores['sueldo'] = $sueldo;
    }

    if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !empty($errores)) {
        mostrarFormulario($valores, $errores);
    } else {
        echo "<h2>Resumen</h2>";
        foreach ($valores as $k => $v) {
            echo "<b>$k:</b> " . (is_array($v) ? implode(', ', $v) : $v) . "<br>";
        }
    }
}

function mostrarFormulario(array $valores, array $errores): void
{
?>
    <form method="post">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?= htmlspecialchars($valores['nombre']) ?>">
        <?= $errores['nombre'] ?? '' ?><br>

        <label>Contraseña:</label>
        <input type="password" name="contrasena">
        <?= $errores['contrasena'] ?? '' ?><br>

        <label>Fecha nacimiento:</label>
        <input type="text" name="fecha_nacimiento" value="<?= $valores['fecha_nacimiento'] ?>">
        <?= $errores['fecha_nacimiento'] ?? '' ?><br>

        <label>Fecha carnet:</label>
        Día <input type="text" name="dia" value="<?= $valores['dia'] ?>" size="2">
        Mes <input type="text" name="mes" value="<?= $valores['mes'] ?>" size="2">
        Año <input type="text" name="anio" value="<?= $valores['anio'] ?>" size="4">
        <?= $errores['fecha_carnet'] ?? '' ?><br>

        <label>Hora:</label>
        <input type="text" name="hora" value="<?= $valores['hora'] ?>">
        <?= $errores['hora'] ?? '' ?><br>

        <label>Estado:</label><br>
        <?php foreach ([1 => 'Estudiante', 2 => 'En paro', 3 => 'Trabajando', 4 => 'Jubilado', 5 => 'Incorrecta'] as $k => $l): ?>
            <input type="radio" name="estado" value="<?= $k ?>" <?= ($valores['estado'] == $k) ? 'checked' : '' ?>><?= $l ?><br>
        <?php endforeach; ?>
        <?= $errores['estado'] ?? '' ?><br>

        <label>Estudios:</label><br>
        <?php foreach ([0 => 'Sin estudios', 1 => 'Primaria', 2 => 'Secundaria', 3 => 'Bachillerato', 4 => 'Ciclo formativo', 5 => 'Universitarios', 6 => 'Incorrecta'] as $k => $l): ?>
            <input type="checkbox" name="estudios[]" value="<?= $k ?>" <?= in_array($k, $valores['estudios']) ? 'checked' : '' ?>><?= $l ?><br>
        <?php endforeach; ?>
        <?= $errores['estudios'] ?? '' ?><br>

        <label>Hermanos:</label>
        <input type="number" name="hermanos" value="<?= $valores['hermanos'] ?>">
        <?= $errores['hermanos'] ?? '' ?><br>

        <label>Sueldo:</label>
        <input type="number" name="sueldo" value="<?= $valores['sueldo'] ?>">
        <?= $errores['sueldo'] ?? '' ?><br>

        <input type="submit" value="Enviar">
    </form>
<?php
}
?>



