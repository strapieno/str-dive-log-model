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
    'StartPointDiveLog' => [
        'beach',
        'sea'

    ],
    'strapieno-array-validators' => [
        'StartPointDiveLogValidator' => [
            'name_key_array_config' => 'StartPointDiveLog'
        ]
    ],
    'strapieno_input_filter_specs' => [
        'Strapieno\DiveLog\Model\InputFilter\DefaultInputFilter' => [
            'visibility' => [
                'require' => false,
                'allow_empty' => true,
                'name' => 'visibility',
                'filters' => [
                    'stringtrim' =>  [
                        'name' => 'stringtrim',
                    ]
                ],
                'validators' => [
                    'digits' => [
                        'name' => 'digits',
                        'break_chain_on_failure' => true
                    ]
                ]
            ],
            'current' => [
                'require' => false,
                'allow_empty' => true,
                'name' => 'current',
                'filters' => [
                    'stringtrim' =>  [
                        'name' => 'stringtrim',
                    ]
                ],
                'validators' => [
                    'digits' => [
                        'name' => 'digits',
                        'break_chain_on_failure' => true
                    ]
                ]
            ],
            'temperature' => [
                'require' => false,
                'allow_empty' => true,
                'name' => 'temperature',
                'filters' => [
                    'stringtrim' =>  [
                        'name' => 'stringtrim',
                    ]
                ],
                'validators' => [
                    'digits' => [
                        'name' => 'digits',
                        'break_chain_on_failure' => true
                    ]
                ]
            ],
            'depth' => [
                'require' => false,
                'allow_empty' => true,
                'name' => 'depth',
                'filters' => [
                    'stringtrim' =>  [
                        'name' => 'stringtrim',
                    ]
                ],
                'validators' => [
                    'digits' => [
                        'name' => 'digits',
                        'break_chain_on_failure' => true
                    ]
                ]
            ],
            'duration_dive' => [
                'require' => false,
                'allow_empty' => true,
                'name' => 'duration_dive',
                'filters' => [
                    'stringtrim' =>  [
                        'name' => 'stringtrim',
                    ]
                ],
                'validators' => [
                    'digits' => [
                        'name' => 'digits',
                        'break_chain_on_failure' => true
                    ]
                ]
            ],
            'start_point_dive' => [
                'require' => false,
                'allow_empty' => true,
                'name' => 'start_point_dive',
                'filters' => [
                    'stringtrim' =>  [
                        'name' => 'stringtrim',
                    ]
                ],
                'validators' => [
                    'StartPointDiveLog' => [
                        'name' => 'StartPointDiveLogValidator'
                    ]
                ]
            ],
            'date_when' => [
                'require' => false,
                'allow_empty' => true,
                'name' => 'date_when',
                'filters' => [
                    'stringtrim' =>  [
                        'name' => 'stringtrim',
                    ]
                ],
                'validators' => [
                    'date' => [
                        'name' => 'date',
                        'break_chain_on_failure' => true,
                        'options' => [
                            'format' => 'Y-m-d H:i'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
