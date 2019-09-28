Data:電腦中所有可以存起來的東西{散落的檔案}

資料庫的最底層也是檔案

把所有東西到進一個檔案,只要有一個bit壞掉
整個資料庫檔案就壞掉,不能開啟
所以"備份"就非常重要



**備份**

完整備份  >> 整個copy(約一周一次)

差異備份 >> 距離上次備份 到這次要備份 的差異(至少一次完整備份)(約每晚)

交易紀錄備份 >> 備份 造成這樣結果 的指令(每小時)

==>另外複製一份出來



**備份不是Data最佳解**

(風險損失最低)備援:有兩套資料庫同時在動作,寫入資料的同時是寫入兩台資料庫

一台資料庫損壞,可以無痛轉移至另一台

(EX:遠傳在全台除了主機還有5套備援)

<h2>不要賭資料庫,玩不起QQ</h2>



1.關聯式: 資料監視有關係的,規矩較多運作原理等(文件格式化,輸入方式等...較制式)

2.文本式: 資料間沒有關係的,通常處理P單位

式關聯式資料是無法處理的(GOOGLE),無規矩



資料庫引擎(籃子,平常看到的圓柱體)

資料庫管理系統DBMS(高階管理,實際資料的存取,UI介面)

大部分資料庫  與  管理系統通常分開,所以安裝時會有兩個檔案
好處>>統理系統可以用第三方的DBMS系統

SQL Command >>下的指令叫SQL Command,不是語言只是指令

SQL Command + 時間日期等存取 >>用 SQL函數

每個資料庫的函數不同

**SQL Command**

1.DDL 

建立資料庫(建立倉庫)Create,建立資料表(櫃子)

**沒有好的UI時,指令要怎麼下>>指令要記**



2.DML操作語言(**重點**)

Insert Into / Updata / Delete

3.DQL 查詢語言

Select (資料庫的運作"效率"相關!!!)

4.DCL控制語言(重點)

設定權限的地方 Grant  /  Revoke

資料交易的地方 Commit  /  Rollback

EX:交易失敗,資料庫要不要回復到之前交易的狀態

交易成功>>資料庫異動

交易失敗>>中間所有異動要回復到異動之前的狀態

**關聯是資料庫的組成**

教科書              資料庫會看到的

實體 entity >> Table(像是excle一個一個格子)

屬性 attribute > Field 決定每一欄要放甚麼資料,規定的

(資料庫維護,不見得是資料庫設計者)

關聯性 relationship > 心中 >> 資料庫文件

關聯>>資料庫的關聯是找不到的

==========================

**一開始資料庫的建立的DATA都來至同一張表**

同一張資料表 >> 零散DATA  >>組成 資料庫



資料輸入是有問題的>>資料出來就是錯的>>不會知道

**把一個表變兩個表 >>要解決資料重複的問題!!!!**

(一直循環到解決重複問題)

**必須確認資料輸入是一致的>>不太可能**



關聯線 == 橫跨兩張資料表的兩個欄位  >> 代表這欄位的值 ,代表的意義是一樣的

**欄位名子不代表關聯, 名子兩張表可以不一樣**



**查詢軌跡**

1.搜尋條件-找表  who?(EX:李大媽)

2.搜尋目標-找表   who的什麼(EX:的地址)

搜尋目標 / 搜尋條件 在哪幾個表?? 

抓出來後,順著這一排(找欄位值) >> 找關聯線  >>找搜尋欄位

<h3>關聯式 :資料流動一定要靠關聯線</h3>

欄位:

文字:只要鍵盤可以按出來的都是文字

number: 可以設定>> 只能打 數字的整數

**線性搜尋**

不建索引的欄位, 一筆一筆看

**索引  Index 相同放一起**

關鍵字索引

索引:分類概念(分群概念) , 加快資料搜尋速度 ; 

找群>>再找群中要的資料

**建立索引時,群中資料量要越少愈好**

 在群中還是做線性搜尋,群的資料量要少,速度才會快

資料庫由 預設 小到大排序

**前端資料在 排序 時,後端資料最好一樣排序 , 不然找資料時會變慢**

**判斷建立索引 **

索引:消耗硬碟空間*

關聯線的兩端要建 :索引

被拿來做 搜尋條件 所在之的欄位要建 : 索引


<h3>主索引/主鍵 PK</h3>

特性: (確保唯一性/正確性)

1.欄位值不可重複

2.欄位不可空白/不可不填

3.主索引是索引

任何資料表都只有一個主索引

但可以是 複合欄位  是主索引 

(EX: 帳單  電話號碼+日期 為主索引 >> 不重複)

<h3>參考索引/外來鍵/外鍵 FK</h3>

沒有一定要建立,跟前端網頁有關(使用勾選)

特性: 

維持資料正確性







=============================

安裝Xampp

開Apache 開MYSQL>>點Admin 

 MariaDB == mySQL





類型:每個欄位可以選的資料型態

長度/值  /4 ==中文字數

可以加大,縮小要小心

文字:

1. varchar : 變動長度文字型態,效率比char慢, 不足長度部分補空白

   如果長度不一樣,varchar 會把尾端空白的字元拿掉 ,所以比較慢

2. char : 固定長度文字型態,確定資料是固定長度並永遠不會改變(EX:身分證字號)

3. text : 單一欄位,放超大文字資料 約4G

數字:

1.tinyint : 成績用 

2.smallint

3.mediumint

4.int

5.bigint: 最大

差距bit  X 資料量  ==硬碟空間

時間日期



<h3>資料庫正規化</h3>

**網頁前端跟資料庫息息相關**

實務上通常只用1~3正規化

後期正規化資料會越分散

1.第一正規化

每個欄位只能放一個值

**違反第一正規化==索引沒用==線性搜尋**

2.第二正規化

主索引以外其他欄位,要完全相依主索引

不相依//部分相依(只符合一個主索引欄位)

**都要分割處出去**

**在不違反第一正規化 與第二正規劃下, 可以增加一個 關聯欄位(屋號)**

一對多

一對多 +一對多 ==>>多對多關係 , 一定是三個資料表

一對一 >>客戶對購物車 

2.第三正規化

非主索引建彼此之間不能依賴

**關聯圖 ER (重要)**

有標準化法

唯一一份友表示資料表關聯的文件

欄位名稱+底線 >>主索引

關連(菱形) >> 左邊表的欄位 == 右邊表的欄位

屋號==屋號    (菱形)   屋號==屋號 

****

**一個專案 一個ER (重要)**

不同目的的專案會獨立做一份ER文件



**資料字典 (重要)**

沒有標準化法

補足ER沒補的資料, 一個表一個資料字典

EX:

UID(欄位名稱)  char(資料型態(10)) 
身分證字號(說明)   N/Y(NULL)

****

<h2>SQL Command</h2>

SELECT   欄位名稱 *全部
FROM 資料表名稱userinfo

cmd :: 

mysql -u root;

use addressbook;

select * from userinfo;

****

cmd :: show tables;

這個資料庫下有多少資料表

select fee, hid from bill;

 select hid, fee from bill;

精準查詢

select * 
from userinfo 
where cname = '王大明' 

select * from userinfo where cname = '王大明';

部分查詢 /模糊查詢

select * 
from userinfo 
where cname LIKE '王%'  (性王)

(%王)  王字結尾

(%王%)  全文檢索, 有王都要

select * 
from bill
WHERE fee>=500

select * 
from bill
WHERE fee>=200 and fee <= 500

select * 
from bill
-- WHERE fee>=200 and fee <= 500  (-- , 兩個 -- 一個空白  >>註解)

WHERE fee BETWEEN 200 AND 500  (同上寫法)

WHERE fee NOT BETWEEN 200 AND 500 (除了...不要,其他都要)



where fee <> 500  不是...都要

select * 
from bill
-- WHERE fee>=200 and fee <= 500

-- WHERE fee NOT BETWEEN 200 AND 500

-- where fee <> 500



**條件跟條件  不是and  就是  or**

**只能單引號**

where  !!  永遠在 from 後面

from  !!  永遠在 select 後面



**不能是and  沒有人同時叫王大明  又叫李大媽**

select * 
from userinfo
WHERE cname = '王大明' or cname = '李大媽'

同時可以用

WHERE cname IN ('王大明','李大媽')



<h3>排序 羅馬拚音</h3>

ORDER BY  (中間要空格)

小到大

大到小 DESC

**按照筆畫排序**

select * from userinfo order by convert(cname using big5);

同名同姓用uid分順序

select * from userinfo order by convert(cname using big5) desc, uid;

NULL  ==>> 完全沒有輸入資料;

'     '  ==> 不知道空字串 還是空白建

空字串: 打過姓名/值後, 又把姓名/值刪掉  (曾經有過又刪後)



<h2>NULL只要拿來運算 / 輸出  就會當掉</h2>

網頁後端__條件判斷 if  輸入空字串

拿變數null做事直接當程式

select * , cname from userinfo;

SQL command__處理NULL

ifnull( 前面欄位如果是null , 就換成這個東西 ' '  EX:空字串)

select * , ifnull(cname, '') from userinfo;

要找NULL, 用 is NULL

select * from userinfo where cname  is null;

要找''空字串

select * from userinfo where cname = '';



select * from userinfo where cname  is null or cname = '';

用來處理使用者登入帳密常用的東西 , 計算比數

select count(*) from userinfo;

**查詢需求, 第一件是  拿ER**

****

<h2>多個表的查詢法</h2>

邏輯>>把多個表先合併回 一張大表;

先併表仔選欄位 , select 後面先不要打



SELECT live.uid, cname, address, tel
from userinfo,live,house,phone

WHERE userinfo.uid = live.uid AND
		live.hid = house.hid AND
        house.hid = phone.hid AND
        cname = '王大明'

(把表跟條件 寫一起)

**inner join  要左右兩邊data種類要是一樣的 , 才會現示**

****

<h2>內部連結</h2>

**左右都要有資料種類才會列出**

同時可以寫成

SELECT live.uid, cname, address, tel
from userinfo INNER JOIN live ON
	userinfo.uid = live.uid
    INNER JOIN house ON
    live.hid = house.hid
    INNER JOIN phone ON
    house.hid = phone.hid
WHERE cname = '王大明'

(把表跟條件 分開寫)

****

<h2>外部連結 LIVE JOIN</h2>

<h3>左側外部連結</h3>

多的在哪裡 就是哪裡連結

userinfo  比 live  種類多

userinfo   LEFT   JOIN    live   ON

userinfo.uid = live.uid

LEFT     JOIN   house   ON

放哪邊 &看以什麼表為主  >>決定左右外部連結

左側外部連結  ,左邊資料都要現示 ,且左邊資料種類比右邊資料多

SELECT userinfo.uid, live.uid, cname, address, tel
from 
	 userinfo LEFT JOIN live ON
	userinfo.uid = live.uid
	LEFT JOIN house ON
 	live.hid = house.hid
 	LEFT JOIN phone ON
 	house.hid = phone.hid

****

<h3>右側外部連結</h3>

右側外部連結 , 看from要放哪'

列出所有房子的住戶清單 :

SELECT house.hid ,cname, address
from userinfo RIGHT JOIN live ON
userinfo.uid = live.uid
RIGHT JOIN house ON
live.hid = house.hid



****

<h3>交叉連結</h3>

SELECT *
from userinfo, house

幾筆X幾筆  >> 交叉連結出來的筆數

Data 跟 data  沒有關聯

或是

Data群 跟 data群  沒有關聯

****

<h3>別名</h3>

SELECT a.uid, cname, address, tel
FROM userinfo as a, live as b, house as c, phone as d
WHERE a.uid = b.uid AND
		b.hid = c.hid AND
		c.hid =d.hid



**SQL Command 輸出時改欄位名稱, 前端作業方便**

SELECT a.uid as '帳號', cname AS '姓名', address as '電話', tel as '電話'
FROM userinfo as a, live as b, house as c, phone as d
WHERE a.uid = b.uid AND
		b.hid = c.hid AND
		c.hid =d.hid



**SELECT DISTINCT 在不改動form下, 將重複資料刪除**

SELECT DISTINCT a.uid as '帳號', cname AS '姓名', address as '住址'
FROM userinfo as a, live as b, house as c, phone as d
WHERE a.uid = b.uid AND
		b.hid = c.hid AND
		c.hid =d.hid



<h3>欄位數字加總</h3>

select sum(fee) from bill;

sum總和

avg 平均

**小數的處理 四捨五入**

select tel, round(avg(fee), 0) from bill group by tel;

**增加欄位名稱, 一開始並沒有  平均金額 欄位**

select tel, round(avg(fee), 0) as '平均金額' from bill group by tel;







****

<h3>group by 群組</h3>

group by 欄位名稱 ==>>把這個欄位下"相同DATA"圈成一個群組 

==>> select  相同群組  的  fee加總  

select sum(fee) from bill group by tel

這樣更清楚

select tel, sum(fee) from bill group by tel;



<h3>group by 欄位BUG</h3>

要同時顯示:

SELECT bill.tel, round(AVG(fee), 0) AS '平均金額', phone.hid

FROM bill, phone
WHERE bill.hid = phone.hid AND phone.hid = house.hid
GROUP BY    bill.tel

<h3>這是錯的, select 後面欄位要符合GROUP BY後面欄位</h3>







**group by欄位  除了計算出來的欄位 ,  後面還有欄位,但**

**select  後面有幾個欄位  groupby就要有幾個欄位  , 沒有  就可能是錯的**

SELECT bill.tel, round(AVG(fee), 0) AS '平均金額', address
FROM bill, phone, house
WHERE bill.hid = phone.hid AND phone.hid = house.hid
GROUP BY bill.tel, address

















****

列出所有房子的住戶清單 

使用右側外部連結

把SQL Command列好傳上去

http://newsletter.ascc.sinica.edu.tw/news/read_news.php?nid=3745









****



下指令建資料表

[CREATE](http://localhost/phpmyadmin/url.php?url=https://dev.mysql.com/doc/refman/5.5/en/create-table.html) [TABLE](http://localhost/phpmyadmin/url.php?url=https://dev.mysql.com/doc/refman/5.5/en/create-table.html) `test`.`userinfo` ( `id` [VARCHAR](http://localhost/phpmyadmin/url.php?url=https://dev.mysql.com/doc/refman/5.5/en/string-types.html)(10) [NOT](http://localhost/phpmyadmin/url.php?url=https://dev.mysql.com/doc/refman/5.5/en/logical-operators.html#operator_not) NULL , `姓名`[VARCHAR](http://localhost/phpmyadmin/url.php?url=https://dev.mysql.com/doc/refman/5.5/en/string-types.html)(40) NULL , `屋號` [INT](http://localhost/phpmyadmin/url.php?url=https://dev.mysql.com/doc/refman/5.5/en/numeric-types.html) NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;



A_I

自動編號,保證不重複











===========================

Ox23265860

Ox05076416

























































































VP online



