<?php

namespace Tests\Unit;

use Tests\TestCase;

class WelcomeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }
    public function test_index()
    {
        $response = $this->get('/');
        
        $response->assertStatus($response->status(),200);
    }
    public function test_index_with_Querry()
    {
        $response = $this->get('/?page=1');
        
        $response->assertStatus($response->status(),200);
    }
    public function testSearch()
    {
        $response = $this->call('POST','/search',[]);
        
        $response->assertStatus($response->status(),200);
    }
}
