<?php

namespace Tests\Feature;

use App\Models\Kid;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class KidControllerTest extends TestCase

{
    use RefreshDatabase;
    public function test_ListOfEntryCanBeRead()
    {

        $this->withoutExceptionHandling();

        Kid::all();

        $response = $this->get('/santa/kids');

        $response->assertStatus(200)
            ->assertViewIs('kids');
    }

/*     public function test_CreateFunctionReturnViewCorrectly()
    {

        $response = $this->get('/santa/kids/create');

        $response->assertStatus(200)
            ->assertViewIs('createKidForm');
    } */

    public function test_storeMethodSavesObjectCorrectly()
    {
        $response = $this->post(route('kidsstore'), [
            'name' => 'Pepito',
            'surname' => 'Grillo',
            'photo' => 'Example.img',
            'age' => 16,
            'behaviour' => true
        ]);

        $response = $this->get(route('kidshome'));
        $response->assertStatus(200);
        $this->assertDatabaseCount('Kids', 1);
    }

    public function test_checkIfShowViewWorksCorrectly()
    {
        $response = $this->post(route('kidsstore'), [
            'name' => 'Pepito',
            'surname' => 'Grillo',
            'photo' => 'Example.img',
            'age' => 16,
            'behaviour' => true
        ]);

        $response = $this->get(route('kidsshow', 1));

        $response->assertStatus(200)
            ->assertViewIs('showKid');
    }

    public function test_checkIfEditFormViewWorksCorrectly()
    {
        $response = $this->post(route('kidsstore'), [
            'name' => 'Pepito',
            'surname' => 'Grillo',
            'photo' => 'Example.img',
            'age' => 16,
            'behaviour' => true
        ]);

        $response = $this->get(route('kidsedit', 1));

        $response->assertStatus(200)
            ->assertViewIs('editKidForm');
    }

    public function test_checkIfUpdateMethodWorksCorrectly()
    {
        $response = $this->post(route('kidsstore'), [
            'name' => 'Pepito',
            'surname' => 'Grillo',
            'photo' => 'Example.img',
            'age' => 16,
            'behaviour' => true
        ]);

        $response = $this->put(route('kidsupdate', 1), [
            'name' => 'Pepito',
            'surname' => 'Grillo',
            'photo' => 'Example.img',
            'age' => 15,
            'behaviour' => true
        ], );

        $Kid = Kid::find(1);
        $this->assertEquals(15, $Kid->age);

    }

    public function test_checkIfDeleteMethodDestroyElement()
    {
        $response = $this->post(route('kidsstore'), [
            'name' => 'Pepito',
            'surname' => 'Grillo',
            'photo' => 'Example.img',
            'age' => 16,
            'behaviour' => true
        ]);

        $response = $this->delete(route('kidsdestroy',1));
        $this->assertDatabaseCount('Kids', 0);
    }

    public function test_checkIfRedirectViaActionToDeleteWorks(){
        $response = $this->post(route('kidsstore'), [
            'name' => 'Pepito',
            'surname' => 'Grillo',
            'photo' => 'Example.img',
            'age' => 16,
            'behaviour' => true
        ]);
        $this->get('/?action=delete&id=1');
        $this->assertDatabaseCount('Kids', 1);
    }
}