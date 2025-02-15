<?php

namespace Populator\DataType;

use Populator\Structure\Column;

class TimeDataType extends AbstractDataType
{
    protected $format = 'H:i:s';

    public function populate(Column $column): string
    {
        return $this->faker->time($this->format);
    }
}
