





## Node.js 基本介紹

JavaScript 是一個程式語言，會有程式語言本身所規範可以用的東西，例如說用`var`宣告變數，用`if else`進行判斷，或者是使用`function`宣告函式，這些東西都是 JavaScript 這個程式語言本身就有的部分。

既然我上面說了「程式語言本身就有的部分」，就代表也有一些東西其實是「不屬於 JavaScript 這個程式語言的」。

例如說`document.querySelector('body')`，可以讓你拿到 body 的 DOM 物件並且對它做操作，而操作之後會即時反應在瀏覽器的畫面上。

這個 `document` 是哪來的？其實是瀏覽器給 JavaScript 的，這樣才能讓 `JavaScript` 透過 document 這個物件與瀏覽器進行溝通，來操控 DOM。

如果你去翻 [ECMAScript](https://www.ecma-international.org/publications/standards/Ecma-262.htm) 的文件，你會發現裡面完全沒有出現`document`這個東西，因為它不是這個程式語言本身的一部份，而是瀏覽器提供的。

如果在瀏覽器上面跑 JavaScript，我們可以把瀏覽器稱作是 JavaScript 的「執行環境（runtime）」，因為 JavaScript 就跑在上面嘛，十分合理。

除了 `document` 以外，像是拿來計時的 `setTimeout` 與 `setInterval`，拿來做 ajax 的 `XMLHttpRequest` 與 `fetch`，這些都是瀏覽器這個執行環境所提供的東西。

那如果換了一個執行環境，是不是就有不同的東西可以用？除了瀏覽器以外，還有別的 JavaScript 的執行環境嗎？

真巧，還真的剛好有，而且剛好你也聽過，就叫做 Node.js。

有很多人都以為它是一個 JavaScript 的 library，但其實不然，不過也不能怪大家，因為最後的`.js`兩個字很容易讓人誤解。如果你覺得那兩個字一直誤導你的話，可以暫且把它叫做 Node 就好。

Node.js 其實是 JavaScript 的一個執行環境，就如同它自己在官網上所說的：

> Node.js® is a JavaScript runtime built on Chrome’s V8 JavaScript engine.

所以 JavaScript 程式碼可以選擇跑在瀏覽器上，就可以透過瀏覽器這個執行環境提供的東西操控畫面，或者是發 Request 出去；也可以選擇跑在 Node.js 這個執行環境上面，就可以利用 Node.js 提供的東西。

那 Node.js 提供了什麼呢？例如說`fs`，全稱為 file system，是控制檔案的介面，所以可以用 JavaScript 來讀寫電腦裡的檔案！還提供了`http`這個模組，可以用 JavaScript 來寫 server！



![執行環境示意圖](https://blog.techbridge.cc/img/huli/js-async/p1.png)



#### 阻塞（blocking）的對照就叫做非阻塞（non-blocking）

以讀取檔案來說，如果是非阻塞的話，是怎麼做到的呢？如果不會阻擋後續程式碼執行，那我該怎麼拿到檔案的內容？

就跟美食街需要透過呼叫器來通知餐點完成一樣，在 JavaScript 想要做到非阻塞，你必須提供一個呼叫器給這個讀取檔案的 method，這樣它才能在檔案讀取完畢時來通知你。在 JavaScript 裡面，function 就很適合當作呼叫器！

意思就是「當檔案讀取完畢時，請來執行這個 function，並且把結果傳進來」，而這個 function 又被稱作 callback function（回呼函式），有沒有突然覺得這名字取得真好？

### 這就呼應到我上面所說的，blocking 與 non-blocking 的差別就在於 blocking 的 method 會直接回傳結果（也是因為這樣所以才會阻塞），但 non-blocking 的 method 執行完 function 以後就可以直接跳下一行了，檔案讀取完畢以後會把結果傳進 callback function。

-----





AJAX 的全名是：`Asynchronous JavaScript and XML`，有沒有看到開頭那個 A 的全名是：Asynchronous，就代表是非同步送出 Request 的意思。



1. 阻塞（blocking）代表執行時程式會卡在那一行，直到有結果為止，例如說`readFileSync`，要等檔案讀取完畢才能執行下一行

2. 非阻塞（non-blocking）代表執行時不會卡住，但執行結果不會放在回傳值，而是需要透過回呼函式（callback function）來接收結果

   ----

   同步（synchronous）代表執行時程式會卡在那一行，直到有結果為止，例如說`readFileSync`，要等檔案讀取完畢才能執行下一行

1. 非同步（asynchronous）代表執行時不會卡住，但執行結果不會放在回傳值，而是需要透過回呼函式（callback function）來接收結果





在使用 callback function 時，有一個初學者很常犯的錯誤一定要特別注意。都說了傳進去的參數是 callback function，是一個「function」，不是 function 執行後的結果（除非你的 function 執行完會回傳 function，這就另當別論）。

舉例來說，標準錯誤範例會長得像這樣：

```
setTimeout(2000, tick())
function tick() {
  alert('時間到！')
}
  
// 或者是這樣
window.onload = load()
function load() {
  alert('load!')
}
```

`tick`是一個 function，`tick()`則是執行一個 function，並且把執行完的回傳結果當作 callback function，簡單來講就是這樣：

```
// 錯誤範例
setTimeout(2000, tick())
function tick() {
  alert('時間到！')
}
  
// 上面的錯誤範例等同於
let fn = tick()
setTimeout(2000, fn)
function tick() {
  alert('時間到！')
}
```

由於 tick 執行後會回傳 undefined，所以 setTimeout 那行可以看成：`setTimeout(2000, undefined)`，一點作用都沒有。

把 function 誤寫成 function call 以後，會產生的結果就是，畫面還是跳出「時間到！」三個字，可是兩秒還沒過完。因為這樣寫就等於是你先執行了 tick 這個 function。



1. 瀏覽器裡執行 JavaScript 的 main thread 同時也負責畫面的 render，因此非同步顯得更加重要而且必須，否則等待的時候畫面會凍結
2. callback function 的意思其實就是：「當某事發生的時候，請利用這個 function 通知我」
3. `fn` 是一個 function，`fn()` 是執行 function