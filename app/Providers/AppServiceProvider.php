<?php



namespace App\Providers;

use \App\Helpers\MailHelper;

use Illuminate\Support\ServiceProvider;



class AppServiceProvider extends ServiceProvider

{

    /**

     * Register any application services.

     *

     * @return void

     */

    public function register()

    {

        //

    }



    /**

     * Bootstrap any application services.

     *

     * @return void

     */

    public function boot()

    {

        $this->app->singleton('MailHelper', MailHelper::class);
        $captcha = [
            'secret' => \SettingHelper::getSetting('gg_captcha_secret'),
            'sitekey' => \SettingHelper::getSetting('gg_captcha_id'),
            'options' => [
                'timeout' => 300,
            ]
        ];
        \Config::set('captcha', $captcha);
    }

}

