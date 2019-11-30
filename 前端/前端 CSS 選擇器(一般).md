# 前端 CSS 選擇器(一般)

[<https://ithelp.ithome.com.tw/articles/10190782>]

[<https://www.w3school.com.cn/cssref/css_selectors.ASP>]

## 選擇器

### .class 類別選擇器

```
// html
<div class="foo bar">
    Hello CSS
</div>
```



```
.foo {
  color: red;
}

.foo.bar {
  color: blue;
}
```

**補充說明**
以上範例最終*Hello CSS*將會呈現藍色，特別注意`.foo`與`.bar`在`css`裡我刻意地將他們**連在一起**
這意義代表**同時擁有**`.foo`與`.bar`類的元素顏色才會被定義於藍色。
而如果我們將CSS範例改成以下

```
.foo {
  color: red;
}

.foo　.bar {
  color: blue;
}
```

其差異只在於`.foo`與`.bar`的定義用空白隔開，但實際意義去大大不同
當這兩個類使用空白分開時代表**CSS將會定義其.bar類屬於.foo類的子元素時才改變顏色**

*所以由於以上html範例標籤div雖然帶有.bar類，但與.foo類屬於同一層級，並不符合父子關係*
*所以color: blue並不會對這個div生效。`*

-----

**所以CSS要與Html作對照使用**

-----

> ## **CSS將會從選擇器的最右邊開始往左邊解讀**

當CSS看到`.foo .bar`這樣的定義時，會先找出文件裡帶有`.bar`類的`element`元素，然後如果左邊沒有其他類的定義，就會套用定義，但！如果左邊還有其他選擇器就會在近一步的搜尋是否屬於`.foo`類，依此類推依序向文件頂點`html`做查找，由此可知**若把選擇器寫的越詳細、越深，其實效能越是低下**

### .id

```
#foo {
  color: red;
}

.bar {
  color: blue;
}
```

**補充說明**
`.id`選擇器其`特定度`相當高僅次於`!important`與`行內定義`
以這個範例來說，雖然`.bar`類定義於id`#bar`之後，但由於類`特定度`低於id，因此`.bar`類的`color`雖然成功定義但不會被瀏覽器所使用。

Html Tag中同時定義id class的CSS時,因特定度問題會優先考慮id的CSS

----

### selector, selector

```
<div>
  Hello CSS
<div>
<p class="foo">I love CSS3</p>
```

```
div, .foo {
  color: red;
}
```

**補充說明**
使用逗號可以將`選擇器`分隔，使定義對**每個**`選擇器`都生效

### selector > selector

```
<div>
  I love HTML
  <p>I love CSS</p>
</div>
  
<p>I love JavaScript</p>
```

```
p {
  color: blue;
}

div p {
  color: red;
}
```

**補充說明**
`>`符號代表定義該`選擇器`的**第一層子元素**且符合`選擇器`規則的對象樣式
以上範例 I love HTML 會是黑色， I love CSS會是紅色，而I love JavaScript會是藍色

### selectot1 + selector2

```
<div>I love HTML</div>
<p>I love CSS</p>
<p>I love JavaScript</p>
```

```
div + p {
  color: red;
}
```

**補充說明**
在這個範例中只有符合緊接在`div`元素之後的`p`元素會改變顏色，因此只有I love CSS變成了紅色。

### [attribute]

```
  <div foo>I love HTML</div>
  <div foo="bar">I love HTML</div>
  <input type="text" value="I love CSS">
  <input type="number" value="10">
```

```
[foo] {
  color: blue;
}

input[type="text"] {
  color: red;
}
```

**補充說明**
在這個範例中首先選擇器`[foo]`將帶有`foo`屬性的元素改變文字顏色為藍色
不管該屬性的值為何，甚至是沒有值，所以此範例的兩個I love HTM都會變為藍色！

接著將帶有`type`屬性且屬性值為**text**的元素文字改變成紅色
因此雖然第二個`input`帶有屬性`type`但值不符合**text**所以文字顏色不會被改變

