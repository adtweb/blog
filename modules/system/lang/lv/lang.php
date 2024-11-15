<?php

return [
    'app' => [
        'name' => 'Winter CMS',
        'tagline' => 'Atgriežamies pie pamatiem',
    ],
    'locale' => [
        'ar' => 'العربية',
        'be' => 'Беларуская',
        'bg' => 'Български',
        'ca' => 'Català',
        'cs' => 'Čeština',
        'da' => 'Dansk',
        'en' => 'English (United States)',
        'en-au' => 'English (Australia)',
        'en-ca' => 'English (Canada)',
        'en-gb' => 'English (United Kingdom)',
        'et' => 'Eesti',
        'de' => 'Deutsch',
        'el' => 'Ελληνικά',
        'es' => 'Español',
        'es-ar' => 'Español (Argentina)',
        'fa' => 'فارسی',
        'fr' => 'Français',
        'fr-ca' => 'Français (Canada)',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italiano',
        'ja' => '日本語',
        'kr' => '한국어',
        'lt' => 'Lietuvių',
        'lv' => 'Latviešu',
        'nb-no' => 'Norsk (Bokmål)',
        'nl' => 'Nederlands',
        'pl' => 'Polski',
        'pt-br' => 'Português (Brasil)',
        'pt-pt' => 'Português (Portugal)',
        'ro' => 'Română',
        'rs' => 'Srpski',
        'ru' => 'Русский',
        'fi' => 'Suomi',
        'sv' => 'Svenska',
        'sk' => 'Slovenský',
        'sl' => 'Slovenščina',
        'th' => 'ไทย',
        'tr' => 'Türkçe',
        'uk' => 'Українська мова',
        'zh-cn' => '简体中文',
        'zh-tw' => '繁體中文',
        'vn' => 'Tiếng việt',
    ],
    'directory' => [
        'create_fail' => 'Nevar izveidot mapi: :name',
    ],
    'file' => [
        'create_fail' => 'Nevar izveidot failu: :name',
    ],
    'combiner' => [
        'not_found' => "Apvienotāja fails ':name' netika atrasts.",
    ],
    'system' => [
        'name' => 'Sistēma',
        'menu_label' => 'Sistēma',
        'categories' => [
            'cms' => 'CMS',
            'misc' => 'Dažādi',
            'logs' => 'Žurnāli',
            'mail' => 'E-pasts',
            'shop' => 'Veikals',
            'team' => 'Komanda',
            'users' => 'Lietotāji',
            'system' => 'Sistēma',
            'social' => 'Sociālie tīkli',
            'backend' => 'Backend',
            'events' => 'Notikumi',
            'customers' => 'Klienti',
            'my_settings' => 'Mani iestatījumi',
            'notifications' => 'Paziņojumi',
        ],
    ],
    'theme' => [
        'label' => 'Tēma',
        'unnamed' => 'Nenosaukta tēma',
        'name' => [
            'label' => 'Tēmas nosaukums',
            'help' => 'Norādiet tēmas unikālo kodu. Piemēram, Winter.Vanilla',
        ],
    ],
    'themes' => [
        'install' => 'Instalēt tēmas',
        'search' => 'meklēt tēmas, kuras instalēt...',
        'installed' => 'Instalētās tēmas',
        'no_themes' => 'Nav tēmas, kuras būtu instalētas no tēmu veikala.',
        'recommended' => 'Ieteiktās',
        'remove_confirm' => 'Vai esat pārliecināts, ka vēlaties noņemt šo tēmu?',
    ],
    'plugin' => [
        'label' => 'Spraudnis',
        'unnamed' => 'Nenosaukts spraudnis',
        'name' => [
            'label' => 'Spraudņa nosaukums',
            'help' => 'Norādiet spraudņa unikālo kodu. Piemēram, Winter.Blog',
        ],
        'by_author' => 'Autors :name',
    ],
    'plugins' => [
        'manage' => 'Pārvaldīt spraudņus',
        'install' => 'Instalēt spraudņus',
        'install_products' => 'Instalēt produktus',
        'search' => 'meklēt spraudņus, kurus instalēt...',
        'installed' => 'Instalētie spraudņi',
        'no_plugins' => 'Nav spraudņu, kuri būtu instalēti no spraudņu veikala.',
        'recommended' => 'Rekomendētie',
        'plugin_label' => 'Spraudnis',
        'unknown_plugin' => 'Spraudnis ir dzēsts no failu sistēmas.',
        'select_label' => 'Izvēlēties darbību...',
        'bulk_actions_label' => 'Masveida darbības',
        'check_yes' => 'Jā',
        'check_no' => 'Nē',
        'unfrozen' => 'Atjauninājumi ieslēgti',
        'enabled' => 'Spraudnis ieslēgts',
        'freeze' => 'izslēgt atjauninājumus priekš',
        'unfreeze' => 'ieslēgt atjauninājumus priekš',
        'enable' => 'ieslēgt',
        'disable' => 'izslēgt',
        'refresh' => 'atiestatīt',
        'remove' => 'Noņemt',
        'freeze_label' => 'Izslēgt atjauninājumus',
        'unfreeze_label' => 'Ieslēgt atjauninājumus',
        'enable_label' => 'Ieslēgt spraudņus',
        'disable_label' => 'Izslēgt spraudņus',
        'refresh_label' => 'Atiestatīt spraudņa datus',
        'action_confirm' => 'Vai esat pārliecināts, ka vēlaties :action šos spraudņus?',
        'freeze_success' => 'Izvēlētajiem spraudņiem veiksmīgi izslēgti atjauninājumi.',
        'unfreeze_success' => 'Izvēlētajiem spraudņiem veiksmīgi ieslēgti atjauninājumi.',
        'enable_success' => 'Izvēlētie spraudņi veiksmīgi ieslēgti.',
        'disable_success' => 'Izvēlētie spraudņi veiksmīgi izslēgti',
        'refresh_confirm' => 'Vai esat pārliecināts, ka vēlaties atiestatīt izvēlētos spraudņus? Darbības rezultātā tiks dzēsti katra spraudņa dati, atgriežot to sākotnējā stāvoklī.',
        'refresh_success' => 'Izvēlētie spraudņi veiksmīgi atiestatīti.',
        'remove_confirm' => 'Vai esat pārliecināts, ka vēlaties noņemt šos spraudņus? Darbības rezultātā tiks dzēsti arī visi saistītie dati.',
        'remove_success' => 'Izvēlētie spraudņi veiksmīgi noņemti',
        'replace' => [
            'multi_install_error' => 'Vairāku spraudņu aizvietošana šobrīd netiek atbalstīta',
        ],
    ],
    'project' => [
        'name' => 'Projekts',
        'owner_label' => 'Īpašnieks',
        'attach' => 'Pievienot projektu',
        'detach' => 'Atvienot projektu',
        'none' => 'Nav',
        'id' => [
            'label' => 'Projekta ID',
            'help' => 'Kā atrast projekta ID',
            'missing' => 'Lūdzu, norādiet projekta ID, kuru izmantot.',
        ],
        'detach_confirm' => 'Vai esat pārliecināts, ka vēlaties atvienot šo projektu?',
        'unbind_success' => 'Projekts veiksmīgi atvienots.',
    ],
    'settings' => [
        'menu_label' => 'Iestatījumi',
        'not_found' => 'Neizdevās atrast norādītos iestatījumus.',
        'missing_model' => 'Iestatījumu lapai trūkst modeļa definīcija.',
        'update_success' => ':name iestatījumi atjaunināti',
        'test_subject' => 'Pasta iestatījumu tests',
        'test_content' => 'Šis ir testa e-pasts, lai apstiprinātu, ka norādītie pasta iestatījumi darbojas pareizi.',
        'test_confirm' => 'Šī darbība saglabās pašreizējo konfigurāciju un nosūtīts testa e-pastu uz :email.',
        'return' => 'Atgriezties sistēmas iestatījumos',
        'search' => 'Meklēt',
    ],
    'mail' => [
        'log_file' => 'Žurnāla fails',
        'menu_label' => 'E-pasta konfigurācija',
        'menu_description' => 'Pārvaldiet e-pasta konfigurāciju.',
        'general' => 'Vispārīgi',
        'method' => 'Pasta metode',
        'sender_name' => 'Sūtītāja vārds',
        'sender_email' => 'Sūtītāja e-pasts',
        'php_mail' => 'PHP pasts',
        'smtp' => 'SMTP',
        'smtp_address' => 'SMTP adrese',
        'smtp_authorization' => 'Nepieciešama SMTP autorizācija',
        'smtp_authorization_comment' => 'Ielieciet ķeksi, ja SMTP serverim nepieciešama autorizācija.',
        'smtp_username' => 'Lietotājvārds',
        'smtp_password' => 'Parole',
        'smtp_port' => 'SMTP ports',
        'sendmail' => 'Sendmail',
        'sendmail_path' => 'Sendmail ceļš',
        'sendmail_path_comment' => 'Lūdzu, norādiet ceļu uz sendmail programmu.',
        'drivers_hint_content' => 'Apskatiet <a href=":url" target="_blank">dokumentāciju</a>, lai uzzinātu vairāk par atbalstītajām pasta metodēm un kā tās ieslēgt.',
    ],
    'mail_templates' => [
        'menu_label' => 'E-pasta veidnes',
        'menu_description' => 'Pielāgojiet e-pasta veidnes, kuras tiek sūtītas lietotājiem un administratoriem, pārvaldiet e-pasta izkārtojumus.',
        'new_template' => 'Jauna veidne',
        'new_layout' => 'Jauns izkārtojumus',
        'new_partial' => 'Jauna daļa',
        'template' => 'Veidne',
        'templates' => 'Veidnes',
        'partial' => 'Daļa',
        'partials' => 'Daļas',
        'menu_layouts_label' => 'Pasta izkārtojumi',
        'menu_partials_label' => 'Pasta daļas',
        'layout' => 'Izkārtojums',
        'layouts' => 'Izkārtojumi',
        'no_layout' => '-- Bez izkārtojuma --',
        'name' => 'Nosaukums',
        'name_comment' => 'Unikāls nosaukums, lai atsauktos uz šo veidni',
        'code' => 'Kods',
        'code_comment' => 'Unikāls kods, lai atsauktos uz šo veidni',
        'subject' => 'Temats',
        'subject_comment' => 'E-pasta vēstules temats',
        'description' => 'Apraksts',
        'content_html' => 'HTML',
        'content_css' => 'CSS',
        'content_text' => 'Vienkāršs teksts',
        'test_send' => 'Sūtīt testa vēstuli',
        'test_success' => 'Testa vēstule veiksmīgi nosūtīta.',
        'test_confirm' => 'Nosūtīt testa vēstuli :email. Turpināt?',
        'creating' => 'Izveido veidni...',
        'creating_layout' => 'Izveido izkārtojumu...',
        'saving' => 'Saglabā veidni...',
        'saving_layout' => 'Saglabā izkārtojumu...',
        'delete_confirm' => 'Dzēst šo veidni?',
        'delete_layout_confirm' => 'Dzēst šo izkārtojumu?',
        'deleting' => 'Dzēš veidni...',
        'deleting_layout' => 'Dzēš izkārtojumu...',
        'sending' => 'Sūta testa vēstuli...',
        'return' => 'Atgriezties veidņu sarakstā',
        'options' => 'Iestatījumi',
        'disable_auto_inline_css' => 'Izslēgt automātisko CSS iekļaušanu',
    ],
    'mail_brand' => [
        'menu_label' => 'E-pasta zīmola izveide',
        'menu_description' => 'Modificējiet krāsas un izskatu e-pasta veidnēm.',
        'page_title' => 'Pielāgot pasta izskatu',
        'sample_template' => [
            'heading' => 'Virsraksts',
            'paragraph' => 'Šī ir rindkopa, kas aizpildīta ar Lorem Ipsum tekstu un saiti. Cumque dicta <a>doloremque eaque</a>, enim error laboriosam pariatur possimus tenetur veritatis voluptas.',
            'table' => [
                'item' => 'Vienums',
                'description' => 'Apraksts',
                'price' => 'Cena',
                'centered' => 'Centrēts',
                'right_aligned' => 'Izlīdzināts pa labi',
            ],
            'buttons' => [
                'primary' => 'Primārā poga',
                'positive' => 'Pozitīva poga',
                'negative' => 'Negatīva poga',
            ],
            'panel' => 'Cik lielisks ir šis panelis?',
            'more' => 'Vēl papildu teksts',
            'promotion' => 'Kupona kods: WINTER',
            'subcopy' => 'Šis ir e-pasta piezīmes teksts',
            'thanks' => 'Paldies',
        ],
        'fields' => [
            '_section_background' => 'Fons',
            'body_bg' => 'Pamatsatura fons',
            'content_bg' => 'Satura fons',
            'content_inner_bg' => 'Iekšējā satura fons',
            '_section_buttons' => 'Pogas',
            'button_text_color' => 'Pogas teksta krāsa',
            'button_primary_bg' => 'Primārais pogas fons',
            'button_positive_bg' => 'Pozitīvas pogas fons',
            'button_negative_bg' => 'Negatīvas pogas fons',
            '_section_type' => 'Tipogrāfija',
            'header_color' => 'Galvenes krāsa',
            'heading_color' => 'Virsrakstu krāsa',
            'text_color' => 'Teksta krāsa',
            'link_color' => 'Saišu krāsa',
            'footer_color' => 'Kājenes krāsa',
            '_section_borders' => 'Apmales',
            'body_border_color' => 'Pamatsatura apmales krāsa',
            'subcopy_border_color' => 'Piezīmes teksta apmales krāsa',
            'table_border_color' => 'Tabulas apmales krāsa',
            '_section_components' => 'Komponentes',
            'panel_bg' => 'Paneļa bloka fons',
            'promotion_bg' => 'Akcijas bloka fons',
            'promotion_border_color' => 'Akcijas bloka apmales krāsa',
        ],
    ],
    'install' => [
        'project_label' => 'Pievienot projektam',
        'plugin_label' => 'Instalēt spraudni',
        'theme_label' => 'Instalēt tēmu',
        'missing_plugin_name' => 'Lūdzu, norādiet spraudņa nosaukumu, kuru instalēt.',
        'missing_theme_name' => 'Lūdzu, norādiet tēmas nosaukumu, kuru instalēt.',
        'install_completing' => 'Pabeidz instalācijas procesu',
        'install_success' => 'Spraudnis veiksmīgi instalēts',
    ],
    'updates' => [
        'title' => 'Pārvaldīt atjauninājumus',
        'name' => 'Programmatūras atjauninājumi',
        'menu_label' => 'Atjauninājumi un spraudņi',
        'menu_description' => 'Atjauniniet sistēmu, pārvaldiet un instalējiet spraudņus un tēmas.',
        'return_link' => 'Atgriezties sistēmas atjauninājumos',
        'check_label' => 'Pārbaudīt atjauninājumus',
        'retry_label' => 'Mēģināt vēlreiz',
        'plugin_name' => 'Nosaukums',
        'plugin_code' => 'Kods',
        'plugin_description' => 'Apraksts',
        'plugin_version' => 'Versija',
        'plugin_author' => 'Autors',
        'plugin_not_found' => 'Spraudnis nav atrasts',
        'plugin_version_not_found' => 'Spraudņa versija nav atrasta',
        'core_current_build' => 'Pašreizējais laidiens',
        'core_view_changelog' => 'Skatīt izmaiņu žurnālu',
        'core_build' => 'Laidiens :build',
        'core_build_help' => 'Pieejams jaunāks laidiens.',
        'core_downloading' => 'Lejupielādē lietotnes failus',
        'core_extracting' => 'Atpako lietotnes failus',
        'core_set_build' => 'Iestata laidiena numuru',
        'update_warnings_title' => 'Tika atklātas dažas problēmas, kurām nepieciešams pievērst uzmanību:',
        'update_warnings_plugin_missing' => ':parent_code spraudņa darbībai nepieciešams papildus instalēt :code',
        'update_warnings_plugin_replace' => ':plugin aizvieto :alias, lūdzu, noņemiet :alias, lai izvairītos no konfliktiem',
        'update_warnings_plugin_replace_cli' => 'Šis spraudnis aizvieto :alias, lūdzu, noņemiet :alias, lai izvairītos no konfliktiem',
        'changelog' => 'Izmaiņu žurnāls',
        'changelog_view_details' => 'Skatīt detaļas',
        'plugins' => 'Spraudņi',
        'themes' => 'Tēmas',
        'disabled' => 'Izslēgts',
        'plugin_downloading' => 'Lejupielādē spraudni: :name',
        'plugin_extracting' => 'Atpako spraudni: :name',
        'plugin_version_none' => 'Jauns spraudnis',
        'plugin_current_version' => 'Pašreizējā versija',
        'theme_new_install' => 'Jauna tēmas instalācija.',
        'theme_downloading' => 'Lejupielādē tēmu: :name',
        'theme_extracting' => 'Atpako tēmu: :name',
        'update_label' => 'Atjaunināt programmatūru',
        'update_completing' => 'Pabeidz atjaunināšanas procesu',
        'update_loading' => 'Ielādē pieejamos atjauninājumus...',
        'update_success' => 'Atjaunināšanas process pabeigts',
        'update_failed_label' => 'Atjaunināšanas process neizdevās',
        'force_label' => 'Piespiedu atjaunināšana',
        'found' => [
            'label' => 'Atrasti jauni atjauninājumi!',
            'help' => 'Spiediet Atjaunināt programmatūru, lai sāktu atjaunināšanas procesu.',
        ],
        'none' => [
            'label' => 'Nav atjauninājumu',
            'help' => 'Nav atrasti jauni atjauninājumi.',
        ],
        'important_action' => [
            'empty' => 'Izvēlēties darbību',
            'confirm' => 'Apstiprināt atjauninājumu',
            'skip' => 'Izlaist šo atjauninājumu (vienreiz)',
            'ignore' => 'Izlaist šo atjauninājumu (vienmēr)',
        ],
        'important_action_required' => 'Jāpievērš uzmanība',
        'important_view_guide' => 'Skatīt atjaunināšanas padomus',
        'important_view_release_notes' => 'Skatīt laidiena piezīmes',
        'important_alert_text' => 'Dažiem atjauninājumiem ir jāpievērš uzmanība.',
        'details_title' => 'Spraudņa detaļas',
        'details_view_homepage' => 'Skatīt tīmekļvietni',
        'details_readme' => 'Dokumentācija',
        'details_readme_missing' => 'Dokumentācija nav norādīta.',
        'details_changelog' => 'Izmaiņu žurnāls',
        'details_changelog_missing' => 'Izmaiņu žurnāls nav norādīts.',
        'details_upgrades' => 'Atjaunināšanas padomi',
        'details_upgrades_missing' => 'Atjaunināšanas padomi nav norādīti.',
        'details_licence' => 'Licence',
        'details_licence_missing' => 'Licence nav norādīta.',
        'details_current_version' => 'Pašreizējā versija',
        'details_author' => 'Autors',
    ],
    'server' => [
        'connect_error' => 'Kļūda savienojoties ar serveri.',
        'response_not_found' => 'Atjauninājumu serveris nav atrasts.',
        'response_invalid' => 'Nederīga atbilde no servera.',
        'response_empty' => 'Tukša atbilde no servera.',
        'file_error' => 'Neizdevās saņemt atjauninājuma failus no servera.',
        'file_corrupt' => 'Fails no servera ir bojāts.',
    ],
    'behavior' => [
        'missing_property' => 'Klasei :class jābūt definētai īpašībai $:property, kas tiek lietota :behavior uzvedībai.',
    ],
    'config' => [
        'not_found' => 'Neizdevās atrast konfigurācijas failu :file, kas definēts priekš :location.',
        'required' => ":location lietotajai konfigurācijai jānorāda vērtība ':property'.",
    ],
    'zip' => [
        'extract_failed' => "Neizdevās atpakot failu ':file'.",
    ],
    'event_log' => [
        'hint' => 'Šis žurnāls attēlo sarakstu ar potenciālajām kļūdām, kuras notikušas, tai skaitā izņēmumus un atkļūdošanas informāciju.',
        'menu_label' => 'Notikumu žurnāls',
        'menu_description' => 'Skatiet sistēmas žurnāla ierakstus ar fiksēto notikumu laikiem un detaļām.',
        'empty_link' => 'Iztīrīt notikumu žurnālu',
        'empty_loading' => 'Iztīra notikumu žurnālu...',
        'empty_success' => 'Notikumu žurnāls iztīrīts',
        'return_link' => 'Atgriezties notikumu žurnālā',
        'id' => 'ID',
        'id_label' => 'Notikuma ID',
        'created_at' => 'Datums un laiks',
        'message' => 'Ziņojums',
        'level' => 'Līmenis',
        'preview_title' => 'Notikums',
    ],
    'request_log' => [
        'hint' => 'Šis žurnāls attēlo sarakstu ar pārlūkprogrammas pieprasījumiem, kuriem iespējams jāpievērš uzmanība. Piemēram, ja apmeklētājs pieprasa CMS lapu, kas nav atrodama, tiek izveidots ieraksts ar kodu 404.',
        'menu_label' => 'Pieprasījumu žurnāls',
        'menu_description' => 'Skatiet sliktus vai pāradresācijas pieprasījumus kā, piemēram, Lapa netika atrasta (404).',
        'empty_link' => 'Iztīrīt pieprasījumu žurnālu',
        'empty_loading' => 'Iztīra pieprasījumu žurnālu...',
        'empty_success' => 'Pieprasījumu žurnāls iztīrīts.',
        'return_link' => 'Atgriezties notikumu žurnālā',
        'id' => 'ID',
        'id_label' => 'Žurnāla ID',
        'count' => 'Skaitītājs',
        'referer' => 'Novirzītājs',
        'url' => 'URL',
        'status_code' => 'Statuss',
        'preview_title' => 'Pieprasījums',
    ],
    'permissions' => [
        'name' => 'Sistēma',
        'manage_system_settings' => 'Pārvaldīt sistēmas iestatījumus',
        'manage_software_updates' => 'Pārvaldīt programmatūras atjauninājumus',
        'access_logs' => 'Skatīt sistēmas žurnālus',
        'manage_mail_templates' => 'Pārvaldīt e-pasta veidnes',
        'manage_mail_settings' => 'Pārvaldīt e-pasta iestatījumus',
        'manage_other_administrators' => 'Pārvaldīt citus administratorus',
        'impersonate_users' => 'Uzdoties kā citam lietotājam',
        'manage_preferences' => 'Pārvaldīt backend iestatījumus',
        'manage_editor' => 'Pārvaldīt globālos koda redaktora iestatījumus',
        'manage_own_editor' => 'Pārvaldīt personīgos koda redaktora iestatījumus',
        'view_the_dashboard' => 'Skatīt mērinstrumentu paneli',
        'manage_default_dashboard' => 'Pārvaldīt noklusēto mērinstrumentu paneli',
        'manage_branding' => 'Pielāgot back-end',
    ],
    'log' => [
        'menu_label' => 'Žurnāla iestatījumi',
        'menu_description' => 'Norādiet, kuras sistēmas daļas nepieciešams žurnalēt.',
        'default_tab' => 'Žurnalēšana',
        'log_events' => 'Žurnalēt sistēmas notikumus',
        'log_events_comment' => 'Saglabā sistēmas notikumus datubāzē papildus failu sistēmas žurnālam.',
        'log_requests' => 'Žurnalēt sliktus pieprasījumus',
        'log_requests_comment' => 'Pārlūkprogrammu pieprasījumi, kuriem iespējams jāpievērš uzmanība, kā, piemēram, 404 kļūdas.',
        'log_theme' => 'Žurnalēt tēmas izmaiņas',
        'log_theme_comment' => 'Fiksē visus notikumus, kad back-end sistēmā tiek veiktas tēmas izmaiņas.',
    ],
    'media' => [
        'invalid_path' => "Norādīts nederīgs faila ceļš: ':path'.",
        'folder_size_items' => 'vienumu|vienums|vienumi',
    ],
    'page' => [
        'custom_error' => [
            'label' => 'Lapas kļūda',
            'help' => 'Atvainojamies, taču kaut kas nogāja greizi un lapa nevar tikt attēlota.',
        ],
        'invalid_token' => [
            'label' => 'Nederīga drošības atslēga',
        ],
        'maintenance' => [
            'label' => 'Mēs drīz būsim atpakaļ!',
            'help' => 'Šobrīd tiek veikti sistēmas uzturēšanas darbi, drīz mēģiniet vēlreiz!',
            'message' => 'Ziņa:',
            'available_at' => 'Mēģiniet vēlreiz pēc:',
        ],
    ],
    'pagination' => [
        'previous' => 'Iepriekšējie',
        'next' => 'Nākamie',
    ],
];
