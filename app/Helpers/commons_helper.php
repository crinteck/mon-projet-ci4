<?php

if (!function_exists('getSuportedlanguages')) {

    function getSupportedlanguages()
    {
        $supportedLanguages = [
            [
                'locale' => 'en',
                'name' => "English",
                'nativeName' => 'english'
            ],
            [
                'locale' => 'fr',
                'name' => "Français",
                'nativeName' => 'français'
            ],

        ];

        return $supportedLanguages;
    }
}


if(!function_exists('getUriWithoutLocale')){

    function getUriWithoutLocale(){

        $uri = service('uri');

        $uriSegments = $uri->getSegments();

        array_shift($uriSegments);

        return implode('/',$uriSegments);


    }
}
