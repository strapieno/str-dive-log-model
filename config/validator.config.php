<?php
return [
    'initializers' => [
        'Strapieno\DiveLog\Model\DiveLogModelInitializer'
    ],
    'invokables' => [
        'Strapieno\DiveLog\Model\Validator\EntityExist' => 'Strapieno\DiveLog\Model\Validator\EntityExist'
    ],
    'aliases' => [
        'divelogentityexist' => 'Strapieno\DiveLog\Model\Validator\EntityExist'
    ],
];