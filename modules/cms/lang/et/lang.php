<?php

return [
    'cms_object' => [
        'invalid_file' => 'Invalid file name: :name. File names can contain only alphanumeric symbols, underscores, dashes and dots. Some examples of correct file names: page.htm, page, subdirectory/page',
        'invalid_property' => "The property ':name' cannot be set",
        'file_already_exists' => "File ':name' already exists.",
        'error_saving' => "Error saving file ':name'. Please check write permissions.",
        'error_creating_directory' => 'Error creating directory :name. Please check write permissions.',
        'invalid_file_extension' => 'Invalid file extension: :invalid. Allowed extensions are: :allowed.',
        'error_deleting' => "Error deleting the template file ':name'. Please check write permissions.",
        'delete_success' => 'Templates deleted: :count.',
        'file_name_required' => 'The File Name field is required.',
        'safe_mode_enabled' => 'Safe mode is currently enabled.',
    ],
    'dashboard' => [
        'active_theme' => [
            'widget_title_default' => 'Koduleht',
            'online' => 'Online',
            'maintenance' => 'Hooldusrežiimis',
            'manage_themes' => 'Halda teemasid',
            'customize_theme' => 'Kohanda teemat',
        ],
    ],
    'theme' => [
        'not_found_name' => "Teemat ':name' ei leitud.",
        'by_author' => 'Autor: :name',
        'active' => [
            'not_set' => 'Aktiivset teemat pole määratud.',
            'not_found' => 'Aktiivset teemat ei leitud.',
        ],
        'edit' => [
            'not_set' => 'Muutmise teemat pole määratud.',
            'not_found' => 'Muutmise teemat ei leitud.',
            'not_match' => 'Objekt, mida üritad muuta ei kuulu hetkel muudetava teema alla. Palun laadi leht uuesti.',
        ],
        'settings_menu' => 'Kodulehe teema',
        'settings_menu_description' => 'Vaata paigaldatud teemasid ja vali endale sobiv.',
        'default_tab' => 'Seaded',
        'name_label' => 'Nimi',
        'name_create_placeholder' => 'Uus teema nimi',
        'author_label' => 'Autor',
        'author_placeholder' => 'Inimese või ettevõtte nimi',
        'description_label' => 'Kirjeldus',
        'description_placeholder' => 'Teema kirjeldus',
        'homepage_label' => 'Koduleht',
        'homepage_placeholder' => 'Kodulehe URL',
        'code_label' => 'Kood',
        'code_placeholder' => 'Unikaalne teema kood, mida kasutatakse teema levitamisel',
        'preview_image_label' => 'Eelvaate pilt',
        'preview_image_placeholder' => 'Teema eelvaate pildi asukohta.',
        'dir_name_label' => 'Kataloogi nimi',
        'dir_name_create_label' => 'Teema kataloog',
        'theme_label' => 'Teema',
        'theme_title' => 'Teemad',
        'activate_button' => 'Aktiveeri',
        'active_button' => 'Aktiveeri',
        'customize_theme' => 'Kohanda teemat',
        'customize_button' => 'Kohanda',
        'duplicate_button' => 'Kopeeri',
        'duplicate_title' => 'Kopeeri teema',
        'duplicate_theme_success' => 'Teema kopeeritud!',
        'manage_button' => 'Halda',
        'manage_title' => 'Halda teemat',
        'edit_properties_title' => 'Teema',
        'edit_properties_button' => 'Muuda seadeid',
        'save_properties' => 'Salvesta seaded',
        'import_button' => 'Impordi',
        'import_title' => 'Impordi teema',
        'import_theme_success' => 'Teema imporditud!',
        'import_uploaded_file' => 'Teema arhiivi fail',
        'import_overwrite_label' => 'Kirjuta olemasolevad failid üle',
        'import_overwrite_comment' => 'Jäta see kast märgistamata, et importida ainult uued failid',
        'import_folders_label' => 'Kataloogid',
        'import_folders_comment' => 'Palun vali teema kataloogid, mida soovid importida',
        'export_button' => 'Eksport',
        'export_title' => 'Ekspordi teema',
        'export_folders_label' => 'Kataloogid',
        'export_folders_comment' => 'Palun vali teema kataloogid, mida soovid eksportida',
        'delete_button' => 'Kustuta',
        'delete_confirm' => 'Kustuta teema? Seda tegevust ei saa tagasi võtta!',
        'delete_active_theme_failed' => 'Aktiivset teemat ei saa kustutada. Aktiveeri kõigepealt mõni teine teema.',
        'delete_theme_success' => 'Teema kustutatud!',
        'create_title' => 'Loo teema',
        'create_button' => 'Loo',
        'create_new_blank_theme' => 'Loo uus tühi teema',
        'create_theme_success' => 'Teema loodud!',
        'create_theme_required_name' => 'Palun määra teemale nimi.',
        'new_directory_name_label' => 'Teema kataloog',
        'new_directory_name_comment' => 'Sisesta kopeeritud teemale uus kataloogi nimi.',
        'dir_name_invalid' => 'Nimi võib sisaldada ainult  numbreid, tähti ja järgnevaid sümboleid: _-',
        'dir_name_taken' => 'Soovitud kataloog on juba olemas.',
        'find_more_themes' => 'Otsi uusi teemasid',
        'saving' => 'Salvestan teemat...',
        'return' => 'Tagasi teemade nimekirja',
    ],
    'maintenance' => [
        'settings_menu' => 'Maintenance mode',
        'settings_menu_description' => 'Configure the maintenance mode page and toggle the setting.',
        'is_enabled' => 'Enable maintenance mode',
        'is_enabled_comment' => 'Select the page to show when maintenance mode is activated.',
        'hint' => 'Maintenance mode will display the maintenance page to visitors who are not signed in to the back-end area.',
    ],
    'page' => [
        'not_found_name' => "The page ':name' is not found",
        'not_found' => [
            'label' => 'Page not found',
            'help' => 'The requested page cannot be found.',
        ],
        'custom_error' => [
            'label' => 'Page error',
            'help' => "We're sorry, but something went wrong and the page cannot be displayed.",
        ],
        'menu_label' => 'Pages',
        'unsaved_label' => 'Unsaved page(s)',
        'no_list_records' => 'No pages found',
        'new' => 'New page',
        'invalid_url' => 'Invalid URL format. The URL should start with the forward slash symbol and can contain digits, Latin letters and the following symbols: ._-[]:?|/+*^$',
        'delete_confirm_multiple' => 'Delete selected pages?',
        'delete_confirm_single' => 'Delete this page?',
        'no_layout' => '-- no layout --',
        'cms_page' => 'CMS page',
        'title' => 'Page title',
        'url' => 'Page URL',
        'file_name' => 'Page file name',
    ],
    'layout' => [
        'not_found_name' => "The layout ':name' is not found",
        'menu_label' => 'Layouts',
        'unsaved_label' => 'Unsaved layout(s)',
        'no_list_records' => 'No layouts found',
        'new' => 'New layout',
        'delete_confirm_multiple' => 'Delete selected layouts?',
        'delete_confirm_single' => 'Delete this layout?',
    ],
    'partial' => [
        'not_found_name' => "The partial ':name' is not found.",
        'invalid_name' => 'Invalid partial name: :name.',
        'menu_label' => 'Partials',
        'unsaved_label' => 'Unsaved partial(s)',
        'no_list_records' => 'No partials found',
        'delete_confirm_multiple' => 'Delete selected partials?',
        'delete_confirm_single' => 'Delete this partial?',
        'new' => 'New partial',
    ],
    'content' => [
        'not_found_name' => "The content file ':name' is not found.",
        'menu_label' => 'Content',
        'unsaved_label' => 'Unsaved content',
        'no_list_records' => 'No content files found',
        'delete_confirm_multiple' => 'Delete selected content files or directories?',
        'delete_confirm_single' => 'Delete this content file?',
        'new' => 'New content file',
    ],
    'ajax_handler' => [
        'invalid_name' => 'Invalid AJAX handler name: :name.',
        'not_found' => "AJAX handler ':name' was not found.",
    ],
    'cms' => [
        'menu_label' => 'CMS',
    ],
    'sidebar' => [
        'add' => 'Add',
        'search' => 'Search...',
    ],
    'editor' => [
        'settings' => 'Settings',
        'title' => 'Title',
        'new_title' => 'New page title',
        'url' => 'URL',
        'filename' => 'File Name',
        'layout' => 'Layout',
        'description' => 'Description',
        'preview' => 'Preview',
        'meta' => 'Meta',
        'meta_title' => 'Meta Title',
        'meta_description' => 'Meta Description',
        'markup' => 'Markup',
        'code' => 'Code',
        'content' => 'Content',
        'hidden' => 'Hidden',
        'hidden_comment' => 'Hidden pages are accessible only by logged-in back-end users.',
        'enter_fullscreen' => 'Enter fullscreen mode',
        'exit_fullscreen' => 'Exit fullscreen mode',
        'open_searchbox' => 'Open Search box',
        'close_searchbox' => 'Close Search box',
        'open_replacebox' => 'Open Replace box',
        'close_replacebox' => 'Close Replace box',
    ],
    'asset' => [
        'menu_label' => 'Assets',
        'unsaved_label' => 'Unsaved asset(s)',
        'drop_down_add_title' => 'Add...',
        'drop_down_operation_title' => 'Action...',
        'upload_files' => 'Upload file(s)',
        'create_file' => 'Create file',
        'create_directory' => 'Create directory',
        'directory_popup_title' => 'New directory',
        'directory_name' => 'Directory name',
        'rename' => 'Rename',
        'delete' => 'Delete',
        'move' => 'Move',
        'select' => 'Select',
        'new' => 'New file',
        'invalid_path' => 'Path can contain only digits, Latin letters, spaces and the following symbols: ._-/',
        'error_deleting_file' => 'Error deleting file :name.',
        'error_deleting_dir_not_empty' => 'Error deleting directory :name. The directory is not empty.',
        'error_deleting_dir' => 'Error deleting directory :name.',
        'invalid_name' => 'Name can contain only digits, Latin letters, spaces and the following symbols: ._-',
        'original_not_found' => 'Original file or directory not found',
        'already_exists' => 'File or directory with this name already exists',
        'error_renaming' => 'Error renaming the file or directory',
        'name_cant_be_empty' => 'The name cannot be empty',
        'too_large' => 'The uploaded file is too large. The maximum allowed file size is :max_size',
        'type_not_allowed' => 'Only the following file types are allowed: :allowed_types',
        'file_not_valid' => 'File is not valid',
        'error_uploading_file' => "Error uploading file ':name': :error",
        'move_destination' => 'Destination directory',
        'move_popup_title' => 'Move assets',
        'selected_files_not_found' => 'Selected files not found',
        'select_destination_dir' => 'Please select a destination directory',
        'destination_not_found' => 'Destination directory is not found',
        'error_moving_file' => 'Error moving file :file',
        'error_moving_directory' => 'Error moving directory :dir',
        'error_deleting_directory' => 'Error deleting the original directory :dir',
        'no_list_records' => 'No files found',
        'delete_confirm' => 'Delete selected files or directories?',
        'path' => 'Path',
    ],
    'component' => [
        'menu_label' => 'Components',
        'unnamed' => 'Unnamed',
        'no_description' => 'No description provided',
        'alias' => 'Alias',
        'alias_description' => 'A unique name given to this component when using it in the page or layout code.',
        'validation_message' => 'Component aliases are required and can contain only Latin symbols, digits, and underscores. The aliases should start with a Latin symbol.',
        'invalid_request' => 'The template cannot be saved because of invalid component data.',
        'no_records' => 'No components found',
        'not_found' => "The component ':name' is not found.",
        'method_not_found' => "The component ':name' does not contain a method ':method'.",
    ],
    'template' => [
        'invalid_type' => 'Unknown template type.',
        'not_found' => 'Template not found.',
        'saved' => 'Template saved.',
        'no_list_records' => 'No records found',
        'delete_confirm' => 'Delete selected templates?',
        'order_by' => 'Order by',
    ],
    'permissions' => [
        'name' => 'CMS',
        'manage_content' => 'Halda kodulehe sisufaile',
        'manage_assets' => 'Manage website assets - images, JavaScript files, CSS files',
        'manage_pages' => 'Loo, muuda ja kustuta kodulehe lehti',
        'manage_layouts' => 'Create, modify and delete CMS layouts',
        'manage_partials' => 'Create, modify and delete CMS partials',
        'manage_themes' => 'Activate, deactivate and configure CMS themes',
    ],
    'theme_log' => [
        'hint' => 'This log displays any changes made to the theme by administrators in the back-end area.',
        'menu_label' => 'Theme log',
        'menu_description' => 'View changes made to the active theme.',
        'empty_link' => 'Empty theme log',
        'empty_loading' => 'Emptying theme log...',
        'empty_success' => 'Theme log emptied',
        'return_link' => 'Return to theme log',
        'id' => 'ID',
        'id_label' => 'Log ID',
        'created_at' => 'Date & Time',
        'user' => 'User',
        'type' => 'Type',
        'type_create' => 'Create',
        'type_update' => 'Update',
        'type_delete' => 'Delete',
        'theme_name' => 'Theme',
        'theme_code' => 'Theme code',
        'old_template' => 'Template (Old)',
        'new_template' => 'Template (New)',
        'template' => 'Template',
        'diff' => 'Changes',
        'old_value' => 'Old value',
        'new_value' => 'New value',
        'preview_title' => 'Template changes',
        'template_updated' => 'Template was updated',
        'template_created' => 'Template was created',
        'template_deleted' => 'Template was deleted',
    ],
];
