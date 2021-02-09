<?php
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testSame()
    {
        $this->assertEquals(25, 20+5);
    }
}

?>