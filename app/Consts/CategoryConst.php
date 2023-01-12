<?php

namespace App\Consts;

// usersで使う定数
class CategoryConst
{
    const CATEGORY_FOOD = 0;
    const CATEGORY_TRAVEL = 1;
    const CATEGORY_BEAUTY = 2;
    const CATEGORY_CULTURE = 3;
    const CATEGORY_ART = 4;
    const CATEGORY_CHARITY = 5;
    const CATEGORY_BUSINESS = 6;
    const CATEGORY_TVMOVIE = 7;
    const CATEGORY_AUTOMOBILE = 8;
    const CATEGORY_FINANCE = 9;
    const CATEGORY_GAME = 10;
    const CATEGORY_LIFE = 11;
    const CATEGORY_MEDICAL = 12;
    const CATEGORY_MUSIC = 13;
    const CATEGORY_HOWTO = 14;
    const CATEGORY_COMPUTERMOBILE = 15;
    const CATEGORY_SCIENCE = 16;
    const CATEGORY_SPORTS = 17;
    const CATEGORY_DIY = 18;
    const CATEGORY_BOOK = 19;
    const CATEGORY_MENTALMIND = 20;
    const CATEGORY_LIST = [
        'Food' => self::CATEGORY_FOOD,
        'Travel' => self::CATEGORY_TRAVEL,
        'Beauty' => self::CATEGORY_BEAUTY,
        'Culture' => self::CATEGORY_CULTURE,
        'Art' => self::CATEGORY_ART,
        'Charity' => self::CATEGORY_CHARITY,
        'Business' => self::CATEGORY_BUSINESS,
        'TV・Movies' => self::CATEGORY_TVMOVIE,
        'Automobile' => self::CATEGORY_AUTOMOBILE,
        'Finance' => self::CATEGORY_FINANCE,
        'Game' => self::CATEGORY_GAME,
        'Life' => self::CATEGORY_LIFE,
        'Medical' => self::CATEGORY_MEDICAL,
        'Music' => self::CATEGORY_MUSIC,
        'How-to' => self::CATEGORY_HOWTO,
        'Computer・Mobilephone etc' => self::CATEGORY_COMPUTERMOBILE,
        'Science' => self::CATEGORY_SCIENCE,
        'Sports' => self::CATEGORY_SPORTS,
        'DIY' => self::CATEGORY_DIY,
        'Books' => self::CATEGORY_BOOK,
        'Mental・Mind' => self::CATEGORY_MENTALMIND,
    ];
}
