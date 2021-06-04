<?php
//print_r($_SERVER['SCRIPT_NAME']);

function strContains($name) {
    return strpos($_SERVER['SCRIPT_NAME'], $name);
}

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><span class="fw-bold">PHP</span>escom</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php echo strContains("index") ? " active" : ""; ?>" aria-current="page" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo strContains("nuevo") ? " active" : ""; ?>" aria-current="page" href="nuevo.php">Nuevo cuestionario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo strContains("ver") ? " active" : ""; ?>" aria-current="page" href="ver.php">Ver cuestionario</a>
                </li>
            </ul>
        </div>
    </div>
</nav>