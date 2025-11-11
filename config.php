<?php
/**
 * CONFIGURACIÓN GLOBAL RIDE (PRODUCCIÓN)
 * Ubicación: raíz del proyecto web (junto a index.html, compra.html, etc.)
 */

// ========== PAGADITO (PRODUCCIÓN) ==========
// Reemplaza estos valores con los que te entregue Pagadito.
define('PAGADITO_UID', 'TU_UID_PAGADITO_PRODUCCION');
define('PAGADITO_WSK', 'TU_WSK_PAGADITO_PRODUCCION');

// false = producción real, true = sandbox (solo pruebas)
define('PAGADITO_SANDBOX', false);

// ========== URL BASE DEL SITIO ==========
// Cambia esto por el dominio real donde está publicada esta web (sin / al final).
define('BASE_URL', 'https://TU-DOMINIO-OFICIAL.com');

// ========== URL DE RETORNO PAGADITO ==========
// Esta URL debes registrarla en Pagadito como URL de retorno.
define('PAGADITO_RETURN_URL', BASE_URL . '/pagadito_return.php');

// ========== FIREBASE / FIRESTORE ==========

// ID del proyecto Firebase (el que viste: ride-f3fcd)
define('FIREBASE_PROJECT_ID', 'ride-f3fcd');

// Ruta al archivo JSON de la cuenta de servicio en el SERVIDOR
define('FIREBASE_SERVICE_ACCOUNT_JSON', __DIR__ . '/serviceAccountKey.json');

// ========== PLANES OFICIALES RIDE ==========

$SUBSCRIPTION_PLANS = [

    // ----- PLANES PARA CARRO -----

    'CAR-BASIC' => [
        'role'          => 'car',
        'label'         => 'Carro - Plan Básico',
        'amount'        => 50.00,
        'max_earnings'  => 600,
        'duration_days' => 30,
    ],

    'CAR-INTERMEDIATE' => [
        'role'          => 'car',
        'label'         => 'Carro - Plan Intermedio',
        'amount'        => 100.00,
        'max_earnings'  => 1200,
        'duration_days' => 30,
    ],

    'CAR-PREMIUM' => [
        'role'          => 'car',
        'label'         => 'Carro - Plan Premium',
        'amount'        => 150.00,
        'max_earnings'  => null, // ilimitado
        'duration_days' => 30,
    ],

    // ----- PLANES PARA MOTO -----

    'M-BASIC' => [
        'role'          => 'moto',
        'label'         => 'Moto - Plan Básico',
        'amount'        => 25.00,
        'max_earnings'  => 300,
        'duration_days' => 30,
    ],

    'M-INTERMEDIATE' => [
        'role'          => 'moto',
        'label'         => 'Moto - Plan Intermedio',
        'amount'        => 45.00,
        'max_earnings'  => 600,
        'duration_days' => 30,
    ],

    'M-PREMIUM' => [
        'role'          => 'moto',
        'label'         => 'Moto - Plan Premium',
        'amount'        => 60.00,
        'max_earnings'  => 900,
        'duration_days' => 30,
    ],
];
