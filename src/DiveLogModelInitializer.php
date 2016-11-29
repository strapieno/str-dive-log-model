<?php
namespace Strapieno\DiveLog\Model;

use Strapieno\Utils\Initializer\AbstractModelServiceInitializer;

/**
 * Class DiveLogModelInitializer
 */
class DiveLogModelInitializer extends AbstractModelServiceInitializer
{
    const SERVICE_NAME = DiveLogModelService::class;
    const INSTANCE_CLASS = DiveLogModelAwareInterface::class;
    const SETTER_METHOD = 'setDiveLogModelService';
}