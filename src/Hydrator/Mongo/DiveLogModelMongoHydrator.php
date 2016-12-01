<?php
namespace Strapieno\DiveLog\Model\Hydrator\Mongo;

use Matryoshka\Model\Wrapper\Mongo\Hydrator\Strategy\MongoDateStrategy;
use Strapieno\Utils\Hydrator\Mongo\DateHistoryHydrator;

/**
 * Class DiveLogModelMongoHydrator
 */
class DiveLogModelMongoHydrator extends DateHistoryHydrator
{
    /**
     * {@inheritdoc}
     */
    public function __construct($underscoreSeparatedKeys = true)
    {
        parent::__construct($underscoreSeparatedKeys);
        $this->addStrategy('date_when', new MongoDateStrategy('Y-m-d H:i'));
    }
}