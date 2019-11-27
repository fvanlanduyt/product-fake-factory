<?php
namespace FilipVanLanduyt\Faker\Provider;

use Faker\Provider\Base;

class Processor extends Base
{
    protected static $processorNames = [
        "ATMega88PB","ATMega168PB","ATMega328PB",
        "ATxmegaE5","ATMega16U4",
        "MK02FN128VFM10","MK10DN128VFM5"
    ];
    public function processorName(): string
    {
        return static::randomElement(static::$processorNames);
    }
    
}