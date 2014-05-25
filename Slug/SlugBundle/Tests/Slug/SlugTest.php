<?php

namespace Slug\SlugBundle\Tests\Slug;
 
use Slug\SlugBundle\Acciones\Slug;
 
class SlugTest extends \PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        $slug = new Slug();
        $result = $slug->ini(30, 12);
 
        // ¡acierta que nuestra calculadora suma dos números correctamente!
        $this->assertEquals(42, $result);
    }
}
