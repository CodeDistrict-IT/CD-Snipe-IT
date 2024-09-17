<?php

return [

    'does_not_exist' => '配件[:id] 不存在。',
    'not_found' => '找不到该配件。',
    'assoc_users' => '配件目前状态：可用数量不足，请检查改配件再重试。',

    'create' => [
        'error' => '配件添加失败，请重试。',
        'success' => '配件添加成功。',
    ],

    'update' => [
        'error' => '配件更新失败，请重试。',
        'success' => '配件更新成功。',
    ],

    'delete' => [
        'confirm' => '你确定要删除此配件？',
        'error' => '删除配件出错，请重试。',
        'success' => '删除配件成功',
    ],

    'checkout' => [
        'error' => '配件不能被预订，请重试。',
        'success' => '配件成功预订。',
        'unavailable' => '配件不可被借出。检查可用数量',
        'user_does_not_exist' => '无效用户，请重试。',
        'checkout_qty' => [
            'lte' => '目前只有一个可用的此类型的配件，您正在试图借出 :checkout_qty 个。 请调整借出数量或该配件的总库存，然后重试。|有 :num_currently_restotal 个可用配件，您正在尝试借出 :checkout_qty 个。 请调整借出数量或该配件的总库存，然后重试。',
        ],

    ],

    'checkin' => [
        'error' => '附件未成功入库，请再试一次',
        'success' => '配件入库成功。',
        'user_does_not_exist' => '无效用户，请重试。',
    ],

];
