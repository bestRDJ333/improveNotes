# PHP_mySQLi簡易教學

[PHP教學 – 學習如何用PHP與MySQL資料庫互動]

[https://twosheng.com/php%e6%95%99%e5%ad%b8-3%e8%88%87mysql%e8%b3%87%e6%96%99%e5%ba%ab%e4%ba%92%e5%8b%95/](https://twosheng.com/php教學-3與mysql資料庫互動/)

- 建立MySQL連線
- SELECT查詢
- INSERT新增
- UPDATE修改
- DELETE刪除
- 注意事項
  - query
  - 修改/刪除時 一定要指定是哪筆資料!!不然會全修改或是全刪除**
- 將重複連線程式獨立出來寫成Class/模組化


------------------

----------------

## 建立MySQL連線

要操作資料庫當然要先跟資料庫建立起連線，才能互相溝通。

```
<?php
$host = 'localhost';
//改成你登入phpmyadmin帳號
$user = '你的帳號';
//改成你登入phpmyadmin密碼
$passwd = '你的密碼';
//資料庫名稱
$database = 'user';
//實例化mysqli(資料庫路徑, 登入帳號, 登入密碼, 資料庫)
$connect = new mysqli($host, $user, $passwd, $database);
 
if ($connect->connect_error) {
    die("連線失敗: " . $connect->connect_error);
}
echo "連線成功";
```

## SELECT查詢

```
<?php
$host = 'localhost';
//改成你登入phpmyadmin帳號
$user = '你的帳號';
//改成你登入phpmyadmin密碼
$passwd = '你的密碼';
 
$database = 'user';
//實例化mysqli(資料庫路徑, 登入帳號, 登入密碼, 資料庫)
$connect = new mysqli($host, $user, $passwd, $database);
 
if ($connect->connect_error) {
    die("連線失敗: " . $connect->connect_error);
}
echo "連線成功";
 
//設定連線編碼，防止中文字亂碼
$connect->query("SET NAMES 'utf8'");
 
//選擇資料表user，條件是欄位id = 1的
$selectSql = "SELECT * FROM member WHERE id = 2";
//呼叫query方法(SQL語法)
$memberData = $connect->query($selectSql);
//有資料筆數大於0時才執行
if ($memberData->num_rows > 0) {
//讀取剛才取回的資料
// -fetch通常只一筆一筆取出,還有很多其它的指令可以使用
    while ($row = $memberData->fetch_assoc()) {
        print_r($row);
    }
} else {
    echo '0筆資料';
}
//結果:Array ( [id] => 1 [account] => test [password] => 123 [nickname] => 測試 )

```

$selectSql = "SELECT * FROM member WHERE id = 2";

通常查詢是用變數 id = $inputmun;

**或是比較廣泛使用佔位符**



## INSERT新增

**INTER會有SQL注入攻擊的危險**

```
<?php
$host = 'localhost';
//改成你登入phpmyadmin帳號
$user = '你的帳號';
//改成你登入phpmyadmin密碼
$passwd = '你的密碼';
//資料庫名稱
$database = 'user';
//實例化mysqli(資料庫路徑, 登入帳號, 登入密碼, 資料庫)
$connect = new mysqli($host, $user, $passwd, $database);
 
if ($connect->connect_error) {
    die("連線失敗: " . $connect->connect_error);
}
echo "連線成功";
 
//設定連線編碼，防止中文字亂碼
$connect->query("SET NAMES 'utf8'");
 
$insertSql = "INSERT INTO member (account, password, nickname) VALUES ('test', 123, '測試')";
//呼叫query方法(SQL語法)
$status = $connect->query($insertSql);
 
if ($status) {
    echo '新增成功';
} else {
    echo "錯誤: " . $insertSql . "<br>" . $connect->error;
}
```



## UPDATE修改

```
<?php
$host = 'localhost';
//改成你登入phpmyadmin帳號
$user = '你的帳號';
//改成你登入phpmyadmin密碼
$passwd = '你的密碼';
//資料庫名稱
$database = 'user';
//實例化mysqli(資料庫路徑, 登入帳號, 登入密碼, 資料庫)
$connect = new mysqli($host, $user, $passwd, $database);
 
if ($connect->connect_error) {
    die("連線失敗: " . $connect->connect_error);
}
echo "連線成功";
 
//設定連線編碼，防止中文字亂碼
$connect->query("SET NAMES 'utf8'");
 
$updateSql = "UPDATE member SET nickname = '傑克' WHERE id = 1";
//呼叫query方法(SQL語法)
$status = $connect->query($updateSql);
 
if ($status) {
    echo '更新成功';
} else {
    echo "錯誤: " . $updateSql . "<br>" . $connect->error;
}
```



## DELETE刪除

```
<?php
$host = 'localhost';
//改成你登入phpmyadmin帳號
$user = '你的帳號';
//改成你登入phpmyadmin密碼
$passwd = '你的密碼';
//資料庫名稱
$database = 'user';
//實例化mysqli(資料庫路徑, 登入帳號, 登入密碼, 資料庫)
$connect = new mysqli($host, $user, $passwd, $database);
 
if ($connect->connect_error) {
    die("連線失敗: " . $connect->connect_error);
}
echo "連線成功";
 
//設定連線編碼，防止中文字亂碼
$connect->query("SET NAMES 'utf8'");
 
$deleteSql = "DELETE FROM member WHERE id = 1 ";
//呼叫query方法(SQL語法)
$status = $connect->query($deleteSql);
 
if ($status) {
    echo '刪除成功';
} else {
    echo "錯誤: " . $deleteSql . "<br>" . $connect->error;
}
```

## **連線完/使用完>記得要close掉**

----

## 注意事項

- **query** 為在PHP中執行SQL語法指令,PDO同樣有query
```
$connect->query("SET NAMES 'utf8'");
$insertSql = "INSERT INTO member (account, password, nickname) VALUES ('test', 123, '測試')";
```

- **Update修改/Delete刪除時>一定要指定是哪筆資料!!不然會全修改或是全刪除**

## 將重複連線程式獨立出來寫成Class/模組化

可以看到連線程式一直被重複寫在檔案裡

```
<?php
$host = 'localhost';
//改成你登入phpmyadmin帳號
$user = '你的帳號';
//改成你登入phpmyadmin密碼
$passwd = '你的密碼';
//資料庫名稱
$database = 'user';
//實例化mysqli(資料庫路徑, 登入帳號, 登入密碼, 資料庫)
$connect = new mysqli($host, $user, $passwd, $database);
 
if ($connect->connect_error) {
    die("連線失敗: " . $connect->connect_error);
}
echo "連線成功";
```

可以使用Class寫出連線的重複程式,在用Controller繼承

或是

將連線寫在**建構子**中等方法

**case by case**
