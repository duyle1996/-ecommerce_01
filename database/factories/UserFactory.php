<?php
use App\Models\Category;
use App\Models\CommentRating;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Shop;
use App\Models\User;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
 */


$factory->define(Shop::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'picture' => $faker->image(),
        'phone' => $faker->phoneNumber(),
        'address' => $faker->address(),
        'user_id' => User::all()->random()->id,
        'product_id' => Product::all()->random()->id,
    ];
});
$factory->define(Product::class, function (Faker $faker) {
    return [
        'category_id' => Category::all()->random()->id,
        'name' => $faker->name,
        'description' => $faker->text,
        'price' => $faker->numberBetween($min = 10, $max = 30),
        'picture' => './frontend/img/product01.png',
        'unit' => $faker->randomDigit(),
        'unit_in_stock' => $faker->numberBetween($min = 10, $max = 20),
        'unit_on_order' => $faker->numberBetween($min = 30, $max = 50),
        'sale' => $faker->randomElement($array = [
            '0', '10', '20',
        ]),
        'new' => $faker->randomElement($array = [
            '0', '1',
        ]),
        'rating' => $faker->randomElement($array = [
            '3', '4', '5',
        ]),
        'top_selling' => $faker->randomElement($array = [
            '0', '1',
        ]),
    ];
});
$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'role' => $faker->randomElement($array = [
            'administrator',
            'user',
        ]),
        'password' => bcrypt('12345'),
        'picture' => $faker->image(),
        'phone' => $faker->phoneNumber(),
        'address' => $faker->address(),
    ];
});
$factory->define(Order::class, function (Faker $faker) {
    return [
        'token' => str_random(10),
        'user_id' => User::all()->random()->id,
        'total' => $faker->numberBetween($min = 1000, $max = 2000),
        'status' => $faker->randomElement($array = [
            'stocking', 'out of stock',
        ]),
        'order_name' => $faker->name,
        'order_address' => $faker->secondaryAddress,
        'order_phone' => $faker->phoneNumber,
    ];
});
$factory->define(OrderItem::class, function (Faker $faker) {
    return [
        'order_id' => Order::all()->random()->id,
        'product_id' => Product::all()->random()->id,
        'quantity' => $faker->numberBetween($min = 10, $max = 20),
        'price' => $faker->randomNumber(2),
        'total' => $faker->numberBetween($min = 500, $max = 700),
    ];
});
$factory->define(CommentRating::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
        'product_id' => Product::all()->random()->id,
        'content' => $faker->catchPhrase,
        'parent_id' => $faker->randomElement($array = [
            '0', '1', '2'
        ]),
        'rating' => $faker->randomElement($array = [
            '1', '2', '3', '4', '5',
        ]),
    ];
});
