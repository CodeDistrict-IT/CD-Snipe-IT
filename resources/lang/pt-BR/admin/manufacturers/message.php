<?php

return [

    'support_url_help' => 'As variáveis <code>{LOCALE}</code>, <code>{SERIAL}</code>, <code>{MODEL_NUMBER}</code> e <code>{MODEL_NAME}</code> podem ser usadas em sua URL para que esses valores sejam preenchidos automaticamente ao visualizar ativos - por exemplo, https://checkcoverage.apple.com/{LOCALE}/{SERIAL}.',
    'does_not_exist' => 'O fabricante não existe.',
    'assoc_users' => 'Este fabricante está no momento associado com pelo menos um modelo e não pode ser excluído. Atualize seus modelos para não referenciarem mais este fabricante e tente novamente. ',

    'create' => [
        'error' => 'O fabricante não foi criado, tente novamente.',
        'success' => 'Fabricante criado com sucesso.',
    ],

    'update' => [
        'error' => 'O fabricante não foi atualizado, tente novamente',
        'success' => 'Fabricante atualizado com sucesso.',
    ],

    'restore' => [
        'error' => 'O fabricante não foi atualizado, tente novamente',
        'success' => 'Fabricante atualizado com sucesso.',
    ],

    'delete' => [
        'confirm' => 'Tem certeza de que deseja excluir este fabricante?',
        'error' => 'Ocorreu um erro ao tentar deletar o fabricante. Por favor, tente novamente.',
        'success' => 'O Fabricante foi excluído com sucesso.',
    ],

];
