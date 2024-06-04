<?php
$getInputUser = readline("Choose an option : \n\n 1.Reverse Input \n 2.Sum Invoices\n 3.Prime number \n 4.Fibonacci \n 5.Sort Matrix");

switch ($getInputUser) {
    case $getInputUser == 1:
        reverseInput();
        break;
    case $getInputUser == 2:
        sumInvoices();
        break;
    case $getInputUser == 3:
        prime();
        break;
    case $getInputUser == 4 :
        fibonacci();
        break;

    case $getInputUser ==5 :
        sortMatrix();
        break;
}
function reverseInput()
{
    $input = (string)readline("Enter the input : ");
    $output = "";
    $i = strlen($input);
    while ($i > 0) {
        $i--;
        $output .= "$input[$i]";
    }
    echo $output . "\n";
}


function sumInvoices()
{
    $finalAmount = 0;
    $invoiceItems = [
        ['id' => 1, 'unit_price' => 10, 'quantity' => 3],
        ['id' => 2, 'unit_price' => 15, 'quantity' => 1],
        ['id' => 4, 'unit_price' => 17, 'quantity' => 1],
    ];
    foreach ($invoiceItems as $items) {
        $finalAmount += $items["unit_price"];
    }

    echo "The Final Amount : " . $finalAmount . "\n";
}

function prime()
{
    $inputNumber = readline("Enter The Number: ");
    echo isPrime($inputNumber) ? "Yes" : "No";
    echo "\n";
}
function isPrime($number)
{
    if ($number <= 1 || ($number % 2 == 0)) {
        return false;
    }
    return true;
}


function fibonacci()
{
    $counter = (int)readline("Enter the number:");
    $starter = 0;
    $pervNum = 1;
    $resultArr = [];
    for ($i = 0; $i <= $counter; $i++) {
        $result = $starter + $pervNum;
        $starter = $pervNum;
        $pervNum = $result;
        $resultArr[$i] = $result;
    }
    var_dump($resultArr);

}


function sortMatrix(){
    $inputs = [[9, 8, 7], [6, 5, 4], [3, 2, 1]];
    $out = [[1, 4, 7],[2, 5, 8],[3, 6, 9]];
    $final=[];
    while (true){
        if (count($inputs[0])<=0){
            break;
        }
        $final[]=checker($inputs);
    }
    var_dump(array_reverse($final));
}

function checker(&$inputs){
    $result=[];
    foreach ($inputs as &$array){
        $max=max($array);
        $array=array_diff($array,(array)$max);
        $result[]=$max;
    }
    sort($result);
    return $result;
}


