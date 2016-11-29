<?php
namespace Strapieno\DiveLog\Model\Entity;

/**
 * Interface DivingInstruments
 */
interface DivingInstruments
{
    /**
     * @var int
     */
    protected $barStart;

    /**
     * @var int
     */
    protected $barEnd;

    /**
     * @var int
     */
    protected $ballastWeight;

    /**
     * Air Nitrox
     *
     * @var string
     */
    protected $contentCylinder;

    /**
     * liter
     *
     * @var int
     */
    protected $literCylinder;
}