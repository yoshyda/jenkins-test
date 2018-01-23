<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
require_once('./Sample.php');

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {          
          $Sample = new Sample();
          //helloWorld()メソッドが'hello world!'と返してくれるかテスト
          $this->assertEquals($Sample->helloWorld(), 'hello world!');
    }
}
