<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Requiero los archivos de clase para incluirlos en este script
        require("Autobus.php");
        require("Furgoneta.php");
        require("Coche.php");
        ?>

    <h1> Herencia, Extension y Polimorfismo</h1>

    <?php
        //Instancio y configuro los vehiculos
        $autobus = new Autobus("Volvo", "90800 2017", "gris", "Mario", "Desfufor");
        $furgoneta = new Furgoneta("Wolkswagen", "Cavarelle", "blanco", "Rebeca", "Desfufor");
        $coche = new Coche("Toyota", "Corolla", "verde", "Marcos");

    ?>

    <div>
        ¿Puedo aparcar el coche en la superficie?
        <strong><?php echo ($coche->puedeAparcar("superficie")) ? "si" : "no" ?></strong><br>
        ¿Puedo aparcar el coche en el subterraneo 2?
        <strong><?php echo ($coche->puedeAparcar("subterraneo 2")) ? "si" : "no" ?></strong><br>
        ¿Puedo aparcar la furgoneta en la superficie?
        <strong><?php echo ($furgoneta->puedeAparcar("superficie")) ? "si" : "no" ?></strong><br>
        ¿Puedo aparcar la furgoneta en el subterraneo 2?
        <strong><?php echo ($furgoneta->puedeAparcar("subterraneo 2")) ? "si" : "no" ?></strong><br>
        ¿Puedo aparcar el autobus en la superficie?
        <strong><?php echo ($autobus->puedeAparcar("superficie")) ? "si" : "no" ?></strong><br>
        ¿Puedo aparcar el autobus en el subterraneo 2?
        <strong><?php echo ($autobus->puedeAparcar("subterraneo 2")) ? "si" : "no" ?></strong><br>
        ¿A que empresa pertence el bus?
        <strong><?php echo ($autobus->getEmpresa()) ? "si" : "no" ?></strong><br>
    </div>
</body>
</html>