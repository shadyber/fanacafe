<?php

namespace Database\Factories;

use App\Models\Item;
use App\Models\ItemPhoto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemPhotoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ItemPhoto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
             'item_id'=>Item::find($this->faker->numberBetween(1,28)),
            'thumb'=>$this->faker->imageUrl,
            'photo'=>$this->faker->imageUrl,
            'title'=>$this->faker->word,
        ];
    }
}
