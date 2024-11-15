<?php

return [
    'auth' => [
        'title' => 'Nadzorna plošča',
        'invalid_login' => 'Podatki, ki ste jih vnesli, se ne ujemajo z našimi zapisi. Prosimo, ponovno preverite podatke in poskusite znova.',
    ],
    'field' => [
        'invalid_type' => 'Uporabljen je neveljaven tip polja :type.',
        'options_method_invalid_model' => "Atribut ':field' ne ustreza veljavnemu modelu. Poskusite natančno določiti možnosti metode za model :model.",
        'options_method_not_exists' => "Model :model mora vsebovati metodo :method(), ki vrača možnosti za polje ':field' na obrazcu.",
        'options_static_method_invalid_value' => "Statična metoda ':method()' v razredu :class ni vrnila veljavnih možnosti.",
        'colors_method_not_exists' => "Model :model mora vsebovati metodo :method(), ki vrača HTML barvne kode v HEX formatu za polje ':field' na obrazcu.",
    ],
    'widget' => [
        'not_registered' => "Ime vtičnika ':name' ni bilo registrirano.",
        'not_bound' => "Vtičnik z imenom ':name' ni vezan na kontroler.",
    ],
    'page' => [
        'untitled' => 'Brez naslova',
        '404' => [
            'label' => 'Stran ne obstaja',
            'help' => 'Kljub intenzivnemu iskanju, zahtevanega URL-ja preprosto ni mogoče najti. Ste morda iskali kaj drugega?',
            'back_link' => 'Vrni se na prejšnjo stran',
        ],
        'access_denied' => [
            'label' => 'Dostop zavrnjen',
            'help' => 'Nimate potrebnih dovoljenj za ogled te strani.',
            'cms_link' => 'Vrni se v administracijo',
        ],
        'no_database' => [
            'label' => 'Podatkovna zbirka manjka',
            'help' => 'Za dostop do administracije je potrebna podatkovna zbirka. Preverite, če je podatkovna zbirka pravilno nastavljena in če so bile migracije pognane ter poskusite ponovno.',
            'cms_link' => 'Vrni se na domačo stran',
        ],
    ],
    'partial' => [
        'not_found_name' => "Predloge ':name' ni mogoče najti.",
        'invalid_name' => 'Neveljavno ime predloge: :name.',
    ],
    'ajax_handler' => [
        'invalid_name' => "Neveljavno ime AJAX akcije ':name'.",
        'not_found' => "Ni mogoče najti AJAX akcije ':name'.",
    ],
    'account' => [
        'impersonate' => 'Impersonacija uporabnika',
        'impersonate_confirm' => 'Ali ste prepričani, da želite impersonirati tega uporabnika? V prvotno stanje se lahko vrnete tako, da se odjavite.',
        'impersonate_success' => 'Sedaj impersonirate tega uporabnika.',
        'impersonate_working' => 'Impersoniram...',
        'impersonating' => 'Impersonacija uporabnika :full_name',
        'stop_impersonating' => 'Prekliči impersonacijo',
        'unsuspend' => 'Odsuspendiraj',
        'unsuspend_confirm' => 'Ali ste prepričani, da želite odsuspendirati tega uporabnika?',
        'unsuspend_success' => 'Uporabnik je odsuspendiran.',
        'unsuspend_working' => 'Odsuspendiram...',
        'signed_in_as' => 'Prijavljeni ste kot :full_name',
        'sign_out' => 'Odjava',
        'login' => 'Prijava',
        'reset' => 'Ponastavi',
        'restore' => 'Obnovi',
        'login_placeholder' => 'uporabniško ime',
        'password_placeholder' => 'geslo',
        'remember_me' => 'Ostanite prijavljeni',
        'forgot_password' => 'Ste pozabili svoje geslo?',
        'enter_email' => 'Vnesite svoj e-poštni naslov',
        'enter_login' => 'Vnesite svoje uporabniško ime',
        'email_placeholder' => 'e-pošta',
        'enter_new_password' => 'Vnesite novo geslo',
        'password_reset' => 'Ponastavitev gesla',
        'restore_success' => 'Na vaš e-poštni naslov je bilo poslano sporočilo z navodili.',
        'reset_success' => 'Geslo je bilo ponastavljeno. Sedaj se lahko prijavite.',
        'reset_error' => 'Posredovani so bili neveljavni podatki za ponastavitev gesla. Prosimo, poskusite znova!',
        'reset_fail' => 'Gesla ni bilo mogoče ponastaviti!',
        'apply' => 'Sprejmi',
        'cancel' => 'Prekliči',
        'delete' => 'Izbriši',
        'ok' => 'OK',
    ],
    'dashboard' => [
        'menu_label' => 'Namizje',
        'widget_label' => 'Vtičnik',
        'widget_width' => 'Širina',
        'full_width' => 'Celotna širina',
        'manage_widgets' => 'Upravljanje vtičnikov',
        'add_widget' => 'Dodaj vtičnik',
        'widget_inspector_title' => 'Nastavitve vtičnika',
        'widget_inspector_description' => 'Nastavitve prikaza vtičnika',
        'widget_columns_label' => 'Širina :columns',
        'widget_columns_description' => 'Širina vtičnika, število stolpcev med 1 in 12.',
        'widget_columns_error' => 'Prosimo, vnesite širino vtičnika v obliki števila med 1 in 10.',
        'columns' => '{1} stolpec|{2} stolpca|[3,4] stolpci|[5,Inf] stolpcev',
        'widget_new_row_label' => 'Vsili novo vrstico',
        'widget_new_row_description' => 'Postavi vtičnik v novo vrstico.',
        'widget_title_label' => 'Naslov vtičnika',
        'widget_title_error' => 'Potreben je vnos naslova vtičnika.',
        'reset_layout' => 'Ponastavi postavitev',
        'reset_layout_confirm' => 'Želite postavitev ponastaviti nazaj na privzeto obliko?',
        'reset_layout_success' => 'Postavitev je bila ponastavljena',
        'make_default' => 'Nastavi za privzeto',
        'make_default_confirm' => 'Želite trenutno postavitev nastaviti za privzeto?',
        'make_default_success' => 'Trenutna postavitev je nastavljena kot privzeta.',
        'collapse_all' => 'Strni vse',
        'expand_all' => 'Razširi vse',
        'status' => [
            'widget_title_default' => 'Status sistema',
            'update_available' => '[0,1] posodobitev na voljo!|{2} posodobitvi na voljo!|[3,4] posodobitve na voljo!|[5,Inf] posodobitev na voljo!',
            'updates_pending' => 'Posodobitev programske opreme je na voljo',
            'updates_nil' => 'Programska oprema je posodobljena',
            'updates_link' => 'Posodobi',
            'warnings_pending' => 'Nekatere zadeve potrebujejo vašo pozornost',
            'warnings_nil' => 'Ni opozoril za prikaz',
            'warnings_link' => 'Prikaži',
            'core_build' => 'Različica sistema',
            'event_log' => 'Dnevnik dogodkov',
            'request_log' => 'Dnevnik zahtev',
            'app_birthday' => 'Na spletu od',
        ],
        'welcome' => [
            'widget_title_default' => 'Dobrodošli',
            'welcome_back_name' => 'Dobrodošli nazaj v :app, :name.',
            'welcome_to_name' => 'Dobrodošli v :app, :name.',
            'first_sign_in' => 'To je vaša prva prijava.',
            'last_sign_in' => 'Vaša zadnja prijava je zabeležena.',
            'view_access_logs' => 'Prikaži dnevnik prijav',
            'nice_message' => 'Imejte lep dan!',
        ],
    ],
    'user' => [
        'name' => 'Administrator',
        'menu_label' => 'Administratorji',
        'menu_description' => 'Upravljanje z administratorji, skupinami in dovoljenji.',
        'list_title' => 'Upravljanje administratorjev',
        'new' => 'Nov administrator',
        'login' => 'Uporabniško ime',
        'first_name' => 'Ime',
        'last_name' => 'Priimek',
        'full_name' => 'Polno ime',
        'email' => 'E-poštni naslov',
        'role_field' => 'Vloga',
        'role_comment' => 'Vloge določajo uporabniška dovoljenja, ki jih je možno spremeniti na ravni uporabnika, na zavihku "Dovoljenja".',
        'groups' => 'Skupine',
        'groups_comment' => 'Določite, katerim skupinam pripada ta uporabniški račun.',
        'avatar' => 'Avatar',
        'password' => 'Geslo',
        'password_confirmation' => 'Potrdite geslo',
        'permissions' => 'Dovoljenja',
        'account' => 'Uporabniški račun',
        'superuser' => 'Super administrator',
        'superuser_comment' => 'Temu uporabniškemu računu omogoča neomejen dostop do vseh področij sistema. Super administrator lahko dodaja in upravlja druge uporabnike.',
        'send_invite' => 'Pošlji vabilo po e-pošti',
        'send_invite_comment' => 'Pošlje pozdravno e-poštno sporočilo s podatki o uporabniškem imenu in geslu.',
        'delete_confirm' => 'Želite izbrisati tega administratorja?',
        'return' => 'Vrni se na seznam administratorjev',
        'allow' => 'Dovoli',
        'inherit' => 'Podeduj',
        'deny' => 'Ne dovoli',
        'activated' => 'Aktiviran',
        'last_login' => 'Zadnja prijava',
        'created_at' => 'Ustvarjen',
        'updated_at' => 'Posodobljen',
        'deleted_at' => 'Izbrisan',
        'show_deleted' => 'Prikaži izbrisane',
        'group' => [
            'name' => 'Skupina',
            'name_field' => 'Ime',
            'name_comment' => 'Ime je prikazano na seznamu skupin na administratorskem obrazcu.',
            'description_field' => 'Opis',
            'is_new_user_default_field_label' => 'Privzeta skupina',
            'is_new_user_default_field_comment' => 'Nove administratorje vedno vključi v to skupino.',
            'code_field' => 'Koda',
            'code_comment' => 'Vnesite unikatno kodo, če želite dostopati do objekta skupine preko API klica.',
            'menu_label' => 'Upravljanje s skupinami',
            'list_title' => 'Upravljanje s skupinami',
            'new' => 'Nova skupina',
            'delete_confirm' => 'Želite odstraniti to administratorsko skupino?',
            'return' => 'Vrni se na seznam skupin',
            'users_count' => 'Uporabniki',
        ],
        'role' => [
            'name' => 'Vloga ',
            'name_field' => 'Ime',
            'name_comment' => 'Ime je prikazano na seznamu vlog na administratorskem obrazcu.',
            'description_field' => 'Opis',
            'code_field' => 'Koda',
            'code_comment' => 'Vnesite unikatno kodo, če želite dostopati do objekta vloge preko API klica.',
            'menu_label' => 'Upravljanje z vlogami',
            'list_title' => 'Upravljanje z vlogami',
            'new' => 'Nova vloga',
            'delete_confirm' => 'Želite odstraniti to administratorsko vlogo?',
            'return' => 'Vrni se na seznam vlog',
            'users_count' => 'Uporabniki',
        ],
        'preferences' => [
            'not_authenticated' => 'Ni overjenega uporabnika, za katerega bi lahko naložili ali shranili nastavitve.',
        ],
        'trashed_hint_title' => 'Ta uporabniški račun je bil izbrisan',
        'trashed_hint_desc' => 'Ta uporabniški račun je bil izbrisan in prijava z njim ni več mogoča. Če ga želite obnoviti, kliknite ikono za obnovitev uporabnika v spodnjem desnem kotu.',
    ],
    'list' => [
        'default_title' => 'Seznam',
        'search_prompt' => 'Iskanje...',
        'no_records' => 'Ni najdenih zapisov.',
        'missing_model' => 'Seznam, uporabljen v :class, nima definiranega modela.',
        'missing_column' => 'Manjkajo definicije stolpcev za stolpce :columns.',
        'missing_columns' => 'Seznam, uporabljen v :class, nima definiranih stolpcev seznama.',
        'missing_definition' => "Seznam ne vsebuje stolpca za ':field'.",
        'missing_parent_definition' => "Seznam ne vsebuje definicije za ':definition'.",
        'behavior_not_ready' => 'Seznam se ni inicializiral. Preverite, če ste v kontrolerju poklicali metodo makeLists().',
        'invalid_column_datetime' => "Vrednost stolpca ':column' ni DateTime objekt. Preverite, če imate v vašem modelu definirano referenco \$dates.",
        'pagination' => 'Prikazani zapisi: :from-:to od :total',
        'first_page' => 'Prva stran',
        'last_page' => 'Zadnja stran',
        'prev_page' => 'Prejšnja stran',
        'next_page' => 'Naslednja stran',
        'refresh' => 'Osveži',
        'updating' => 'Posodabljanje...',
        'loading' => 'Nalaganje...',
        'setup_title' => 'Nastavitve seznama',
        'setup_help' => 'Izberite stolpce, ki jih želite prikazati na seznamu. Položaj stolpcev lahko spremenite tako, da jih povlečete gor ali dol.',
        'records_per_page' => 'Število zapisov na strani',
        'records_per_page_help' => 'Izberite koliko zapisov želite prikazati na eni strani. Upoštevajte, da lahko večje število zapisov na eni strani zmanjša hitrost delovanja.',
        'check' => 'Označi',
        'delete_selected' => 'Izbriši izbrano',
        'delete_selected_empty' => 'Ni izbranih zapisov za izbris.',
        'delete_selected_confirm' => 'Želite izbrisati izbrane zapise?',
        'delete_selected_success' => 'Izbrani zapisi so izbrisani.',
        'column_switch_true' => 'Da',
        'column_switch_false' => 'Ne',
    ],
    'fileupload' => [
        'attachment' => 'Priponka',
        'help' => 'Dodajte naslov in opis za to priponko.',
        'title_label' => 'Naslov',
        'description_label' => 'Opis',
        'default_prompt' => 'Če želite naložiti datoteko, kliknite %s ali povlecite datoteko v to polje.',
        'attachment_url' => 'URL priloge',
        'upload_file' => 'Naloži datoteko',
        'upload_error' => 'Napaka pri nalaganju',
        'remove_confirm' => 'Ali ste prepričani?',
        'remove_file' => 'Odstrani datoteko',
    ],
    'repeater' => [
        'add_new_item' => 'Dodaj nov element',
        'min_items_failed' => ':name zahteva najmanj :min elementov, vendar je zagotovljenih le :items elementov.',
        'max_items_failed' => ':name dovoli največ :max elementov, vendar je bilo podanih :items elementov.',
    ],
    'form' => [
        'create_title' => 'Ustvari element ":name"',
        'update_title' => 'Uredi element ":name"',
        'preview_title' => 'Predogled elementa ":name"',
        'create_success' => 'Element ":name" je ustvarjen',
        'update_success' => 'Element ":name" je posodobljen',
        'delete_success' => 'Element ":name" je izbrisan',
        'restore_success' => 'Element ":name" je obnovljen',
        'reset_success' => 'Ponastavitev je zaključena',
        'missing_id' => 'ID obrazca ni bil določen.',
        'missing_model' => 'Obrazec, uporabljen v :class, nima definiranega modela.',
        'missing_definition' => "Obrazec ne vsebuje stolpca za ':field'.",
        'not_found' => 'Obrazca z ID-jem :id ni mogoče najti.',
        'action_confirm' => 'Ali ste prepričani?',
        'create' => 'Ustvari',
        'create_and_close' => 'Ustvari in zapri',
        'creating' => 'Ustvarjanje...',
        'creating_name' => 'Ustvarjanje :name...',
        'save' => 'Shrani',
        'save_and_close' => 'Shrani in zapri',
        'saving' => 'Shranjevanje...',
        'saving_name' => 'Shranjevanje :name...',
        'delete' => 'Izbriši',
        'deleting' => 'Brisanje...',
        'confirm_delete' => 'Želite izbrisati zapis?',
        'confirm_delete_multiple' => 'Želite izbrisati izbrane zapise?',
        'deleting_name' => 'Brisanje :name...',
        'restore' => 'Obnovi',
        'restoring' => 'Obnavljanje',
        'confirm_restore' => 'Ali ste prepričani, da želite obnoviti ta zapis?',
        'reset_default' => 'Ponastavi na privzeto',
        'resetting' => 'Ponastavljanje',
        'resetting_name' => 'Ponastavljanje :name',
        'undefined_tab' => 'Razno',
        'field_off' => 'Ne',
        'field_on' => 'Da',
        'add' => 'Dodaj',
        'apply' => 'Uporabi',
        'cancel' => 'Prekliči',
        'close' => 'Zapri',
        'confirm' => 'Potrdi',
        'reload' => 'Ponovno naloži',
        'complete' => 'Zaključi',
        'ok' => 'OK',
        'or' => 'ali',
        'confirm_tab_close' => 'Zaprem zavihek? Neshranjene spremembe bodo izgubljene.',
        'behavior_not_ready' => 'Obrazec se ni inicializiral. Preverite, če ste v kontrolerju poklicali metodo initForm().',
        'preview_no_files_message' => 'Ni naloženih datotek.',
        'preview_no_media_message' => 'Ni izbranih media datotek.',
        'preview_no_record_message' => 'Ni izbranih zapisov.',
        'select' => 'Izberi',
        'select_all' => 'vse',
        'select_none' => 'nobenega',
        'select_placeholder' => 'izberite',
        'insert_row' => 'Vstavi vrstico',
        'insert_row_below' => 'Vstavi vrstico spodaj',
        'delete_row' => 'Izbriši vrstico',
        'concurrency_file_changed_title' => 'Datoteka je bila spremenjena',
        'concurrency_file_changed_description' => 'Datoteka, ki jo urejate, je bila spremenjena s strani drugega uporabnika. Datoteko lahko znova naložite in izgubite vaše spremembe ali pa jo prepišete s svojimi spremembami.',
        'return_to_list' => 'Vrni se na seznam',
    ],
    'recordfinder' => [
        'find_record' => 'Poišči zapis',
        'invalid_model_class' => 'Model ":modelClass", določen za iskalnik zapisov, je neveljaven.',
        'cancel' => 'Prekliči',
    ],
    'pagelist' => [
        'page_link' => 'Povezava do strani',
        'select_page' => 'Izberite stran...',
    ],
    'relation' => [
        'missing_config' => "Relacija ne vsebuje nastavitev za ':config'.",
        'missing_definition' => "Relacija ne vsebuje definicije za ':field'.",
        'missing_model' => 'Relacija, uporabljena v :class, nima definiranega modela.',
        'invalid_action_single' => 'Tega dejanja ni mogoče izvesti na relaciji ena proti ena.',
        'invalid_action_multi' => 'Tega dejanja ni mogoče izvesti na relaciji mnogo proti mnogo.',
        'help' => 'Kliknite na element, ki ga želite dodati.',
        'related_data' => 'Povezani podatki :name',
        'add' => 'Dodaj',
        'add_selected' => 'Dodaj izbrano',
        'add_a_new' => 'Dodaj novo :name',
        'link_selected' => 'Povezava je izbrana',
        'link_a_new' => 'Poveži novo :name',
        'cancel' => 'Prekliči',
        'close' => 'Zapri',
        'add_name' => 'Dodaj :name',
        'create' => 'Ustvari',
        'create_name' => 'Ustvari :name',
        'update' => 'Posodobi',
        'update_name' => 'Posodobi :name',
        'preview' => 'Predogled',
        'preview_name' => 'Predogled za :name',
        'remove' => 'Odstrani',
        'remove_name' => 'Odstrani :name',
        'delete' => 'Izbriši',
        'delete_name' => 'Izbriši :name',
        'delete_confirm' => 'Ali ste prepričani?',
        'link' => 'Povezava',
        'link_name' => 'Povezava za :name',
        'unlink' => 'Odstrani povezavo',
        'unlink_name' => 'Odstrani povezavo :name',
        'unlink_confirm' => 'Ali ste prepričani?',
    ],
    'reorder' => [
        'default_title' => 'Razvrsti zapise',
        'no_records' => 'Na voljo ni nobenih zapisov za razvrščanje.',
    ],
    'model' => [
        'name' => 'Model',
        'not_found' => "Modela ':class' z ID-jem :id ni mogoče najti",
        'missing_id' => 'Za iskanje modela ni določen noben ID.',
        'missing_relation' => "Model ':class' nima definirane relacije ':relation'.",
        'missing_method' => "Model ':class' ne vsebuje metode ':method'.",
        'invalid_class' => "Model :model, uporabljen v :class ni veljaven. Dedovati mora objekt \Model.",
        'mass_assignment_failed' => "Masovna dodelitev je bila neuspešna za atribut ':attribute' na modelu.",
    ],
    'warnings' => [
        'tips' => 'Nasveti glede nastavitev sistema',
        'tips_description' => 'Za pravilno nastavitev sistema morate biti pozorni na določene podrobnosti.',
        'permissions' => 'PHP ne more pisati v mapo :name in njene podmape. Prosimo, nastavite spletnemu strežniku ustrezna dovoljenja za to mapo.',
        'extension' => 'PHP razširitev (extension) :name ni nameščena. Prosimo, namestite ustrezno knjižnico in aktivirajte razširitev.',
        'plugin_missing' => 'Za delovanje je potreben vtičnik :name, vendar ni nameščen. Prosimo, namestite ta vtičnik.',
        'debug' => 'Način za odpravljanje napak je omogočen. Ta način ni priporočljiv za produkcijsko okolje.',
        'decompileBackendAssets' => 'Oblikovne datoteke (CSS, JavaSrcipt) v administraciji so trenutno ne-stisnjene. To ni priporočljivo za produkcijsko okolje.',
    ],
    'editor' => [
        'menu_label' => 'Nastavitve urejevalnika',
        'menu_description' => 'Splošne nastavitve urejevalnika, kot npr. velikost pisave in barvna shema.',
        'font_size' => 'Velikost pisave',
        'tab_size' => 'Širina tabulatorja',
        'use_hard_tabs' => 'Odmik s tabulatorjem',
        'code_folding' => 'Strnjevanje kode',
        'code_folding_begin' => 'Označi začetek',
        'code_folding_begin_end' => 'Označi začetek in konec',
        'autocompletion' => 'Samodejno dokončanje',
        'word_wrap' => 'Prelom besed',
        'highlight_active_line' => 'Označi aktivno vrstico',
        'auto_closing' => 'Samodejno zapri označbe',
        'show_invisibles' => 'Prikaži nevidne znake',
        'show_gutter' => 'Prikaži odmike',
        'basic_autocompletion' => 'Osnovno samodejno dokončanje (Ctrl + Space)',
        'live_autocompletion' => 'Instantno samodejno dokončanje',
        'enable_snippets' => 'Omogoči odseke kode (Tab)',
        'display_indent_guides' => 'Prikaži vodila za odmike',
        'show_print_margin' => 'Prikaži rob tiskanja',
        'mode_off' => 'Izključi',
        'mode_fluid' => 'Fluidno',
        '40_characters' => '40 znakov',
        '80_characters' => '80 znakov',
        'theme' => 'Barvna shema',
        'markup_styles' => 'Označevalni slogi',
        'custom_styles' => 'Slog po meri',
        'custom_styles_comment' => 'Slogi, ki jih želite vključiti v urejevalnik HTML.',
        'markup_classes' => 'Označevalni razredi',
        'paragraph' => 'Odstavek',
        'link' => 'Povezava',
        'table' => 'Tabela',
        'table_cell' => 'Celica tabele',
        'image' => 'Slika',
        'label' => 'Opis',
        'class_name' => 'Oznaka razreda',
        'markup_tags' => 'Označevalne oznake',
        'markup_tag' => 'Označevalna oznaka',
        'allowed_empty_tags' => 'Dovoljene prazne oznake',
        'allowed_empty_tags_comment' => 'Seznam oznak, ki niso odstranjene, če v njih ni vsebine.',
        'allowed_tags' => 'Dovoljene oznake',
        'allowed_tags_comment' => 'Seznam dovoljenih oznak.',
        'no_wrap' => 'Ne-zavite oznake',
        'no_wrap_comment' => 'Seznam oznak, ki naj ne bodo zavite znotraj blokovskih oznak.',
        'remove_tags' => 'Odstrani oznake',
        'remove_tags_comment' => 'Seznam oznak, ki so odstranjene skupaj z njihovo vsebino.',
        'line_breaker_tags' => 'Oznake prekinitve vrstic',
        'line_breaker_tags_comment' => 'Seznam oznak, ki se uporabljajo za postavitev elementa prekinitve med vrstice.',
        'toolbar_options' => 'Nastavitve orodne vrstice',
        'toolbar_buttons' => 'Gumbi orodne vrstice',
        'toolbar_buttons_comment' => 'Gumbi orodne vrstice, ki se privzeto prikažejo v urejevalniku. [fullscreen, bold, italic, underline, strikeThrough, subscript, superscript, fontFamily, fontSize, |, color, emoticons, inlineStyle, paragraphStyle, |, paragraphFormat, align, formatOL, formatUL, outdent, indent, quote, insertHR, -, insertLink, insertImage, insertVideo, insertAudio, insertFile, insertTable, undo, redo, clearFormatting, selectAll, html]',
        'toolbar_buttons_preset' => 'Vstavite prednastavljeno konfiguracijo gumbov orodne vrstice:',
        'toolbar_buttons_presets' => [
            'default' => 'Privzeto',
            'minimal' => 'Minimalno',
            'full' => 'Polno',
        ],
        'paragraph_formats' => 'Formati odstavkov',
        'paragraph_formats_comment' => 'Možnosti, ki se prikažejo v spustnem seznamu Format odstavka.',
    ],
    'tooltips' => [
        'preview_website' => 'Ogled spletne strani',
    ],
    'mysettings' => [
        'menu_label' => 'Moje nastavitve',
        'menu_description' => 'Nastavitve, povezane z vašim administratorskim računom',
    ],
    'myaccount' => [
        'menu_label' => 'Moj profil',
        'menu_description' => 'Urejanje podatkov vašega profila, kot so ime, e-pošta in geslo.',
        'menu_keywords' => 'varnostna prijava',
    ],
    'branding' => [
        'menu_label' => 'Prilagoditev administracije',
        'menu_description' => 'Prilagoditev okolja administracije, kot so npr. ime, barve in logotip.',
        'brand' => 'Splošno',
        'logo' => 'Logotip',
        'logo_description' => 'Naložite poljuben logotip, ki ga želite prikazati v administraciji.',
        'favicon' => 'Ikona zaznamka (favicon)',
        'favicon_description' => 'Naložite poljubno ikono zaznamka za administracijo.',
        'app_name' => 'Ime aplikacije',
        'app_name_description' => 'Ime je prikazano v naslovni vrstici administracije.',
        'app_tagline' => 'Slogan aplikacije',
        'app_tagline_description' => 'Slogan je prikazan na prijavnem oknu administracije.',
        'colors' => 'Barve',
        'primary_color' => 'Primarna barva',
        'secondary_color' => 'Sekundarna barva',
        'accent_color' => 'Poudarjena barva',
        'styles' => 'CSS slogi',
        'custom_stylesheet' => 'CSS slogi po meri',
        'navigation' => 'Navigacija',
        'menu_mode' => 'Slog menija',
        'menu_mode_inline' => 'Vrstični',
        'menu_mode_inline_no_icons' => 'Vrstični (brez ikon)',
        'menu_mode_tile' => 'Ploščice',
        'menu_mode_collapsed' => 'Strnjen',
    ],
    'backend_preferences' => [
        'menu_label' => 'Nastavitve administracije',
        'menu_description' => 'Upravljajte nastavitve vašega profila, kot je npr. jezik.',
        'region' => 'Regija',
        'code_editor' => 'Urejevalnik kode',
        'timezone' => 'Časovni pas',
        'timezone_comment' => 'Prikazani datumi se prilagodijo glede na izbran časovni pas.',
        'locale' => 'Jezik',
        'locale_comment' => 'Izberite želeni jezik za uporabo v administraciji.',
    ],
    'access_log' => [
        'hint' => 'Ta dnevnik beleži seznam uspešnih prijav administratorjev. Zapisi se hranijo :days dni.',
        'menu_label' => 'Dnevnik dostopov',
        'menu_description' => 'Prikaz seznama uspešnih prijav administratorjev.',
        'id' => 'ID',
        'created_at' => 'Datum in čas',
        'type' => 'Tip',
        'login' => 'Uporabniško ime',
        'ip_address' => 'IP naslov',
        'first_name' => 'Ime',
        'last_name' => 'Priimek',
        'email' => 'E-pošta',
    ],
    'filter' => [
        'all' => 'vsi',
        'options_method_not_exists' => "Model :model mora vsebovati metodo :method(), ki vrača možnosti za filter ':filter'.",
        'date_all' => 'vse periode',
        'number_all' => 'vsa števila',
    ],
    'import_export' => [
        'upload_csv_file' => '1. Naložite CSV datoteko',
        'import_file' => 'Uvozi datoteko',
        'row' => 'Vrstica :row',
        'first_row_contains_titles' => 'Prva vrstica vsebuje naslove stolpcev',
        'first_row_contains_titles_desc' => 'To polje pustite označeno, če prva vrstica v vaši CSV datoteki vsebuje naslove stolpcev.',
        'match_columns' => '2. Povežite stolpce v datoteki s polji v podatkovni zbirki',
        'file_columns' => 'Stolpci v datoteki',
        'database_fields' => 'Polja v podatkovni zbirki',
        'set_import_options' => '3. Nastavite možnosti uvoza',
        'export_output_format' => '1. Izberite format izvozne datoteke',
        'file_format' => 'Format datoteke',
        'standard_format' => 'Standardni format',
        'custom_format' => 'Format po meri',
        'delimiter_char' => 'Znak ločila',
        'enclosure_char' => 'Znak zaključka',
        'escape_char' => 'Izhodni znak',
        'select_columns' => '2. Označite stolpce za izvoz',
        'column' => 'Stolpec',
        'columns' => 'Stolpci',
        'set_export_options' => '3. Nastavitve možnosti izvoza',
        'show_ignored_columns' => 'Prikaži prezrte stolpce',
        'auto_match_columns' => 'Samodejno poveži stolpce',
        'created' => 'Ustvarjeno',
        'updated' => 'Posodobljeno',
        'skipped' => 'Izpuščeno',
        'warnings' => 'Opozorila',
        'errors' => 'Napake',
        'skipped_rows' => 'Izpuščene vrstice',
        'import_progress' => 'Napredek uvoza',
        'processing' => 'Procesiranje',
        'import_error' => 'Napaka pri uvozu',
        'upload_valid_csv' => 'Prosimo, naložite veljavno CSV datoteko.',
        'drop_column_here' => 'Spustite stolpec sem...',
        'ignore_this_column' => 'Prezri ta stolpec',
        'processing_successful_line1' => 'Izvoz datoteke je zaključen!',
        'processing_successful_line2' => 'Brskalnik vas bo sedaj preusmeril na prenos datoteke.',
        'export_progress' => 'Napredek izvoza',
        'export_error' => 'Napaka pri izvozu',
        'column_preview' => 'Predogled stolpca',
        'file_not_found_error' => 'Datoteke ni mogoče najti',
        'empty_error' => 'Ni podanih podatkov za izvoz',
        'empty_import_columns_error' => 'Prosimo, določite nekaj stolpcev za uvoz.',
        'match_some_column_error' => 'Prosimo, najprej povežite nekaj stolpcev.',
        'required_match_column_error' => 'Prosimo, določite povezavo za zahtevano polje :label.',
        'empty_export_columns_error' => 'Prosimo, določite nekaj stolpcev za izvoz.',
        'behavior_missing_uselist_error' => 'Implementirati morate kontroler ListController z omogočeno možnostjo izvoza "useList".',
        'missing_model_class_error' => 'Prosimo, določite modelClass lastnost za :type.',
        'missing_column_id_error' => 'Manjka identifikator stolpca',
        'unknown_column_error' => 'Neznan stolpec',
        'encoding_not_supported_error' => 'Kodiranje izvorne datoteke ni prepoznano. Za uspešen uvoz vaše datoteke izberite ustrezno kodiranje.',
        'encoding_format' => 'Kodiranje datoteke',
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
        'manage_media' => 'Nalaganje in upravljanje z media vsebinami - slike, video posnetki, zvočni posnetki, dokumenti',
        'allow_unsafe_markdown' => 'Dovoli uporabo nevarnih označb (lahko vključi Javascript)',
    ],
    'mediafinder' => [
        'label' => 'Media brskalnik',
        'default_prompt' => 'Kliknite gumb %s za iskanje media elementa',
        'no_image' => 'Slike ni mogoče najti',
    ],
    'media' => [
        'menu_label' => 'Media',
        'upload' => 'Naloži',
        'move' => 'Premakni',
        'delete' => 'Izbriši',
        'add_folder' => 'Dodaj mapo',
        'search' => 'Iskanje',
        'display' => 'Prikaz',
        'filter_all' => 'Vse',
        'filter_images' => 'Slike',
        'filter_video' => 'Video',
        'filter_audio' => 'Audio',
        'filter_documents' => 'Dokumenti',
        'library' => 'Knjižnica',
        'size' => 'Velikost',
        'title' => 'Naslov',
        'last_modified' => 'Zadnja sprememba',
        'public_url' => 'URL',
        'click_here' => 'Kliknite tukaj',
        'thumbnail_error' => 'Napaka pri ustvarjanju sličice.',
        'return_to_parent' => 'Vrni se v nadrejeno mapo',
        'return_to_parent_label' => 'Pojdi gor ..',
        'nothing_selected' => 'Nič ni izbrano.',
        'multiple_selected' => 'Izbranih je več elementov.',
        'uploading_file_num' => 'Nalaganje :number datotek(e)...',
        'uploading_complete' => 'Nalaganje zaključeno',
        'uploading_error' => 'Nalaganje ni uspelo',
        'type_blocked' => 'Izbrani tip datoteke je blokiran iz varnostnih razlogov.',
        'order_by' => 'Razvrsti po',
        'direction' => 'Smer',
        'direction_asc' => 'Naraščajoče',
        'direction_desc' => 'Padajoče',
        'folder' => 'Mapa',
        'no_files_found' => 'Vaše iskanje se ne ujema z nobeno datoteko.',
        'delete_empty' => 'Prosimo, izberite elemente, ki jih želite izbrisati.',
        'delete_confirm' => 'Želite izbrisati izbrane elemente?',
        'error_renaming_file' => 'Napaka pri preimenovanju elementa.',
        'new_folder_title' => 'Nova mapa',
        'folder_name' => 'Ime mape',
        'error_creating_folder' => 'Napaka pri ustvarjanju mape',
        'folder_or_file_exist' => 'Datoteka ali mapa z izbranim imenom že obstaja.',
        'move_empty' => 'Prosimo, izberite elemente, ki jih želite premakniti.',
        'move_popup_title' => 'Premakni datoteke ali mape',
        'move_destination' => 'Ciljna mapa',
        'please_select_move_dest' => 'Prosimo, izberite ciljno mapo.',
        'move_dest_src_match' => 'Prosimo, izberite drugo ciljno mapo.',
        'empty_library' => 'Tukaj izgleda malo prazno. Za začetek naložite datoteke ali ustvarite mape.',
        'insert' => 'Vstavi',
        'crop_and_insert' => 'Obreži in vstavi',
        'select_single_image' => 'Prosimo, izberite samo eno sliko.',
        'selection_not_image' => 'Izbrani element ni slika.',
        'restore' => 'Razveljavi vse spremembe',
        'resize' => 'Spremeni velikost...',
        'selection_mode_normal' => 'Normalno',
        'selection_mode_fixed_ratio' => 'Fiksno razmerje',
        'selection_mode_fixed_size' => 'Fiksna velikost',
        'height' => 'Višina',
        'width' => 'Širina',
        'selection_mode' => 'Izbirni način',
        'resize_image' => 'Spremeni velikost slike',
        'image_size' => 'Velikost slike:',
        'selected_size' => 'Izbrano:',
        'rename_popup_title' => 'Preimenuj',
        'rename_new_name' => 'Novo ime',
        'move_please_select' => 'izberite',
        'move_button' => 'Premakni',
    ],
];
