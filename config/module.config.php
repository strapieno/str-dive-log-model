<?php
return [
    'service_manager' => [
        'invokables' => [
            'Strapieno\DiveLog\Model\Criteria\Mongo\DiveLogMongoCollectionCriteria' => 'Strapieno\DiveLog\Model\Criteria\Mongo\DiveLogMongoCollectionCriteria',
        ],
        'aliases' => [
            'Strapieno\DiveLog\Model\Criteria\DiveLogCollectionCriteria' => 'Strapieno\DiveLog\Model\Criteria\Mongo\DiveLogMongoCollectionCriteria',
        ]
    ],
    'mongodb' => [
        'Mongo\Db' => [
            'database' => 'strapieno',
        ],
    ],
    'mongocollection' => [
        'DataGateway\Mongo\DiveLog' => [
            'database' => 'Mongo\Db',
            'collection' => 'dive-log',
        ],
    ],
    'matryoshka-objects' => [
        'DiveLog' => [
            'type' => 'Strapieno\DiveLog\Model\Entity\DiveLogEntity',
            'active_record_criteria' => 'Strapieno\Model\Criteria\NotIsolatedActiveRecordCriteria'
        ]
    ],
    'matryoshka-models' => [
        'Strapieno\DiveLog\Model\DiveLogModelService' => [
            'datagateway' => 'DataGateway\Mongo\DiveLog',
            'type' => 'Strapieno\DiveLog\Model\DiveLogModelService',
            'object' => 'DiveLog',
            'resultset' => 'Strapieno\Model\ResultSet\HydratingResultSet',
            'paginator_criteria' => 'Strapieno\DiveLog\Model\Criteria\DiveLogCollectionCriteria',
            'hydrator' => 'Strapieno\DiveLog\Model\Hydrator\DiveLogModelMongoHydrator',
            'listeners' => [
                'Strapieno\Utils\Model\Listener\DateAwareListener',
            ],
        ],
    ],
    'strapieno_input_filter_specs' => [
        'Strapieno\DiveLog\Model\InputFilter\DefaultPostalAddressInputFilter' => [
            'address_locality' => [
                'require' => false,
                'allow_empty' => true,
                'name' => 'address_locality',
                'filters' => [
                    'stringtrim' =>  [
                        'name' => 'stringtrim',
                    ]
                ]
                // TODO add validator
            ],
            'address_region' => [
                'require' => false,
                'allow_empty' => true,
                'name' => 'address_region',
                'filters' => [
                    'stringtrim' =>  [
                        'name' => 'stringtrim',
                    ]
                ]
                // TODO add validator
            ],

            'postal_code' => [
                'require' => false,
                'allow_empty' => true,
                'name' => 'postal_code',
                'filters' => [
                    'stringtrim' =>  [
                        'name' => 'stringtrim',
                    ]
                ]
                // TODO add validator
            ],

            'street_address' => [
                'require' => false,
                'allow_empty' => true,
                'name' => 'street_address',
                'filters' => [
                    'stringtrim' =>  [
                        'name' => 'stringtrim',
                    ]
                ]
                // TODO add validator
            ],

            'address_country' => [
                'require' => false,
                'allow_empty' => true,
                'name' => 'address_country',
                'filters' => [
                    'stringtrim' =>  [
                        'name' => 'stringtrim',
                    ]
                ]
                // TODO add validator
            ],
        ],
        'Strapieno\DiveLog\Model\InputFilter\DefaultGeoCoordiateInputFilter' => [
            'latitude' => [
                'require' => false,
                'allow_empty' => true,
                'name' => 'latitude',
                'filters' => [
                    'stringtrim' =>  [
                        'name' => 'stringtrim',
                    ]
                ],
                'validators' => [
                    'latitude' => [
                        'name' => 'latitude'
                    ]
                ]
            ],
            'longitude' => [
                'require' => false,
                'allow_empty' => true,
                'name' => 'longitude',
                'filters' => [
                    'stringtrim' =>  [
                        'name' => 'stringtrim',
                    ]
                ],
                'validators' => [
                    'longitude' => [
                        'name' => 'longitude'
                    ]
                ]
            ],
            'elevation' => [
                'require' => false,
                'allow_empty' => true,
                'name' => 'elevation',
                'filters' => [
                    'stringtrim' =>  [
                        'name' => 'stringtrim',
                    ]
                ],
                'validators' => [
                    'longitude' => [
                        'name' => 'between',
                        'options' => [
                            'min' => -10994, // Challenger Abyss
                            'max' => 8848 // Everest
                        ],
                    ]
                ]

            ],
        ],
        'Strapieno\DiveLog\Model\InputFilter\DefaultInputFilter' => [

        ],
    ]
];
