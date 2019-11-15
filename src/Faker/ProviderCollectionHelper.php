<?php
namespace FilipVanLanduyt\Faker;
use FilipVanLanduyt\Faker\Provider;
use Faker\Generator;

class ProviderCollectionHelper
{
    public static function addAllProvidersTo(Generator $faker)
    {
        $faker->addProvider(new Provider\Product($faker));
    }
}