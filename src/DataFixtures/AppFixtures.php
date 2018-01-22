<?php

namespace App\DataFixtures;

use App\Entity\Product;
use App\Entity\ProductModification;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $product = new Product();
        $product->setName('Sweater');
        $product->setPrice('23.80');

        $modification = new ProductModification();
        $modification->setSize('L');
        $modification->setColor('red');
        $modification->setVendorCode(uniqid());

        $modification->setProduct($product);

        $manager->persist($product);
        $manager->persist($modification);

        $product = new Product();
        $product->setName('Sweater');
        $product->setPrice('23.80');

        $modification = new ProductModification();
        $modification->setSize('M');
        $modification->setColor('red');
        $modification->setVendorCode(uniqid());

        $modification->setProduct($product);

        $manager->persist($product);
        $manager->persist($modification);

        $product = new Product();
        $product->setName('Sweater');
        $product->setPrice('23.80');

        $modification = new ProductModification();
        $modification->setSize('M');
        $modification->setColor('yellow');
        $modification->setVendorCode(uniqid());

        $modification->setProduct($product);

        $manager->persist($product);
        $manager->persist($modification);

        $product = new Product();
        $product->setName('Sweater');
        $product->setPrice('23.80');

        $modification = new ProductModification();
        $modification->setSize('S');
        $modification->setColor('red');
        $modification->setVendorCode(uniqid());

        $modification->setProduct($product);

        $manager->persist($product);
        $manager->persist($modification);

        $product = new Product();
        $product->setName('Kimono');
        $product->setPrice('39.99');

        $modification = new ProductModification();
        $modification->setSize('L');
        $modification->setColor('red');
        $modification->setVendorCode(uniqid());

        $modification->setProduct($product);

        $manager->persist($product);
        $manager->persist($modification);

        $product = new Product();
        $product->setName('Kimono');
        $product->setPrice('39.99');

        $modification = new ProductModification();
        $modification->setSize('M');
        $modification->setColor('red');
        $modification->setVendorCode(uniqid());

        $modification->setProduct($product);

        $manager->persist($product);
        $manager->persist($modification);

        $product = new Product();
        $product->setName('Kimono');
        $product->setPrice('39.99');

        $modification = new ProductModification();
        $modification->setSize('XL');
        $modification->setColor('red');
        $modification->setVendorCode(uniqid());

        $modification->setProduct($product);

        $manager->persist($product);
        $manager->persist($modification);

        $product = new Product();
        $product->setName('Kimono');
        $product->setPrice('39.99');

        $modification = new ProductModification();
        $modification->setSize('XL');
        $modification->setColor('blue');
        $modification->setVendorCode(uniqid());

        $modification->setProduct($product);

        $manager->persist($product);
        $manager->persist($modification);

        $manager->flush();
    }
}