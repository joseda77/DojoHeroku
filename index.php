<html>
<head>
    <title>Prueba de Heroku</title>
</head>
<body>
    <?php echo '<p>Hola mundo Jose</p>';?>
    <?php  
    $name=$_GET['name'];
    $apellido=$_GET['apellido'];
    echo "<p>Nombre \$name : $name";
    echo "<p>Aepllido \$apellido : $apellido";
    ?>
</body>
</html>