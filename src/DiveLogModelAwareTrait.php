<?php
namespace Strapieno\DiveLog\Model;

/**
 * Class DiveLogModelAwareTrait
 */
trait DiveLogModelAwareTrait
{
    /**
     * @var null|DiveLogModelInterface
     */
    protected $diveLogModelService;

    /**
     * @return null|DiveLogModelInterface
     */
    public function getDiveLogModelService()
    {
        return $this->diveLogModelService;
    }

    /**
     * @param DiveLogModelInterface $diveLogModelService
     * @return $this
     */
    public function setDiveLogModelService($diveLogModelService)
    {
        $this->diveLogModelService = $diveLogModelService;
        return $this;
    }
}