<?php

namespace App\Tests\Entity;

use App\Entity\Product;
use App\Entity\ProductModification;
use PHPUnit\Framework\TestCase;

class ProductModificationTest extends TestCase
{
    public function testModificationReturnsNameAndPriceFromProduct()
    {
        $product = new Product();
        $product->setName(uniqid());
        $product->setPrice(8.99);

        $modification = new ProductModification();
        $modification->setColor('red');
        $modification->setSize('XL');
        $modification->setVendorCode(uniqid());

        $modification->setProduct($product);

        $this->assertSame($product->getName(), $modification->getName());
        $this->assertSame($product->getPrice(), $modification->getPrice());
        $this->assertSame('red', $modification->getColor());
        $this->assertSame('XL', $modification->getSize());
    }
}