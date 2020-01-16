<?php

namespace Sifex\Financier\Tests;

use PHPUnit\Framework\TestCase;
use Sifex\Financier\Collection;

class CollectionTest extends TestCase
{
    /** @test */
    public function assert_collections_cant_contain_primitives()
    {
        $this->assertTrue(new Collection([ 'asd' ]));
    }
}
