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
        'Strapieno\DiveLog\Model\InputFilter\DefaultInputFilter' => [
            'visibility' => [
                'name' => 'visibility',
                'filters' => [
                    'stringtrim' =>  [
                        'name' => 'stringtrim',
                    ]
                ],
                'validators' => [
                    'digits' => [
                        'name' => 'digits'
                    ]
                ]
            ],
            'current' => [
                'name' => 'current',
                'filters' => [
                    'stringtrim' =>  [
                        'name' => 'stringtrim',
                    ]
                ],
                'validators' => [
                    'digits' => [
                        'name' => 'digits'
                    ]
                ]
            ],
            'temperature' => [
                'name' => 'temperature',
                'filters' => [
                    'stringtrim' =>  [
                        'name' => 'stringtrim',
                    ]
                ],
                'validators' => [
                    'digits' => [
                        'name' => 'digits'
                    ]
                ]
            ],
            'depth' => [
                'name' => 'depth',
                'filters' => [
                    'stringtrim' =>  [
                        'name' => 'stringtrim',
                    ]
                ],
                'validators' => [
                    'digits' => [
                        'name' => 'digits'
                    ]
                ]
            ],
            'duration_dive' => [
                'name' => 'duration_dive',
                'filters' => [
                    'stringtrim' =>  [
                        'name' => 'stringtrim',
                    ]
                ],
                'validators' => [
                    'digits' => [
                        'name' => 'digits'
                    ]
                ]
            ],
            'start_point_dive' => [
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
                'name' => 'date_when',
                'filters' => [
                    'stringtrim' =>  [
                        'name' => 'stringtrim',
                    ]
                ],
                'validators' => [
                    'date' => [
                        'name' => 'date',
                        'options' => [
                            'format' => 'Y-m-d'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
