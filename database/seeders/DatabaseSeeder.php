<?php

namespace Database\Seeders;

use App\Models\Kid;
use App\Models\Toy;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // AGE 3 TOYS
        Toy::factory()->create([
            'name' => 'Teddy Bear',
            'photo' => '/img/toys/teddybear.jpg',
            'description' => 'A cute Teddy Bear',
            'min_age' => 3
        ]);
        Toy::factory()->create([
            'name' => 'Sports Car',
            'photo' => '/img/toys/car.jpg',
            'description' => 'A cool sports car',
            'min_age' => 3
        ]);
        Toy::factory()->create([
            'name' => 'Doll',
            'photo' => '/img/toys/hatdoll.jpg',
            'description' => 'A doll with a stylist hat',
            'min_age' => 3
        ]);
        Toy::factory()->create([
            'name' => 'Telephone',
            'photo' => '/img/toys/telephone.webp',
            'description' => 'A telephone for gossiping with friends',
            'min_age' => 3
        ]);
        Toy::factory()->create([
            'name' => 'Train',
            'photo' => '/img/toys/train.avif',
            'description' => 'A pretty cool train',
            'min_age' => 3
        ]);
        // AGE 7 TOYS
        Toy::factory()->create([
            'name' => 'Blocky Boat',
            'photo' => '/img/toys/boatblocks.jpg',
            'description' => 'An amazing boat made of blocks',
            'min_age' => 7
        ]);
        Toy::factory()->create([
            'name' => 'Bracelet Kit',
            'photo' => '/img/toys/braceletset.jpg',
            'description' => 'A bracelet kit to make with friends',
            'min_age' => 7
        ]);
        Toy::factory()->create([
            'name' => 'Dinotrack',
            'photo' => '/img/toys/dinotrack.jpg',
            'description' => 'A cool dino-looking track for your cars',
            'min_age' => 7
        ]);
        Toy::factory()->create([
            'name' => 'Furby',
            'photo' => '/img/toys/furby.webp',
            'description' => 'Absolutely not a creepy toy',
            'min_age' => 7
        ]);
        Toy::factory()->create([
            'name' => 'Carrot Slime',
            'photo' => '/img/toys/slime.jpg',
            'description' => 'A delicious carrot slime',
            'min_age' => 7
        ]);
        //AGE 12 TOYS
        Toy::factory()->create([
            'name' => 'Board Games Kit',
            'photo' => '/img/toys/boardgame.jpg',
            'description' => 'A practical board game kit with plenty of games',
            'min_age' => 12
        ]);
        Toy::factory()->create([
            'name' => 'Cards Against Humanity',
            'photo' => '/img/toys/cah.webp',
            'description' => 'A harmless and jokeful game (Family Edition)',
            'min_age' => 12
        ]);
        Toy::factory()->create([
            'name' => 'Scratch Book',
            'photo' => '/img/toys/scratchbook.webp',
            'description' => 'A fun and colorful scratch book',
            'min_age' => 12
        ]);
        Toy::factory()->create([
            'name' => 'Table tennis set',
            'photo' => '/img/toys/tabletennis.webp',
            'description' => 'A mobile table tennis set',
            'min_age' => 12
        ]);
        Toy::factory()->create([
            'name' => 'Uno Flex',
            'photo' => '/img/toys/unoflex.jpg',
            'description' => 'A new version of your favorite UNO game',
            'min_age' => 12
        ]);

        //KIDS
        Kid::factory()->create([
            'name' => 'Lucas',
            'surname' => 'Martínez',
            'photo' => '/img/kids/boy.jpg',
            'age' => 4,
            'behaviour' => true,
        ]);
        
        Kid::factory()->create([
            'name' => 'Sofía',
            'surname' => 'Pérez',
            'photo' => '/img/kids/girl.jpg',
            'age' => 6,
            'behaviour' => false,
        ]);
        
        Kid::factory()->create([
            'name' => 'Mateo',
            'surname' => 'Gómez',
            'photo' => '/img/kids/boy.jpg',
            'age' => 5,
            'behaviour' => true,
        ]);
        
        Kid::factory()->create([
            'name' => 'Camila',
            'surname' => 'López',
            'photo' => '/img/kids/girl.jpg',
            'age' => 9,
            'behaviour' => false,
        ]);
        
        Kid::factory()->create([
            'name' => 'Liam',
            'surname' => 'Hernández',
            'photo' => '/img/kids/boy.jpg',
            'age' => 8,
            'behaviour' => true,
        ]);
        
        Kid::factory()->create([
            'name' => 'Isabella',
            'surname' => 'Ramírez',
            'photo' => '/img/kids/girl.jpg',
            'age' => 7,
            'behaviour' => false,
        ]);
        
        Kid::factory()->create([
            'name' => 'Dylan',
            'surname' => 'Torres',
            'photo' => '/img/kids/boy.jpg',
            'age' => 13,
            'behaviour' => true,
        ]);
        
        Kid::factory()->create([
            'name' => 'Mía',
            'surname' => 'Rojas',
            'photo' => '/img/kids/girl.jpg',
            'age' => 15,
            'behaviour' => false,
        ]);
        
        Kid::factory()->create([
            'name' => 'Ethan',
            'surname' => 'Vargas',
            'photo' => '/img/kids/boy.jpg',
            'age' => 16,
            'behaviour' => true,
        ]);
        
        Kid::factory()->create([
            'name' => 'Emma',
            'surname' => 'García',
            'photo' => '/img/kids/girl.jpg',
            'age' => 14,
            'behaviour' => false,
        ]);
        
    }
}
