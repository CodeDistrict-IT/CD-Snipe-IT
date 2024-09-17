<?php

return [

    'accepted' => 'Вы успешно приняли актив.',
    'declined' => 'Вы успешно отклонили актив.',
    'bulk_manager_warn' => 'Ваши пользователи были успешно обновлены, однако запись менеджера не была сохранена, потому что выбранный менеджер также присутствовал в редактируемом списке пользователей, и пользователи не могут быть менеджерами самим себе. Пожалуйста выберите ваших пользователей снова, за исключением их менеджера.',
    'user_exists' => 'Пользователь уже существует!',
    'user_not_found' => 'User does not exist or you do not have permission view them.',
    'user_login_required' => 'Поле "Логин" является обязательным',
    'user_has_no_assets_assigned' => 'Нет активов закреплённых за этим пользователем.',
    'user_password_required' => 'Поле "Пароль" является обязательным.',
    'insufficient_permissions' => 'Недостаточно прав.',
    'user_deleted_warning' => 'Этот пользователь был удален. Вы должны его восстановить чтобы иметь возможность его редактировать или привязывать новые активы.',
    'ldap_not_configured' => 'Интеграция с LDAP не настроена для этой инсталляции.',
    'password_resets_sent' => 'Ссылка для сброса пароля была отправлена выбранным пользователям которые имеют действительный адрес электронной почты а активированы.',
    'password_reset_sent' => 'Ссылка для сброса пароля была отправлена на адрес :email!',
    'user_has_no_email' => 'У этого пользователя нет адреса электронной почты в его профиле.',
    'log_record_not_found' => 'Соответствующая запись журнала для этого пользователя не найдена.',

    'success' => [
        'create' => 'Пользователь успешно создан.',
        'update' => 'Пользователь успешно изменен.',
        'update_bulk' => 'Пользователи успешно изменены!',
        'delete' => 'Пользователь успешно удален.',
        'ban' => 'Пользователь успешно заблокирован.',
        'unban' => 'Пользователь успешно разблокирован.',
        'suspend' => 'Пользователь успешно заморожен.',
        'unsuspend' => 'Пользователь успешно разморожен.',
        'restored' => 'Пользователь успешно восстановлен.',
        'import' => 'Пользователи успешно импортированы.',
    ],

    'error' => [
        'create' => 'При создании пользователя возникла проблема. Пожалуйста попробуйте снова.',
        'update' => 'При изменении пользователя возникла проблема. Пожалуйста попробуйте снова.',
        'delete' => 'При удалении пользователя возникла проблема. Пожалуйста попробуйте снова.',
        'delete_has_assets' => 'У пользователя есть назначенные ему активы и не может быть удалён.',
        'delete_has_assets_var' => 'У этого пользователя все еще есть назначенный актив. Пожалуйста, проверьте его сначала.|Этот пользователь все еще имеет :count назначенных активов. Пожалуйста, проверьте его активы в первую очередь.',
        'delete_has_licenses_var' => 'У этого пользователя все еще есть назначенные лицензионные места. Пожалуйста, проверьте их сначала.|У этого пользователя все еще есть назначенные :count лицензионные места. Пожалуйста, проверьте их сначала.',
        'delete_has_accessories_var' => 'У этого пользователя все еще есть назначенный аксессуар. Пожалуйста, проверьте его сначала.|У этого пользователя все еще есть назначенные :count аксессуары. Пожалуйста, проверьте его активы сначала.',
        'delete_has_locations_var' => 'Этот пользователь все еще управляет местоположением. Сначала выберите другого управляющего.|Этот пользователь все еще управляет :count местоположениями. Сначала выберите другого управляющего.',
        'delete_has_users_var' => 'Этот пользователь все еще является руководителем другого пользователя. Сначала выберите другого руководителя для этого пользователя.|Этот пользователь все является руководителем :count пользователей. Сначала выберите для них другого руководителя.',
        'unsuspend' => 'При разморозке пользователя возникла проблема. Пожалуйста попробуйте снова.',
        'import' => 'При импорте пользователей произошла ошибка. Попробуйте еще раз.',
        'asset_already_accepted' => 'Этот актив уже был принят.',
        'accept_or_decline' => 'Примите или отклоните актив.',
        'cannot_delete_yourself' => 'Нам было бы очень жаль, если бы вы удалили себя. Пожалуйста, подумайте еще раз.',
        'incorrect_user_accepted' => 'Актив, который вы попытались принять, не был записан на вас.',
        'ldap_could_not_connect' => 'Не могу подключиться к серверу LDAP. Проверьте настройки LDAP сервера в файле конфигурации LDAP.<br>Ошибка от LDAP сервера:',
        'ldap_could_not_bind' => 'Не могу связаться (bind) с сервером LDAP. Проверьте настройки LDAP сервера в файле конфигурации LDAP.<br>Ошибка от LDAP сервера: ',
        'ldap_could_not_search' => 'Не могу найти сервер LDAP. Проверьте настройки LDAP сервера в файле конфигурации LDAP.<br>Ошибка от LDAP сервера:',
        'ldap_could_not_get_entries' => 'Не могу загрузить записи с сервера LDAP. Проверьте настройки LDAP сервера в файле конфигурации LDAP.<br>Ошибка от LDAP сервера:',
        'password_ldap' => 'Пароль для этой учетной записи управляется LDAP/Active Directory. Пожалуйста, свяжитесь с департаментом ИТ, чтобы изменить свой пароль. ',
        'multi_company_items_assigned' => 'This user has items assigned, please check them in before moving companies.',
    ],

    'deletefile' => [
        'error' => 'Не удалось удалить файл. Повторите попытку.',
        'success' => 'Файл успешно удален.',
    ],

    'upload' => [
        'error' => 'Не удалось загрузить файл(ы). Повторите попытку.',
        'success' => 'Файл(ы) успешно загружены.',
        'nofiles' => 'Не выбраны файлы для загрузки',
        'invalidfiles' => 'Один или несколько ваших файлов слишком большого размера или имеют неподдерживаемый формат. Разрешены только следующие форматы файлов: png, gif, jpg, doc, docx, pdf, txt.',
    ],

    'inventorynotification' => [
        'error' => 'У этого пользователя нет электронной почты.',
        'success' => 'Пользователь был уведомлен о своем текущем инвентаре.',
    ],
];
