<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function see_header_title_is_top()
    {
        $this->visit('/sample')
            ->see('サンプルページ トップ');
    }
}


