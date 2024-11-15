<?php

return [
    'cms_object' => [
        'invalid_file' => 'Ошибка в имени файла: :name. Имена файлов могут содержать только латинские буквы, цифры, знаки подчеркивания и точки. Пример правильных имен файлов: page.htm, page, subdirectory/page',
        'invalid_property' => "Параметр ':name' нельзя изменить.",
        'file_already_exists' => "Файл ':name' уже существует.",
        'error_saving' => "Ошибка сохранения файла ':name'. Пожалуйста, проверьте права на запись.",
        'error_creating_directory' => 'Ошибка создания директории :name. Пожалуйста, проверьте права на запись.',
        'invalid_file_extension' => 'Указано неправильное расширение файла: :invalid. Разрешенные расширения: :allowed.',
        'error_deleting' => "Невозможно удалить файл шаблона ':name'. Пожалуйста, проверьте права на запись.",
        'delete_success' => 'Шаблоны были успешно удалены: :count.',
        'file_name_required' => 'Пожалуйста, укажите имя файла шаблона.',
        'safe_mode_enabled' => 'В настоящий момент включен безопасный режим.',
    ],
    'dashboard' => [
        'active_theme' => [
            'widget_title_default' => 'Веб-сайт',
            'online' => 'Онлайн',
            'maintenance' => 'в разработке',
            'manage_themes' => 'Управление темами',
            'customize_theme' => 'Настройка темы',
        ],
    ],
    'theme' => [
        'not_found_name' => "Тема ':name' не найдена.",
        'by_author' => 'Создано :name',
        'active' => [
            'not_set' => 'Активная тема не установлена.',
            'not_found' => 'Активная тема не найдена.',
        ],
        'edit' => [
            'not_set' => 'Тема для редактирования не установлена.',
            'not_found' => 'Тема для редактирования не найдена.',
            'not_match' => 'Объект, который вы пытаетесь открыть, не принадлежит редактируемой теме. Пожалуйста, обновите страницу.',
        ],
        'settings_menu' => 'Фронтенд темы',
        'settings_menu_description' => 'Управление темой интерфейса',
        'default_tab' => 'Свойства',
        'name_label' => 'Название',
        'name_create_placeholder' => 'Название новой темы',
        'author_label' => 'Автор',
        'author_placeholder' => 'Имя автора или название компании',
        'description_label' => 'Описание',
        'description_placeholder' => 'Описание темы',
        'homepage_label' => 'Домашняя страница',
        'homepage_placeholder' => 'Адрес сайта',
        'code_label' => 'Уникальный код',
        'code_placeholder' => 'Уникальный код темы, который используются для её распространения',
        'preview_image_label' => 'Предварительный просмотр',
        'preview_image_placeholder' => 'Путь изображения предварительного просмотра темы.',
        'dir_name_label' => 'Имя директории',
        'dir_name_create_label' => 'Директория темы',
        'theme_label' => 'Тема',
        'theme_title' => 'Темы',
        'activate_button' => 'Активировать',
        'active_button' => 'Активировано',
        'customize_theme' => 'Настройка темы',
        'customize_button' => 'Настроить',
        'duplicate_button' => 'Дублировать',
        'duplicate_title' => 'Дублировать тему',
        'duplicate_theme_success' => 'Дублирование успешно завершено!',
        'manage_button' => 'Управление',
        'manage_title' => 'Управление темой',
        'edit_properties_title' => 'Тема',
        'edit_properties_button' => 'Редактирование свойств',
        'save_properties' => 'Сохранить свойства',
        'import_button' => 'Импортировать',
        'import_title' => 'Импортировать тему',
        'import_theme_success' => 'Импортирование темы успешно завершено!',
        'import_uploaded_file' => 'Файл архива темы',
        'import_overwrite_label' => 'Перезаписывать существующие файлы',
        'import_overwrite_comment' => 'Отключите эту опцию, чтобы импортировать только новые файлы',
        'import_folders_label' => 'Папки',
        'import_folders_comment' => 'Пожалуйста, выберите папки темы, которые вы хотели бы импортировать',
        'export_button' => 'Экспортировать',
        'export_title' => 'Экспортировать тему',
        'export_folders_label' => 'Папки',
        'export_folders_comment' => 'Пожалуйста, выберите папки темы, которые вы хотели бы экспортировать',
        'delete_button' => 'Удалить',
        'delete_confirm' => 'Вы уверены, что хотите удалить эту тему? Это действие необратимо!',
        'delete_active_theme_failed' => 'Невозможно удалить активный тему, попробуйте сделать другую тему активной.',
        'delete_theme_success' => 'Удаление темы успешно завершено!',
        'create_title' => 'Создать тему',
        'create_button' => 'Создать',
        'create_new_blank_theme' => 'Создать новую пустую тему',
        'create_theme_success' => 'Создание темы успешно завершено!',
        'create_theme_required_name' => 'Пожалуйста, укажите имя для темы.',
        'new_directory_name_label' => 'Директория темы',
        'new_directory_name_comment' => 'Укажите новое имя каталога для дубликата темы.',
        'dir_name_invalid' => 'Имя может содержать только цифры, латинские буквы и следующие символы: _ -',
        'dir_name_taken' => 'Указанный каталог уже существует.',
        'find_more_themes' => 'Найти еще темы',
        'saving' => 'Сохранение темы...',
        'return' => 'Вернуться к списку тем',
        'default_description' => 'Пользовательская тема сгенерированая для :url',
        'scaffold' => [
            'label' => 'Каркас',
            'empty' => 'Пусто',
            'less' => 'Базовый (LESS)',
            'tailwind' => 'Tailwind CSS',
        ],
    ],
    'maintenance' => [
        'settings_menu' => 'Режим обслуживания',
        'settings_menu_description' => 'Управление режимом работы сайта.',
        'is_enabled' => 'Включить режим обслуживания',
        'is_enabled_comment' => 'При активации этого режима посетители сайта увидят страницу выбранную ниже.',
        'hint' => 'Режим обслуживания покажет страницу обслуживания для посетителей, которые не вошли в бэкенд.',
        'allowed_ips' => [
            'name' => 'Разрешенные IP-адреса',
            'description' => 'IP-адреса с которых разрешен просмотр сайта когда включен режим обслуживания',
            'prompt' => 'Добавить IP-адрес',
            'ip' => 'IP-адрес',
            'label' => 'Описание',
        ],
    ],
    'page' => [
        'not_found_name' => "Страница ':name' не найдена",
        'not_found' => [
            'label' => 'Страница не найдена',
            'help' => 'Запрошенная страница не найдена.',
        ],
        'custom_error' => [
            'label' => 'Ошибка на странице',
            'help' => 'К сожалению, страница не может быть отображена из-за ошибки.',
        ],
        'menu_label' => 'Страницы',
        'unsaved_label' => 'Несохранённая(е) страница(ы)',
        'no_list_records' => 'Страницы не найдены',
        'new' => 'Новая страница',
        'invalid_url' => 'Неверный формат адреса. Адрес страницы должен начинаться со знака / и может содержать цифры, латинские буквы, и следующие знаки: ._-[]:?|/+*^$',
        'delete_confirm_multiple' => 'Вы действительно хотите удалить выделенные страницы?',
        'delete_confirm_single' => 'Вы действительно хотите удалить эту страницу?',
        'no_layout' => '-- без шаблона --',
        'cms_page' => 'CMS страница',
        'title' => 'Заголовок страницы',
        'url' => 'Страница URL',
        'file_name' => 'Имя файла страницы',
    ],
    'layout' => [
        'not_found_name' => 'Не удалось найти шаблон с именем :name.',
        'menu_label' => 'Шаблоны',
        'unsaved_label' => 'Несохранённый(е) шаблон(ы)',
        'no_list_records' => 'Шаблонов не найдено',
        'new' => 'Новый шаблон',
        'delete_confirm_multiple' => 'Удалить выделенные шаблоны?',
        'delete_confirm_single' => 'Удалить этот шаблон?',
    ],
    'partial' => [
        'not_found_name' => 'Не удалось найти фрагмент с именем :name.',
        'invalid_name' => 'Ошибка в имени фрагмента :name.',
        'menu_label' => 'Фрагменты',
        'unsaved_label' => 'Несохранённый(е) фрагмент(ы)',
        'no_list_records' => 'Фрагменты не найдены',
        'delete_confirm_multiple' => 'Удалить выделенные фрагменты?',
        'delete_confirm_single' => 'Удалить этот фрагмент?',
        'new' => 'Новый фрагмент',
    ],
    'content' => [
        'not_found_name' => "Не удалось найти контент-файл: ':name'.",
        'menu_label' => 'Content',
        'unsaved_label' => 'Несохранённый контент-файл',
        'no_list_records' => 'Контент-файлы не найдены',
        'delete_confirm_multiple' => 'Вы действительно хотите удалить выделенные файлы?',
        'delete_confirm_single' => 'Вы действительно хотите удалить этот файл?',
        'new' => 'Новый контент-файл',
    ],
    'ajax_handler' => [
        'invalid_name' => 'Ошибка в имени обработчика AJAX: :name.',
        'not_found' => "Обработчик AJAX не найден: ':name'.",
    ],
    'cms' => [
        'menu_label' => 'CMS',
    ],
    'sidebar' => [
        'add' => 'Добавить',
        'search' => 'Поиск...',
    ],
    'editor' => [
        'settings' => 'Настройки',
        'title' => 'Заголовок',
        'new_title' => 'Заголовок страницы',
        'url' => 'Адрес',
        'filename' => 'Имя файла',
        'layout' => 'Шаблон',
        'description' => 'Описание',
        'preview' => 'Предпросмотр',
        'meta' => 'Метатеги',
        'meta_title' => 'Заголовок (meta title)',
        'meta_description' => 'Описание (meta description)',
        'markup' => 'Разметка',
        'code' => 'Код',
        'content' => 'Содержание',
        'hidden' => 'Скрытая страница',
        'hidden_comment' => 'Скрытые страницы доступны только для вошедших в систему пользователей.',
        'enter_fullscreen' => 'Войти в полноэкранный режим',
        'exit_fullscreen' => 'Выйти из полноэкранного режима',
        'open_searchbox' => 'Открыть окно поиска',
        'close_searchbox' => 'Закрыть окно поиска',
        'open_replacebox' => 'Открыть поле "Заменить"',
        'close_replacebox' => 'Закрыть поле "Заменить"',
        'commit' => 'Зафиксировать',
        'reset' => 'Сброс',
        'commit_confirm' => 'Вы уверены, что хотите сохранить изменения этого файла в файловой системе? Это перезапишет существующий в файловой системе файл',
        'reset_confirm' => 'Вы уверены, что хотите сбросить этот файл до копии, которая находится в файловой системе? Это полностью заменит его файлом, который находится в файловой системе.',
        'committing' => 'Зафиксировать',
        'resetting' => 'Сбросить',
        'commit_success' => ':type был зафиксирован в файловой системе',
        'reset_success' => ':type был сброшен до версии из файловой системы',
    ],
    'asset' => [
        'menu_label' => 'Assets',
        'unsaved_label' => 'Несохранённый(е) файл(ы)',
        'drop_down_add_title' => 'Добавить...',
        'drop_down_operation_title' => 'Действие...',
        'upload_files' => 'Загрузить файл(ы)',
        'create_file' => 'Создать файл',
        'create_directory' => 'Создать директорию',
        'directory_popup_title' => 'Новая директория',
        'directory_name' => 'Имя директории',
        'rename' => 'Переименовать',
        'delete' => 'Удалить',
        'move' => 'Переместить',
        'select' => 'Выбрать',
        'new' => 'Новый файл',
        'invalid_path' => 'Путь может содержать только цифры, латинские буквы, пробелы и следующие символы: ._-/',
        'error_deleting_file' => 'Ошибка удаления файла :name.',
        'error_deleting_dir_not_empty' => 'Невозможно удалить директорию :name. Директория содержит файлы или поддиректории.',
        'error_deleting_dir' => 'Ошибка удаления директории :name.',
        'invalid_name' => 'Имя может содержать только цифры, латинские буквы, пробелы и следующие символы: ._-',
        'original_not_found' => 'Оригинальный файл или директория не найдена',
        'already_exists' => 'Файл или директория с таким именем уже существует',
        'error_renaming' => 'Невозможно переименовать файл или директорию',
        'name_cant_be_empty' => 'Имя не может быть пустым',
        'too_large' => 'Загруженный файл слишком велик. Максимальный допустимый размер файла составляет :max_size',
        'type_not_allowed' => 'Разрешены только файлы следующих типов: :allowed_types',
        'file_not_valid' => 'Файл не может быть сохранен',
        'error_uploading_file' => "Ошибка загрузки файла ':name': :error",
        'move_destination' => 'Папка назначения',
        'move_popup_title' => 'Переместить файлы',
        'selected_files_not_found' => 'Выбранные файлы не найдены',
        'select_destination_dir' => 'Пожалуйста, выберите директорию',
        'destination_not_found' => 'Конечная директория не найдена',
        'error_moving_file' => 'Не удалось переместить файл :file',
        'error_moving_directory' => 'Не удалось переместить директорию :dir',
        'error_deleting_directory' => 'Не удалось удалить директорию :dir',
        'no_list_records' => 'Файлы не найдены',
        'delete_confirm' => 'Удалить выбранные файлы или каталоги?',
        'path' => 'Путь',
    ],
    'component' => [
        'menu_label' => 'Компоненты',
        'unnamed' => 'Безымянный',
        'no_description' => 'Без описания',
        'alias' => 'Псевдоним',
        'alias_description' => 'Псевдоним компонента определяет его имя, под которым он доступен в коде страницы или шаблона.',
        'validation_message' => 'Псевдонимы обязательны и могут содержать только латинские буквы, цифры и знаки подчеркивания. Псевдонимы должны начинаться с латинской буквы.',
        'invalid_request' => 'Шаблон не может быть сохранен, так как запрос содержит поврежденную информацию о компонентах.',
        'no_records' => 'Компоненты не найдены',
        'not_found' => "Компонент ':name' не найден.",
        'no_default_partial' => "Этот компонент не имеет 'default' фрагмента (partial)",
        'method_not_found' => "Компонент ':name' не содержит метод ':method'.",
        'soft_component' => 'Мягкий компонент',
        'soft_component_description' => 'Этот компонент отсутствует, но он не является обязательным.',
    ],
    'template' => [
        'invalid_type' => 'Неизвестный тип шаблона.',
        'not_found' => 'Запрошенный шаблон не найдено.',
        'saved' => 'Шаблон был успешно сохранён.',
        'no_list_records' => 'Записи не найдены',
        'delete_confirm' => 'Удалить выбранные шаблоны?',
        'order_by' => 'Сортировать по',
    ],
    'permissions' => [
        'name' => 'CMS',
        'manage_content' => 'Управление контент-файлами сайта',
        'manage_assets' => 'Управление ассетами сайта - изображениями, JavaScript и CSS файлами',
        'manage_pages' => 'Создание, редактирование и удаление страниц сайта',
        'manage_layouts' => 'Создание, редактирование и удаление CMS макетами',
        'manage_partials' => 'Создание, редактирование и удаление CMS фрагментами',
        'manage_themes' => 'Активация, деактивация и конфигурация CMS тем',
        'manage_theme_options' => 'Настройка параметров для активной темы',
    ],
    'theme_log' => [
        'hint' => 'В этом журнале отображаются изменения, внесенные в тему администраторами во внутренней области CMS.',
        'menu_label' => 'Журнал изменений тем',
        'menu_description' => 'Просмотр изменений, внесённых в активную тему.',
        'empty_link' => 'Очистить журнал',
        'empty_loading' => 'Очистка журнала...',
        'empty_success' => 'Журнал очищен',
        'return_link' => 'Вернуться к журналу',
        'id' => 'ID',
        'id_label' => 'ID записи журнала',
        'created_at' => 'Дата & Время',
        'user' => 'Пользователь',
        'type' => 'Тип',
        'type_create' => 'Создайте',
        'type_update' => 'Обновить',
        'type_delete' => 'Удалить',
        'theme_name' => 'Тема',
        'theme_code' => 'Код темы',
        'old_template' => 'Шаблон (старый)',
        'new_template' => 'Шаблон (новый)',
        'template' => 'Шаблон',
        'diff' => 'Изменения',
        'old_value' => 'Старое значение',
        'new_value' => 'Новое значение',
        'preview_title' => 'Изменение шаблона',
        'template_updated' => 'Шаблон обновлён',
        'template_created' => 'Шаблон был создан',
        'template_deleted' => 'Шаблон был удалён',
    ],
];
