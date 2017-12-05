<?php
/**
 * Config file for theme selector.
 *
 */
return [

    "separator" => "------------------------------------------------",

    "themes" => [

        "separator0" => "------------------------------------------------",

        "base"      => [
            "title"      => "Minimal style, only the plain base",
            "class"      => "",
            "stylesheets" => [
                "css/base.min.css", "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            ]
        ],

        "default"   => [
            "title"      => "Your own selected default theme",
            "class"      => "light",
            "stylesheets" => [
                "css/default.min.css",
                "css/fun.min.css",
                "https://fonts.googleapis.com/css?family=Bigelow+Rules%7CQuattrocento%7CComfortaa%7CCinzel%7CSpectral+SC%7CPoppins",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css",
                "https://fonts.googleapis.com/css?family=Julius+Sans+One%7CPhilosopher%7CSatisfy"

            ]
        ],

        "separator1" => "------------------------------------------------",

        "light"     =>  [
            "title"      => "Very light theme, white, black and nuances of grey",
            "class"      => "light",
            "stylesheets" => [
                "css/light.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            ]
        ],

        "color"     => [
            "title"      => "Enhance the light theme by adding a tiny bit of color",
            "class"      => "light",
            "stylesheets" => [
                "css/color.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            ]
        ],

        "dark"      => [
            "title"      => "Dark background and light text",
            "class"      => "dark",
            "stylesheets" => [
                "css/dark.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            ]
        ],

        "colorful"  => [
            "title"      => "Make a very colorful theme",
            "class"      => "light",
            "stylesheets" => [
                "css/colorful.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            ]
        ],

        "typography" => [
            "title"      => "A theme where the typography really stands out",
            "class"      => "light",
            "stylesheets" => [
                "css/typo.min.css",
                "https://fonts.googleapis.com/css?family=Bigelow+Rules%7CQuattrocento%7CComfortaa%7CCinzel%7CSpectral+SC%7CPoppins",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            ]
        ],

        "separator2" => "------------------------------------------------",

        "fun"       => [
            "title"      => "All fun, test and play, make it stand out!",
            "class"      => "light",
            "stylesheets" => [
                "css/fun.min.css",
                "https://fonts.googleapis.com/css?family=Bigelow+Rules%7CQuattrocento%7CComfortaa%7CCinzel%7CSpectral+SC%7CPoppins",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css",
                "https://fonts.googleapis.com/css?family=Julius+Sans+One%7CPhilosopher%7CSatisfy"
            ]
        ],
    ]
];
