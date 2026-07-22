<?php
/*Q1*/
for ( $i = 1 ; $i <= 100 ; $i++ ) {
    if ( $i % 4  === 0 && $i % 5 === 0 ) {
        echo 'tic-tac' . "\n";
        
    } elseif ( $i % 4 === 0 ) {
        echo 'tic' . "\n";
        
    } elseif ( $i % 5 === 0 ) {
        echo 'tac' . "\n";
        
    } else {
        echo $i . "\n";

    }
}

/*Q2*/
  /* 問題1 */
  echo $personalInfos[1]['name'] . 'さんの電話番号は' .$personalInfos[1]['tel'] . 'です。' ;

  /* 問題2 */
  for ( $i = 0 ; $i <= 2 ; $i++ ) {
      $number = $i + 1;
      echo $number.'番目の'.$personalInfos[$i]['name'] . 'さんのメールアドレスは' .$personalInfos[$i]['mail'] . 'です。' . "\n";
  }

  /* 問題3 */
  foreach ($personalInfos as $key => &$personalInfo ) {
      $personalInfo['age'] = $ageList[$key];
  }

  unset($personalInfo);
  var_dump($personalInfos);

/*Q3*/
$yamada = new Student(120, '山田');

echo '学籍番号' . $yamada->studentId . '番の生徒は' . $yamada->studentName . 'です。' ."\n";

/*Q4*/
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id; //学籍番号
        $this->studentName = $name; //生徒名
    }

    public function attend($devLan)
    {
        return 'は'. $devLan . 'の授業に出席しました。';
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');


echo $yamada->studentName . $yamada->attend('PHP') . '学籍番号：' . $yamada->studentId;

/*Q5*/
  /* 問題1 */
  $date = new DateTime();

  $date->modify('-1 month');

  echo $date->format('Y-m-d');

  /* 問題2 */

  $start = new DateTime('1992-04-25'); 
  $target = new DateTime();

  $diff = $start->diff($target);

  echo $diff->format('あの日から%a日後') ."\n" ; 
