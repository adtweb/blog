<?php

return [
    'cms_object' => [
        'invalid_file' => 'Невалидно име на файл: :name. Имената на файловете могат да съдържат само букви и символи, долни черти, тирета и точки. Някои примери за правилни имена на файлове: page.htm, страница, поддиректория / страница',
        'invalid_property' => "Свойство ': name' не може да се сложи.",
        'file_already_exists' => "Файл ':name' вече съществува.",
        'error_saving' => "Грешка при запазване на ':name'. Моля, проверете правата за записване.",
        'error_creating_directory' => 'Грешка при създаване на директория :name. Моля, проверете правата за записване.',
        'invalid_file_extension' => 'Невалидно разширение на файл: :invalid. Позволени разширения са: :allowed.',
        'error_deleting' => "Грешка при изтриване на шаблонен файл ':name'. Моля, проверете правата за записване.",
        'delete_success' => 'Шаблоните са успешно изтрити: :count.',
        'file_name_required' => 'Полето Име на Файл е задължително.',
    ],
    'theme' => [
        'not_found_name' => "Темата ':name' не е намерена.",
        'active' => [
            'not_set' => 'Активната тема не е зададена.',
            'not_found' => 'Активната тема не е намерена.',
        ],
        'edit' => [
            'not_set' => 'Темата за редактиране не е зададена.',
            'not_found' => 'Темата за редактиране не е намерена.',
            'not_match' => 'Обектът, който се опитвате да достъпите, не принадлежи към темата да се редактира. Моля, презаредете страницата.',
        ],
        'settings_menu' => 'Front-end Тема',
        'settings_menu_description' => 'Преглед на списъка с инсталирани теми и изберете активна тема.',
        'default_tab' => 'Свойства',
        'name_label' => 'Име',
        'name_create_placeholder' => 'Ново име на тема',
        'author_label' => 'Автор',
        'author_placeholder' => 'Лице или име на фирма',
        'description_label' => 'Описание',
        'description_placeholder' => 'Описание на Темата',
        'homepage_label' => 'Страница',
        'homepage_placeholder' => 'Сайт адрес',
        'code_label' => 'Код',
        'code_placeholder' => 'Уникален код на тази тема, използвана за разпространение',
        'dir_name_label' => 'Име на директория',
        'dir_name_create_label' => 'Директорията на дестинация за темата',
        'theme_label' => 'Тема',
        'theme_title' => 'Теми',
        'activate_button' => 'Активна',
        'active_button' => 'Активна',
        'customize_theme' => 'Персонализирайте Тема',
        'customize_button' => 'Персонализирайте',
        'duplicate_button' => 'Дубликиране',
        'duplicate_title' => 'Дубликиране на Тема',
        'duplicate_theme_success' => 'Темата е успешно дубликирана!',
        'manage_button' => 'Управление',
        'manage_title' => 'Управление Теми',
        'edit_properties_title' => 'Теми',
        'edit_properties_button' => 'Редактиране на свойства',
        'save_properties' => 'Запазване на свойства',
        'import_button' => 'Внасяне',
        'import_title' => 'Внасяне на Тема',
        'import_theme_success' => 'Успешно внесена Тема!',
        'import_uploaded_file' => 'Тема архивен файл',
        'import_overwrite_label' => 'Презаписване съществуващите файлове',
        'import_overwrite_comment' => 'Махнете отметката в това квадратче, за да импортирате само нови файлове',
        'import_folders_label' => 'Папки',
        'import_folders_comment' => 'Моля, изберете папката на темата, която бихте искали да внесете',
        'export_button' => 'Изнасяне',
        'export_title' => 'Изнасяне на Тема',
        'export_folders_label' => 'Папки',
        'export_folders_comment' => 'Моля, изберете папката на темата, която бихте искали да изнесете',
        'delete_button' => 'Изтриване',
        'delete_confirm' => 'Сигурни ли сте че искате да изтриете тази тема? Това не може да бъде отменено!',
        'delete_active_theme_failed' => 'Не може да се изтрие активна тема, опитайте да активирате друга тема първо.',
        'delete_theme_success' => 'Успешно изтрита тема!',
        'create_title' => 'Създай Тема',
        'create_button' => 'Създай',
        'create_new_blank_theme' => 'Създай нова празна тема',
        'create_theme_success' => 'Успешно създадена Тема!',
        'create_theme_required_name' => 'Моля, задайте име за темата.',
        'new_directory_name_label' => 'Тема директория',
        'new_directory_name_comment' => 'Представете ново име на директория за дубликата на темата.',
        'dir_name_invalid' => 'Името може да съдържа само цифри, латински букви и следните символи: _-',
        'dir_name_taken' => 'Желаната директория за тема вече съществува.',
        'find_more_themes' => 'Намери още теми',
        'saving' => 'Запазване на Тема...',
        'return' => 'Назад към списъка с теми',
    ],
    'maintenance' => [
        'settings_menu' => 'Режим на поддръжка',
        'settings_menu_description' => 'Конфигуриране на страницата в Режим на поддръжка и превключване на настройката.',
        'is_enabled' => 'Активиране на Режим на поддръжка',
        'is_enabled_comment' => 'Когато е активиран, посетителите на сайта ще виждат само страницата по-долу.',
    ],
    'page' => [
        'not_found_name' => "Страницата ':name' не намерена.",
        'not_found' => [
            'label' => 'Страницата не е намерена.',
            'help' => 'Заявената страница не може да бъде намерена.',
        ],
        'custom_error' => [
            'label' => 'Грешка на страницата.',
            'help' => 'Съжаляваме, но нещо се обърка и на страницата не може да бъде показана.',
        ],
        'menu_label' => 'Страници',
        'unsaved_label' => 'Незапазена страница(и)',
        'no_list_records' => 'Няма намерени страници.',
        'new' => 'Нова страница',
        'invalid_url' => 'Невалиден формат за URL. Той трябва да започне със символа за наклонена черта и може да съдържат цифри, латински букви и следните символи: ._-[]:?|/+*^$',
        'delete_confirm_multiple' => 'Наистина ли искате да изтриете избраните страници?',
        'delete_confirm_single' => 'Наистина ли искате да изтриете страницата?',
        'no_layout' => '-- няма оформление --',
    ],
    'layout' => [
        'not_found_name' => "Оформлението ':name' не намерено.",
        'menu_label' => 'Оформление',
        'unsaved_label' => 'Незапазено оформление(я)',
        'no_list_records' => 'Няма намерени оформления',
        'new' => 'Ново оформление',
        'delete_confirm_multiple' => 'Наистина ли искате да изтриете избраните оформления?',
        'delete_confirm_single' => 'Наистина ли искате да изтриете това оформление?',
    ],
    'partial' => [
        'not_found_name' => "Частична страница ':name' не е намерена.",
        'invalid_name' => 'Невалидно име за частична страница: :name.',
        'menu_label' => 'Частични страници',
        'unsaved_label' => 'Незапазени частична страница(и)',
        'no_list_records' => 'No partials found',
        'delete_confirm_multiple' => 'Наистина ли искате да изтриете избраните частични страници?',
        'delete_confirm_single' => 'Наистина ли искате да изтриете тази частична страница?',
        'new' => 'Нова частична страница',
    ],
    'content' => [
        'not_found_name' => "Файлът със съдържание ':name' не е намерен.",
        'menu_label' => 'Съдържание',
        'unsaved_label' => 'Незапазено съдържание',
        'no_list_records' => 'Няма намерени файлове със съдържание',
        'delete_confirm_multiple' => 'Наистина ли искате да изтриете избраните файлове със съдържание или директории?',
        'delete_confirm_single' => 'Наистина ли искате да изтриете този файл със съдържание?',
        'new' => 'Нов файл със съдържание',
    ],
    'ajax_handler' => [
        'invalid_name' => 'Невалидно име на AJAX манипулатор: :name.',
        'not_found' => "AJAX манипулатор ':name' не е намерен.",
    ],
    'cms' => [
        'menu_label' => 'CMS',
    ],
    'sidebar' => [
        'add' => 'Добави',
        'search' => 'Търсене...',
    ],
    'editor' => [
        'settings' => 'Настройки',
        'title' => 'Заглавие',
        'new_title' => 'Ново заглавие на страница',
        'url' => 'URL',
        'filename' => 'Име на файл',
        'layout' => 'Оформление',
        'description' => 'Описание',
        'preview' => 'Предварителен преглед',
        'meta' => 'Мета',
        'meta_title' => 'Мета Заглавие',
        'meta_description' => 'Мета Описание',
        'markup' => 'Markup',
        'code' => 'Код',
        'content' => 'Съдържание',
        'hidden' => 'Скрит',
        'hidden_comment' => 'Скрити страници са достъпни само от логнатите регистрирани потребители.',
        'enter_fullscreen' => 'Премини в режим на цял екран',
        'exit_fullscreen' => 'Изход от режим на цял екран',
    ],
    'asset' => [
        'menu_label' => 'Ресурси',
        'unsaved_label' => 'Незапазени ресурс(и)',
        'drop_down_add_title' => 'Добави...',
        'drop_down_operation_title' => 'Действие...',
        'upload_files' => 'Качване на файл(ове)',
        'create_file' => 'Създай файл',
        'create_directory' => 'Създай директория',
        'directory_popup_title' => 'Нова директория',
        'directory_name' => 'Име на директория',
        'rename' => 'Преименувай',
        'delete' => 'Изтрий',
        'move' => 'Премести',
        'select' => 'Избери',
        'new' => 'Нов файл',
        'invalid_path' => 'Пътят може да съдържа само цифри, латински букви, интервали и следните символи: ._-/',
        'error_deleting_file' => 'Грешка при изтриване на файл :name.',
        'error_deleting_dir_not_empty' => 'грешка при изтриване на директория :name. Директорията не е празна.',
        'error_deleting_dir' => 'Грешка при изтриване на файл :name.',
        'invalid_name' => 'Името може да съдържа само цифри, латински букви, интервали и следните символи: ._-',
        'original_not_found' => 'Оригиналния файл или директория не е намерен',
        'already_exists' => 'Файл или директория с това име вече съществува',
        'error_renaming' => 'Грешка при преименуване на файл или директория',
        'name_cant_be_empty' => 'Името не може да е празно',
        'too_large' => 'Каченият файл е твърде голям. Максимално допустимия размерът на файл е :max_size',
        'type_not_allowed' => 'Разрешени са само следните типове файлове: :allowed_types',
        'file_not_valid' => 'Файлът не е валиден',
        'error_uploading_file' => "Грешка при качването на файл ':name': :error",
        'move_destination' => 'Дестинационна директория',
        'move_popup_title' => 'Преместете Ресурси',
        'selected_files_not_found' => 'Избрани файлове не са намерени',
        'select_destination_dir' => 'Моля изберете дестинационна директория',
        'destination_not_found' => 'Дестинационната директория не е намерена',
        'error_moving_file' => 'Грешка при преместването на файл :file',
        'error_moving_directory' => 'Грешка при преместването на директория :dir',
        'error_deleting_directory' => 'Грешка при изтриване на оригинална директория :dir',
        'path' => 'Път',
    ],
    'component' => [
        'menu_label' => 'Компоненти',
        'unnamed' => 'Без име',
        'no_description' => 'Няма дадено описание',
        'alias' => 'Псевдоним',
        'alias_description' => 'Уникално име е дадено на този компонент, когато се използва в кода на страница или оформление.',
        'validation_message' => 'Компонент псевдоними са задължителни и могат да съдържат само латински символи, цифри и долна черта. Псевдонимите трябва да започнат с латински символ',
        'invalid_request' => 'Шаблонът не може да бъде спасен, защото от невалиден данни на компонент.',
        'no_records' => 'Няма намерени компоненти',
        'not_found' => "Компонентът ':name' не е намерен.",
        'method_not_found' => "Компонентът ':name' не съдържа метод ':method'.",
    ],
    'template' => [
        'invalid_type' => 'Неизвестен тип шаблон.',
        'not_found' => 'Заявения шаблон не е намерен.',
        'saved' => 'Шаблонът е запазен успешно.',
    ],
    'permissions' => [
        'name' => 'Cms',
        'manage_content' => 'Управление на съдържанието',
        'manage_assets' => 'Управление на ресурси',
        'manage_pages' => 'Управление на страници',
        'manage_layouts' => 'Управление на оформления',
        'manage_partials' => 'Управление на частични страници',
        'manage_themes' => 'Управление на теми',
    ],
];
