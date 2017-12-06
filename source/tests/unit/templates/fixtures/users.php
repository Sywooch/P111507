<?php

    return [
        'status' => 1,
        'email' => $faker->email,
        'username' => $faker->userName,
        'password' => Yii::$app->getSecurity()->generatePasswordHash('password_' . $index),
        'auth_key' => Yii::$app->getSecurity()->generateRandomString(),
        'created_at' => time()
        //'intro' => $faker->sentence(7, true),  // generate a sentence with 7 words
    ];
