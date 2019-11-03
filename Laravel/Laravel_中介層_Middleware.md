# 中介層（Middleware）

<http://kejyun.github.io/Laravel-5-Learning-Notes-Books/> [Laravel 5 學習筆記__作者 : KeJyun]

可以在處理資料之前，先過濾條件判斷，符合條件的再繼續處理之後的 Http 請求。

就像實作一個部落格，使用者發表文章的時候，一定要登入，否則就會被導到登入頁（或首頁），判斷登入條件的部分在 Laravel 5 可以用中介層去實現。

#### HTTP 請求在實際碰觸到應用程式之前，最好是可以層層通過許多中介層，每一層都可以對請求進行檢查，甚至是完全拒絕請求。

----

#### 有設定 Http Request 中介層時，所有的請求都會丟給中介層的 handle() 函式做處理，第一個變數傳入的是 Request 本身，第二個變數是若檢查驗證成功之後要執行的函數，並把 Request 丟給下一層處理 $next($request)。

```
public function handle($request, Closure $next)
{
    if ($this->auth->guest())
        {
            if ($request->ajax())
            {
                return response('Unauthorized.', 401);
            }
            else
            {
                return redirect()->guest('auth/login');
            }
        }

        return $next($request);
}
```

