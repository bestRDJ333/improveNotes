# Vue经典面试题: Vue.use和Vue.prototype.$xx有血缘关系吗?

## 有关系吗?

没关系, 面试的时候总会问如何在Vue的实例上挂载一个方法/属性, 也就是`Vue.prototype`的小技巧, 但是突然有人问他俩有啥关系还真是新鲜.

![img]()

我想应该是网上有文章写

```
Vue.prototype.$xx
```

是用法的, 但是没有说明Vue.use的用法以及

```
Vue.prototype.$xx
```

为什么就能在组件内

```
this.$xx
```

 

这么调用, 所以下面我就细细的说下.



## 说能学会啥?

看完本文, 能掌握如何定义一个Vue插件, 以及Vue.prototype.$xx的原理.

## Vue.use

### 用饿了么UI举例

下面是饿了么UI的引入代码, 大家对这段应该很熟悉了.

```
import Vue from 'vue'
import Element from 'element-ui'
Vue.use(Element)
复制代码
```

接下来, 我们在看下这个`Element`是什么



![img]()

这里我们看到

```
Element
```

是个对象, 上面有

```
version
```

等字段, 其中还有一个

```
install
```

,他是本文的主角,

 

```
Vue.use
```

就是要运行这个

```
install
```

对应的函数.



#### 最小结构

写一段最少的代码演示如何用**Vue.use**初始化插件:

```
// 插件
const plugin = {
  install(){
    document.write('我是install内的代码')
  }
}

// 初始化插件
Vue.use(plugin); // 页面显示"我是install内的代码"
复制代码
```

[在codepen上看预览](https://codepen.io/russell2015/pen/gNobOy) 如果想知道插件的具体实现, 请看 [cn.vuejs.org/v2/guide/pl…](https://cn.vuejs.org/v2/guide/plugins.html)

#### 总结

1. Vue的插件是一个**对象**, 就像`Element`.
2. 插件**对象**必须有`install`字段.
3. `install`字段是一个函数.
4. 初始化插件**对象**需要通过`Vue.use()`.

#### 扩展学习

1. `Vue.use()`调用必须在`new Vue`之前.
2. 同一个插件多次使用Vue.use()也只会被运行一次.

## Vue.prototype.$xx

好了, 回过头我们再看眼上面的图片, 是不是发现了熟悉的代码:

```
Vue.prototype.$loading = Loading.service;
Vue.prototype.$msgbox = MessageBox;
Vue.prototype.$alert = MessageBox.alert;
...
复制代码
```

`Vue.prototype` 的用法我相信大家都会用, 我做过[调查](https://juejin.im/pin/5d07447de51d456e13da9adc), 我就不啰嗦了, 但是我发现大家好像不知道"所以然".

### 所以然

为什么初始化的时候运行了`Vue.prototype.$alert`, 然后就可以在任意组件内部运行`this.$alert()`了呢? 首先要了解**构造函数**, **实例**, **原型**(prototype)这3个概念.

#### 构造函数, 实例, 原型(prototype)

这3个概念有点老生常谈了, 百度一搜很多解释, 我先举个例子来和Vue类比你就明白他俩了.

首先我写个假的`Vue`我们叫他`AVue`, 恩, 他是个"赝品", "A货", 接下来跟我一步一步走:

#### 1. AVue是个构造函数

这里我们只模拟下`methods`功能.

```
function AVue({methods}){
	for(let key in methods){
		this[key] = methods[key];
	}
}
复制代码
```

#### 2. 给AVue的原型上放个`$alert`

```
AVue.prototype.$alert = ()=>{document.write('我是个赝品!')}
复制代码
```

#### 3. 实例化AVue

实例化**Vue**的时候我们知道, 我们会传入一个**对象**, 对象里面有**data**/**methods**等, 我的**AVue**一样, 下面我们让**AVue**也学**Vue**那样实例化:

```
// 我只山寨了methods, 所以只能学methods喽
const av = new AVue({
    methods: {
        say(){
            this.$alert(); 
        }
    }
});

// 调用一下say
av.say(); // 我是个赝品!
复制代码
```

[在codepen上预览](https://codepen.io/russell2015/pen/bPaGjy)

### 总结

好了, 运行到这里, 我想你应该看明白了吧, 之前大家写的`Vue.prototype.$xx`其实只不过是js中**函数原型**的特性罢了: **函数原型上的属性/方法, 在函数实例化后, 可以在任意实例上读取**, 要不你也做个"赝品"试下.

### 扩展

vue让大家知道了**defineProperty**, 我们自己也可以用下他, 比如让**Vue.prototype**变成不可写的, 防止被覆盖.

```
Object.defineProperty(Vue.prototype, '$alert', {
    writable: false,
    value(){
        console.log('我是行货!')
    }
});
复制代码
```

## 课后练习

建议大家可以随便写一个vue的插件练手, 比如我的练手项目就是他:

:lollipop:命令式调用vue组件 [github.com/any86/vue-c…](https://github.com/any86/vue-create-root)

