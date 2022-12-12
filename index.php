<pre>
    <?php
    //Трофименко Кирилл

    // 1.	Создайте массив arrRandom и заполните его на 10 элементов случайными числами в промежутке [35; 42].
    $arrRandom;
    $minimal = 35;
    $max = 42;
    $count = 10;

    for ($chislo = 0; $chislo < $count; $chislo++) {
        $arrRandom[] = rand($minimal, $max);
    }
    print_r($arrRandom);

    // 2.	Выведите элементы этого массива в строку через «; ».
    $stroka = join(';', $arrRandom);
    print_r($stroka);

    // 3.	Оставьте в массиве только уникальные значения, определите их количество
    print_r(array_unique($arrRandom));
    echo ("Количество уникальных чисел:" . count(array_unique($arrRandom)));

    // // 4.	Увеличьте каждый элемент массива в 3 раза
    for ($chislo = 0; $chislo < count($arrRandom); $chislo++) {
        $x[$chislo] = $arrRandom[$chislo] * 3;
    }
    print_r($x);

    //5.	Создайте новый массив arrRange и заполните его числами в промежутке [-50; 50] с шагом=8. Перемешайте элементы этого массива
    $arrRange = range(-50, 50, 8);
    shuffle($arrRange);
    print_r($arrRange);

    //6.	Определите сумму положительных четных элементов массива arrRange
    $sumchet = 0;
    foreach ($arrRange as $item) {
        if ($item > 0 && $item % 2 == 0) {
            $sumchet = $item;
        }
    }
    echo ("сумма положительных четных чисел: " . $sumchet);

    //7.	Определите произведение элементов массива arrRange, кратных 3 или 5
    $arrRange = array_filter(
        $arrRange,
        function ($item) {
            if ($item % 5 == 0 && $item % 3 == 0) {
                return $item;
            }
        },
    );
    print_r($arrRange);

    //8.	Объедините массивы arrRange и arrRandom двумя способами
    $arrVmeste1 = $arrRange + $arrRandom;
    $arrVmeste2 = array_merge($arrRange, $arrRandom);
    $arrVmeste3 = array_diff($arrRange, $arrRandom);

    //9.	Выведите минимальные элементы массива, полученного в задании №8
    $arrMinRes = array_splice($arrVmeste1, 1 ,9);
    print_r ($arrMinRes);

    //10.	В массиве arrRandom вместо 5 и 6 элементов разместите элементы: 1000, 2000, 3000
    // $arrZamena = array_splice($arrRandom, 1000, 2000);  - не смог сделать

    //11.	Имеется строка вида: «А роза упала на лапу Азора». Сформируйте массив, элементами которого станут слова этой строки
    $stroka2 = "А роза упала на лапу Азора";
    $arrResult11 = explode(' ', $stroka2);
    print_r($arrResult11);

    //12.	Удалите последний элемент массива arrRandom
    array_pop($arrRandom);

    //14.	Имеется массив. Деструктурируйте массив двумя способами
    $arrDestrukt = [
        'white' => 'белый',
        'yellow' => 'желтый',
        'red' => 'красный',
        'green' => 'зеленый'
    ];
    ['white' => $whiteColor, 'red' => $redColor] = $arrDestrukt;
    $whiteColor2 = $arrDestrukt['yellow'];
    print_r($arrDestrukt);

    //15.	Имеется массив. Выполните сортировку элементов массива по весу в порядке убывания.
    $arrProducti = [
        [
            "berry" => "виноград",
            "color" => "зеленый",
            "weight" => 1.5
        ],
        [
            "berry" => "земляника",
            "color" => "красный",
            "weight" => 0.7
        ],
        [
            "berry" => "blueberry",
            "color" => "фиолетовый",
            "weight" => 0.3
        ],
    ];
    print_r($arrProducti); //- не сделал
    ?>
</pre>