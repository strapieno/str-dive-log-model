<?php
namespace Strapieno\DiveLog\Model\Validator;

use Strapieno\DiveLog\Model\DiveLogModelAwareInterface;
use Strapieno\DiveLog\Model\DiveLogModelAwareTrait;
use Strapieno\Utils\Validator\Model\AbstractEntityExist;
use Zend\Validator\ValidatorInterface;

/**
 * Class EntityExist
 */
class EntityExist extends AbstractEntityExist implements ValidatorInterface, DiveLogModelAwareInterface
{
    use DiveLogModelAwareTrait;

    const GETTER_METHOD_NAME = 'getDiveLogModelService';

    /**
     * @var array
     */
    protected $messageTemplates = [
        self::ID_NOT_EXISTS => 'The id does not exist',
        self::NOT_MONGO_ID  => 'Identifier format not valid'
    ];

    protected function getModelMethodService()
    {
        return EntityExist::GETTER_METHOD_NAME;
    }
}