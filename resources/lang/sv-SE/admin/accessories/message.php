<?php

return [

    'does_not_exist' => 'Tillbehöret [:id] finns inte.',
    'not_found' => 'Tillbehöret hittades inte.',
    'assoc_users' => 'Detta tillbehör har för närvarande :count objekt utcheckade till användare. Checka in tillbehöret och försök igen. ',

    'create' => [
        'error' => 'Tillbehöret skapades inte, vänligen försök igen.',
        'success' => 'Tillbehöret skapades.',
    ],

    'update' => [
        'error' => 'Tillbehöret uppdaterades inte, försök igen',
        'success' => 'Tillbehöret uppdaterades.',
    ],

    'delete' => [
        'confirm' => 'Är du säker på att du vill ta bort det här tillbehöret?',
        'error' => 'Ett problem uppstod då tillbehöret skulle tas bort. Vänligen försök igen.',
        'success' => 'Tillbehöret togs bort.',
    ],

    'checkout' => [
        'error' => 'Tillbehöret checkades inte ut. Vänligen försök igen',
        'success' => 'Tillbehöret checkades ut.',
        'unavailable' => 'Tillbehöret är inte tillgängligt för utcheckning. Kontrollera antal tillgängligt',
        'user_does_not_exist' => 'Användaren är ogiltig. Försök igen.',
        'checkout_qty' => [
            'lte' => 'There is currently only one available accessory of this type, and you are trying to check out :checkout_qty. Please adjust the checkout quantity or the total stock of this accessory and try again.|There are :number_currently_remaining total available accessories, and you are trying to check out :checkout_qty. Please adjust the checkout quantity or the total stock of this accessory and try again.',
        ],

    ],

    'checkin' => [
        'error' => 'Tillbehöret checkades inte in. Vänligen försök igen',
        'success' => 'Tillbehöret checkades in.',
        'user_does_not_exist' => 'Användaren är ogiltig. Försök igen.',
    ],

];
