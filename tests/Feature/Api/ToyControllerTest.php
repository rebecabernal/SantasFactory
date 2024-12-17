<?php

namespace Tests\Feature\Api;

use App\Models\Toy;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ToyControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_getAllToys(): void
    {
        Toy::factory(10)->create();
        $response = $this->get(route('apitoyshome'));

        $response->assertStatus(200)
                    ->assertJsonCount(10);
    }

    public function test_getOneToy(): void
    {
        Toy::factory()->create([
            'name' => 'testToy'
        ]);
        $response = $this->get(route('apitoysshow', 1));

        $response->assertStatus(200)
                    ->assertJsonFragment(['name' => 'testToy']);
    }

    public function test_createOneToy(): void
    {
        $toy = [
            'name' => 'test',
            'description' => 'test',
            'photo' => 'test',
            'min_age' => 12
        ];
        $this->post(route('apitoysstore'), $toy);
        $response = $this->get(route('apitoysshow', 1));

        $response->assertStatus(200)
                    ->assertJsonFragment($toy);
    }

    public function test_updateOneToy(): void
    {
        Toy::factory()->create();
        $toy = [
            'name' => 'test',
            'description' => 'test',
            'photo' => 'test',
            'min_age' => 12
        ];
        $this->put(route('apitoysupdate', 1), $toy);
        $response = $this->get(route('apitoysshow', 1));

        $response->assertStatus(200)
                    ->assertJsonFragment($toy);
    }

    public function test_deleteOneToy(): void
    {
        Toy::factory()->create();
        $this->delete(route('apitoysdestroy', 1));

        $this->assertDatabaseCount('toys', 0);
    }
}
