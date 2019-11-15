<?php
namespace FilipVanLanduyt\Faker\Provider;

use Faker\Provider\Base;

class Product extends Base
{
    protected static $productNames = [
        "ANA01","ANA04","ANR04SA",
        "INP02","INP04","INP08","INP08/230","INP16",
        "REL02","REL04SA","REL08",
        "ROL01","ROL02P"
    ];
    public function productName(): string
    {
        return static::randomElement(static::$productNames);
    }
    
}