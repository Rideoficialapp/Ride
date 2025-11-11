<?php
/**
 * code_utils.php
 *
 * Funciones para generar códigos de suscripción Ride.
 * Formato final:
 *  - R-CAR-B-XXXXXX
 *  - R-CAR-I-XXXXXX
 *  - R-CAR-P-XXXXXX
 *  - R-MOT-B-XXXXXX
 *  - R-MOT-I-XXXXXX
 *  - R-MOT-P-XXXXXX
 *
 * Donde:
 *  R      = Ride
 *  CAR    = Conductor con carro
 *  MOT    = Conductor con moto
 *  B/I/P  = Básico / Intermedio / Premium
 *  XXXXXX = 6 caracteres aleatorios en mayúsculas
 */

/**
 * Genera un código de suscripción único y con el formato oficial.
 *
 * @param string $role    'car' o 'moto'
 * @param string $planKey Ejemplo: 'CAR-BASIC', 'CAR-PREMIUM', 'M-BASIC', 'M-PREMIUM'
 *
 * @return string Código final, ejemplo: R-CAR-B-7H9KQ2
 */
function generateSubscriptionCode(string $role, string $planKey): string
{
    // Determinar letra del plan según la clave
    $planLetter = 'X';

    if (stripos($planKey, 'BASIC') !== false) {
        $planLetter = 'B';
    } elseif (stripos($planKey, 'INTERMEDIATE') !== false) {
        $planLetter = 'I';
    } elseif (stripos($planKey, 'PREMIUM') !== false) {
        $planLetter = 'P';
    }

    // Determinar código de tipo de vehículo
    // 'car' => CAR, 'moto' => MOT
    $roleCode = ($role === 'car') ? 'CAR' : 'MOT';

    // 6 caracteres aleatorios seguros en mayúsculas
    $random = strtoupper(substr(bin2hex(random_bytes(4)), 0, 6));

    // Construcción del código final
    return "R-{$roleCode}-{$planLetter}-{$random}";
}
