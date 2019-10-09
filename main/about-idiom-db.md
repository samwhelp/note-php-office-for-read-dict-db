
# 四字成語資料表


## 前提

承襲上一篇提到的「[來源資料結構](about-dict-db-struct.md)」，
接下來這篇的重點，要挑選出「四字成語」的資料列，
產生新的資料表。


## mb_strlen

在挑選前，先了解「[mb_strlen](https://www.php.net/manual/en/function.mb-strlen.php)」的用法。

``` php
echo mb_strlen('會心一笑') . PHP_EOL;
```

> 完整範例，請參考「demo/[about-mb_strlen](https://github.com/samwhelp/note-php-office-for-read-dict-db/blob/gh-pages/main/demo/about-mb_strlen/)/[main.php](https://github.com/samwhelp/note-php-office-for-read-dict-db/blob/gh-pages/main/demo/about-mb_strlen/main.php)」。


## 挑選前

``` php
foreach ($dict_db as $row => $cols) {
	echo $cols['A'] . PHP_EOL;
}
```

> 完整範例，請參考「demo/[about-dict-db-list](https://github.com/samwhelp/note-php-office-for-read-dict-db/blob/gh-pages/main/demo/about-dict-db-list/)/[main.php](https://github.com/samwhelp/note-php-office-for-read-dict-db/blob/gh-pages/main/demo/about-dict-db-list/main.php)」。


## 挑選後

### 直接篩選

將四個字的成語挑選出來。

``` php
foreach ($dict_db as $row => $cols) {

	$content = $cols['A'];

	if (mb_strlen($content) === 4) {
		echo $content . PHP_EOL;
	}

}
```

> 完整範例，請參考「demo/[about-dict-db-idiom-list](https://github.com/samwhelp/note-php-office-for-read-dict-db/blob/gh-pages/main/demo/about-dict-db-idiom-list/)/[main.php](https://github.com/samwhelp/note-php-office-for-read-dict-db/blob/gh-pages/main/demo/about-dict-db-idiom-list/main.php)」。


### 排除篩選

使用排除的方式，將四個字的成語挑選出來。

``` php
foreach ($dict_db as $row => $cols) {

	$content = $cols['A'];

	if (mb_strlen($content) !== 4) {
		continue;
	}

	echo $content . PHP_EOL;
}
```

> 完整範例，請參考「demo/[about-dict-db-idiom-list-use-continue](https://github.com/samwhelp/note-php-office-for-read-dict-db/blob/gh-pages/main/demo/about-dict-db-idiom-list-use-continue/)/[main.php](https://github.com/samwhelp/note-php-office-for-read-dict-db/blob/gh-pages/main/demo/about-dict-db-idiom-list-use-continue/main.php)」。

> 請參考「[continue](https://www.php.net/manual/en/control-structures.continue.php)」的用法。


## 產生四字成語資料表

原先的資料表「$dict_db」，
篩選後的資料表「$idiom_db」。

``` php
$idiom_db = [];

foreach ($dict_db as $row => $cols) {

	$content = $cols['A'];

	if (mb_strlen($content) !== 4) {
		continue;
	}

	$idiom_db[] = $cols;
}

var_dump($idiom_db);
```

顯示

```
array(5) {
  [0]=>
  array(3) {
    ["A"]=>
    string(12) "不理不睬"
    ["B"]=>
    string(41) "ㄅㄨˋ　ㄌㄧˇ　ㄅㄨˋ　ㄘㄞˇ"
    ["C"]=>
    string(16) "bù lǐ bù cǎi"
  }
  [1]=>
  array(3) {
    ["A"]=>
    string(12) "會心一笑"
    ["B"]=>
    string(43) "ㄏㄨㄟˋ　ㄒㄧㄣ　ㄧ　ㄒㄧㄠˋ"
    ["C"]=>
    string(19) "huì xīn yī xiào"
  }
  [2]=>
  array(3) {
    ["A"]=>
    string(12) "置之不理"
    ["B"]=>
    string(33) "ㄓˋ　ㄓ　ㄅㄨˋ　ㄌㄧˇ"
    ["C"]=>
    string(17) "zhì zhī bù lǐ"
  }
  [3]=>
  array(3) {
    ["A"]=>
    string(12) "置之度外"
    ["B"]=>
    string(33) "ㄓˋ　ㄓ　ㄉㄨˋ　ㄨㄞˋ"
    ["C"]=>
    string(18) "zhì zhī dù wài"
  }
  [4]=>
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

> 完整範例，請參考「demo/[about-idiom-db](https://github.com/samwhelp/note-php-office-for-read-dict-db/blob/gh-pages/main/demo/about-idiom-db/)/[main.php](https://github.com/samwhelp/note-php-office-for-read-dict-db/blob/gh-pages/main/demo/about-idiom-db/main.php)」。
