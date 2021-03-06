<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */
    "accepted"         => "Polje :attribute mora biti prihvaćeno.",
    "active_url"       => "Polje :attribute nije validan URL.",
    "after"            => "Polje :attribute mora biti datum posle :date.",
    "alpha"            => "Polje :attribute može sadržati samo slova.",
    "alpha_dash"       => "Polje :attribute može sadržati samo slova, brojeve i povlake.",
    "alpha_num"        => "Polje :attribute može sadržati samo slova i brojeve.",
    "array"            => "Polje :attribute mora sadržati nekih stroj stavki.",
    "before"           => "Polje :attribute mora biti datum pre :date.",
    "between"          => array(
        "numeric" => "Polje :attribute mora biti između :min - :max.",
        "file"    => "Fajl :attribute mora biti između :min - :max kilobajta.",
        "string"  => "Polje :attribute mora biti između :min - :max karaktera.",
        "array"   => "Polje :attribute mora biti između :min - :max stavki."
    ),
    "confirmed"        => "Potvrda polja :attribute se ne poklapa.",
    "date"             => "Polje :attribute nije važeći datum.",
    "date_format"      => "Polje :attribute ne odgovora prema formatu :format.",
    "different"        => "Polja :attribute i :other moraju biti različita.",
    "digits"           => "Polje :attribute mora sadržati :digits šifri.",
    "digits_between"   => "Polje :attribute mora biti izemđu :min i :max šifri.",
    "email"            => "Format polja :attribute nije validan.",
    "exists"           => "Odabrano polje :attribute nije validno.",
    "image"            => "Polje :attribute mora biti slika.",
    "in"               => "Odabrano polje :attribute nije validno.",
    "integer"          => "Polje :attribute mora biti broj.",
    "ip"               => "Polje :attribute mora biti validna IP adresa.",
    "max"              => array(
        "numeric" => "Polje :attribute mora biti manje od :max.",
        "file"    => "Polje :attribute mora biti manje od :max kilobajta.",
        "string"  => "Polje :attribute mora sadržati manje od :max karaktera.",
        "array"   => "Polje :attribute ne smije da image više od :max stavki."
    ),
    "mimes"            => "Polje :attribute mora biti fajl tipa: :values.",
    "min"              => array(
        "numeric" => "Polje :attribute mora biti najmanje :min.",
        "file"    => "Fajl :attribute mora biti najmanje :min kilobajta.",
        "string"  => "Polje :attribute mora sadržati najmanje :min karaktera.",
        "array"   => "Polje :attribute mora sadrzati najmanje :min stavku."
    ),
    "not_in"           => "Odabrani element polja :attribute nije validan.",
    "numeric"          => "Polje :attribute mora biti broj.",
    "regex"            => "Polje :attribute format is invalid.",
    "required"         => "Polje :attribute je obavezno.",
    "required_if"      => "Polje :attribute je potrebno kada polje :other sadrži :value.",
    "required_with"    => "Polje :attribute je potrebno kada polje :values je prisutan.",
    "required_with_all" => "The :attribute field is required when :values is present.",
    "required_without" => "Polje :attribute je potrebno kada polje :values nije prisutan.",
    "required_without_all" => "Polje :attribute je potrebno kada nijedan od sledeći polja :values nisu prisutni.",
    "same"             => "Polja :attribute i :other se moraju poklapati.",
    "size"             => array(
        "numeric" => "Polje :attribute mora biti :size.",
        "file"    => "Fajl :attribute mora biti :size kilobajta.",
        "string"  => "Polje :attribute mora biti :size karaktera.",
        "array"   => "Polje :attribute mora sadržati :size stavki."
    ),
    "unique"           => "Polje :attribute već postoji.",
    "url"              => "Format polja :attribute ne važi.",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => array(
        'attribute-name' => array(
            'rule-name' => 'custom-message',
        ),
    ),

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => array(),

);
