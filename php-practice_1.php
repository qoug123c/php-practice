<?php
/*Q1*/
$name = '大塚';
echo '私の名前は「' . $name . '」です。';

/*Q2*/
$num = 5 * 4;
echo $num . "\n";
echo $num / 2;

/*Q3*/
echo date("現在時刻は、Y年m月d日 H時i分s秒です。") ;

/*Q4(2パターン)*/
/*Q4 パターン①*/
$device = 'パターン①';

if ($device === 'windows') {
    echo '使用OSは、windowsです。';
} else {
    if ($device === 'mac'){
        echo '使用OSは、macです。';
        exit;
    }
    echo 'どちらでもありません。';
}
/*Q4 パターン②*/
$device = 'パターン②';

if ($device === 'windows' || $device === 'mac') {
    echo '使用OSは、' . "$device" . 'です。';
} else {
    echo 'どちらでもありません。';
}

/*Q5*/
$age = 18;
$message = ($age < 18) ? '未成年です。' : '成人です。';

echo $message;

/*Q6*/
$kanto = ['神奈川県', '東京都', '栃木県', '千葉県', '群馬県', '茨城県', '埼玉県'];

echo $kanto[2] . 'と' . $kanto[3]  . 'は関東地方の都道府県です。';

/*Q7*/ //【再提出】※foreachを使用。
$array = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];

foreach ($array as $x => $y) {
        echo  $y  . "\n";
}

/*Q8 ※Q7の$arrayの記入を省略しております。プログラム実行の際はQ7の$arrayを追記ください。*/
foreach ($array as $x => $y) {
    if ($x === '埼玉県') {
        echo "$x" . 'の県庁所在地は、' . "$y" .'です。';
    }
}

/*Q9 */ //【再提出】※愛知県も大阪府も県庁所在地をバリューとする。
$array += [
    '愛知県' => '名古屋市',
    '大阪府' => '大阪府'
];

foreach ($array as $x => &$y) {
    if ($x === '愛知県' || $x === '大阪府') {
        echo $x . 'は関東地方ではありません。' . "\n";

    } else {
        echo $x . 'の県庁所在地は、' . $y .'です。' . "\n";

    }
}

/*Q10*/
function hello($name) {
  echo "$name" . 'さん、こんにちは。' . "\n";
}

hello('金谷');
hello('安藤');

/*Q11*/
$price = 1000;

function calcTaxInPrice ($price) {

    return $price * 1.10;
}

$taxInPrice = calcTaxInPrice ($price);
echo "$price" . '円の商品の税込価格は' . "$taxInPrice" . '円です。' . "\n" ;

/*Q12*/ //再提出
function distinguishNum ($num) {

    if ($num % 2 === 0) {
        echo "$num" . 'は偶数です。' . "\n";
    } else {
        echo "$num" . 'は奇数です。' . "\n";

    }
}

distinguishNum (11);
distinguishNum (24);

/*Q13*/
function evaluateGrade ($grades) {
    switch ($grades) {
        case 'A' :
        case 'B' :
            echo '合格です。' . "\n";
            break;

        case 'C' :
            echo '合格ですが追加課題があります。'. "\n";
            break;

        case 'D' :
            echo '不合格です。'. "\n";
            break;

        default :
            echo '判定不明です。講師に問い合わせてください。'. "\n";
            break;

    }
}

evaluateGrade ('A');
evaluateGrade ('E');