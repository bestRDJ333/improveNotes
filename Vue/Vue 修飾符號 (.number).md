# Vue 修飾符號 (.number)

### .number  

正常input type='String',

舉以下例子

```
// HTML

<script src="//unpkg.com/vue/dist/vue.js"></script>
<script src="//unpkg.com/element-ui@2.12.0/lib/index.js"></script>
<div id="app">
<el-input v-model="input1" placeholder="请输入内容"></el-input>
  <el-input v-model="input2" placeholder="请输入内容"></el-input>
  <button v-on:click="test">A</button>
  {{ input }}
</div>
```

```
// JS

var Main = {
  data() {
    return {
      input1: '',
      input2: '',
      input: '',
    }
  },
  methods: {
    test() {
      return this.input =  this.input1 + this.input2;
    },
  },
}
var Ctor = Vue.extend(Main)
new Ctor().$mount('#app')
```

**input 7 + 3 ==> 73**

**所以要用v-model.number='xxx' 作符號修飾詞**

**input 7 + 3 ==> 10**

