<?php

return [
    'auth' => [
        'title' => 'Панель управления',
        'invalid_login' => 'Вы ввели некорректные данные. Пожалуйста, перепроверьте их и попробуйте ещё раз.',
    ],
    'field' => [
        'invalid_type' => 'Использован неверный тип поля: :type.',
        'options_method_invalid_model' => "Атрибут ':field' не соответствует допустимой модели. Попробуйте явно указать метод параметров для класса :model .",
        'options_method_not_exists' => "Класс модели :model должен содержать метод :method(), возвращающий опции для поля формы ':field'.",
        'options_static_method_invalid_value' => "Статический метод ':method()' в :class не вернул допустимый массив параметров.",
        'colors_method_not_exists' => "Класс модели :model должен содержать метод :method(), возвращающий HTML цвет в HEX для поля формы ':field'.",
    ],
    'widget' => [
        'not_registered' => "Класс виджета ':name' не зарегистрирован.",
        'not_bound' => "Виджет с именем класса ':name' не связан с контроллером.",
    ],
    'page' => [
        'untitled' => 'Без названия',
        '404' => [
            'label' => 'Страница не найдена',
            'help' => 'Мы тщательно искали, но запрошенный URL так и не смогли найти. Может быть вы искали что то другое?',
            'back_link' => 'Вернуться к предыдущей странице',
        ],
        'access_denied' => [
            'label' => 'Доступ запрещён',
            'help' => 'У вас нет необходимых прав для просмотра этой страницы.',
            'cms_link' => 'Перейти к CMS',
        ],
        'no_database' => [
            'label' => 'Отсутствует база данных',
            'help' => 'Для доступа к серверу требуется база данных. Проверьте, что база данных настроена и перенесена, прежде чем повторять попытку.',
            'cms_link' => 'Вернуться на главную страницу',
        ],
    ],
    'partial' => [
        'not_found_name' => 'Не удалось найти фрагмент (partial) с именем :name.',
        'invalid_name' => 'Неправильное имя фрагмента: :name.',
    ],
    'ajax_handler' => [
        'invalid_name' => 'Неправильное имя AJAX обработчика: :name.',
        'not_found' => "AJAX обработчик ':name' не найден.",
    ],
    'account' => [
        'impersonate' => 'Имперсонация пользователя',
        'impersonate_confirm' => 'Вы уверены, что хотите имперсонировать себя в качестве этого пользователя? Вы сможете вернуться в исходное состояние выйдя из системы.',
        'impersonate_success' => 'Теперь вы имперсонированы как этот пользователь',
        'impersonate_working' => 'Имперсонация...',
        'impersonating' => 'Вы временно вошли в систему как :impersonatee. Журналы логов по-прежнему могут идентифицировать вас как :impersonator',
        'stop_impersonating' => 'Остановить имперсонацию',
        'unsuspend' => 'Приостановлен',
        'unsuspend_confirm' => 'Вы уверены что хотите приостановить данного пользователя?',
        'unsuspend_success' => 'Пользователь был приостановлен.',
        'unsuspend_working' => 'Приостановка...',
        'signed_in_as' => 'Выполнен вход как :full_name',
        'sign_out' => 'Выйти',
        'login' => 'Вход',
        'reset' => 'Сбросить',
        'restore' => 'Восстановить',
        'login_placeholder' => 'пользователь',
        'password_placeholder' => 'пароль',
        'remember_me' => 'Оставаться в системе',
        'forgot_password' => 'Забыли пароль?',
        'enter_email' => 'Введите ваш Email',
        'enter_login' => 'Введите ваш Логин',
        'email_placeholder' => 'email',
        'enter_new_password' => 'Введите новый пароль',
        'password_reset' => 'Сбросить пароль',
        'restore_success' => 'На вашу электронную почту отправлено сообщение с инструкциями для восстановления пароля.',
        'reset_success' => 'Ваш пароль был успешно изменен. Теперь вы можете войти на сайт.',
        'reset_error' => 'Недействительные данные для изменения пароля. Пожалуйста, попробуйте еще раз!',
        'reset_fail' => 'Невозможно изменить пароль!',
        'apply' => 'Применить',
        'cancel' => 'Отменить',
        'delete' => 'Удалить',
        'ok' => 'OK',
        'sending' => 'Отправка...',
        'password_reset_email' => 'Отправить письмо для сброса пароля',
        'manual_password_reset_confirm' => 'Вы уверены, что хотите отправить электронное письмо для сброса пароля этому пользователю?',
        'manual_password_reset_success' => 'Пользователю отправлено электронное письмо с инструкциями по сбросу пароля.',
    ],
    'dashboard' => [
        'menu_label' => 'Дашборд',
        'widget_label' => 'Виджет',
        'widget_width' => 'Ширина',
        'full_width' => 'полная ширина',
        'manage_widgets' => 'Управление виджетами',
        'add_widget' => 'Добавить виджет',
        'widget_inspector_title' => 'Конфигурации виджета',
        'widget_inspector_description' => 'Настройка отображения виджета',
        'widget_columns_label' => 'Ширина :columns',
        'widget_columns_description' => 'Ширина виджета может варьироваться от 1 до 12.',
        'widget_columns_error' => 'Пожалуйста, введите ширину виджета в виде числа от 1 до 12.',
        'columns' => '{1} колонка|[2,4] колонки|[5,Inf] колонок',
        'widget_new_row_label' => 'С новой строки',
        'widget_new_row_description' => 'Установить виджет с новой строки.',
        'widget_title_label' => 'Заголовок',
        'widget_title_error' => 'Заголовок виджета обязателен.',
        'reset_layout' => 'Сбросить расположение',
        'reset_layout_confirm' => 'Сбросить расположение к расположению по умолчанию?',
        'reset_layout_success' => 'Расположение было сброшено',
        'make_default' => 'Сохранить по умолчанию',
        'make_default_confirm' => 'Сделать текущее расположение расположением по умолчанию?',
        'make_default_success' => 'Текущее расположение сохранено как расположение по умолчанию',
        'collapse_all' => 'Свернуть всё',
        'expand_all' => 'Развернуть всё',
        'status' => [
            'widget_title_default' => 'Статус системы',
            'update_available' => '{0} нет новых обновлений!|{1} доступно новое обновление!|[2,Inf] доступны новые обновления!',
            'updates_pending' => 'Доступны обновления',
            'updates_nil' => 'Используется последняя версия',
            'updates_link' => 'Обновить',
            'warnings_pending' => 'Требуется ваше внимание',
            'warnings_nil' => 'Ошибок нет',
            'warnings_link' => 'Просмотр',
            'core_build' => 'Сборка',
            'event_log' => 'Лог событий',
            'request_log' => 'Лог запросов',
            'app_birthday' => 'Онлайн с',
        ],
        'welcome' => [
            'widget_title_default' => 'Добро пожаловать',
            'welcome_back_name' => 'С возвращением в :app, :name.',
            'welcome_to_name' => 'Добро пожаловать в :app, :name.',
            'first_sign_in' => 'Это первый раз когда вы вошли в систему.',
            'last_sign_in' => 'Последний раз вы входили',
            'view_access_logs' => 'Посмотреть лог доступа',
            'nice_message' => 'Хорошего дня!',
        ],
    ],
    'user' => [
        'name' => 'Администратор',
        'menu_label' => 'Администраторы',
        'menu_description' => 'Управление группами администраторов, создание групп и разрешений.',
        'list_title' => 'Управление администраторами',
        'new' => 'Добавить администратора',
        'login' => 'Логин',
        'first_name' => 'Имя',
        'last_name' => 'Фамилия',
        'full_name' => 'Полное имя',
        'email' => 'Email',
        'role_field' => 'Роль',
        'role_comment' => 'Роли определяют уровни доступа пользователей, которые можно переопределить на уровне пользователя на вкладке Разрешения.',
        'groups' => 'Группы',
        'groups_comment' => 'Укажите к какой группе должен принадлежать этот аккаунт.',
        'avatar' => 'Аватар',
        'password' => 'Пароль',
        'password_confirmation' => 'Подтверждение пароля',
        'permissions' => 'Разрешения',
        'account' => 'Аккаунт',
        'superuser' => 'Суперпользователь',
        'superuser_comment' => 'Предоставляет этому аккаунту неограниченный доступ ко всем областям.',
        'send_invite' => 'Отправить приглашение по электронной почте',
        'send_invite_comment' => 'Отправляет приветственное сообщение, содержащее информацию о логине и пароле.',
        'delete_confirm' => 'Вы действительно хотите удалить этого администратора?',
        'return' => 'Вернуться к списку администраторов',
        'allow' => 'Разрешить',
        'inherit' => 'Наследовать',
        'deny' => 'Запретить',
        'activated' => 'Активирован',
        'last_login' => 'Последний вход',
        'created_at' => 'Создан',
        'updated_at' => 'Обновлён',
        'deleted_at' => 'Удалён',
        'show_deleted' => 'Показать удалённых',
        'group' => [
            'name' => 'Группы',
            'name_field' => 'Название',
            'name_comment' => 'Название отображается в списке групп в форме создания/редактирования администраторов.',
            'description_field' => 'Описание',
            'is_new_user_default_field_label' => 'Группа по умолчанию',
            'is_new_user_default_field_comment' => 'Добавлять новых администраторов в эту группу по умолчанию.',
            'code_field' => 'Уникальный код',
            'code_comment' => 'Введите уникальный код, если вы хотите открыть доступ к нему с помощью API.',
            'menu_label' => 'Группы',
            'list_title' => 'Управление группами',
            'new' => 'Добавить группу',
            'delete_confirm' => 'Вы действительно хотите удалить эту группу администраторов?',
            'return' => 'Вернуться к списку групп',
            'users_count' => 'Пользователей',
        ],
        'role' => [
            'name' => 'Роль',
            'name_field' => 'Название',
            'name_comment' => 'Название отображается в списке ролей в форме "Администратор".',
            'description_field' => 'Описание',
            'code_field' => 'Код',
            'code_comment' => 'Введите уникальный код, если вы хотите получить доступ к объекту роли при помощи API.',
            'menu_label' => 'Управление ролями',
            'list_title' => 'Управление ролями',
            'new' => 'Новая роль',
            'delete_confirm' => 'Удалить эту роль администратора?',
            'return' => 'Вернуться к списку ролей',
            'users_count' => 'Пользователей',
        ],
        'preferences' => [
            'not_authenticated' => 'Невозможно загрузить или сохранить настройки для неавторизованного пользователя.',
        ],
        'trashed_hint_title' => 'Этот аккаунт был удалён',
        'trashed_hint_desc' => 'Этот аккаунт был удалён и не может быть авторизован. Чтобы восстановить его, нажмите иконку восстановления пользователя в правом нижнем углу.',
    ],
    'list' => [
        'default_title' => 'Список',
        'search_prompt' => 'Поиск...',
        'no_records' => 'По вашему запросу ничего не найдено.',
        'missing_model' => 'Для списка используемого в :class не определена модель.',
        'missing_column' => 'Нет никаких определений столбца для :columns.',
        'missing_columns' => 'Список используемый в :class не имеет никаких столбцов.',
        'missing_definition' => "Поведение списка не содержит столбец для ':field'.",
        'missing_parent_definition' => "Поведение списка не содержит определения для ':definition'.",
        'behavior_not_ready' => 'Поведение списка не было инициализировано, проверьте вызов makeLists() в вашем контроллере.',
        'invalid_column_datetime' => "Значение столбца ':column' не является объектом DateTime. Отсутствует \$dates ссылка в модели?",
        'pagination' => 'Отображено записей: :from-:to из :total',
        'first_page' => 'Первая страница',
        'last_page' => 'Последняя страница',
        'prev_page' => 'Предыдущая страница',
        'next_page' => 'Следующая страница',
        'refresh' => 'Обновить',
        'updating' => 'Обновление...',
        'loading' => 'Загрузка...',
        'setup_title' => 'Настройка списка',
        'setup_help' => 'Используйте флажки для выбора колонок, которые вы хотите видеть в списке. Вы можете изменить положение столбцов, перетаскивая их вверх или вниз.',
        'records_per_page' => 'Записей на странице',
        'records_per_page_help' => 'Выберите количество записей для отображения на странице. Обратите внимание, что большое количество записей на одной странице может привести к снижению производительности.',
        'check' => 'Проверить',
        'delete_selected' => 'Удалить выбранное',
        'delete_selected_empty' => 'Нет выбранных записей для удаления.',
        'delete_selected_confirm' => 'Удалить выбранные записи?',
        'delete_selected_success' => 'Выбранные записи успешно удалены.',
        'column_switch_true' => 'Да',
        'column_switch_false' => 'Нет',
    ],
    'fileupload' => [
        'attachment' => 'Вложение',
        'help' => 'Добавьте заголовок и описание для этого вложения.',
        'title_label' => 'Заголовок',
        'description_label' => 'Описание',
        'default_prompt' => 'Для загрузки кликните по %s или перетащите файл сюда',
        'attachment_url' => 'URL',
        'upload_file' => 'Загрузить файл',
        'upload_error' => 'Ошибка загрузки',
        'remove_confirm' => 'Вы уверены?',
        'remove_file' => 'Удалить файл',
    ],
    'repeater' => [
        'add_new_item' => 'Добавить новый объект',
        'min_items_failed' => ':name требует минимум :min объектов, было передано только :items',
        'max_items_failed' => ':name позволяет передать максимум :max объектов, было передано :items',
    ],
    'form' => [
        'create_title' => 'Создание :name',
        'update_title' => 'Редактирование :name',
        'preview_title' => 'Предпросмотр :name',
        'create_success' => ':name был успешно создан',
        'update_success' => ':name был успешно сохранен',
        'delete_success' => ':name был успешно удалён',
        'restore_success' => ':name восстановлен',
        'reset_success' => 'Сброс завершён',
        'missing_id' => 'Идентификатор формы записи не указан.',
        'missing_model' => 'Для формы используемой в :class не определена модель.',
        'missing_definition' => "Поведение формы не содержит поле для':field'.",
        'not_found' => 'Форма записи с идентификатором :ID не найдена.',
        'action_confirm' => 'Вы уверены, что хотите сделать это?',
        'create' => 'Создать',
        'create_and_close' => 'Создать и закрыть',
        'creating' => 'Создание...',
        'creating_name' => 'Создание :name...',
        'save' => 'Сохранить',
        'save_and_close' => 'Сохранить и закрыть',
        'saving' => 'Сохранение...',
        'saving_name' => 'Сохранение :name...',
        'delete' => 'Удалить',
        'deleting' => 'Удаление...',
        'confirm_delete' => 'Вы действительно хотите удалить эту запись?',
        'confirm_delete_multiple' => 'Вы действительно хотите удалить выбранные записи?',
        'deleting_name' => 'Удаление :name...',
        'restore' => 'Восстановить',
        'restoring' => 'Восстановление...',
        'confirm_restore' => 'Вы уверены, что хотите восстановить эту запись?',
        'reset_default' => 'Сбросить настройки',
        'resetting' => 'Сброс',
        'resetting_name' => 'Сброс :name',
        'undefined_tab' => 'Разное',
        'field_off' => 'Выкл',
        'field_on' => 'Вкл',
        'add' => 'Добавить',
        'apply' => 'Применить',
        'cancel' => 'Отмена',
        'close' => 'Закрыть',
        'confirm' => 'Подтвердить',
        'reload' => 'Обновить',
        'complete' => 'Завершить',
        'ok' => 'OK',
        'or' => 'или',
        'confirm_tab_close' => 'Закрыть вкладку? Несохранённые изменения будут потеряны.',
        'behavior_not_ready' => 'Поведение формы не было инициализировано, проверьте вызов initForm() в вашем контроллере.',
        'preview_no_files_message' => 'Нет загруженных файлов.',
        'preview_no_media_message' => 'Нет выбраного медиа.',
        'preview_no_record_message' => 'Нет выбранных записей.',
        'select' => 'Выбрать',
        'select_all' => 'Выбрать все',
        'select_none' => 'Выбрать ни одного',
        'select_placeholder' => 'Пожалуйста, выберите',
        'insert_row' => 'Вставить строку',
        'insert_row_below' => 'Вставить строку ниже',
        'delete_row' => 'Удалить строку',
        'concurrency_file_changed_title' => 'Файл был изменён',
        'concurrency_file_changed_description' => 'Файл редактируемый вами, был изменён другим пользователем. Вы можете перезагрузить файл и потерять ваши изменения или перезаписать его',
        'return_to_list' => 'Вернуться к списку',
    ],
    'recordfinder' => [
        'find_record' => 'Найти запись',
        'invalid_model_class' => 'Предоставленный класс модели ":modelClass" для поиска записи является недействительным',
        'cancel' => 'Отмена',
    ],
    'pagelist' => [
        'page_link' => 'Ссылка на страницу',
        'select_page' => 'Выберите страницу...',
    ],
    'relation' => [
        'missing_behavior' => 'Поле ":field" требует, чтобы контроллер ":controller" реализовывал поведение "RelationController".',
        'missing_config' => "Поведение отношения не имеет конфигурации для ':config'.",
        'missing_definition' => "Поведение отношения не содержит определения для ':field'.",
        'missing_model' => 'Для поведения отношения, используемого в :class не определена модель.',
        'invalid_action_single' => 'Это действие не может быть выполнено для особого отношения.',
        'invalid_action_multi' => 'Это действие не может быть выполнено для множественных отношений.',
        'relationwidget_unsupported_type' => '":type" тип связи не поддерживается виджетом Relation.',
        'help' => 'Нажмите на элемент, который нужно добавить',
        'related_data' => 'Связанные :name данные',
        'refresh' => 'Обновить',
        'add' => 'Добавить',
        'add_selected' => 'Добавить выбранные',
        'add_a_new' => 'Добавить новый :name',
        'link_selected' => 'Связать выбранное',
        'link_a_new' => 'Новая ссылка :name',
        'cancel' => 'Отмена',
        'close' => 'Закрыть',
        'add_name' => 'Добавление :name',
        'create' => 'Создать',
        'create_name' => 'Создание :name',
        'update' => 'Обновить',
        'update_name' => 'Обновление :name',
        'preview' => 'Предпросмотр',
        'preview_name' => 'Предпросмотр :name',
        'remove' => 'Удалить',
        'remove_name' => 'Удаление :name',
        'delete' => 'Удалить',
        'delete_name' => 'Удаление :name',
        'delete_confirm' => 'Вы уверены?',
        'link' => 'Ссылка',
        'link_name' => 'Соединение :name',
        'unlink' => 'Отвязать',
        'unlink_name' => 'Разъединение :name',
        'unlink_confirm' => 'Вы уверены?',
    ],
    'reorder' => [
        'default_title' => 'Сортировать записи',
        'no_records' => 'Нет доступных записей для сортировки.',
    ],
    'model' => [
        'name' => 'Модель',
        'not_found' => "Модель ':class' с ID :id не найдено",
        'missing_id' => 'Не указан ID для поиска записи модели.',
        'missing_relation' => "Модель ':class' не содержит определения для ':relation'",
        'missing_method' => "Модель ':class' не содержит метод ':method'.",
        'invalid_class' => 'Модель :model используемая в :class не допустима, она должна наследовать класс \Model.',
        'mass_assignment_failed' => "Массовое заполнение недоступно для атрибута модели ':attribute'.",
    ],
    'warnings' => [
        'tips' => 'Подсказки по конфигурации системы',
        'tips_description' => 'Есть проблемы на которые стоит обратить внимание, чтобы правильно настроить систему.',
        'permissions' => 'Каталог :name или его подкаталоги недоступны для записи. Укажите соответствующие разрешения для веб-сервера.',
        'extension' => 'Расширение PHP :name не установлено. Установите эту библиотеку и активируйте расширение.',
        'plugin_missing' => 'Плагин :name имеет зависимость. Установите этот плагин.',
        'debug' => 'Режим отладки включен. Это не рекомендуется для рабочих инсталяций.',
        'decompileBackendAssets' => 'Ассеты в бэкенде в настоящее время декомпилированы. Это не рекомендуется для рабочих инсталяций.',
        'default_backend_user' => 'Был обнаружен пользователь с данными для входа по умолчанию (admin / admin@domain.tld). Измените ему имя пользователя и/или email-адрес, чтобы защитить систему.',
    ],
    'editor' => [
        'menu_label' => 'Настройки редактора',
        'menu_description' => 'Управление настройками редактора кода.',
        'preview' => 'Предпросмотр',
        'font_size' => 'Размер шрифта',
        'tab_size' => 'Размер табуляции',
        'use_hard_tabs' => 'Отступ с помощью табуляции',
        'code_folding' => 'Сворачивание кода',
        'code_folding_begin' => 'Отметить начало',
        'code_folding_begin_end' => 'Отметить начало и конец',
        'autocompletion' => 'Автодополнение',
        'word_wrap' => 'Перенос слов',
        'highlight_active_line' => 'Подсвечивать активную строку',
        'auto_closing' => 'Автоматическое закрытие тегов и специальных символов',
        'show_invisibles' => 'Показывать невидимые символы',
        'show_gutter' => 'Показывать нумерацию строк',
        'basic_autocompletion' => 'Базовое автодополнение (Ctrl + Пробел)',
        'live_autocompletion' => 'Живое автодополнение',
        'enable_snippets' => 'Включить сниппеты (Tab)',
        'display_indent_guides' => 'Показывать символы перевода строки',
        'show_print_margin' => 'Показывать границу печати',
        'mode_off' => 'Выключено',
        'mode_fluid' => 'Адаптивный',
        '40_characters' => '40 символов',
        '80_characters' => '80 символов',
        'theme' => 'Цветовая схема',
        'markup_styles' => 'Стили разметки',
        'custom_styles' => 'Дополнительные CSS стили',
        'custom_styles_comment' => 'Дополнительные стили для использования в HTML редакторе.',
        'markup_classes' => 'Классы разметки',
        'paragraph' => 'Параграф',
        'link' => 'Ссылка',
        'table' => 'Таблица',
        'table_cell' => 'Ячейка таблицы',
        'image' => 'Изображение',
        'label' => 'Метка',
        'class_name' => 'Имя класса',
        'markup_tags' => 'Теги разметки',
        'markup_tag' => 'Тег разметки',
        'allowed_empty_tags' => 'Разрешённые пустые теги',
        'allowed_empty_tags_comment' => 'Список тегов которые не будут удаляться если внутри них нет содержания.',
        'allowed_tags' => 'Разрешённые теги',
        'allowed_tags_comment' => 'Список разрешённых тегов.',
        'allowed_attributes' => 'Разрешенные атрибуты',
        'allowed_attributes_comment' => 'Список разрешённых атрибутов.',
        'no_wrap' => 'Не оборачивать теги',
        'no_wrap_comment' => 'Список тегов которые не должны быть обернуты в блочные элементы.',
        'remove_tags' => 'Удаляемые теги',
        'remove_tags_comment' => 'Список тегов, которые будут удалены вместе с их содержанием.',
        'line_breaker_tags' => 'Теги с переводом строки',
        'line_breaker_tags_comment' => 'Список тегов в которых будет использоваться тег перевода строки',
        'toolbar_options' => 'Опции панели инструментов',
        'toolbar_buttons' => 'Кнопки панели инструментов',
        'toolbar_buttons_comment' => 'Кнопки панели инструментов, которые будут отображаться в Rich Editor по умолчанию.',
        'toolbar_buttons_preset' => 'Вставить предустановленный набор кнопок панели инструментов:',
        'toolbar_buttons_presets' => [
            'default' => 'По умолчанию',
            'minimal' => 'Минимальный',
            'full' => 'Полный',
        ],
        'paragraph_formats' => 'Форматы абзацев',
        'paragraph_formats_comment' => 'Опции появляющиеся в выпадающем списке Форматы абзацев.',
    ],
    'tooltips' => [
        'preview_website' => 'Просмотр сайта',
    ],
    'mysettings' => [
        'menu_label' => 'Мои настройки',
        'menu_description' => 'Управление настройками учетной записи администратора.',
    ],
    'myaccount' => [
        'menu_label' => 'Мой аккаунт',
        'menu_description' => 'Управление личной информацией (имя, email, пароль)',
        'menu_keywords' => 'безопасность логин',
    ],
    'branding' => [
        'menu_label' => 'Персонализация панели управления',
        'menu_description' => 'Управление внешним видом панели управления (название, цвет, логотип)',
        'brand' => 'Бренд',
        'logo' => 'Логотип',
        'logo_description' => 'Загрузите логотип для панели управления',
        'favicon' => 'Фавикон',
        'favicon_description' => 'Загрузите пользовательский фавикон для панели управления',
        'app_name' => 'Название приложения',
        'app_name_description' => 'Это название отображается в заголовках бэкенда',
        'app_tagline' => 'Слоган приложения',
        'app_tagline_description' => 'Слоган будет отображаться на экране входа в панель управления.',
        'colors' => 'Цвета',
        'branding_colors' => 'Брендовые цвета',
        'branding_colors_comment' => 'Эти цвета будут использоваться во всем интерфейсе Backend UI, чтобы соответствовать вашему бренду.',
        'default_colors' => 'Цвета по умолчанию',
        'default_colors_comment' => 'Эти цвета будут доступны как образцы во всех палитрах цветов, если они не будут переопределены.',
        'add_default_color' => 'Добавить цвет по умолчанию',
        'primary_color' => 'Основной цвет',
        'secondary_color' => 'Вторичный цвет',
        'accent_color' => 'Цвет акцента',
        'styles' => 'Стили',
        'custom_stylesheet' => 'Пользовательские стили',
        'navigation' => 'Навигация',
        'menu_mode' => 'Стиль меню',
        'menu_mode_inline' => 'Строчный',
        'menu_mode_inline_no_icons' => 'Строчный (без иконок)',
        'menu_mode_tile' => 'Плитка',
        'menu_mode_collapsed' => 'Схлопнутый',
    ],
    'backend_preferences' => [
        'menu_label' => 'Настройки панели управления',
        'menu_description' => 'Управление языком и внешним видом панели управления.',
        'region' => 'Регион',
        'code_editor' => 'Редактор кода',
        'timezone' => 'Часовой пояс',
        'timezone_comment' => 'Выводить даты в выбранном часовом поясе.',
        'locale' => 'Язык',
        'locale_comment' => 'Выберите желаемый язык панели управления.',
    ],
    'access_log' => [
        'hint' => 'В этом журнале отображается список успешных попыток авторизаций администраторов. Записи хранятся :days дней.',
        'menu_label' => 'Журнал доступа',
        'menu_description' => 'Просмотр списка успешных авторизаций администраторов.',
        'id' => 'ID',
        'created_at' => 'Дата и время',
        'type' => 'Тип',
        'login' => 'Логин',
        'ip_address' => 'IP-адрес',
        'first_name' => 'Имя',
        'last_name' => 'Фамилия',
        'email' => 'Email',
    ],
    'filter' => [
        'all' => 'все',
        'options_method_not_exists' => "Модель класса :model должна определить метод :method() возвращающего варианты для фильтра ':filter'.",
        'date_all' => 'весь период',
        'number_all' => 'все числа',
    ],
    'import_export' => [
        'upload_csv_file' => '1. Загрузка CSV-файла',
        'import_file' => 'Импорт файла',
        'row' => 'Строка :row',
        'first_row_contains_titles' => 'Первая строка содержит заголовки столбцов',
        'first_row_contains_titles_desc' => 'Выберите эту опцию, если первая строка в CSV-файле используется как заголовки для столбцов.',
        'match_columns' => '2. Применение столбцов файла к полям базы данных',
        'file_columns' => 'Столбцы файла',
        'database_fields' => 'Поля базы данных',
        'set_import_options' => '3. Установка параметров импорта',
        'export_output_format' => '1. Выбор формата экспорта',
        'file_format' => 'Формат файла',
        'standard_format' => 'Стандартный формат',
        'custom_format' => 'Пользовательский формат',
        'delimiter_char' => 'Символ разделения полей',
        'enclosure_char' => 'Символ обрамления полей',
        'escape_char' => 'Экранирующий символ',
        'select_columns' => '2. Выберите столбцы для экспорта',
        'column' => 'Столбец',
        'columns' => 'Столбцы',
        'set_export_options' => '3. Установка параметров экспорта',
        'show_ignored_columns' => 'Показать пропущенные столбцы',
        'auto_match_columns' => 'Авто применение столбцов',
        'created' => 'Создано',
        'updated' => 'Обновлено',
        'skipped' => 'Пропущено',
        'warnings' => 'Предупреждения',
        'errors' => 'Ошибки',
        'skipped_rows' => 'Пропущенные строки',
        'import_progress' => 'Прогресс импорта',
        'processing' => 'Обработка',
        'import_error' => 'Ошибка импорта',
        'upload_valid_csv' => 'Пожалуйста, загрузите валидный CSV-файл.',
        'drop_column_here' => 'Перетащите столбец сюда...',
        'ignore_this_column' => 'Игонорировать этот столбец',
        'processing_successful_line1' => 'Процесс экспорта файла завершился успешно!',
        'processing_successful_line2' => 'Теперь браузер автоматически должен начать загрузку файла.',
        'export_progress' => 'Прогресс экспорта',
        'export_error' => 'Ошибка экспорта',
        'column_preview' => 'Предпросмотр столбца',
        'file_not_found_error' => 'Файл не найден',
        'empty_error' => 'Нет данных доступных для экспорта',
        'empty_import_columns_error' => 'Укажите несколько столбцов для импорта.',
        'match_some_column_error' => 'Сначала сопоставьте несколько столбцов.',
        'required_match_column_error' => 'Укажите соответствующее поле :label.',
        'empty_export_columns_error' => 'Укажите несколько столбцов для экспорта.',
        'behavior_missing_uselist_error' => 'Вы должны реализовать поведение контроллера ListController с включенной опцией экспорта "useList".',
        'missing_model_class_error' => 'Укажите свойство modelClass для :type',
        'missing_column_id_error' => 'Отсутствует идентификатор столбца',
        'unknown_column_error' => 'Неизвестный столбец',
        'encoding_not_supported_error' => 'Кодировка исходного файла не распознается. Пожалуйста, выберите опцию пользовательского формата файла с правильной кодировкой для импорта файла.',
        'encoding_format' => 'Кодировка файла',
        'encodings' => [
            'utf_8' => 'UTF-8',
            'us_ascii' => 'US-ASCII',
            'iso_8859_1' => 'ISO-8859-1 (Latin-1, Western European)',
            'iso_8859_2' => 'ISO-8859-2 (Latin-2, Central European)',
            'iso_8859_3' => 'ISO-8859-3 (Latin-3, South European)',
            'iso_8859_4' => 'ISO-8859-4 (Latin-4, North European)',
            'iso_8859_5' => 'ISO-8859-5 (Latin, Cyrillic)',
            'iso_8859_6' => 'ISO-8859-6 (Latin, Arabic)',
            'iso_8859_7' => 'ISO-8859-7 (Latin, Greek)',
            'iso_8859_8' => 'ISO-8859-8 (Latin, Hebrew)',
            'iso_8859_9' => 'ISO-8859-9 (Latin-5, Turkish)',
            'iso_8859_10' => 'ISO-8859-10 (Latin-6, Nordic)',
            'iso_8859_11' => 'ISO-8859-11 (Latin, Thai)',
            'iso_8859_13' => 'ISO-8859-13 (Latin-7, Baltic Rim)',
            'iso_8859_14' => 'ISO-8859-14 (Latin-8, Celtic)',
            'iso_8859_15' => 'ISO-8859-15 (Latin-9, Western European revision with euro sign)',
            'windows_1250' => 'Windows-1250 (CP1250, Central and Eastern European)',
            'windows_1251' => 'Windows-1251 (CP1251)',
            'windows_1252' => 'Windows-1252 (CP1252)',
        ],
    ],
    'permissions' => [
        'manage_media' => 'Загрузка и управление медиаконтентом - изображениями, видео, звуками, документами',
        'allow_unsafe_markdown' => 'Использовать небезопасный Markdown (может включать JavaScript)',
    ],
    'mediafinder' => [
        'label' => 'Поиск медиа',
        'default_prompt' => 'Кликните на кнопку %s, чтобы найти медиафайл',
        'no_image' => 'Не удалось найти изображение',
    ],
    'media' => [
        'menu_label' => 'Медиа',
        'upload' => 'Загрузить',
        'move' => 'Переместить',
        'delete' => 'Удалить',
        'add_folder' => 'Создать папку',
        'search' => 'Поиск',
        'display' => 'Отобразить',
        'filter_all' => 'Все файлы',
        'filter_images' => 'Изображения',
        'filter_video' => 'Видео',
        'filter_audio' => 'Музыка',
        'filter_documents' => 'Документы',
        'library' => 'Библиотека',
        'size' => 'Размер',
        'title' => 'Имя',
        'last_modified' => 'Последнее изменение',
        'public_url' => 'Публичный адрес',
        'click_here' => 'Нажмите здесь',
        'thumbnail_error' => 'Ошибка создания миниатюры.',
        'return_to_parent' => 'Вернуться в родительскую папку',
        'return_to_parent_label' => 'Наверх ..',
        'nothing_selected' => 'Ничего не выбрано.',
        'multiple_selected' => 'Выбрано несколько элементов.',
        'uploading_file_num' => 'Загрузка файлов: :number ...',
        'uploading_complete' => 'Загрузка файлов завершена!',
        'uploading_error' => 'Ошибка загрузки',
        'type_blocked' => 'Используемый тип файла блокируется по соображениям безопасности.',
        'order_by' => 'Сортировать по',
        'direction' => 'Направление сортировки',
        'direction_asc' => 'По возрастанию',
        'direction_desc' => 'По убыванию',
        'folder' => 'Папка',
        'no_files_found' => 'Ни один из файлов не удовлетворяет вашему запросу.',
        'delete_empty' => 'Пожалуйста, выберите элементы для удаления.',
        'delete_confirm' => 'Вы действительно хотите удалить выбранные элементы?',
        'error_renaming_file' => 'Ошибка изменения имени файла.',
        'new_folder_title' => 'Новая папка',
        'folder_name' => 'Название папки',
        'error_creating_folder' => 'Ошибка создания папки',
        'folder_or_file_exist' => 'Папка или файл с таким именем уже существует.',
        'move_empty' => 'Пожалуйста, выберите элементы для перемещения.',
        'move_popup_title' => 'Перемещение файлов или папок',
        'move_destination' => 'Папка назначения',
        'please_select_move_dest' => 'Пожалуйста, выберите папку назначения для перемещения.',
        'move_dest_src_match' => 'Пожалуйста, выберите другую папку.',
        'empty_library' => 'Библиотека медиафайлов пуста. Для начала загрузите файлы или создайте папки.',
        'insert' => 'Вставить',
        'crop_and_insert' => 'Обрезать и вставить',
        'select_single_image' => 'Пожалуйста, выберите одно изображение.',
        'selection_not_image' => 'Выбранный элемент не является изображением.',
        'restore' => 'Отменить все изменения',
        'resize' => 'Изменение размера...',
        'selection_mode_normal' => 'Нормальный',
        'selection_mode_fixed_ratio' => 'Фиксированное соотношение',
        'selection_mode_fixed_size' => 'Фиксированный размер',
        'height' => 'Высота',
        'width' => 'Ширина',
        'selection_mode' => 'Режим выделения',
        'resize_image' => 'Изменение размера изображения',
        'image_size' => 'Размер изображения:',
        'selected_size' => 'Выбрано:',
        'rename_popup_title' => 'Переименовать',
        'rename_new_name' => 'Новое имя',
        'move_please_select' => 'пожалуйста, выберите директорию',
        'move_button' => 'Переместить',
    ],
];
