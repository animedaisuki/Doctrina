<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
|  Google API Configuration
| -------------------------------------------------------------------
| 
| To get API details you have to create a Google Project
| at Google API Console (https://console.developers.google.com)
| 
|  client_id         string   Your Google API Client ID.
|  client_secret     string   Your Google API Client secret.
|  redirect_uri      string   URL to redirect back to after login.
|  application_name  string   Your Google application name.
|  api_key           string   Developer key.
|  scopes            string   Specify scopes
*/
$config['google']['client_id']        = '860586644820-akn464l9vad9vik42h8qic441k35tbte.apps.googleusercontent.com';
$config['google']['client_secret']    = '03ewwilFl2Bo7q8YUG6oIl2G';
$config['google']['redirect_uri']     = 'https://localhost/demo/login';
$config['google']['application_name'] = 'Cardinal';
$config['google']['api_key']          = '';
$config['google']['scopes']           = array();
