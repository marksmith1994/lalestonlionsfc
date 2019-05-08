<?php

return array(
    'marketplace'   => [
        'enabled'   => false
    ],
    'external'      => [
        'intelligent_search_help'   => true,
        'news_overlay'              => false,
        'news'                      => false,
    ],
    'accessibility' => [
        'toolbar_titles' => true,
    ],
    'session'       => [
        'name'  => 'LGTCMSSESSION'
    ],
    'seo'           => [
        'redirect_to_canonical_url' => 0,
        'url_rewriting'             => true,
        'url_rewriting_all'         => true,
        'trailing_slash'            => true
    ],
    'design'        => [
        //'enable_custom'     => false, // This allows up to make use of the ThemeBlockClasses/getThemeAreaClasses But also gives control on padding and additional settings
        'enable_layouts'    => false,
    ],
    // 'email'         => [
    //     'default' => [
    //         'address'   => 'mail-server@limegreentangerine.net',
    //         'name'      => 'mail-server@limegreentangerine.net',
    //     ],
    // ],
    'debug' => [
        'display_errors'    => false,
        'detail'            => 'message'
    ],
    // 'mail' => [
    //     'method' => 'SMTP',
    //     'methods' => [
    //         'smtp' => [
    //             'server'                    => 'mail.authsmtp.com',
    //             'port'                      => '25',
    //             'username'                  => 'ac64715',
    //             'password'                  => 'aynjtuv6dvbzrt',
    //             'encryption'                => '',
    //             'messages_per_connection'   => null,
    //         ],
    //     ],
    // ],
);
