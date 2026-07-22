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

/*Q7*/
$array = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];

echo $array['東京都'] . "\n" . $array['神奈川県'] . "\n" . $array['千葉県'] . "\n" . $array['栃木県'] . "\n" . $array['群馬県'] . "\n" . $array['茨城県'];

/*Q8 ※Q7の$arrayの記入を省略しております。プログラム実行の際はQ7の$arrayを追記ください。*/
foreach ($array as $x => $y) {
    if ($x === '埼玉県') {
        echo "$x" . 'の県庁所在地は、' . "$y" .'です。';
    }
}

/*Q9 ※Q7の$arrayの記入を省略しております。プログラム実行の際はQ7の$arrayを追記ください。*/
$array += [
    '愛知県' => '',
    '大阪府' => ''
];
foreach ($array as $x => $y) {
    if ($x && $y) {
        echo "$x" . 'の県庁所在地は、' . "$y" .'です。' . "\n";
    } else {
        echo "$x" . 'は関東地方ではありません。' . "\n";
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

/*Q12*/
function distinguishNum ($num) {
    $numJudge = $num % 2;

    if ($numJudge === 0) {
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