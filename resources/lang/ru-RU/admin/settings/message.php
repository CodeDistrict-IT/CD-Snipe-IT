<?php

return [

    'update' => [
        'error' => 'При обновлении произошла ошибка. ',
        'success' => 'Настройки успешно обновлены.',
    ],
    'backup' => [
        'delete_confirm' => 'Вы уверены, что хотите удалить резервную копию? Это действие нельзя отменить. ',
        'file_deleted' => 'Резервная копия успешно удалена. ',
        'generated' => 'Новая резервная копия успешно создана.',
        'file_not_found' => 'Эта резервная копия не найдена на сервере.',
        'restore_warning' => 'Да, восстановить. Я осознаю, что это перезапишет все существующие данные в базе данных. Это также выйдет из учетных записей всех ваших существующих пользователей (включая вас).',
        'restore_confirm' => 'Вы уверены, что хотите восстановить базу данных из :filename?',
    ],
    'restore' => [
        'success' => 'Ваша резервная копия была восстановлена. Пожалуйста, войдите в систему снова.',
    ],
    'purge' => [
        'error' => 'Возникла ошибка при попытке очистки. ',
        'validation_failed' => 'Ваш текст подтверждения очистки неверен. Пожалуйста, наберите слово "DELETE" в поле подтверждения.',
        'success' => 'Удаленные записи успешно очищены.',
    ],
    'mail' => [
        'sending' => 'Отправляется тестовое электронное письмо...',
        'success' => 'Письмо отправлено!',
        'error' => 'Не удалось отправить электронное письмо.',
        'additional' => 'Нет дополнительных сообщений об ошибке. Проверьте настройки почты и журнал вашего приложения.',
    ],
    'ldap' => [
        'testing' => 'Тестирование подключения к LDAP, привязка & запрос ...',
        '500' => 'Ошибка в 500 сервере. Пожалуйста, проверьте журналы сервера для получения дополнительной информации.',
        'error' => 'Что-то пошло не так :(',
        'sync_success' => 'Пример 10 пользователей, полученных с заданного LDAP сервера:',
        'testing_authentication' => 'Тестирование LDAP аутентификации...',
        'authentication_success' => 'Пользователь успешно аутентифицирован с LDAP!',
    ],
    'webhook' => [
        'sending' => 'Отправка тестового сообщения в :app...',
        'success' => 'Ваша интеграция :webhook_name работает!',
        'success_pt1' => 'Успех! Проверьте ',
        'success_pt2' => ' канал для вашего тестового сообщения и не забудьте нажать СОХРАНИТЬ ниже, чтобы сохранить ваши настройки.',
        '500' => '500 Ошибка на сервера.',
        'error' => 'Что-то пошло не так. :app ответил: :error_message',
        'error_redirect' => 'ОШИБКА: 301/302 :endpoint возвращает редирект. По соображениям безопасности мы не переходим по редиректам. Пожалуйста, используйте фактическую конечную точку.',
        'error_misc' => 'Что-то пошло не так. :( ',
    ],
];
