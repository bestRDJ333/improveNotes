Code Clean

變數命名 :

#### MySterious Names <沒辦法一眼看出變數或方法用意的名子>

1. **Clean** (不 拖泥帶水)

2. **Intention-Revealing**  (意圖明顯)

   #正常命名是不需要注解的,需要註解代表沒有做好Intention-Revealing



<h4>Meaningless Names <毫無意義的名子></h4>

​	為了滿足Intention-Revealing條件, 反而可能將變數命名過於複雜化...

1. **盡量縮短名稱**

	2. **盡量讓方法內的程式碼小於10行**
 	3. **盡量讓方法只做一件事情**                 ( V )



#### Names with Encodings <帶編碼的名稱>

​	ex:匈牙立命名法

#### Ambigous Names <容易誤解的名字>

```text
容易誤解的名字
+---------------------+
bool MutiSelect(){}
+ --------------------+
 以上面的例子來說，到底是想表示可以有很多選擇，還是被選了很多!?
+---------------------+
int? customerNameId;
+---------------------+
 這是想表達什麼?是客戶名稱呢還是Id
 如果是客戶名稱的話那為什麼資料型別是整數
 如果是想表達客戶的Id的話，那為什麼可以允許Id是null
```

#### Noisy Names <吵鬧的名子(X)...去除不必要的字(O)>

去除不必要的字,讓名稱簡短易讀

<h2>結論</h2>

若能滿足下列幾點就是個好名字：

Not too short, not too long(不要太長也不要太短) 

Meaningful(有意義)

Reveal intention(意圖明顯)





出處 : 

[Clean Code]心得之無暇程式碼之戒掉爛名字(poor name)

[<http://andy51002000.blogspot.com/2017/05/clean-code-poor-name.html?m=1>]

教材 :

Clean Code Notes (英文)

[<https://github.com/JuanCrg90/Clean-Code-Notes>]
