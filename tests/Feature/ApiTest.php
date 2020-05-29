<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class Api extends TestCase
{
    /**
     * @return void
     */
    public function testMenu()
    {
        $response = $this->get('/api/menu');
        $response->assertStatus(200);
        $response->seeJsonStructure([
            '*' => [
                'id', 'price' => [ 'value', 'currency'], 'name', 'image_url'
            ]
        ]);

    }

    public function testDeliveryFee() {
        $response = $this->get('/api/delivery-fee');
        $response->assertStatus(200);
        $response->seeJsonStructure([ 'value', 'currency' ]);
    }


    public function testOrder() {
        $response = $this->post('/order', [ 'data' => 'Some data']);
        $response->assertStatus(200);
        $response->assertIsString([ 'value', 'currency' ]);

        $this->get('/order'.$response)->seeJsonStructure([ 'data' ]);
    }


}

/*

Route::get('delivery-fee', 'MenuController@fee');
Route::get('menu', 'MenuController@index');
Route::post('order', 'OrderController@create');
Route::get('order/{ticketNumber}', 'OrderController@getByTicket');

*/
