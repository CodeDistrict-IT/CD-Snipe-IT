<?php

return [

    'deleted' => 'Deleted asset model',
    'does_not_exist' => 'Model tidak wujud.',
    'no_association' => 'WARNING! The asset model for this item is invalid or missing!',
    'no_association_fix' => 'This will break things in weird and horrible ways. Edit this asset now to assign it a model.',
    'assoc_users' => 'Model ini sekarang disekutukan dengan sekurang2nya satu atau lebih harta dan tidak boleh dihapuskan. Sila kemaskini harta, dan kemudian cuba lagi. ',
    'invalid_category_type' => 'This category must be an asset category.',

    'create' => [
        'error' => 'Model gagal dicipta, sila cuba lagi.',
        'success' => 'Model berjaya dicipta.',
        'duplicate_set' => 'Model aset dengan nama itu, pengeluar dan nombor model sudah ada.',
    ],

    'update' => [
        'error' => 'Model gagal dikemaskin, sila cuba lagi',
        'success' => 'Model berjaya dikemaskini.',
    ],

    'delete' => [
        'confirm' => 'Anda pasti anda ingin hapuskan model harta ini?',
        'error' => 'Ada isu semasa menghapuskan model. Sila cuba lagi.',
        'success' => 'Model berjaya dihapuskan.',
    ],

    'restore' => [
        'error' => 'Model tidak dipulihkan, sila cuba lagi',
        'success' => 'Model berjaya dipulihkan.',
    ],

    'bulkedit' => [
        'error' => 'Tiada medan berubah, jadi tiada apa yang dikemas kini.',
        'success' => 'Model successfully updated. |:model_count models successfully updated.',
        'warn' => 'You are about to update the properties of the following model:|You are about to edit the properties of the following :model_count models:',

    ],

    'bulkdelete' => [
        'error' => 'Tiada model dipilih, jadi tiada apa yang dipadamkan.',
        'success' => 'Model deleted!|:success_count models deleted!',
        'success_partial' => ':success_count model(s) telah dipadamkan, namun :fail_count tidak dapat dipadamkan kerana mereka masih mempunyai aset yang dikaitkan dengannya.',
    ],

];
