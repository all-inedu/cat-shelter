<?php

namespace Database\Seeders;

use App\Models\Adopter;
use App\Models\Blog;
use App\Models\Breed;
use App\Models\Cat;
use App\Models\Category;
use App\Models\Order;
use App\Models\Screening;
use App\Models\Shelter;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Symfony\Component\Console\Question\Question;
use Faker\Generator;
use Illuminate\Container\Container;

class DatabaseSeeder extends Seeder
{

    public function __construct()
    {
        $this->faker = $this->withFaker();
    }

    /**
     * Get a new Faker instance.
     *
     * @return \Faker\Generator
     */
    protected function withFaker()
    {
        return Container::getInstance()->make(Generator::class);
    }

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(1)->create();

        # 1st call
        // $this->call([
        //     BreedSeeder::class,
        //     AdminSeeder::class,
        // ]);

        # 2nd call
        // $this->main_data();

        // $this->blog_dummy();

        // $this->cat_dummy();

        // $this->order_dummy();
    }

    public function main_data()
    {
        Adopter::factory(3)->create();
        Shelter::factory(3)->create();
        Category::factory(4)->create();
        Blog::factory(3)->create();
    }

    public function blog_dummy()
    {
        $category = Category::all();

        Blog::all()->each(function ($blog) use ($category) {
            $blog->category()->attach(
                $category->random(rand(1, 5))->pluck('id')->toArray(),
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]
            );
        });
    }

    public function cat_dummy()
    {
        $breeds = Breed::all();
        $shelters = Shelter::all();
        foreach ($shelters as $shelter) {
            Cat::create([
                'shelter_id' => $shelter->id,
                'breed_id' => rand(1, count($breeds)),
                'name' => $this->faker->name,
                'age' => 6,
                'weight' => 2,
                'sex' => 'male',
            ]);
        }
    }

    public function order_dummy()
    {
        $cats = Cat::all();

        Adopter::all()->each(function ($adopter) use ($cats) {
            $adopter->orders()->create([
                'cat_id' => rand(1, 3),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        });

        $questions = [
            'Have you ever declawed a cat?',
            'Have you ever had to rehome or surrender a cat before?',
            'Would this cat be indoor, outdoor, or indoor/outdoor?',
            'How many people currently live in your household?',
            'How many pets do you currently own?',
            'What are you looking for in a cat?',
        ];

        Order::all()->each(function ($order) use ($questions) {
            for ($i = 0; $i < count($questions); $i++) {
                $order->screening()->create([
                    'question' => $questions[$i],
                    'answer' => $this->faker->text,
                ]);
            }
        });
    }
}