<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ProvinceTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->get('/');

        $this->assertEquals(
            $this->app->version(), $this->response->getContent()
        );
    }

    public function tesSearchProvinceFromDB()
    {
        $response = $this->json('GET', 'search/provinces?id=1');
        $response->assertStatus(200);
    }

    public function tesSearchProvinceFromAPIRajaOngkir()
    {
        $response = $this->json('GET', 'search/provinces?id=1&getRajaOngkir=true');
        $response->assertStatus(200);
    }
}
