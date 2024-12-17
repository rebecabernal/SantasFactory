<?php

namespace Tests\Feature\Api;

use App\Models\Kid;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class KidControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfRecieveAllEntryOfKidsInJsonFile(){
        $Kids = Kid::factory(2)->create();

        $response = $this->get(route('apikidshome'));
       
        $response->assertStatus(200)
                 ->assertJsonCount(2);
    }

    public function test_CheckIfCanDeleteEntryInKidsWithApi(){
       
        $kids = Kid::factory(2)->create();

        $response = $this->delete(route('apikidsdestroy', 1));

        $this->assertDatabaseCount('kids', 1);

        $response = $this->get(route('apikidshome'));
        $response->assertJsonCount(1);

    }

    public function test_CheckIfCanCreateNewEntryInKidsWithJsonFile()
    {
        $response = $this->post(route('apikidsstore'), [
            'name' => 'Pepito',
            'surname' => 'Grillo',
            'photo' => 'kids',
            'age' => '16',
            'behaviour' => true
        ]);

        $response = $this->get(route('apikidshome'));
        $response->assertStatus(200)
                ->assertJsonCount(1);
    }

    public function test_CheckIfCanUpdateEntryInKidsWithJsonFile()
    {
        $response = $this->post(route('apikidsstore'), [
            'name' => 'Pepito',
            'surname' => 'Grillo',
            'photo' => 'Example.img',
            'age' => 16,
            'behaviour' => true
        ]);

        $data = ['age' => 16];
        $response = $this->get(route('apikidshome'));
        $response->assertStatus(200)
                ->assertJsonCount(1)
                ->assertJsonFragment($data);

        $response = $this->put(route('apikidsupdate', 1), [
            'name' => 'Pepito',
            'surname' => 'Grillo',
            'photo' => 'Example.img',
            'age' => 15,
            'behaviour' => true
        ]);

        $data = ['age' => 15];
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
            'age' => 16,
            'behaviour' => true
        ]);
        $data = ['name' => 'Pepito', 'surname' => 'Grillo','photo' => 'Example.img', 'age' => 16, 'behaviour' => 1 ];
        $response = $this->get(route('apikidsshow', 1));
        $response->assertStatus(200)
                ->assertJsonCount(8)
                ->assertJsonFragment($data);
    }
}
