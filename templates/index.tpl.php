<?

$content = [
    'promo_title' => 'Нужен стафф для катки?',
    'promo_text' => 'На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.',
    'open_lots' => 'Открытые лоты',
    'lot_amount' => 'Стартовая цена'
];


$cat = ["Доски и лыжи", "Крепления", "Ботинки", "Одежда", "Инструменты", "Разное"];

$lots = [
    [
        'title' => '2014 Rossignol District Snowboard',
        'category' => "$cat[0]",
        'price' => 10999,
        'url-img' => 'img/lot-1.jpg'
    ],

    [
        'title' => 'DC Ply Mens 2016/2017 Snowboard',
        'category' => $cat[0],
        'price' => 159999,
        'url-img' => 'img/lot-2.jpg'
    ],

    [
        'title' => 'Крепления Union Contact Pro 2015 года размер L/XL',
        'category' => $cat[1],
        'price' => 8000,
        'url-img' => 'img/lot-3.jpg'
    ],

    [
        'title' => 'Ботинки для сноуборда DC Mutiny Charocal',
        'category' => $cat[2],
        'price' => 10999,
        'url-img' => 'img/lot-4.jpg'
    ],

    [
        'title' => 'Куртка для сноуборда DC Mutiny Charocal',
        'category' => $cat[3],
        'price' => 7500,
        'url-img' => 'img/lot-5.jpg'
    ],

    [
        'title' => 'Маска Oakley Canopy',
        'category' => $cat[5],
        'price' => 5400,
        'url-img' => 'img/lot-5.jpg'
    ]

];

?>
<main class="container">
    <section class="promo">
        <h2 class="promo__title"><?= $content['promo_title'] ?></h2>
        <p class="promo__text"><?= $content['promo_text'] ?></p>

        <ul class="promo__list">

            <? foreach ($cat as $cat_title) : ?>
                <li class="promo__item promo__item--boards">
                    <a class="promo__link" href="all-lots.html"><?= $cat_title ?></a>
                </li>
            <? endforeach ?>

        </ul>
    </section>
    <section class="lots">
        <div class="lots__header">
            <h2><?= $content['open_lots'] ?></h2>
        </div>
        <ul class="lots__list">
            <li class="lots__item lot">

                <?
                // formatted number with letter R
                function price () {
                    global $value;
                    $pricefloat = ceil($value['price']);

                    if ($pricefloat <= 999) {
                        echo $pricefloat;
                    } elseif ($pricefloat >= 1000) {
                        $num_format = number_format($pricefloat, 0, '.', ' ');
                        echo $num_format . " &#8381;";
                    }
                }
                ?>

                <?
                foreach ($lots as $key => $value) :
                ?>

                <div class="lot__image">
                    <img src="<?= $value['url-img'] ?>" width="350" height="260" alt="Сноуборд">
                </div>
                <div class="lot__info">
                    <span class="lot__category"><?= $value['category'] ?></span>
                    <h3 class="lot__title"><a class="text-link" href="lot.html"><?= $value['title'] ?></a></h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount"><?= $content['lot_amount'] ?></span>
                            <span class="lot__cost"><? price(); ?><!--<b class="rub">р</b>--></span>
                        </div>
                        <? endforeach; ?>

                        <div class="lot__timer timer">
                            <? time_until_midnight() ?>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </section>
</main>
