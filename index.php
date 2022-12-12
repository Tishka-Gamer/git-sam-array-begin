<pre><?php 
// 1.	Создайте массив arrRange и заполните его числами в промежутке [-50; 50] с шагом=8.
// Перемешайте элементы этого массива
    $arrRange = range(-50, 50, 8);
    print_r($arrRange);
    shuffle($arrRange);
    print_r($arrRange);

// 2.	Выведите элементы этого массива в строку через 
// « ** ».
echo(implode("**", $arrRange) . '<br>');

// 3.	Удалите четные элементы этого массива, определите количество оставшихся

$otric = array_splice($arr, function($item){
        if($item % 2 == 0);
    });
print_r($otric);
// 4.	Замените все отрицательные значения положительными
// 5.	Создайте новый массив arrRandom и заполните его на 20 элементов случайными числами в промежутке 
// [-5; 10].
$arrRandom = [];
for($i = 0; $i<= 20; $i++) {
    $arrRandom[$i] = rand(-5, 10);
    }
    // 6.	Определите количество значений в массиве arrRandom (количество повторений)     
$count = array_count_values($arrRandom);
print_r($count);
// 7.	Определите сумму элементов массива arrRandom
$sum = array_reduce($arrRandom, function ($carry, $item){
    $carry += $item;
    return $carry;
});
echo($sum . '<br>');
// 8.	Определите произведение элементов массива arrange, кратных 3
$prois = array_reduce($arrRange, function ($carry, $item) {
    if($item%3 == 0) {
        $carry *= $item;
        return $carry;
    }

});
echo($prois . '<br>');
//9.	Объедините массивы arrRange и arrRandom двумя способами
$obedin1 = ($arrRange + $arrRandom);
$obedin2 = array_merge($arrRange, $arrRandom);
print_r($obedin1);
print_r($obedin2);

//10.	В массиве arrRandom удалите 2, 3 и 4 элементы
print_r($arrRandom);
$del = array_splice($arrRandom, 2, 3);
print_r($del);

// 11.	В массиве arrRandom определите количество элементов, не превышающих его среднее значение
$sred = $sum / count($arrRandom);
echo($sred . "<br>");
$res = array_filter($arrRandom, fn($item) => $item < $sred);
echo(count($res) . "<br>");

//12.	Добавьте в конец массива arrRandom элемент=1000 (2 способа)
array_splice($arrRandom, -1, 0, 1000);
print_r($arrRandom);

array_push($arrRandom, 1000);
print_r($arrRandom);
//14.	Сформируйте массив из переменных, представленных ниже
$comp = [];
$apple = "Черешня";
$grape = "Виноград";
$strawberry = "Земляника";
$pear = "Груша";
$comp2 = compact("apple", "grape", "strawberry", "pear", $comp);
$comp1 = [$apple, $grape, $strawberry, $pear];
print_r($comp2);
print_r($comp1);

// Выполните сортировку элементов массива по номеру дома в порядке возрастания.
// Результат отобразите на странице в виде таблицы
$arr = [
    [
        "street" => "Гагарина", 
        "house" => 7, 
        "flat" => 303
    ],
    [
        "street" => "Елькина", 
        "house" => 12, 
        "flat" => 12
    ],
    [
        "street" => "Доватора", 
        "house" => 113, 
        "flat" => 24
    ],
];
uasort($arr, function ($aaa, $bbb) {
    if($aaa['house'] == $bbb['house']) return 0;
    if($aaa['house'] < $bbb['house']) return -1;
    if($aaa['house'] > $bbb['house']) return 1;
});
print_r($arr);

?></pre>
