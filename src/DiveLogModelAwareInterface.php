<?php
namespace Strapieno\DiveLog\Model;

/**
 * Interface DiveLogModelAwareInterface
 */
interface DiveLogModelAwareInterface
{
    /**
     * @return null|DiveLogModelInterface
     */
    public function getDiveLogModelService();

    /**
     * @param DiveLogModelInterface $diveLogModelService
     * @return $this
     */
    public function setDiveLogModelService($diveLogModelService);
}