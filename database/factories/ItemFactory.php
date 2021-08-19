<?php

namespace Database\Factories;

use App\Models\Item;
use App\Models\ItemCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->word,
            'detail' =>$this->faker->sentence,
            'price' =>$this->faker->numberBetween(1,800),
            'thumb'=>$this->faker->imageUrl(640,480,'food'),
            'photo'=>$this->faker->imageUrl(640,480,'food'),
            'contents'=>$this->faker->word,
            'is_fasting'=>$this->faker->boolean,
            'tags'=>$this->faker->word,
            'visit'=>$this->faker->randomNumber(3),
            'item_category_id'=>ItemCategory::find($this->faker->numberBetween(1,5)),

        ];
    }
}
