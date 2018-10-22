<?php
try {
    $mbd = new PDO('mysql:host=localhost;dbname=personas', $usuario=findme, $contraseña=builes150);
    foreach($mbd->query('SELECT * from datos') as $fila) {
        print_r($fila);

    }
    echo"Conectado";
    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
