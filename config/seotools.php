<?php

return [
    'meta'      => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "HyperSpace Software Indonesia", // set false to total remove
            'description'  => 'Buat aplikasi ERP, Sistem Informasi, App Android dan iOS dengan kwalitas terbaik dan waktu launching yang cepat. Hanya di Hyperspace Software Indonesia!', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['hyperspace','hyperspace id','hyperspace software','software house','software house jogja', 'software house indonesia','bikin aplikasi','bikin aplikasi android','bikin aplikasi ios','jasa bikin website','jasa bikin aplikasi','hyperspace software','hyperspace software house','jasa bikin logo','jasa desain','jasa pembuatan aplikasi','jasa pembuatan software','jasa pembuatan website','website murah'],
			//'author'	   => "https://www.instagram.com/hyperspace.id/",
            'canonical'    => null, // Set null for using Url::current(), set false to total remove
        ],

        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
        ],
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'HyperSpace Software Indonesia!', // set false to total remove
            'description' => 'The best software house around the Universe', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => false,
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
          //'card'        => 'summary',
          //'site'        => '@LuizVinicius73',
        ],
    ],
];
