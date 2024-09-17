<?php

return [

    'does_not_exist' => 'ステータス ラベルは存在しません。',
    'deleted_label' => 'ステータスラベルを削除しました',
    'assoc_assets' => 'このステータスラベルは少なくとも一つの資産に関連付けされているため、削除できません。資産の関連付けを削除し、もう一度試して下さい。 ',

    'create' => [
        'error' => 'ステータスラベルが作成できませんでした。もう一度試して下さい。',
        'success' => 'ステータスラベルが作成されました。',
    ],

    'update' => [
        'error' => 'ステータスラベルは更新できませんでした。もう一度試して下さい。',
        'success' => 'ステータスラベルが更新されました。',
    ],

    'delete' => [
        'confirm' => 'このステータスラベルを削除しますか？',
        'error' => 'ステータスラベルを削除する際に問題が発生しました。もう一度やり直して下さい。',
        'success' => 'ステータスラベルは削除されました。',
    ],

    'help' => [
        'undeployable' => 'これらのアセットを誰にも割り当てることはできません。',
        'deployable' => 'これらの資産はチェックアウトすることができます。割り当てられたら、<i class="fas fa-circle text-blue"></i> <strong>配備済み</strong>というメタステータスになります。',
        'archived' => 'これらのアセットはチェックアウトできず、アーカイブビューにのみ表示されます。これは、予算/歴史的な目的のために資産に関する情報を保持するが、それらを日々の資産リストから外すことに役立つ。',
        'pending' => 'これらの資産は、誰にも割り当てられません。修理の対象外ではあるが、流通に戻ることが予想されるアイテムによく使用されます。',
    ],

];
