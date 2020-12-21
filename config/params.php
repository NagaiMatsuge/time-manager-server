<?php

return [
    'urls' => [
        'front_end_password_reset' => 'http://localhost:8080/password/reset',
        'front_base_url' => 'http://localhost:8080'
    ],
    'roles' => [
        'Admin',
        'Manager',
        'Backend Developer',
        'Frontend Developer',
        'System Administrator',
        'UI\UX Designer',
        'Assistant'
    ],

    'month_format' => [
        '1' => 'январь',
        '2' => 'февраль',
        '3' => 'март',
        '4' => 'апрель',
        '5' => 'май',
        '6' => 'июнь',
        '7' => 'июль',
        '8' => 'август',
        '9' => 'сентябрь',
        '10' => 'октябрь',
        '11' => 'ноябрь',
        '12' => 'декабрь',
    ],

    'response_messages' => [
        'auth/too-many-requests' => 'Превышен лимит на запрос смены пароля',
        'auth/email-already-in-use' => 'Пользователь с таким Email уже зарегистрирован',
        'auth/user-not-found' => 'Пользователь с таким Email не зарегистрирован',
        'auth/wrong-password' => 'Введите правельный пороль',

        'email-verify/email_of_the_user@gmail.com' => 'Емейл активации аккаунта был отправлен на почту email_of_the_user@gmail.com',

        'email-reset/email_of_the_user@gmail.com' => 'Емейл сброса пароля был отправлен на почту email_of_the_user@gmail.com',
        'auth/email-verified' => "Email был успешно активирован",
        'not-found/user' => 'User не найден',
        'repeat/email-verified' => 'Email уже активирован',
        'link/expire' => 'Линк испорился',
        'auth/fail' => 'Неправилные данные',
        'auth/email-not-verified' => 'Email не активирован'
    ]
];
