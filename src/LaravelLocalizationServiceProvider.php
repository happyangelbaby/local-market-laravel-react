<?php
/**
 * Created by PhpStorm.
 * User: kgbot
 * Date: 6/3/18
 * Time: 11:48 PM
 */

namespace KgBot\LaravelDeploy;


use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use KgBot\LaravelLocalization\Classes\ExportLocalizations;
use KgBot\LaravelLocalization\Facades\ExportLocalizations as ExportFacade;

class LaravelLocalizationServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->app->bind( 'export-localization', function () {

            return new ExportLocalizations();
        } );

        $loader = AliasLoader::getInstance();
        $loader->alias( ExportFacade::class, 'ExportLocalization' );

        /**
         * Config
         */
        $this->mergeConfigFrom(
            __DIR__ . '//config/laravel-localization.php', 'laravel-localization'
        );

        $this->publishes( [
            __DIR__ . '/config/laravel-localization.php' => config_path( 'laravel-localization.php' ),
        ], 'config' );

        /**
         * Routes
         */
        $this->loadRoutesFrom( __DIR__ . '/routes.php' );
    }
}