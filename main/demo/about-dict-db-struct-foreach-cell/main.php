#!/usr/bin/env php
<?php

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

	foreach ($data as $row => $cols) {
		echo PHP_EOL;
		echo 'Row: ' . $row . PHP_EOL;
		echo 'Column A: ' . $cols['A'] . PHP_EOL;
		echo 'Column B: ' . $cols['B'] . PHP_EOL;
		echo 'Column C: ' . $cols['C'] . PHP_EOL;
	}
