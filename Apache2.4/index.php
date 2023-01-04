<?php
session_start();
?>
<!doctype html>

<html lang="pt-BR">

<body>
    <h1>
        Primeiro teste com Login
    </h1>
    <h2><a href="protegida.php">Protegida</a></h2>
    <hr />
    <?php
    if (isset($_SESSION["usuario"])) {
        ?>
        <a href="logout.php">logout</a>
        <?php
    }
    ?>

</body>

</html>