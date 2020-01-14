# PHP_資料類型與打印var_dump()

- **總共有9總資料類型**

- 標量類型
  - int
  - float
  - bool
  - string
- 複合類型
  - array
  - Class
  - null
  ------
  - Callback
  - 資源

-----
- var_dump() **查看變數詳細**
- PHP類型轉換   **所以驗證要正確**
  - **PHP在作四則運算時會自動作資料類型的轉換**
  - 無效數字
  - 有效數字
  - 有效數字_bool布林
- PHP**強制**類行轉換

-----

----

## **標量類型**

$a1 = 1;  >> int

**int 有顯示範圍問題**

$a2 = 1.5;  >> float

**float 有精度問題**

$a3 = true;  >> 布林值 只有true=真  , false=假



$a4 = 'string...';  >> 單引號 字串/字符串  **打什麼出什麼**

$a41 = "string...";  >> 雙引號 字串/字符串  **當值有變量時,雙引號會把裡面的變量取出來**

**雙引號可以輸出的變量類型詳細看PHP手冊**

```
$a1 = 1;

$a4 = 'string$a1';
$a41 = "string$a1";

echo $a4;
echo "<br>";
echo $a41;
```

**輸出結果**

string$a1
string1



----
## **複合資料類型**
$a5 = array(1, 2, 3);  >> 陣列/數組傳統寫法

$a51 = [1, 2, 3];  >> 陣列/數組 php5.4後的新寫法
**英文 : key value**
**中文 : 鍵值對**
{ 

​	[0] 鍵 => 值    ##鍵值對

​	[1] =>

​	[2] =>

}

-----

$a6 = new stdClass;  >> 物件/對象

$a8 = null;

---


$a7 = 資源 (兩種資源類型)

$a9 = **Callback** / Callable

**空不是null**

**記得要加分號**

-----

## var_dump()

查看變量詳細

var_dump($a1, $a2, $a3, $a4, $a41 ,.....)  **可打印多個**

**右鍵檢視原始碼可查看換行好的var_dump()**

## PHP類型轉換

**PHP在作四則運算時會自動作資料類型的轉換**

### 無效數字

var_dump( 1 + 'aaaa');

**'aaaa'為無效數字 轉成0**

輸出結果 >

var_dump(  int ( 1 ) );

### 有效數字

var_dump( 1 + '1');

**'1'為有效數字 轉成 int ( 1 ) **

輸出結果 >

答 : var_dump(  int ( 2 ) );

---

### 有效數字_bool布林

**True轉成 1  False轉成 0**

var_dump(   (int)true,   (int)false   ); 

或是

var_dump( 1 + true);  //true = 1  , false = 0

輸出結果 >

int ( 2 )

**所以驗證時要準確**

## PHP強制類行轉換

(int) '1';

(string) 1;

(bool) 1;   //true