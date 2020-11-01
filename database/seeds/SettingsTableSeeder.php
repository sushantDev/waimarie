<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder {

    /**
     * Run the Setting model database seed.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
                'slug'  => 'name',
                'value' => 'Waimarie: Hamilton East Community House',
            ],
           
            [
                'slug'  => 'phone',
                'value' => '(07) 858 3453',
            ],
           
            [
                'slug'  => 'email',
                'value' => 'manager@waimarie.org',
            ],

            [
                'slug'  => 'address',
                'value' => '53 Wellington St, Hamilton East 3216',
            ],

            [
                'slug'  => 'facebook',
                'value' => 'https://www.facebook.com/Waimarie.Hamilton.East.Community.House',
            ],
           
            [
                'slug'  => 'twitter',
                'value' => 'https://www.twitter.com',
            ],
            
            [
                'slug'  => 'google_plus',
                'value' => 'https://www.google.com',
            ],
          
            [
                'slug'  => 'logo',
                'value' => '/img/logo.png',
            ],

            [
                'slug'  => 'logojpg',
                'value' => 'assets/waimariedemo/images/logo.jpg',
            ],


            [
                'slug'  => 'facebook_logo',
                'value' => '/img/facebook.png',
            ],
           
            [
                'slug'  => 'twitter_logo',
                'value' => '/img/twitter.png',
            ],
           
            [
                'slug'  => 'google_plus_logo',
                'value' => '/img/google-plus.png',
            ],
          
            [
                'slug'  => 'vat',
                'value' => '0.13',
            ],
           
            [
                'slug'  => 'office-weekdays-hours',
                'value' => '09:00 AM to 06:00 PM NPT',
            ],
            [
                'slug'  => 'office-weekdays-hours_np',
                'value' => '09:00 AM to 06:00 PM NPT',
            ],
        ];

        DB::table('settings')->truncate();

            foreach ($settings as $key => $setting)
            {
                DB::table('settings')->insert($setting);
            }
    }
}
