<?php

namespace Modules\Tour\Services;

use Modules\Tour\Entities\TypeMoving;

class TypeMovingServices
{
    public function __construct(
        private TypeMoving $typeMoving
    ){}

    public function all()
    {
        return $this->typeMoving->all();
    }
}
