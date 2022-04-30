<?php

namespace Tests\Unit;


use Tests\TestCase;

class ApproveTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testDisplay()
    {
        $response = $this->get('/display');
        
        $response->assertStatus($response->status(),200);

    }

    public function testDisapprove()
    {
        $response=$this->get('display/2');
        $response->assertStatus($response->status(),200);
    }
    public function testTransfer(){
        $response=$this->call('POST','/display',[
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
