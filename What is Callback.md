# What is Callback??

<https://cythilya.github.io/2018/10/30/callback/> [你懂 JavaScript 嗎？#23 Callback]

<https://eyesofkids.gitbooks.io/javascript-start-from-es6/content/part4/callback.html?q=> [Callback(回調)是什麼？]

不錯的例子:

<https://developer.mozilla.org/zh-TW/docs/Glossary/Callback_function> [回呼函式]





## Callback

在 JavaScript 中，callback 被當成事件迴圈回頭執行某個已在佇列中進行的程式的目標。再次舉 A、B、C 三件工作的例子，其中 B 必須等待 C 做完才能執行，於是我們將 B 放到 C 的 callback 中，讓宿主環境在收到 C 完成的回應時後 B 放到佇列中準備執行。

