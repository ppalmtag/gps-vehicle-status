<?php
// tracking vehicle status

$hex = 'FFFFFBFF';

$stati = [
    // byte nr
    0 => [
        // byte 1
        0 => 'Tempearature alarm',
        1 => 'Password error alarm',
        2 => 'GPRS error alarm',
        3 => 'Turn off engine',
        4 => 'Power down alarm',
        5 => 'High triggered sensor 1 is high',
        6 => 'High triggered sensor 2 is high',
        7 => 'Low triggered sensor 1 is GND',
    ],
    1 => [
        // byte 2
        0 => 'GPS fault alarm',
        1 => 'Battery low alarm',
        2 => 'nop',
        3 => 'Use battery backup',
        4 => 'Battery removed',
        5 => 'No GPS antenna',
        6 => 'GPS antenna shot',
        7 => 'Low triggered sensor 2 is GND',
    ],
    2 => [
        // byte 3
        0 => 'Door open',
        1 => 'Arm',
        2 => 'ACC off',
        3 => 'nop',
        4 => 'nop',
        5 => 'Engine start',
        6 => 'nop',
        7 => 'Over speed',
    ],
    3 => [
        // byte 4
        0 => 'Shock alarm',
        1 => 'SOS alarm',
        2 => 'Over alarm',
        3 => 'Start engine alarm',
        4 => 'Enter Geo-fence alarm',
        5 => 'No GPS antenna',
        6 => 'GPS antenna shot',
        7 => 'Break Geo-fence alarm',
    ],
];

foreach (str_split($hex, 2) as $byte_nr => $byte) {

    $bits = str_pad(base_convert($byte, 16, 2), 8, '0', STR_PAD_LEFT);
    foreach (str_split($bits) as $bit_nr => $bit) {
        
        if ($bit == 0) {
            echo $stati[$byte_nr][$bit_nr].PHP_EOL; // echos "Engine start"
        }
    }
}
