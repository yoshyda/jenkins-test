<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
    
class ExampleTest extends TestCase
{
    /**
     * Jenkns!.
     *
     * @return void
     */
    public function testBasicTest()
    {
            $response = $this->get('/');
            $response->assertStatus(200);
    }
}
