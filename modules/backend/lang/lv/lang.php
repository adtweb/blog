<?php

return [
    'auth' => [
        'title' => 'Administrācijas vide',
        'invalid_login' => 'Ievadītā informācija neatbilst nevienam sistēmas ierakstam. Lūdzu, pārbaudiet datus un mēģiniet vēlreiz.',
    ],
    'field' => [
        'invalid_type' => 'Izmantots nederīgs lauka veids :type.',
        'options_method_invalid_model' => "Atribūts ':field' nav piesaistīts derīgam datu modelim. Mēģiniet norādīt vērtību metodi konkrētai :model modeļa klasei.",
        'options_method_not_exists' => "Modeļa klasei :model jābūt definētai metodei :method(), kas atgriež vērtības ':field' formas laukam.",
        'options_static_method_invalid_value' => "Statiskā metode ':method()' klasē :class neatgrieza derīgu vērtību masīvu.",
        'colors_method_not_exists' => "Modeļa klasei :model jābūt definētai metodei :method(), kas atgriež html krāsas HEX formāta kodus ':field' formas laukam.",
    ],
    'widget' => [
        'not_registered' => "Logrīka klases nosaukums ':name' nav reģistrēts",
        'not_bound' => "Logrīks ar klases nosaukumu ':name' nav piesaistīts kontrolierim",
    ],
    'page' => [
        'untitled' => 'Bez nosaukuma',
        '404' => [
            'label' => 'Lapa nav atrasta',
            'help' => 'Mēs meklējām un meklējām, taču pieprasīto URL neizdevās atrast. Iespējams meklējāt kaut ko citu?',
            'back_link' => 'Atpakaļ uz iepriekšējo lapu',
        ],
        'access_denied' => [
            'label' => 'Piekļuve liegta',
            'help' => 'Jums nav nepieciešamo piekļuves tiesību, lai skatītu šo lapu.',
            'cms_link' => 'Atgriezties back-end',
        ],
        'no_database' => [
            'label' => 'Trūkst datubāzes',
            'help' => 'Nepieciešama datubāze, lai piekļūtu sistēmas back-end. Pirms mēģiniet vēlreiz, pārbaudiet vai datubāze ir konfigurēta un veiktas nepieciešamās datu migrācijas.',
            'cms_link' => 'Atgriezties sākumlapā',
        ],
    ],
    'partial' => [
        'not_found_name' => "Daļa ':name' nav atrasta.",
        'invalid_name' => 'Nederīgs daļas nosaukums: :name.',
    ],
    'ajax_handler' => [
        'invalid_name' => 'Nederīgs AJAX pieprasījumu apstrādātāja nosaukums: :name.',
        'not_found' => "AJAX pieprasījumu apstrādātājs ':name' netika atrasts.",
    ],
    'account' => [
        'impersonate' => 'Uzdoties kā lietotājam',
        'impersonate_confirm' => 'Vai esat pārliecināts, ka vēlaties uzdoties kā šis lietotājs? Lai atgrieztos sākotnējā stāvoklī, izrakstieties no sistēmas.',
        'impersonate_success' => 'Tagad jūs uzdodaties kā šis lietotājs',
        'impersonate_working' => 'Uzdodas...',
        'impersonating' => 'Uz laiku esat pieslēdzies kā :impersonatee. Notikumu žurnāli joprojām spēj jūs identificēt kā :impersonator',
        'stop_impersonating' => 'Pārtraukt uzdošanos',
        'unsuspend' => 'Atjaunot piekļuvi',
        'unsuspend_confirm' => 'Vai esat pārliecināts, ka vēlaties atjaunot piekļuvi šim lietotājam?',
        'unsuspend_success' => 'Lietotāja piekļuve atjaunota.',
        'unsuspend_working' => 'Atjauno piekļuvi...',
        'signed_in_as' => 'Pieslēdzies kā :full_name',
        'sign_out' => 'Izrakstīties',
        'login' => 'Pieslēgties',
        'reset' => 'Atiestatīt',
        'restore' => 'Atjaunot',
        'login_placeholder' => 'lietotājvārds',
        'password_placeholder' => 'parole',
        'remember_me' => 'Atcerēties mani',
        'forgot_password' => 'Aizmirsāt paroli?',
        'enter_email' => 'Ievadiet e-pastu',
        'enter_login' => 'Ievadiet lietotājvārdu',
        'email_placeholder' => 'e-pasts',
        'enter_new_password' => 'Ievadiet jauno paroli',
        'password_reset' => 'Paroles atiestatīšana',
        'restore_success' => 'Ja jūsu konts eksistē, tika nosūtīts e-pasts ar atiestatīšanas norādēm.',
        'reset_success' => 'Parole atiestatīta. Varat mēģināt pieslēgties.',
        'reset_error' => 'Norādīti nederīgi paroles atiestatīšanas dati. Lūdzu, mēģiniet vēlreiz!',
        'reset_fail' => 'Neizdevās atiestatīt paroli!',
        'apply' => 'Apstiprināt',
        'cancel' => 'Atcelt',
        'delete' => 'Dzēst',
        'ok' => 'Labi',
        'sending' => 'Sūta...',
        'password_reset_email' => 'Nosūtīt paroles atiest. e-pastu',
        'manual_password_reset_confirm' => 'Vai esat pārliecināts, ka vēlaties nostūtīt paroles atiestatīšanas e-pastu šim lietotājam?',
        'manual_password_reset_success' => 'Lietotājam tika nosūtīts e-pasts ar instrukcijām kā veikt paroles atiestatīšanu.',
    ],
    'dashboard' => [
        'menu_label' => 'Mērinstrumentu panelis',
        'widget_label' => 'Logrīks',
        'widget_width' => 'Platums',
        'full_width' => 'pilns platums',
        'manage_widgets' => 'Pārvaldīt logrīkus',
        'add_widget' => 'Pievienot logrīku',
        'widget_inspector_title' => 'Logrīka konfigurācija',
        'widget_inspector_description' => 'Konfigurējiet atskaišu logrīku',
        'widget_columns_label' => 'Platums :columns',
        'widget_columns_description' => 'Logrīka platums, skaitlis robežās no 1 līdz 12.',
        'widget_columns_error' => 'Lūdzu, ievadiet logrīka platumu kā skaitli robežās no 1 līdz 12.',
        'columns' => '{1} kolonna|[2,Inf] kolonnas',
        'widget_new_row_label' => 'Piespiedu jauna rinda',
        'widget_new_row_description' => 'Novietot logrīku jaunā rindā.',
        'widget_title_label' => 'Logrīka virsraksts',
        'widget_title_error' => 'Logrīka virsraksts ir obligāts.',
        'reset_layout' => 'Atiestatīt izkārtojumu',
        'reset_layout_confirm' => 'Atiestatīt izkārtojumu uz noklusējumu?',
        'reset_layout_success' => 'Izkārtojums atiestatīts',
        'make_default' => 'Iestatīt kā noklusējumu',
        'make_default_confirm' => 'Iestatīt pašreizējo izkārtojumu kā noklusējumu?',
        'make_default_success' => 'Pašreizējais izkārtojums iestatīts kā noklusējums',
        'collapse_all' => 'Sakļaut visu',
        'expand_all' => 'Izkļaut visu',
        'status' => [
            'widget_title_default' => 'Sistēmas statuss',
            'update_available' => 'Pieejami {0} atjauninājumi!|Pieejams {1} atjauninājums!|Pieejami [2,Inf] atjauninājumi!',
            'updates_pending' => 'Neapstiprināti programmatūras atjauninājumi',
            'updates_nil' => 'Programmatūra ir atjaunināta',
            'updates_link' => 'Atjaunināt',
            'warnings_pending' => 'Dažām problēmām nepieciešams pievērst uzmanību',
            'warnings_nil' => 'Nav brīdinājumu, ko parādīt',
            'warnings_link' => 'Skatīt',
            'core_build' => 'Sistēmas laidiens',
            'event_log' => 'Notikumu žurnāls',
            'request_log' => 'Pieprasījumu žurnāls',
            'app_birthday' => 'Tiešsaistē kopš',
        ],
        'welcome' => [
            'widget_title_default' => 'Sveicināti',
            'welcome_back_name' => 'Sveicināti atpakaļ :app, :name.',
            'welcome_to_name' => 'Sveicināti :app, :name.',
            'first_sign_in' => 'Šī ir pirmā reize, kad esat pieslēdzies sistēmai.',
            'last_sign_in' => 'Pēdējā pieslēgšanās',
            'view_access_logs' => 'Skatīt piekļuves žurnālus',
            'nice_message' => 'Lai jums jauka diena!',
        ],
    ],
    'user' => [
        'name' => 'Administrators',
        'menu_label' => 'Administratori',
        'menu_description' => 'Pārvaldiet back-end administratoru lietotājus, grupas un tiesības.',
        'list_title' => 'Pārvaldīt administratorus',
        'new' => 'Jauns administrators',
        'login' => 'Lietotājvārds',
        'first_name' => 'Vārds',
        'last_name' => 'Uzvārds',
        'full_name' => 'Pilnais vārds',
        'email' => 'E-pasts',
        'role_field' => 'Loma',
        'role_comment' => 'Lomas definē lietotāja tiesības, kas var tikt pārrakstītas katra lietotāja līmenī, tiesību cilnē.',
        'groups' => 'Grupas',
        'groups_comment' => 'Norādiet grupas, kurām pieder šis lietotāja konts.',
        'avatar' => 'Profila attēls',
        'password' => 'Parole',
        'password_confirmation' => 'Apstiprināt paroli',
        'permissions' => 'Tiesības',
        'account' => 'Konts',
        'superuser' => 'Superlietotājs',
        'superuser_comment' => 'Piešķir lietotājam neierobežotas piekļuves tiesības visām sistēmas sadaļām. Superlietotāji var pievienot un pārvaldīt citus lietotājus.',
        'send_invite' => 'Nosūtīt uzaicinājumu uz e-pastu',
        'send_invite_comment' => 'Nosūta uzaicinājuma e-pastu, kas satur lietotājvārda un paroles informāciju',
        'delete_confirm' => 'Dzēst šo administratoru?',
        'return' => 'Atgriezties administratoru sarakstā',
        'allow' => 'Atļaut',
        'inherit' => 'Pārmantot',
        'deny' => 'Aizliegt',
        'activated' => 'Aktivizēts',
        'last_login' => 'Pēdējā pieslēgšanās',
        'created_at' => 'Izveidots',
        'updated_at' => 'Atjaunots',
        'deleted_at' => 'Dzēsts',
        'show_deleted' => 'Rādīt dzēstos',
        'group' => [
            'name' => 'Grupa',
            'name_field' => 'Nosaukums',
            'name_comment' => 'Nosaukums tiek attēlots administratoru formas grupu sarakstā.',
            'description_field' => 'Apraksts',
            'is_new_user_default_field_label' => 'Noklusējuma grupa',
            'is_new_user_default_field_comment' => 'Pievienot jaunos administratorus šai grupai pēc noklusējuma',
            'code_field' => 'Kods',
            'code_comment' => 'Norādiet unikālu kodu, ja vēlaties piekļūt grupas objektam ar API.',
            'menu_label' => 'Pārvaldīt grupas',
            'list_title' => 'Pārvaldīt grupas',
            'new' => 'Jauna grupa',
            'delete_confirm' => 'Dzēst šo administratoru grupu?',
            'return' => 'Atgriezties grupu sarakstā',
            'users_count' => 'Lietotāji',
        ],
        'role' => [
            'name' => 'Loma',
            'name_field' => 'Nosaukums',
            'name_comment' => 'Nosaukums tiek attēlots administratoru formas lomu sarakstā.',
            'description_field' => 'Apraksts',
            'code_field' => 'Kods',
            'code_comment' => 'Norādiet unikālu kodu, ja vēlaties piekļūt lomas objektam ar API.',
            'menu_label' => 'Pārvaldīt lomas',
            'list_title' => 'Pārvaldīt lomas',
            'new' => 'Jauna loma',
            'delete_confirm' => 'Dzēst šo administratoru lomu?',
            'return' => 'Atgriezties lomu sarakstā',
            'users_count' => 'Lietotāji',
        ],
        'preferences' => [
            'not_authenticated' => 'Nav autentificēta lietotāja, kuram ielādēt vai saglabāt iestatījumus.',
        ],
        'trashed_hint_title' => 'Šis konts ir izdzēsts',
        'trashed_hint_desc' => 'Šis konts ir izdzēsts un vairs nevarēs pieslēgties sistēmai. Lai to atjaunotu, noklikšķiniet uz lietotāja atjaunošanas ikonas labajā apakšējā stūrī.',
    ],
    'list' => [
        'default_title' => 'Saraksts',
        'search_prompt' => 'Meklēt...',
        'no_records' => 'Šajā skatā nav ierakstu.',
        'missing_model' => 'Klasē :class lietotajai saraksta uzvedībai nav definēta modeļa.',
        'missing_column' => 'Nav kolonnu definīciju priekš :columns.',
        'missing_columns' => 'Klasē :class lietotajam sarakstam nav definētas saraksta kolonnas.',
        'missing_definition' => "Saraksta uzvedība nesatur kolonnu laukam ':field'.",
        'missing_parent_definition' => "Saraksta uzvedība nesatur definīciju ':definition'.",
        'behavior_not_ready' => 'Saraksta uzvedība nav inicializēta, pārbaudiet vai kontrolierī tiek izsaukta makeLists() metode.',
        'invalid_column_datetime' => "Kolonnas vērtība ':column' nav DateTime objekts, vai aizmirsāt modulī \$dates atsauci?",
        'pagination' => 'Rāda ierakstus: :from-:to no :total',
        'first_page' => 'Pirmā lapa',
        'last_page' => 'Pēdējā lapa',
        'prev_page' => 'Iepriekšējā lapa',
        'next_page' => 'Nākamā lapa',
        'refresh' => 'Atsvaidzināt',
        'updating' => 'Atjauno...',
        'loading' => 'Ielādē...',
        'setup_title' => 'Saraksta iestatīšana',
        'setup_help' => 'Izmantojiet iezīmes rūtiņas, lai izvēlētos kolonnas, kuras vēlaties redzēt sarakstā. Lai veiktu kolonnu pozīcijas maiņu, velciet tās uz augšu vai leju.',
        'records_per_page' => 'Ierakstu skaits lapā',
        'records_per_page_help' => 'Izvēlieties ierakstu skaitu, ko attēlot vienā lapā. Ņemiet vērā, ka liels ierakstu skaits vienā lapā var samazināt ātrdarbību.',
        'check' => 'Atzīmēt',
        'delete_selected' => 'Dzēst izvēlētos',
        'delete_selected_empty' => 'Nav izvēlēts ieraksts, kuru dzēst.',
        'delete_selected_confirm' => 'Dzēst izvēlētos ierakstus?',
        'delete_selected_success' => 'Izvēlētie ieraksti izdzēsti.',
        'column_switch_true' => 'Jā',
        'column_switch_false' => 'Nē',
    ],
    'fileupload' => [
        'attachment' => 'Pielikums',
        'help' => 'Pievienojiet virsrakstu un aprakstu šim pielikumam.',
        'title_label' => 'Virsraksts',
        'description_label' => 'Apraksts',
        'default_prompt' => 'Noklikšķiniet uz %s vai ievelciet failu šeit, lai augšupielādētu',
        'attachment_url' => 'Pielikuma URL',
        'upload_file' => 'Augšupielādēt failu',
        'upload_error' => 'Augšupielādes kļūda',
        'remove_confirm' => 'Vai esat pārliecināts?',
        'remove_file' => 'Noņemt failu',
    ],
    'repeater' => [
        'add_new_item' => 'Pievienot jaunu vienumu',
        'min_items_failed' => ':name nepieciešami vismaz :min vienumi, tika norādīti tikai :items',
        'max_items_failed' => ':name nepieciešami ne vairāk kā :max vienumi, tika norādīti :items',
    ],
    'form' => [
        'create_title' => 'Jauns :name',
        'update_title' => 'Labot :name',
        'preview_title' => 'Priekšskatīt :name',
        'create_success' => ':name izveidots',
        'update_success' => ':name atjaunināts',
        'delete_success' => ':name izdzēsts',
        'restore_success' => ':name atjaunots',
        'reset_success' => 'Atiestatīšana pabeigta',
        'missing_id' => 'Nav norādīts formas ieraksta ID.',
        'missing_model' => 'Formas uzvedībai klasē :class nav definēts modelis.',
        'missing_definition' => "Formas uzvedība nesatur lauku ':field'.",
        'not_found' => 'Formas ieraksts ar ID :id nav atrasts.',
        'action_confirm' => 'Vai esat pārliecināts?',
        'create' => 'Izveidot',
        'create_and_close' => 'Izveidot un aizvērt',
        'creating' => 'Izveido...',
        'creating_name' => 'Izveido :name...',
        'save' => 'Saglabāt',
        'save_and_close' => 'Saglabāt un aizvērt',
        'saving' => 'Saglabā...',
        'saving_name' => 'Saglabā :name...',
        'delete' => 'Dzēst',
        'deleting' => 'Dzēš...',
        'confirm_delete' => 'Dzēst ierakstu?',
        'confirm_delete_multiple' => 'Dzēst šos ierakstus?',
        'deleting_name' => 'Dzēš :name...',
        'restore' => 'Atjaunot',
        'restoring' => 'Atjauno...',
        'confirm_restore' => 'Vai esat pārliecināts, ka vēlaties atjaunot šo ierakstu?',
        'reset_default' => 'Atiestatīt uz noklusējumu',
        'resetting' => 'Atiestata',
        'resetting_name' => 'Atiestata :name',
        'undefined_tab' => 'Dažādi',
        'field_off' => 'Izsl.',
        'field_on' => 'Iesl.',
        'add' => 'Pievienot',
        'apply' => 'Apstiprināt',
        'cancel' => 'Atcelt',
        'close' => 'Aizvērt',
        'confirm' => 'Apstiprināt',
        'reload' => 'Pārlādēt',
        'complete' => 'Pabeigt',
        'ok' => 'Labi',
        'or' => 'vai',
        'confirm_tab_close' => 'Aizvērt cilni? Nesaglabātās izmaiņas būs zudušas.',
        'behavior_not_ready' => 'Formas uzvedība nav inicializēta, pārbaudiet vai kontrolierī tiek izsaukta initForm() metode.',
        'preview_no_files_message' => 'Nav augšupielādētu failu.',
        'preview_no_media_message' => 'Nav izvēlēts multivides fails.',
        'preview_no_record_message' => 'Nav izvēlēts ieraksts.',
        'select' => 'Izvēlēties',
        'select_all' => 'izvēlēties visus',
        'select_none' => 'neizvēlēties nevienu',
        'select_placeholder' => 'lūdzu, izvēlieties',
        'insert_row' => 'Ievietot rindu',
        'insert_row_below' => 'Ievietot rindu zem',
        'delete_row' => 'Dzēst rindu',
        'concurrency_file_changed_title' => 'Fails ir ticis modificēts',
        'concurrency_file_changed_description' => 'Failu, kuru labojat, ir modificējis cits lietotājs. Jūs varat vai nu pārlādēt failu un zaudēt savas veiktās izmaiņas, vai arī pārrakstīt esošo failu uz diska.',
        'return_to_list' => 'Atgriezties uz sarakstu',
    ],
    'recordfinder' => [
        'find_record' => 'Atrast ierakstu',
        'invalid_model_class' => 'Norādītā modeļa klase ":modelClass" nav derīga ierakstu meklētājam',
        'cancel' => 'Atcelt',
    ],
    'pagelist' => [
        'page_link' => 'Lapas saite',
        'select_page' => 'Izvēlieties lapu...',
    ],
    'relation' => [
        'missing_config' => "Relācijas uzvedībai nav norādīta konfigurācija ':config'.",
        'missing_definition' => "Relācijas uzvedība nesatur definīciju laukam ':field'.",
        'missing_model' => 'Relācijas uzvedībai klasē :class nav definēts modelis.',
        'invalid_action_single' => 'Šī darbība nevar tikt veikta ar vienu relāciju.',
        'invalid_action_multi' => 'Šī darbība nevar tikt veikta ar daudzām relācijām.',
        'relationwidget_unsupported_type' => 'Relāciju logrīks neatbalsta relāciju veidu ":type".',
        'help' => 'Noklikšķiniet uz vienuma, lai pievienotu',
        'related_data' => 'Saistītie :name dati',
        'refresh' => 'Atsvaidzināt',
        'add' => 'Pievienot',
        'add_selected' => 'Pievienot izvēlētos',
        'add_a_new' => 'Pievienot jaunu :name',
        'link_selected' => 'Saite izvēlēta',
        'link_a_new' => 'Saistīt jaunu :name',
        'cancel' => 'Atcelt',
        'close' => 'Aizvērt',
        'add_name' => 'Pievienot :name',
        'create' => 'Izveidot',
        'create_name' => 'Izveidot :name',
        'update' => 'Atjaunot',
        'update_name' => 'Atjaunot :name',
        'preview' => 'Priekšskatīt',
        'preview_name' => 'Priekšskatīt :name',
        'remove' => 'Noņemt',
        'remove_name' => 'Noņemt :name',
        'delete' => 'Dzēst',
        'delete_name' => 'Dzēst :name',
        'delete_confirm' => 'Vai esat pārliecināts?',
        'link' => 'Saistīt',
        'link_name' => 'Saistīt :name',
        'unlink' => 'Atsaistīt',
        'unlink_name' => 'Atsaistīt :name',
        'unlink_confirm' => 'Vai esat pārliecināts?',
    ],
    'reorder' => [
        'default_title' => 'Pārkārtot ierakstus',
        'no_records' => 'Nav pieejami ieraksti, ko pārkārtot.',
    ],
    'model' => [
        'name' => 'Modelis',
        'not_found' => "Modelis ':class' ar ID :id nav atrasts",
        'missing_id' => 'Nav norādīts ID, lai meklētu modeļa ierakstu.',
        'missing_relation' => "Modelis ':class' nesatur definīciju ':relation'.",
        'missing_method' => "Modelis ':class' nesatur metodi ':method'.",
        'invalid_class' => "Klasē :class lietotais modelis :model nav derīgs, modelim jāpārmanto \Model klase.",
        'mass_assignment_failed' => "Masveida vērtību piešķiršana neizdevās modeļa atribūtam ':attribute'.",
    ],
    'warnings' => [
        'tips' => 'Sistēmas konfigurācijas padomi',
        'tips_description' => 'Ir problēmas, kurām nepieciešams pievērst uzmanību, lai konfigurētu sistēmu pareizi.',
        'permissions' => 'Mape :name vai tās apakšmapes nav rakstāmas PHP procesam. Lūdzu, iestatiet šai mapei atbilstošās piekļuves tiesības tīmekļa serverim.',
        'extension' => 'PHP paplašinājums :name nav instalēts. Lūdzu, instalējiet šo bibliotēku un aktivizējiet paplašinājumu.',
        'plugin_missing' => 'Papildus nepieciešams :name spraudnis, taču tas nav instalēts. Lūdzu, instalējiet šo spraudni.',
        'debug' => 'Ieslēgts atkļūdošanas režīms. Nav ieteicams produkcijas vides instalācijām.',
        'decompileBackendAssets' => 'Backend papildu resursu faili šobrīd ir dekompilētā stāvoklī. Nav ieteicams produkcijas vides instalācijām.',
        'default_backend_user' => 'Tika atrasts lietotājs ar noklusējuma pieteikšanās datiem (admin / admin@domain.tld). Nomainiet viņu lietotājvārdu un / vai e-pasta adresi, lai palīdzētu aizsargāt sistēmu.',
    ],
    'editor' => [
        'menu_label' => 'Koda redaktora iestatījumi',
        'menu_description' => 'Pielāgojiet globālos koda redaktora iestatījumus, piemēram, fonta izmēru un krāsu shēmu.',
        'preview' => 'Priekšskatījums',
        'font_size' => 'Fonta izmērs',
        'tab_size' => 'Tabulācijas atkāpju izmērs',
        'use_hard_tabs' => 'Veidot atkāpes ar tabulācijas simboliem',
        'code_folding' => 'Koda sakļaušana',
        'code_folding_begin' => 'Atzīmēt sākumu',
        'code_folding_begin_end' => 'Atzīmēt sākumu un beigas',
        'autocompletion' => 'Automātiskā pabeigšana',
        'word_wrap' => 'Vārdu aplaušana',
        'highlight_active_line' => 'Izcelt aktīvo līniju',
        'auto_closing' => 'Automātiski aizvērt birkas',
        'show_invisibles' => 'Rādīt slēptos simbolus',
        'show_gutter' => 'Rādīt līniju numurus',
        'basic_autocompletion' => 'Pamata automātiskā pabeigšana (Ctrl + Space)',
        'live_autocompletion' => 'Reāllaika automātiskā pabeigšana',
        'enable_snippets' => 'Ieslēgt koda fragmentus (Tab)',
        'display_indent_guides' => 'Rādīt atkāpju vadlīnijas',
        'show_print_margin' => 'Rādīt drukas piemali',
        'mode_off' => 'Izslēgta',
        'mode_fluid' => 'Plūstoša',
        '40_characters' => '40 simboli',
        '80_characters' => '80 simboli',
        'theme' => 'Krāsu shēma',
        'markup_styles' => 'Iezīmēšanas stili',
        'custom_styles' => 'Pielāgota stila lapa',
        'custom_styles_comment' => 'Pielāgotie stili, kurus iekļaut HTML redaktorā.',
        'markup_classes' => 'Iezīmēšanas klases',
        'paragraph' => 'Rindkopa',
        'link' => 'Saite',
        'table' => 'Tabula',
        'table_cell' => 'Tabulas šūna',
        'image' => 'Attēls',
        'label' => 'Paskaidrojošais teksts',
        'class_name' => 'Klases nosaukums',
        'markup_tags' => 'Iezīmēšanas birkas',
        'markup_tag' => 'Iezīmēšanas birka',
        'allowed_empty_tags' => 'Atļautās tukšās birkas',
        'allowed_empty_tags_comment' => 'Saraksts ar birkām, kas netiks dzēstas, ja iekš tām nebūs norādīts saturs.',
        'allowed_tags' => 'Atļautās birkas',
        'allowed_tags_comment' => 'Saraksts ar atļautajām birkām.',
        'allowed_attributes' => 'Atļautie atribūti',
        'allowed_attributes_comment' => 'Saraksts ar atļautajiem atribūtiem.',
        'no_wrap' => 'Neaplaužamās birkas',
        'no_wrap_comment' => 'Saraksts ar birkām, kas nevajadzētu iekļaut bloka birkās.',
        'remove_tags' => 'Dzēšamās birkas',
        'remove_tags_comment' => 'Saraksts ar birkām, kas tiks dzēstas kopā ar to saturu.',
        'line_breaker_tags' => 'Līnijas pārtraukuma birkas',
        'line_breaker_tags_comment' => 'Saraksts ar birkām, kas tiek izmantotas, lai ievietotu līnijas pārtraukumu starp elementiem.',
        'toolbar_options' => 'Rīkjoslas iespējas',
        'toolbar_buttons' => 'Rīkjoslas pogas',
        'toolbar_buttons_comment' => 'Rīkjoslas pogas, kas tiks attēlotas teksta redaktorā pēc noklusējuma.',
        'toolbar_buttons_preset' => 'Ievietot iepriekš sagatavotu rīkjoslas pogu konfigurāciju:',
        'toolbar_buttons_presets' => [
            'default' => 'Noklusējuma',
            'minimal' => 'Minimāla',
            'full' => 'Pilna',
        ],
        'paragraph_formats' => 'Rindkopas formatējums',
        'paragraph_formats_comment' => 'Izvēles iespējas, kas tiks attēlotas paragrāfa formatējuma izkrītošajā sarakstā.',
    ],
    'tooltips' => [
        'preview_website' => 'Priekšskatīt tīmekļvietni',
    ],
    'mysettings' => [
        'menu_label' => 'Mani iestatījumi',
        'menu_description' => 'Iestatījumi saistībā ar jūsu administrēšanas kontu',
    ],
    'myaccount' => [
        'menu_label' => 'Mans konts',
        'menu_description' => 'Atjaunojiet sava konta detaļas, piemēram, vārdu, e-pasta adresi un paroli.',
        'menu_keywords' => 'drošības pieteikšanās',
    ],
    'branding' => [
        'menu_label' => 'Back-end pielāgošana',
        'menu_description' => 'Pielāgojiet administratīvo vidi, piemēram, nosaukumu, krāsas un logo.',
        'brand' => 'Zīmols',
        'logo' => 'Logo',
        'logo_description' => 'Augšupielādējiet pielāgotu logo, lai izmantotu back-end.',
        'favicon' => 'Ikona',
        'favicon_description' => 'Augšupielādējiet pielāgotu ikonu (favicon), lai izmantotu back-end',
        'app_name' => 'Lietotnes nosaukums',
        'app_name_description' => 'Šis nosaukums tiek rādīts back-end virsraksta zonā.',
        'app_tagline' => 'Lietotnes apraksts',
        'app_tagline_description' => 'Šis apraksts tiek rādīts back-end pieslēgšanās lapā.',
        'colors' => 'Krāsas',
        'branding_colors' => 'Zīmola krāsas',
        'branding_colors_comment' => 'Šīs krāsas tiks lietotas back-end lietotāja saskarnē, lai pielāgotu to jūsu zīmolam.',
        'default_colors' => 'Noklusējuma krāsas',
        'default_colors_comment' => 'Šīs krāsas būs pieejamas visās krāsu izvēles logrīku paletēs, ja vien netiks pārrakstītas.',
        'add_default_color' => 'Pievienot noklusējuma krāsu',
        'primary_color' => 'Primārā krāsa',
        'secondary_color' => 'Sekundārā krāsa',
        'accent_color' => 'Akcenta krāsa',
        'styles' => 'Stili',
        'custom_stylesheet' => 'Pielāgota stila lapa',
        'navigation' => 'Navigācijas josla',
        'menu_mode' => 'Izvēlnes stils',
        'menu_mode_inline' => 'Vienā rindā',
        'menu_mode_inline_no_icons' => 'Vienā rindā (bez ikonām)',
        'menu_mode_tile' => 'Divās rindās',
        'menu_mode_collapsed' => 'Sakļauts',
    ],
    'backend_preferences' => [
        'menu_label' => 'Back-end iestatījumi',
        'menu_description' => 'Pārvaldiet sava konta iestatījumus, piemēram, vēlamo valodu.',
        'region' => 'Reģions',
        'code_editor' => 'Koda redaktors',
        'timezone' => 'Laika zona',
        'timezone_comment' => 'Pielāgojiet izvadītos datumus šai laika zonai.',
        'locale' => 'Valoda',
        'locale_comment' => 'Izvēlieties vēlamo valodu.',
    ],
    'access_log' => [
        'hint' => 'Šis žurnāls attēlo sarakstu ar veiksmīgajiem administratoru pieslēgšanās mēģinājumiem. Ieraksti tiek glabāti :days dienas.',
        'menu_label' => 'Piekļuves žurnāls',
        'menu_description' => 'Skatiet sarakstu ar veiksmīgiem back-end lietotāju pieslēgšanās mēģinājumiem.',
        'id' => 'ID',
        'created_at' => 'Datums un laiks',
        'type' => 'Veids',
        'login' => 'Lietotājvārds',
        'ip_address' => 'IP adrese',
        'first_name' => 'Vārds',
        'last_name' => 'Uzvārds',
        'email' => 'E-pasts',
    ],
    'filter' => [
        'all' => 'visi',
        'options_method_not_exists' => "Modeļa klasei :model jādefinē metodi :method(), kas atgriež vērtības ':filter' filtram.",
        'date_all' => 'visi periodi',
        'number_all' => 'visi skaitļi',
    ],
    'import_export' => [
        'upload_csv_file' => '1. Augšupielādējiet CSV failu',
        'import_file' => 'Importa fails',
        'row' => 'Rinda :row',
        'first_row_contains_titles' => 'Pirmā rinda satur kolonnu nosaukumus',
        'first_row_contains_titles_desc' => 'Atstājiet šo ķeksi, ja pirmā rinda CSV failā satur kolonnu nosaukumus.',
        'match_columns' => '2. Sasaistiet faila kolonnas ar datubāzes laukiem',
        'file_columns' => 'Faila kolonnas',
        'database_fields' => 'Datubāzes lauki',
        'set_import_options' => '3. Iestatiet importa papildu iespējas',
        'export_output_format' => '1. Eksporta izvades formāts',
        'file_format' => 'Faila formāts',
        'standard_format' => 'Standarta formāts',
        'custom_format' => 'Pielāgots formāts',
        'delimiter_char' => 'Atdalītāja simbols',
        'enclosure_char' => 'Ietveršanas simbols',
        'escape_char' => 'Atsoļa simbols',
        'select_columns' => '2. Izvēlieties kolonnas, kuras eksportēt',
        'column' => 'Kolonna',
        'columns' => 'Kolonnas',
        'set_export_options' => '3. Iestatiet eksporta papildu iespējas',
        'show_ignored_columns' => 'Rādīt ignorētās kolonnas',
        'auto_match_columns' => 'Automātiski sasaistīt kolonnas',
        'created' => 'Izveidoti',
        'updated' => 'Atjaunināti',
        'skipped' => 'Izlaisti',
        'warnings' => 'Brīdinājumi',
        'errors' => 'Kļūdas',
        'skipped_rows' => 'Izlaistas rindas',
        'import_progress' => 'Importa progress',
        'processing' => 'Apstrādā',
        'import_error' => 'Importa kļūda',
        'upload_valid_csv' => 'Lūdzu, augšupielādējiet derīgu CSV failu.',
        'drop_column_here' => 'Velciet kolonnu šeit...',
        'ignore_this_column' => 'Ignorēt šo kolonnu',
        'processing_successful_line1' => 'Faila eksporta process pabeigts!',
        'processing_successful_line2' => 'Tagad pārlūks automātiski novirzīs uz faila lejupielādi.',
        'export_progress' => 'Eksporta progress',
        'export_error' => 'Eksporta kļūda',
        'column_preview' => 'Kolonnas priekšskatījums',
        'file_not_found_error' => 'Fails nav atrasts',
        'empty_error' => 'Eksporta procesam netika padoti dati',
        'empty_import_columns_error' => 'Lūdzu, norādiet kuras kolonnas jāimportē.',
        'match_some_column_error' => 'Lūdzu, vispirms sasaistiet kolonnas.',
        'required_match_column_error' => 'Lūdzu, norādiet sasaisti obligātajam laukam :label.',
        'empty_export_columns_error' => 'Lūdzu, norādiet kuras kolonnas ir jāeksportē.',
        'behavior_missing_uselist_error' => 'Jums ir jāievieš ListController kontroliera uzvedība ar ieslēgtu "useList" parametru.',
        'missing_model_class_error' => 'Lūdzu, norādiet modelClass īpašību priekš :type',
        'missing_column_id_error' => 'Trūkstošs kolonnas identifikators',
        'unknown_column_error' => 'Nezināma kolonna',
        'encoding_not_supported_error' => 'Izvēlētā faila kodējums nav atpazīts. Lūdzu, izvēlieties pielāgota faila formāta iespēju ar atbilstošu kodējumu, lai fails tiktu veiksmīgi importēts.',
        'encoding_format' => 'Faila kodējums',
        'encodings' => [
            'utf_8' => 'UTF-8',
            'us_ascii' => 'US-ASCII',
            'iso_8859_1' => 'ISO-8859-1 (Latīņu-1, Rietumeiropas)',
            'iso_8859_2' => 'ISO-8859-2 (Latīņu-2, Centrāleiropas)',
            'iso_8859_3' => 'ISO-8859-3 (Latīņu-3, Dienvideiropas)',
            'iso_8859_4' => 'ISO-8859-4 (Latīņu-4, Ziemeļeiropas)',
            'iso_8859_5' => 'ISO-8859-5 (Latīņu, Kirilica)',
            'iso_8859_6' => 'ISO-8859-6 (Latīņu, Arābu)',
            'iso_8859_7' => 'ISO-8859-7 (Latīņu, Grieķu)',
            'iso_8859_8' => 'ISO-8859-8 (Latīņu, Ebreju)',
            'iso_8859_9' => 'ISO-8859-9 (Latīņu-5, Turku)',
            'iso_8859_10' => 'ISO-8859-10 (Latīņu-6, Ziemeļvalstu)',
            'iso_8859_11' => 'ISO-8859-11 (Latīņu, Taju)',
            'iso_8859_13' => 'ISO-8859-13 (Latīņu-7, Baltijas reģiona)',
            'iso_8859_14' => 'ISO-8859-14 (Latīņu-8, Ķeltu)',
            'iso_8859_15' => 'ISO-8859-15 (Latīņu-9, Rietumeiropas revīzija ar eiro zīmi)',
            'windows_1250' => 'Windows-1250 (CP1250, Centrālās un Austrumeiropas)',
            'windows_1251' => 'Windows-1251 (CP1251)',
            'windows_1252' => 'Windows-1252 (CP1252)',
        ],
    ],
    'permissions' => [
        'manage_media' => 'Augšupielādēt un pārvaldīt multivides saturu - attēlus, video, skaņas, dokumentus',
        'allow_unsafe_markdown' => 'Izmantot nedrošo Markdown redaktoru (var saturēt Javascript)',
    ],
    'mediafinder' => [
        'label' => 'Multivides meklētājs',
        'default_prompt' => 'Noklikšķiniet uz %s pogas, lai atrastu multivides vienumu',
        'no_image' => 'Attēls nav atrasts',
    ],
    'media' => [
        'menu_label' => 'Multivide',
        'upload' => 'Augšupielādēt',
        'move' => 'Pārvietot',
        'delete' => 'Dzēst',
        'add_folder' => 'Pievienot mapi',
        'search' => 'Meklēt',
        'display' => 'Attēlot',
        'filter_all' => 'Visi',
        'filter_images' => 'Attēli',
        'filter_video' => 'Video',
        'filter_audio' => 'Audio',
        'filter_documents' => 'Dokumenti',
        'library' => 'Bibliotēka',
        'size' => 'Izmērs',
        'title' => 'Nosaukums',
        'last_modified' => 'Pēdējoreiz modificēts',
        'public_url' => 'URL',
        'click_here' => 'Noklikšķiniet šeit',
        'thumbnail_error' => 'Kļūda ģenerējot sīktēlu.',
        'return_to_parent' => 'Atgriezties vecāka mapē',
        'return_to_parent_label' => 'Pārvietoties augšup ..',
        'nothing_selected' => 'Nekas nav izvēlēts.',
        'multiple_selected' => 'Izvēlēti vairāki vienumi.',
        'uploading_file_num' => 'Augšupielādē :number failu(-us)...',
        'uploading_complete' => 'Augšupielāde pabeigta',
        'uploading_error' => 'Augšupielāde neizdevās',
        'type_blocked' => 'Izmantotais faila veids ir bloķēts drošības iemeslu dēļ.',
        'order_by' => 'Kārtot pēc',
        'direction' => 'Secība',
        'direction_asc' => 'Augoši',
        'direction_desc' => 'Dilstoši',
        'folder' => 'Mape',
        'no_files_found' => 'Netika atrasts neviens fails pēc veiktā pieprasījuma.',
        'delete_empty' => 'Lūdzu, izvēlieties vienumus, kurus dzēst.',
        'delete_confirm' => 'Dzēst izvēlēto vienumu(-us)?',
        'error_renaming_file' => 'Kļūda pārdēvējot vienumu.',
        'new_folder_title' => 'Jauna mape',
        'folder_name' => 'Mapes nosaukums',
        'error_creating_folder' => 'Kļūda izveidojot mapi',
        'folder_or_file_exist' => 'Mape vai fails ar norādīto nosaukumu jau eksistē.',
        'move_empty' => 'Lūdzu, izvēlieties vienumus, kurus pārvietot.',
        'move_popup_title' => 'Pārvietot failus vai mapes',
        'move_destination' => 'Mērķa mape',
        'please_select_move_dest' => 'Lūdzu, izvēlieties mērķa mapi.',
        'move_dest_src_match' => 'Lūdzu, izvēlieties citu mērķa mapi.',
        'empty_library' => 'Multivides bibliotēka ir tukša. Augšupielādējiet failus vai izveidojiet mapes, lai sāktu.',
        'insert' => 'Ievietot',
        'crop_and_insert' => 'Apgriezt un ievietot',
        'select_single_image' => 'Lūdzu, izvēlieties vienu attēlu.',
        'selection_not_image' => 'Izvēlētais vienums nav attēls.',
        'restore' => 'Atcelt visas izmaiņas',
        'resize' => 'Mainīt izmēru...',
        'selection_mode_normal' => 'Normāls',
        'selection_mode_fixed_ratio' => 'Fiksēta attiecība',
        'selection_mode_fixed_size' => 'Fiksēts izmērs',
        'height' => 'Augstums',
        'width' => 'Platums',
        'selection_mode' => 'Iezīmēšanas režīms',
        'resize_image' => 'Mainīt izmēru',
        'image_size' => 'Attēla izmērs:',
        'selected_size' => 'Izvēlēts:',
        'rename_popup_title' => 'Pārsaukt',
        'rename_new_name' => 'Jauns nosaukums',
        'move_please_select' => 'lūdzu, izvēlieties',
        'move_button' => 'Pārvietot',
    ],
];
