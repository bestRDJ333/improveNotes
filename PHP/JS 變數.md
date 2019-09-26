<h2>JS 變數</h2>

JS 變數存活可以跨區

```
<html>

<head>
    <title>scope</title>
    <script>
      var x = "apple";
    </script>
</head>
<body>
    <script>
    alert(x)
    </script>
</body>
	<script>
    alert(x)
    </script>
</html>
```

當然跨區的呼叫function也可以

但是遇到 變數名相同時優先用同區域

```
<html>
<head>
    <title>scope</title>
    <script>
      var x = "apple";
    </script>
</head>

<body>
   <button onclick="callalert()">alert</button>
    <script>
    function callalert(){
        alert(x)
    }
    </script>
</body>
</html>
```

