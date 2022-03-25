<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'last_login_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Member::class, static function (Faker\Generator $faker) {
    return [
        'code_member' => $faker->sentence,
        'address' => $faker->sentence,
        'phone' => $faker->sentence,
        'checkin' => $faker->sentence,
        'checkout' => $faker->sentence,
        'member_status' => $faker->boolean(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Member::class, static function (Faker\Generator $faker) {
    return [
        'code_member' => $faker->sentence,
        'address' => $faker->sentence,
        'phone' => $faker->sentence,
        'checkin' => $faker->date(),
        'checkout' => $faker->date(),
        'member_status' => $faker->boolean(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
