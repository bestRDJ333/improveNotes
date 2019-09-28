# PHP header的奇妙冒險

**PHP header() 函数**

```
header(string,replace,http_response_code)
```

| 參數               | 描述                                                         |
| :----------------- | :----------------------------------------------------------- |
| string             | 必需。規定要發送的報頭字符串。                               |
| replace            | 可選。指示該報頭是否替換之前的報頭，或添加第二個報頭。默認是 true（替換）。 false（允許相同類型的多個報頭）。 |
| http_response_code | 可選。把 HTTP 響應代碼強制為指定的值。                       |

有趣的是
一定要加 **Location:**

```
header('Location: http://www.example.com/');
```

即使是連到外部網路也是

```
if (! file_exists("./test111.php")) {
    header("Location: https://ithelp.ithome.com.tw/articles/10194207");  ===>
    "iT邦幫忙文章, Day 10. PHP教學: Clean URL 優化連結"
    return;
}
```

才會跳轉

![./](C:\Users\cmder\Desktop\cat.png)

















