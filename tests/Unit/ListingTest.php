<?php

namespace Tests\Unit;

use Tests\TestCase;

class ListingTest extends TestCase
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
    public function testCreate()
    {
        $response=$this->get('listing/create');
        $response->assertStatus($response->status(),200);
    }

    public function testStore(){
        $response=$this->call('POST','/listing',[
            "name"=>"Some Name",
            "website"=>"Some website",
            "opening"=>"Some opening",
            "closing"=>"Some closing",
            "location"=>"Some Location",
            "details"=>"Some Details",
            "phone"=>"some Phone",
            "category"=>"some category",
            "address"=>"Some Adress"
        ]);

        $response->assertStatus($response->status(),200);
    }
}
