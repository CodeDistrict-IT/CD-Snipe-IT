<?php

return [

    'deleted' => 'Model aktiva byl smazán',
    'does_not_exist' => 'Model neexistuje.',
    'no_association' => 'VAROVÁNÍ! Model majetku pro tuto položku je neplatný, nebo chybí!',
    'no_association_fix' => 'Tento stav může způsobit nedozírné problémy. Přiřaďte dotyčnému majetku správný model.',
    'assoc_users' => 'Tento model je spojen s alespoň jedním majetkem a nemůže být smazán. Prosím smažte tyto majetky a pak to zkuste znovu. ',
    'invalid_category_type' => 'This category must be an asset category.',

    'create' => [
        'error' => 'Model nebyl vytvořen, zkuste to znovu.',
        'success' => 'Model byl úspěšně vytvořen.',
        'duplicate_set' => 'Model majetku s tímto názvem, výrobcem a číslem modelu již existuje.',
    ],

    'update' => [
        'error' => 'Model nebyl aktualizován, zkuste to prosím znovu',
        'success' => 'Model byl úspěšně aktualizován.',
    ],

    'delete' => [
        'confirm' => 'Opravdu si přejete tento model majetku odstranit?',
        'error' => 'Vyskytl se problém se smazáním modelu. Zkuste to znovu.',
        'success' => 'Model byl úspěšně smazán.',
    ],

    'restore' => [
        'error' => 'Model nebyl obnoven, zkuste to prosím znovu',
        'success' => 'Model byl úspěšně obnoven.',
    ],

    'bulkedit' => [
        'error' => 'Žádné pole nebyly změněny, takže nic nebylo aktualizováno.',
        'success' => 'Model úspěšně upraven. |:model_count modelů bylo úspěšně upraveno.',
        'warn' => 'Chystáte se aktualizovat vlastnosti následujícího modelu:|Chystáte se upravit vlastnosti následujících :model_count modelů:',

    ],

    'bulkdelete' => [
        'error' => 'Nebyly vybrány žádné modely, takže nebylo nic smazáno.',
        'success' => 'Model smazán!|:success_count modelů odstraněno!',
        'success_partial' => ':success_count modelů smazáno, ale :fail_count nebylo možné smazat protože pořád mají přiřazený majetek.',
    ],

];
