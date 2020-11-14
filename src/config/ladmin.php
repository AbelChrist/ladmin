<?php 

  return [
    
    /**
     * Url image logo
     */
    'logos' => [
      'primary' => env('LADMIN_LOGO', 'https://github.com/hexters/ladmin/blob/tw/logo-primary.svg?raw=true'),
      'secondary' => env('LADMIN_LOGO', 'https://github.com/hexters/ladmin/blob/tw/logo-secondary.svg?raw=true'),
    ],

    /**
     * Administrator prefix page
     */
    'prefix' => 'administrator',
    
    /**
     * Authentication Setting
     */
    'auth' => [
      'user' => App\Models\User::class,
      'guard' => 'web'
    ],

    /**
     * Notification status
     */
    'notification' => true,
    'notification_limit' => 100 // Notification will only appear as many as 100 data

    
  ];
