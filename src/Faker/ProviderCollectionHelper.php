<?php
namespace FilipVanLanduyt\Faker;
use FilipVanLanduyt\Faker\Provider;
use Faker\Generator;

class ProviderCollectionHelper
{
    public static function addAllProvidersTo(Generator $faker)
    {
        $faker->addProvider(new Provider\Product($faker));
        $faker->addProvider(new Provider\Processor($faker));
        $faker->addProvider(new Provider\ProductGroup($faker));
    }
}