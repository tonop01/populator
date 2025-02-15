<?php

namespace Populator\DataType;

use Populator\Structure\Column;

class BooleanDataType extends AbstractDataType
{
    protected $trueProbability = 50;

    public function populate(Column $column): bool
    {
         return $this->faker->boolean($this->trueProbability);
    }
}
