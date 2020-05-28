<?php

use Illuminate\Database\Seeder;
use App\Pizza;

class PizzaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pizza::truncate();
        //
        Pizza::create([
            'name' => 'capricciosa',
            'image_url' => '/resources/images/capricciosa.png',
            'desc' => 'mozzarella cheese, italian baked ham, mushroom, artichoke and tomato',
            'price_eur' => 10,
        ]);
        Pizza::create([
            'name' => 'hawaiian',
            'image_url' => '/resources/images/hawaiian.png',
            'desc' => 'tomato sauce, cheese, pineapple, and ham',
            'price_eur' => 12,

        ]);
        Pizza::create([
            'name' => 'margherita',
            'image_url' => '/resources/images/margherita.png',
            'desc' => 'San Marzano tomatoes, mozzarella cheese, fresh basil, salt and extra-virgin olive oil',
            'price_eur' => 12,
        ]);
        Pizza::create([
            'name' => 'marinara',
            'image_url' => '/resources/images/marinara.png',
            'desc' => 'tomato sauce and extra-virgin olive oil',
            'price_eur' => 12,
        ]);
        Pizza::create([
            'name' => 'mexican',
            'image_url' => '/resources/images/mexican.png',
            'desc' => 'refried beans, seasoned ground beef, enchilada sauce, and gooey, melted cheese',
            'price_eur' => 14,
        ]);
        Pizza::create([
            'name' => 'mushrooms',
            'image_url' => '/resources/images/mushrooms.png',
            'desc' => 'goat cheese, best pizza dough, semolina flour, mozzarella cheese and olive oil',
            'price_eur' => 15,
        ]);
        Pizza::create([
            'name' => 'pepperoni',
            'image_url' => '/resources/images/pepperoni.png',
            'desc' => 'flattened base of leavened wheat-based dough topped with tomatoes and cheese',
            'price_eur' => 15,
        ]);
        Pizza::create([
            'name' => 'seafood',
            'image_url' => '/resources/images/seafood.png',
            'desc' => 'garlic, crab legs, shrimp and scallops',
            'price_eur' => 15,
        ]);
        Pizza::create([
            'name' => 'veggie',
            'image_url' => '/resources/images/veggie.png',
            'desc' => 'butternut squash, stilton, feta, red onions and olive oil',
            'price_eur' => 13,
        ]);
    }
}
