<?php
namespace FilipVanLanduyt\Faker\Provider;

use Faker\Provider\Base;

class ProductGroup extends Base
{
    protected static $productGroupNames = [
        "Relais","Dimmers","Switches","Sensors","Shutters","Interfaces","Inputs","Controllers","Displays"
    ];
    public function productGroupName(): string
    {
        return static::randomElement(static::$productGroupNames);
    }
    
}