# PHP $_SERVER['?']

在 PHP 中取得目前網址的方式可以透過 $_SERVER 組合的方式取得，這樣的方式稍微有點麻煩，不過使用起來還算相當簡單，首先我們先來認識幾個常用到的 $_SERVER。
$_SERVER['HTTP_HOST']$_SERVER['REQUEST_URI']$_SERVER['PHP_SELF']$_SERVER['QUERY_STRING']

則以上 $_SERVER 分別顯示結果會是

```
$URL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
echo $URL;
```



透過這幾個 $SERVER，我們已經取得了網址的各個部分，接著就是把網址給組合起來這樣就可以順利取得現在的網址囉！這只是個簡單的範例而已，如果網址結構較為複雜，可以調用更多的 $SERVER 來取得詳細的部分，請參考  的 $_SERVER 介紹。

























-----

$_SERVER['PHP_SELF'] #當前正在執行腳本的文件名，與 document root相關。
$_SERVER['argv'] #傳遞給該腳本的參數。 
$_SERVER['argc'] #包含傳遞給程序的命令行參數的個數（如果運行在命令行模式）。 
$_SERVER['GATEWAY_INTERFACE'] #服務器使用的 CGI 規範的版本。例如，「CGI/1.1」。
$_SERVER['SERVER_NAME'] #當前運行腳本所在服務器主機的名稱。 
$_SERVER['SERVER_SOFTWARE'] #服務器標識的字串，在響應請求時的頭部中給出。 
$_SERVER['SERVER_PROTOCOL'] #請求頁面時通信協議的名稱和版本。例如，「HTTP/1.0」。 
$_SERVER['REQUEST_METHOD'] #訪問頁面時的請求方法。例如：「GET」、「HEAD」，「POST」，「PUT」。 
$_SERVER['QUERY_STRING'] #查詢(query)的字符串。 
$_SERVER['DOCUMENT_ROOT'] #當前運行腳本所在的文檔根目錄。在服務器配置文件中定義。
$_SERVER['HTTP_ACCEPT'] #當前請求的 Accept: 頭部的內容。 
$_SERVER['HTTP_ACCEPT_CHARSET'] #當前請求的 Accept-Charset: 頭部的內容。例如：「iso-8859-1,*,utf-8」。
$_SERVER['HTTP_ACCEPT_ENCODING'] #當前請求的 Accept-Encoding: 頭部的內容。例如：「gzip」。
$_SERVER['HTTP_ACCEPT_LANGUAGE']#當前請求的 Accept-Language: 頭部的內容。例如：「en」。
$_SERVER['HTTP_CONNECTION'] #當前請求的 Connection: 頭部的內容。例如：「Keep-Alive」。 
$_SERVER['HTTP_HOST'] #當前請求的 Host: 頭部的內容。 
$_SERVER['HTTP_REFERER'] #鏈接到當前頁面的前一頁面的 URL 地址。 
$_SERVER['HTTP_USER_AGENT'] #當前請求的 User_Agent: 頭部的內容。 
$_SERVER['REMOTE_ADDR'] #正在瀏覽當前頁面用戶的 IP 地址。 
$_SERVER['REMOTE_HOST'] #正在瀏覽當前頁面用戶的主機名。 
$_SERVER['REMOTE_PORT'] #用戶連接到服務器時所使用的端口。 
$_SERVER['SCRIPT_FILENAME'] #當前執行腳本的絕對路徑名。 
$_SERVER['SERVER_ADMIN'] #管理員信息 
$_SERVER['SERVER_PORT'] #服務器所使用的端口 
$_SERVER['SERVER_SIGNATURE'] #包含服務器版本和虛擬主機名的字符串。 
$_SERVER['PATH_TRANSLATED'] #當前腳本所在文件系統（不是文檔根目錄）的基本路徑。 
$_SERVER['SCRIPT_NAME'] #包含當前腳本的路徑。這在頁面需要指向自己時非常有用。 
$_SERVER['REQUEST_URI'] #訪問此頁面所需的 URI。例如，「/index.html」。 
$_SERVER['PHP_AUTH_USER'] #當 PHP 運行在 Apache 模塊方式下，並且正在使用 HTTP 認證功能，這個變量便是用戶輸入的用戶名。 
$_SERVER['PHP_AUTH_PW'] #當 PHP 運行在 Apache 模塊方式下，並且正在使用 HTTP 認證功能，這個變量便是用戶輸入的密碼。 
$_SERVER['AUTH_TYPE'] #當 PHP 運行在 Apache 模塊方式下，並且正在使用 HTTP 認證功能，這個變量便是認證的類型。