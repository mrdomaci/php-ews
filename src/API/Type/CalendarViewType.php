<?php

namespace garethp\ews\API\Type;

/**
 * Class representing CalendarViewType
 *
 *
 * XSD Type: CalendarViewType
 */
class CalendarViewType extends BasePagingType
{
    /**
     * @var string|null
     */
    protected $startDate = null;

    /**
     * @var string|null
     */
    protected $endDate = null;

    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param \DateTime|string $value
     */
    public function setStartDate(\DateTime|string $value)
    {
        $this->startDate = ($value instanceof \DateTime) ? $value->format('c') : $value;
        return $this;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param \DateTime|string $value
     */
    public function setEndDate(\DateTime|string $value)
    {
        $this->endDate = ($value instanceof \DateTime) ? $value->format('c') : $value;
        return $this;
    }
}
