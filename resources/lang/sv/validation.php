<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Anpassade valideringsmeddelanden
    |--------------------------------------------------------------------------
    |
    | Här kan du definiera egna felmeddelanden för specifika fält/regler.
    | Exemplet nedan visar ett meddelande för när en kund redan finns.
    |
    */

    'custom' => [
        'address' => [
            'unique' => 'En kund med detta namn och adress finns redan.',
        ],
    ],

];