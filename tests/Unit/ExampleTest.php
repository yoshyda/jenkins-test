<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    require_once('./Sample.php');
    
    /**
     * Jenkns!.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $Sample = new Sample();
        $this->assertEquals($Sample->helloWorld(), 'hello world!');
    }
}
