<?php
// Iniciar sesión solo si aún no está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Mostrar errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Incluir rutas
require_once 'app/routes/web.php';
