//cau1.Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không
<?php
function checkNumber($number) {
    if ($number % 2 == 0) {
        echo "Số $number là số chẵn.";
    } else {
        echo "Số $number không là số chẵn.";
    }
}
$number = 3; 
checkNumber($number);
?>

//cau2.Viết chương trình PHP để tính tổng của các số từ 1 đến n
<?php
function sum($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}
$n = 10; 
$sum = sum($n);
echo "Tổng của các số từ 1 đến $n là: $sum";
?>

//cau3.Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10
<?php
function multiplicationTable($n) {
    echo "<br>"."Bảng cửu chương $n:";
    for ($i = 1; $i <= 10; $i++) {
        $result = $n * $i;
        echo "$n x $i = $result<br>";
    }
    echo "<br>";
}
for ($j = 1; $j <= 10; $j++) {
    multiplicationTable($j);
}
?>

<?php

//cau4.Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
function checkString($array, $word) {
    $check = strpos($array, $word);
    if ($check !== false) {
        echo "Chuỗi '$array' chứa từ '$word'.";
    } else {
        echo "Chuỗi '$array' không chứa từ '$word'.";
    }
}
$array = "Kiểm tra chuỗi"; 
$word = "thu"; 
checkString($array, $word);
?>

<?php
//cau5.Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
function findMinMax($array) {
    $min = min($array);
    $max = max($array);
    return array('min' => $min, 'max' => $max);
}
$array = [6, 2, 10, 3, 7];
$result = findMinMax($array);
echo "cau5 ";
print_r ($result);
echo "<br>";

//cau6.Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
function arrange($word, $word2, $word3){
    $arr = array($word, $word2, $word3);
    sort($arr);
    foreach ( $arr as $row) {
        echo $row;
        echo "; ";
    }
}
echo "cau6: ";
echo arrange("9", "6", "11");
echo "<br>";

//cau7.Viết chương trình PHP để tính giai thừa của một số nguyên dương.
function calculateFactorial($number) {
    if ($number <= 1) {
        return 1;
    } else {
        return $number * calculateFactorial($number - 1);
    }
}
$number = 5;
$result = calculateFactorial($number);
echo "cau7 ";
echo $result;
echo "<br>";


//cau8.Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
function check_prime($n)
{
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0){
            return false;
        }
    }
    return true;
}
function show_prime($a, $b){
    for ($i = $a; $i <= $b; $i++){
        if(check_prime($i))
            echo $i, '<br>';
    }
}
show_prime(25, 60);

//cau9.Viết chương trình PHP để tính tổng của các số trong một mảng.
function calculateArraySum($array) {
    return array_sum($array);
}
$array = [1, 2, 3, 4, 5];
$result = calculateArraySum($array);
echo "cau9 ";
echo $result;
echo "<br>";


//cau10.Viết chương trình để in ra các số Fibonacci trong một khoảng cho trước.
function fibonacci($n) {
    $f0 = 0;
    $f1 = 1;
    $fn = 1;
 
    if ($n < 0) {
        return - 1;
    } else if ($n == 0 || $n == 1) {
        return $n;
    } else {
        for($i = 2; $i < $n; $i ++) {
            $f0 = $f1;
            $f1 = $fn;
            $fn = $f0 + $f1;
        }
    }
    return $fn;
}
 
echo ("10 số đầu tiên của dãy số fibonacci: ");
for($i = 0; $i < 10; $i ++) {
    echo (fibonacci ( $i ) . " ");
}

//cau11.Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
// Hàm kiểm tra số Armstrong
function isArmstrong($number) {
    $sum = 0;
    $numDigits = strlen((string)$number);
    $temp = $number;
    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $numDigits);
        $temp = (int)($temp / 10);
    }
    return $sum == $number;
}

// Số cần kiểm tra
$number = 153;

// Kiểm tra xem số đó có phải số Armstrong hay không
if (isArmstrong($number)) {
    echo $number . " là số Armstrong";
} else {
    echo $number . " không phải là số Armstrong";
}

//cau12.Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ
function insertElement($arr, $element, $position)
{
    // Sử dụng hàm array_splice để chèn phần tử vào mảng
    array_splice($arr, $position, 0, $element);


    // Trả về mảng sau khi chèn phần tử
    return $arr;
}
// Mảng ban đầu
$array = [1, 2, 3, 4, 5];


// Phần tử cần chèn
$element = 10;
// Vị trí muốn chèn phần tử (vị trí tính từ 0)
$position = 2;
// Gọi hàm insertElement để chèn phần tử vào mảng ở vị trí bất kỳ
$resultArray = insertElement($array, $element, $position);
// In mảng sau khi chèn phần tử
print_r($resultArray);

//cau13.Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng
function removeDuplicates($arr)
{
    // Sử dụng hàm array_count_values để đếm số lần xuất hiện của từng phần tử
    $counts = array_count_values($arr);


    // Lặp qua mảng ban đầu và chỉ giữ lại các phần tử có số lần xuất hiện là 1
    $result = array_filter($arr, function ($value) use ($counts) {
        return $counts[$value] === 1;
    });


    // Trả về mảng sau khi loại bỏ các phần tử trùng lặp
    return array_values($result);
}


// Mảng ban đầu
$originalArray = [1, 2, 3, 2, 4, 3, 5, 6, 1];


// Gọi hàm removeDuplicates để loại bỏ các phần tử trùng lặp
$filteredArray = removeDuplicates($originalArray);


// In mảng sau khi loại bỏ các phần tử trùng lặp
print_r($filteredArray);

//cau14.Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
function findElementPosition($arr, $element)
{
    // Sử dụng hàm array_search để tìm vị trí của phần tử trong mảng
    $position = array_search($element, $arr);
    if ($position !== false) {
        return $position; // Trả về vị trí của phần tử nếu tìm thấy
    } else {
        return -1; // Trả về -1 nếu không tìm thấy phần tử trong mảng
    }
}
// Mảng ban đầu
$array = [1, 2, 3, 4, 5];
// Phần tử cần tìm vị trí
$element = 3;
// Gọi hàm findElementPosition để tìm vị trí của phần tử trong mảng
$position = findElementPosition($array, $element);


// In kết quả
if ($position !== -1) {
    echo "Vị trí của phần tử $element là $position";
} else {
    echo "Không tìm thấy phần tử $element trong mảng";
}


//cau15.Viết chương trình PHP để đảo ngược một chuỗi.
function reverseString($string) {
    return strrev($string);
}
$string = "Hello World!";
$result = reverseString($string);
echo "cau15 ";
echo $result;
echo "<br>";
       
//cau16.Viết chương trình PHP để tính số lượng phần tử trong một mảng
function countArr($word, $word2, $word3, $word4){
    $arr = array($word, $word2, $word3, $word4);
    return count($arr);
}
echo "cau16: ";
echo countArr("1", "3", "15", "20");
echo "<br>";

//cau17.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
function kiem_tra_chuoi_palindrome($string)   
		{  
		  if ($string == strrev($string))  
			  return 1;  
		  else  
			  return 0;  
		}  
		echo kiem_tra_chuoi_palindrome('madam')."<br>";


//cau18.Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng
function countElementOccurrences($array, $element) {
    return array_count_values($array)[$element] ?? 0;
}
$array = [1,2,3,5,7,2,3];
$element = 2;
$result = countElementOccurrences($array, $element);
echo "cau 18 ";
echo $result;
echo "<br>";


//cau19.Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
function sortArrayDescending($array) {
    rsort($array);
    return $array;
}
$array = [3, 10, 9, 1, 21];
$result = sortArrayDescending($array);
echo "cau19 ";
print_r($result);
echo "<br>";

//cau20.Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
function addElementToArray($arr, $element, $position)
{
    if ($position === 'beginning') {
        // Thêm phần tử vào đầu mảng
        array_unshift($arr, $element);
    } elseif ($position === 'end') {
        // Thêm phần tử vào cuối mảng
        $arr[] = $element;
    }


    // Trả về mảng sau khi thêm phần tử
    return $arr;
}


// Mảng ban đầu
$array = [1, 2, 3, 4, 5];


// Phần tử cần thêm
$element = 10;


// Vị trí muốn thêm phần tử ('beginning' để thêm vào đầu, 'end' để thêm vào cuối)
$position = 'end';


// Gọi hàm addElementToArray để thêm phần tử vào mảng
$resultArray = addElementToArray($array, $element, $position);


// In mảng sau khi thêm phần tử
print_r($resultArray);

//cau21.Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
function findArrNum2($word, $word2, $word3, $word4){
    $arr = array($word, $word2, $word3, $word4);
    rsort($arr);
    for($i =0; $i<4; $i++) {
        if($i == 1)
        return $arr[1];
    }
}
echo "cau21: ";
echo findArrNum2("1", "2", "3", "4");
echo "<br>";

//cau22.Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương
// hàm tìm GCD
function gcd($a, $b) {
    if ($b == 0) {
        return $a;
    } else {
        return gcd($b, $a % $b);
    }
}

// hàm tìm LCM
function lcm($a, $b) {
    return ($a * $b) / gcd($a, $b);
}

// khai báo hai số nguyên dương
$num1 = 12;
$num2 = 18;

// tìm GCD và LCM của hai số
$gcd = gcd($num1, $num2);
$lcm = lcm($num1, $num2);

// in kết quả ra màn hình
echo "Ước số chung lớn nhất của $num1 và $num2 là: $gcd";
echo "<br>";
echo "Bội số chung nhỏ nhất của $num1 và $num2 là: $lcm";


//cau23.Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không
// Hàm kiểm tra số hoàn hảo
function isPerfectNumber($number) {
    $sum = 0;
    for ($i = 1; $i < $number; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }
    return $sum == $number;
}

// Số cần kiểm tra
$number = 6;
// Kiểm tra xem số đó có phải số hoàn hảo hay không
if (isPerfectNumber($number)) {
    echo $number . " là số hoàn hảo";
} else {
    echo $number . " không phải là số hoàn hảo";
}

//cau24.Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
function findLargestOddNumber($array) {
    $oddNumbers = array_filter($array, function ($value) {
        return $value % 2 !== 0;
    });
    return max($oddNumbers);
}
$array = [19, 23, 3, 7, 5];
$result = findLargestOddNumber($array);
echo "cau24 ";
echo $result;
echo "<br>";

//cau25.Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không
// hàm kiểm tra số nguyên tố
function is_prime($n) {
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

// kiểm tra số 7
if (is_prime(7)) {
    echo "7 là số nguyên tố.";
} else {
    echo "7 không phải là số nguyên tố.";
}

//cau26.Viết chương trình PHP để tìm số dương lớn nhất trong một mảng
function findLargestPositiveNumber($array) {
    $positiveNumbers = array_filter($array, function ($value) {
        return $value > 0;
    });
    return max($positiveNumbers);
}
$array = [-3, -2, 1, 7, 4];
$result = findLargestPositiveNumber($array);
echo "cau26 ";
echo $result;
echo "<br>";

//cau27.Viết chương trình PHP để tìm số âm lớn nhất trong một mảng
function findLargestNegativeNumber($array) {
    $negativeNumbers = array_filter($array, function ($value) {
        return $value < 0;
    });
    return max($negativeNumbers);
}
$array = [-5, -3, 1, -7, 4];
$result = findLargestNegativeNumber($array);
echo "cau27 ";
echo $result;
echo "<br>";

//cau28.Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
function calculateSumOfOddNumbers($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i += 2) {
        $sum += $i;
    }
    return $sum;
}
$n = 10;
$result = calculateSumOfOddNumbers($n);
echo "cau28 ";
echo $result;
echo "<br>";

//cau29.Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước
function perfSqureNums($word){
    $i = 0;
  while($i*$i <= $word){
        if($i*$i == $word){
            return true;
        }
        $i++;
    }
    return false;
}
function showPSN($a, $b){
    echo "Perfect square numbers are: ";
    for ($i = $a; $i <= $b; $i++){
        if(perfSqureNums($i))
            echo $i, "; ";
    } 
}
echo "cau29: ";
echo showPSN(1, 20);
echo "<br>";

//cau30.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không
// Hàm kiểm tra xem chuỗi $subString có phải là chuỗi con của chuỗi $string hay không
function isSubstring($string, $subString) {
    $stringLength = strlen($string);
    $subStringLength = strlen($subString);
    for ($i = 0; $i <= $stringLength - $subStringLength; $i++) {
        if (substr($string, $i, $subStringLength) == $subString) {
            return true;
        }
    }
    return false;
}

// Chuỗi ban đầu
$string = "Hello, world!";

// Chuỗi cần kiểm tra
$subString = "world";

// Kiểm tra xem chuỗi cần kiểm tra có phải là chuỗi con của chuỗi ban đầu hay không
if (isSubstring($string, $subString)) {
    echo "\"" . $subString . "\" là chuỗi con của \"" . $string . "\"";
} else {
    echo "\"" . $subString . "\" không phải là chuỗi con của \"" . $string . "\"";
}
