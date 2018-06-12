<?php
/**
 * Created by PhpStorm.
 * User: kgbot
 * Date: 6/4/18
 * Time: 1:37 AM
 */

return [

    'routes' => [

        /**
         * Route prefix, example of route http://localhost/js/localizations.js
         */
        'prefix'     => env( 'LARAVEL_LOCALIZATION_PREFIX', '/js/localization.js' ),

        /**
         * Route name, defaults to assets.lang
         */
        'name'       => env( 'LARAVEL_LOCALIZATION_ROUTE_NAME', 'assets.lang' ),

        /**
         * Middleware used on localization routes.
         *
         * You can add more middleware with .env directive, example LARAVEL_LOCALIZATION_MIDDLEWARE=web,auth:api, etc.
         *
         * Don't use space in .env directive after ,
         */
        'middleware' => ( env( 'LARAVEL_LOCALIZATION_MIDDLEWARE' ) ) ?
            explode( ',', env( 'LARAVEL_LOCALIZATION_MIDDLEWARE' ) )
            : [],
    ],
    'events' => [

        /**
         * This package emits some events after it getters all translation messages
         *
         * Here you can change channel on which events will broadcast
         */
        'channel' => env( 'LARAVEL_LOCALIZATION_EVENTS_CHANNEL', '' ),
    ],
];
