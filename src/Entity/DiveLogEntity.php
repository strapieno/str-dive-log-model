<?php
namespace Strapieno\DiveLog\Model\Entity;

use Matryoshka\Model\Object\ActiveRecord\AbstractActiveRecord;
use Strapieno\Utils\Model\Entity\DateHistoryAwareInterface;
use Strapieno\Utils\Model\Entity\DateHistoryAwareTrait;
use Strapieno\Utils\Model\Entity\EntityInterface;
use Strapieno\Utils\Model\Object\UnderWater\UnderWaterInterface;
use Strapieno\Utils\Model\Object\UnderWater\UnderWaterTrait;

/**
 * Class DiveLogEntity
 */
class DiveLogEntity extends AbstractActiveRecord implements EntityInterface, UnderWaterInterface, DateHistoryAwareInterface
{
    use DateHistoryAwareTrait;
    use UnderWaterTrait;

    /**
     * @var DateTime|null
     */
    protected $dateWhen;

    /**
     * @var DateTime|null
     */
    protected $dateStartDive;

    /**
     * Minuts
     *
     * @var int
     */
    protected $durationDive;

    /**
     * beach or sea
     *
     * @var string
     */
    protected $startPointDive;

    /**
     * @return DateTime|null
     */
    public function getDateWhen()
    {
        return $this->dateWhen;
    }

    /**
     * @param DateTime $dateWhen
     * @return $this
     */
    public function setDateWhen(DateTime $dateWhen = null)
    {
        $this->dateWhen = $dateWhen;
        return $this;
    }

    /**
     * @return null|DateTime
     */
    public function getDateStartDive()
    {
        return $this->dateStartDive;
    }

    /**
     * @param DateTime $dateStartDive
     * @return $this
     */
    public function setDateStartDive(DateTime $dateStartDive)
    {
        $this->dateStartDive = $dateStartDive;
        return $this;
    }

    /**
     * @return int
     */
    public function getDurationDive()
    {
        return $this->durationDive;
    }

    /**
     * @param int $durationDive
     * @return $this
     */
    public function setDurationDive($durationDive)
    {
        $this->durationDive = $durationDive;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartPointDive()
    {
        return $this->startPointDive;
    }

    /**
     * @param string $startPointDive
     * @return $this
     */
    public function setStartPointDive($startPointDive)
    {
        $this->startPointDive = $startPointDive;
        return $this;
    }
}