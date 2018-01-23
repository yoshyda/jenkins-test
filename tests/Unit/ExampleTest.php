<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
require_once('./Sample.php');
    
class ExampleTest extends TestCase
{
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
