<?php

return [
    'campaign'          => [
        'export'    => 'A kampány exportja elkészült, <a href=":link">ide kattintva</a> letöltheted. A hivatkozás 30 percig lesz elérhető.',
        'join'      => ':user csatlakozott a :campaign kampányhoz.',
        'leave'     => ':user elhagyta a :campaign kampányt.',
        'role'      => [
            'add'       => 'Megkaptad a :role szerepet a :campaign kampányban.',
            'remove'    => 'Elvesztetted a :role szerepet a :campaign kampányban.',
        ],
    ],
    'header'            => ':count értesítésed van.',
    'index'             => [
        'description'   => 'A legújabb értesítéseid.',
        'title'         => 'Értesítések',
    ],
    'no_notifications'  => 'Jelenleg nincs értesítésed.',
    'permissions'       => [
        'body'  => 'Hé, gondoltuk jobb, ha tudod, hogy teljesen átdolgoztuk a jogosultságok rendszerét minden kampányban!</p><p>A kampányokban mostantól szerepeket tudsz osztani, minden szerep külön jogosultságlistával entitások hozzáféréséhez, szerkesztéséhez és törléséhez. Minden entitást finomhangolhatsz felhasználó-specifikus jogosultságokkal is, azaz Béla és Alfréd szerkesztheti a saját karaktereit! <p></p> Az egyetlen bökkenő, hogy a sokfelhasználós kampányokban be kell állítsd az új jogosultságlistát. Ha te vagy a kampány Adminja, megteheted ezt a kampány vezérlőpultján. Ha a kampány tagja vagy, semmit sem fogsz látni, amíg a gazdája nem intézkedik.',
        'title' => 'Jogosultság-változások',
    ],
];
