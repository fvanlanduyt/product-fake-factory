<?php
namespace FilipVanLanduyt\Tests\Faker\Provider;

class ProductTest extends TestCase
{
    public function testModelName()
    {
        $this->assertRegExp('/\w+/', $this->faker->productName);
    }
}