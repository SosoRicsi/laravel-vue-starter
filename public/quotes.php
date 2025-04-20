<?php

use Illuminate\Support\Collection;

$quotes = [
    'hu' => [
        'A barátod az, aki mindent tud rólad, és mégis szeret. - Elbert Hubbard',
        'Ne sírj, mert vége lett! Mosolyogj, mert megtörtént! - Ludwig Jacobowski',
        'Az igazi barát az, aki akkor jön, amikor mindenki más megy. - Walter Winchell',
        'Jobb megtenni és megbánni, mint megbánni, hogy nem tettem meg. - Lucille Ball',
        'Akit feledni akarunk, arra gondolunk. - Jean de La Bruyére',
        'A kihullt könny megbosszúlja magát azon, aki okozá. - Jókai Mór',
        'Ha az út, amelyen jársz, állandóan fájdalmat okoz neked, akkor az nem a te utad. - Judith Sills',
        'A család mindig az első, sosem mondhatsz le róluk. Bármit is tesznek érted vagy ellened, egyedül bennük bízhatsz. - Ezel - Bosszú mindhalálig c. film',
        'Sose szégyelld a származásodat. (...) Lesznek majd, akik az orrod alá dörgölik, de azokat észre sem kell venni. - J. K. Rowling',
        'Az igazán nehéz helyzetben semmire sincs annyira szükségünk, mint egy szerető családra. - Carolyn Hax'
    ],
    'en' => [
        'Your friend is the one who knows everything about you, and still loves you. - Elbert Hubbard',
        'Don’t cry because it’s over. Smile because it happened. - Ludwig Jacobowski',
        'A true friend is the one who comes in when the whole world has gone out. - Walter Winchell',
        'It’s better to do it and regret it than to regret not doing it. - Lucille Ball',
        'The one we want to forget is the one we keep thinking about. - Jean de La Bruyère',
        'The tear that fell will take revenge on the one who caused it. - Mór Jókai',
        'If the path you’re walking constantly brings you pain, then it’s not your path. - Judith Sills',
        'Family always comes first, you can never give up on them. No matter what they do for or against you, they’re the only ones you can truly trust. - Ezel (Ezel: Revenge for Life)',
        'Never be ashamed of where you come from. (...) There will be people who throw it in your face, but you don’t have to notice them. - J. K. Rowling',
        'In truly difficult times, there’s nothing we need more than a loving family. - Carolyn Hax'
    ]
];

return new Collection($quotes[env('APP_LOCALE')] ?? $quotes['en']);
