
# 來源資料結構

## 前提

先略過「PHPOffice/PhpSpreadsheet」讀取資料那部份的說明。

並且仿照「dict_concised_2014_20190411.xls」，

簡化做了一個資料表「[dict-db.ods](https://github.com/samwhelp/note-php-office-for-read-dict-db/blob/gh-pages/main/demo/data/dict-db.ods)」，

因為要在「GitHub」上好觀看，所以轉成「[dict-db.csv](https://github.com/samwhelp/note-php-office-for-read-dict-db/blob/gh-pages/main/demo/data/dict-db.csv)」。

## 資料結構

對照「[dict-db.csv](https://github.com/samwhelp/note-php-office-for-read-dict-db/blob/gh-pages/main/demo/data/dict-db.csv)」這個「資料表」來觀看，

透過「PHPOffice/PhpSpreadsheet」轉成的結構會是如下。

``` php
$data = [
	[
			'A' => '忙碌',
			'B' => 'ㄇㄤˊ　ㄌㄨˋ',
			'C' => 'máng lù'
	],
	[
			'A' => '慢動作',
			'B' => 'ㄇㄢˋ　ㄉㄨㄥˋ　ㄗㄨㄛˋ',
			'C' => 'màn dòng zuò'
	],
	[
			'A' => '不理不睬',
			'B' => 'ㄅㄨˋ　ㄌㄧˇ　ㄅㄨˋ　ㄘㄞˇ',
			'C' => 'bù lǐ bù cǎi'
	],
	[
			'A' => '感謝',
			'B' => 'ㄍㄢˇ　ㄒㄧㄝˋ',
			'C' => 'gǎn xiè'
	],
	[
			'A' => '會心一笑',
			'B' => 'ㄏㄨㄟˋ　ㄒㄧㄣ　ㄧ　ㄒㄧㄠˋ',
			'C' => 'huì xīn yī xiào'
	],
	[
			'A' => '置之不理',
			'B' => 'ㄓˋ　ㄓ　ㄅㄨˋ　ㄌㄧˇ',
			'C' => 'zhì zhī bù lǐ'
	],
	[
			'A' => '置之度外',
			'B' => 'ㄓˋ　ㄓ　ㄉㄨˋ　ㄨㄞˋ',
			'C' => 'zhì zhī dù wài'
	],
	[
			'A' => '真',
			'B' => 'ㄓㄣ',
			'C' => 'zhēn'
	],
	[
			'A' => '守',
			'B' => 'ㄕㄡˇ',
			'C' => 'shǒu'
	],
	[
			'A' => '一笑置之',
			'B' => 'ㄧ　ㄒㄧㄠˋ　ㄓˋ　ㄓ　（變）ㄧˊ　ㄒㄧㄠˋ　ㄓˋ　ㄓ',
			'C' => 'yī xiào zhì zhī　（變）yí xiào zhì zhī'
	]
];
```

## var_dump

在「PHP」可以透過「[var_dump](https://www.php.net/manual/en/function.var-dump.php)」這個「function」，將該結構傾印出來。

``` php
var_dump($data);
```

會顯示

```
array(10) {
  [0]=>
  array(3) {
    ["A"]=>
    string(6) "忙碌"
    ["B"]=>
    string(19) "ㄇㄤˊ　ㄌㄨˋ"
    ["C"]=>
    string(9) "máng lù"
  }
  [1]=>
  array(3) {
    ["A"]=>
    string(9) "慢動作"
    ["B"]=>
    string(36) "ㄇㄢˋ　ㄉㄨㄥˋ　ㄗㄨㄛˋ"
    ["C"]=>
    string(15) "màn dòng zuò"
  }
  [2]=>
  array(3) {
    ["A"]=>
    string(12) "不理不睬"
    ["B"]=>
    string(41) "ㄅㄨˋ　ㄌㄧˇ　ㄅㄨˋ　ㄘㄞˇ"
    ["C"]=>
    string(16) "bù lǐ bù cǎi"
  }
  [3]=>
  array(3) {
    ["A"]=>
    string(6) "感謝"
    ["B"]=>
    string(22) "ㄍㄢˇ　ㄒㄧㄝˋ"
    ["C"]=>
    string(9) "gǎn xiè"
  }
  [4]=>
  array(3) {
    ["A"]=>
    string(12) "會心一笑"
    ["B"]=>
    string(43) "ㄏㄨㄟˋ　ㄒㄧㄣ　ㄧ　ㄒㄧㄠˋ"
    ["C"]=>
    string(19) "huì xīn yī xiào"
  }
  [5]=>
  array(3) {
    ["A"]=>
    string(12) "置之不理"
    ["B"]=>
    string(33) "ㄓˋ　ㄓ　ㄅㄨˋ　ㄌㄧˇ"
    ["C"]=>
    string(17) "zhì zhī bù lǐ"
  }
  [6]=>
  array(3) {
    ["A"]=>
    string(12) "置之度外"
    ["B"]=>
    string(33) "ㄓˋ　ㄓ　ㄉㄨˋ　ㄨㄞˋ"
    ["C"]=>
    string(18) "zhì zhī dù wài"
  }
  [7]=>
  array(3) {
    ["A"]=>
    string(3) "真"
    ["B"]=>
    string(6) "ㄓㄣ"
    ["C"]=>
    string(5) "zhēn"
  }
  [8]=>
  array(3) {
    ["A"]=>
    string(3) "守"
    ["B"]=>
    string(8) "ㄕㄡˇ"
    ["C"]=>
    string(5) "shǒu"
  }
  [9]=>
  array(3) {
    ["A"]=>
    string(12) "一笑置之"
    ["B"]=>
    string(76) "ㄧ　ㄒㄧㄠˋ　ㄓˋ　ㄓ　（變）ㄧˊ　ㄒㄧㄠˋ　ㄓˋ　ㄓ"
    ["C"]=>
    string(50) "yī xiào zhì zhī　（變）yí xiào zhì zhī"
  }
}
```

> 完整範例，請參考「[demo/about-dict-db-struct-var_dump/main.php](https://github.com/samwhelp/note-php-office-for-read-dict-db/blob/gh-pages/main/demo/about-dict-db-struct-var_dump/main.php#L57)」。

> 除了「var_dump」，還有一個類似的「function」是「[print_r](https://www.php.net/manual/en/function.print-r.php)」


## foreach

在「PHP」可以透過「[foreach](https://www.php.net/manual/en/control-structures.foreach.php)」來將資料做個巡迴。

``` php
foreach ($data as $row => $cols) {
	echo PHP_EOL;
	echo 'row: ' . $row . PHP_EOL;
	var_dump($cols);
}
```

> 完整範例，請參考「[demo/about-dict-db-struct-foreach/main.php](https://github.com/samwhelp/note-php-office-for-read-dict-db/blob/gh-pages/main/demo/about-dict-db-struct-foreach/main.php#L57)」。

## column

巡迴時，讀取欄位。

``` php
foreach ($data as $row => $cols) {
	echo PHP_EOL;
	echo 'Row: ' . $row . PHP_EOL;
	echo 'Column A: ' . $cols['A'] . PHP_EOL;
	echo 'Column B: ' . $cols['B'] . PHP_EOL;
	echo 'Column C: ' . $cols['C'] . PHP_EOL;
}
```


> 完整範例，請參考「[demo/about-dict-db-struct-foreach-cell/main.php](https://github.com/samwhelp/note-php-office-for-read-dict-db/blob/gh-pages/main/demo/about-dict-db-struct-foreach-cell/main.php#L57)」。
