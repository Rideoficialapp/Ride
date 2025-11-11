<?php
/**
 * firebase_init.php
 *
 * Inicializa la conexión con Firestore usando la cuenta de servicio.
 */

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config.php';

use Google\Cloud\Firestore\FirestoreClient;

/**
 * Retorna una instancia de Firestore ya configurada para el proyecto Ride.
 */
function get_firestore(): FirestoreClient
{
    return new FirestoreClient([
        'projectId'   => FIREBASE_PROJECT_ID,
        'keyFilePath' => FIREBASE_SERVICE_ACCOUNT_JSON,
    ]);
}
