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
    const CATEGORY_LIST = [
        '食品' => self::CATEGORY_FOOD,
        '旅行' => self::CATEGORY_TRAVEL,
        '美容' => self::CATEGORY_BEAUTY,
        '文化' => self::CATEGORY_CULTURE,
        'アート' => self::CATEGORY_ART,
        '慈善活動' => self::CATEGORY_CHARITY,
        'ビジネス' => self::CATEGORY_BUSINESS,
        'TV・映画' => self::CATEGORY_TVMOVIE,
        '自動車・バイク等' => self::CATEGORY_AUTOMOBILE,
        '金融' => self::CATEGORY_FINANCE,
        'ゲーム' => self::CATEGORY_GAME,
        '生活' => self::CATEGORY_LIFE,
        '医療' => self::CATEGORY_MEDICAL,
        '音楽' => self::CATEGORY_MUSIC,
        'ハウツー' => self::CATEGORY_HOWTO,
        'PC・モバイル等' => self::CATEGORY_COMPUTERMOBILE,
        'サイエンス' => self::CATEGORY_SCIENCE,
        'スポーツ' => self::CATEGORY_SPORTS,
        'DIY' => self::CATEGORY_DIY,
        '本' => self::CATEGORY_BOOK,
    ];
}
