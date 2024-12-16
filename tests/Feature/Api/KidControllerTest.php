<?php

namespace Tests\Feature\Api;

use App\Models\Kid;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class KidControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfRecieveAllEntryOfOfferInJsonFile(){
        $offer = Kid::factory(2)->create();

        $response = $this->get(route('apikidshome'));
       
        $response->assertStatus(200)
                 ->assertJsonCount(2);
    }

    public function test_CheckIfCanDeleteEntryInOfferWithApi(){
       
        $offer = Kid::factory(2)->create();

        $response = $this->delete(route('apikidsdestroy', 1));

        $this->assertDatabaseCount('kids', 1);

        $response = $this->get(route('apikidshome'));
        $response->assertJsonCount(1);

    }

    public function test_CheckIfCanCreateNewEntryInOfferWithJsonFile()
    {
        $response = $this->post(route('apikidsstore'), [
            'name' => 'Pepito',
            'surname' => 'Grillo',
            'photo' => 'Example.img',
            'age' => '20',
            'behaviour' => true
        ]);

        $response = $this->get(route('apikidshome'));
        $response->assertStatus(200)
                ->assertJsonCount(1);
    }

    public function test_CheckIfCanUpdateEntryInJournalWithJsonFile()
    {
        $response = $this->post(route('apikidsstore'), [
            'name' => 'Pepito',
            'surname' => 'Grillo',
            'photo' => 'Example.img',
            'age' => '20',
            'behaviour' => true
        ]);

        $data = ['enterprise' => 'Hello enterprise'];
        $response = $this->get(route('apikidshome'));
        $response->assertStatus(200)
                ->assertJsonCount(1)
                ->assertJsonFragment($data);

        $response = $this->put('/api/apikidsupdate/1', [
            'name' => 'Pepito',
            'surname' => 'Grillo',
            'photo' => 'Example.img',
            'age' => '20',
            'behaviour' => true
        ]);

        $data = ['enterprise' => 'Hello easter'];
        $response = $this->get(route('apikidshome'));
        $response->assertStatus(200)
                ->assertJsonCount(1)
                ->assertJsonFragment($data);
    }

    public function test_CheckIfFunctionShowWorks(){
        $response = $this->post(route('apikidsstore'), [
            'name' => 'Pepito',
            'surname' => 'Grillo',
            'photo' => 'Example.img',
            'age' => '20',
            'behaviour' => true
        ]);
        $data = ['enterprise' => 'Hello easter', 'position' => 'Hello egg', 'state' => 0];
        $response = $this->get(route('apikidsshow', 1));
        $response->assertStatus(200)
                ->assertJsonCount(6)
                ->assertJsonFragment($data);
    }
}
