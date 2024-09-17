<?php

return [

    'does_not_exist' => 'Akcesorium [:id] nie istnieje.',
    'not_found' => 'To akcesorium nie zostało znalezione.',
    'assoc_users' => 'Akcesoria z tej kategorii zostały wydane do :count użytkowników. Zbierz akcesoria i spróbuj ponownie. ',

    'create' => [
        'error' => 'Akcesorium nie utworzono, spróbuj ponownie.',
        'success' => 'Akcesorium utworzono pomyślnie.',
    ],

    'update' => [
        'error' => 'Nie zaktualizowano Akcesorium, spróbuj ponownie',
        'success' => 'Akcesorium utworzono pomyślnie.',
    ],

    'delete' => [
        'confirm' => 'Czy na pewno chcesz usunąć to Akcesorium?',
        'error' => 'Wystąpił błąd podczas usuwania akcesorium. Proszę spróbować ponownie.',
        'success' => 'Akcesorium zostało usunięte pomyślnie.',
    ],

    'checkout' => [
        'error' => 'Akcesoria nie zostały przypisane, spróbuj ponownie',
        'success' => 'Akcesoria przypisany pomyślnie.',
        'unavailable' => 'Akcesoria nie są dostępne do zakupu. Sprawdź ilość dostępną',
        'user_does_not_exist' => 'Użytkownik nie istnieje. Spróbuj ponownie.',
        'checkout_qty' => [
            'lte' => 'There is currently only one available accessory of this type, and you are trying to check out :checkout_qty. Please adjust the checkout quantity or the total stock of this accessory and try again.|There are :number_currently_remaining total available accessories, and you are trying to check out :checkout_qty. Please adjust the checkout quantity or the total stock of this accessory and try again.',
        ],

    ],

    'checkin' => [
        'error' => 'Akcesoria nie zostały przypisane, spróbuj ponownie',
        'success' => 'Akcesoria przypisane pomyślnie.',
        'user_does_not_exist' => 'Użytkownik nie istnieje. Spróbuj ponownie.',
    ],

];
