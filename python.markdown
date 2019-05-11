---
layout: "post"
title: "python"
date: "2019-02-11 20:12"
---
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190211201230.png)

# 一 . 变量 和简单的数据类型

## 1.字符串

### ① 合并字符串

直接相加即可

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190211204012.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190211204245.png)      ![](https://raw.githubusercontent.com/shanke001/-/master/img/20190211204311.png)

### ② 删除空白 strip（）

 rstrip 右 lstrip

**函数的使用**
 ![](https://raw.githubusercontent.com/shanke001/-/master/img/20190211205158.png)

 ## 2.数字

 **\*\* 表示乘方运算**
 ![](https://raw.githubusercontent.com/shanke001/-/master/img/20190211205731.png)

 ![](https://raw.githubusercontent.com/shanke001/-/master/img/20190211205848.png)  ![](https://raw.githubusercontent.com/shanke001/-/master/img/20190211205937.png)

 **浮点型计算结果位数不确定**

 * str（）转化字符串函数

## 3.注释

### ① 注释符 \#
---

# 二 . 列表简介（类似数组）

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190211211155.png)

## 1.向列表中的元素添加元素

* append（） 向列表中的最后添加元素的函数

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190211211543.png)

* insert(插入的第几位，数值)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190211211834.png) ![](https://raw.githubusercontent.com/shanke001/-/master/img/20190211211854.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190211211908.png)

## 2.从列表中删除元素

* **del语句** ![](https://raw.githubusercontent.com/shanke001/-/master/img/20190211212156.png) 删除后其他的自由补位

* **pop() 函数**
 ![](https://raw.githubusercontent.com/shanke001/-/master/img/20190211212736.png)  类似直接将值取出

* 根据值弹出元素 **remove()**

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212090156.png)

## 3.组织列表

### 1. 对列表进行永久排序

* **sort（）只对字符串**  **按照asc码大小排序（先看首位，若相同则往后比较）**
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212090714.png)

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212090958.png)

* **反序排列** **sort（reverse=true）**

* **完全反序输出（不排列） reverse（）**
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212091610.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212091536.png)

* **len() 求长度**
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212091720.png)


* ![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212092033.png)  倒数第十位

----

# 三.操作列表

## 1. 遍历列表
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212092406.png)

**for + 自定名称 + in 数组名称 ： print（自定名称）**

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212092734.png)

遍历的其他用法
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212092958.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212093243.png)


## 2. 创建数值列表

* **rang（）仅仅将范围内的数值打印出来**
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212094007.png)
最后value的值为9

### ① 使用range（）创建数字列表
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212094225.png)

* **list（）** 将打印的内容转化为一个列表


![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212094403.png)

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212094439.png)![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212094458.png)

简便方法
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212100355.png)

其他用法：



![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212095059.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212095142.png)

### ② 列表运算
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212095942.png)

### ③ 使用部分列表

* **切片**
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212100633.png) ![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212100647.png)
取子集
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212100924.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212101031.png)

**遍历切片**
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212101604.png)  ![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212101624.png)

### ④ 复制列表
* 直接相等 a=b （a与b存在关系）
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212103126.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212103157.png)
* 让切片相等（直接克隆 a与b不存在关系）
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212103305.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212103318.png)


### ⑤ 元组（不支持修改值，只允许访问）
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212104019.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212104008.png)

* 遍历元组
 ![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212104219.png)

* 想修改元组内容，需要重新定义修改

# 四 .if语句

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212104653.png)
if后面可以不加括号 但必须有冒号 连接词用**and或者是 or**

* 判断某个值是否在列表（元组）中 **not in**

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212131813.png)

**if elif else**

# 五. 字典

## 1.字典操作
类似php数组 组成 **{} ：**
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212133312.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212133338.png)

* 添加键值对

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212133559.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212133612.png)

* 修改字典的值

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212133720.png)

* 删除键对

**del 语句**
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212133958.png)

* 遍历字典

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212134532.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212134545.png)

另一种方式 **items（）函数**
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212134858.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212134800.png)

* 遍历字典里的所有的键 **keys（）**
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212140047.png)

* 按顺序遍历所有的键值

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212140422.png)

* 按顺序遍历所有的值
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212140710.png)
**只支持字符串**

## 2.嵌套（字典）  字典列表

  **列表中嵌套字典**

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212141054.png)

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212141405.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212141418.png)

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212141612.png)

 **字典中嵌套列表**

 ![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212144829.png)

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212145028.png)

 **字典中嵌套字典**
 ![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212151259.png)


# 六.用户输入和 while 循环

## 1.input工作原理
 ![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212152527.png)

 ![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212152606.png)
 ![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212152630.png)

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212152733.png)

* **int（）接收数字**

必须有input 其实就是将输入的字符转化为int型

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212153940.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212154026.png)

## 2.while 循环的使用处理列表字典

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212154748.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190212154815.png)

**列表去重**
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190213094344.png)

# 七 函数

**关键字def**
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190213095330.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190213095524.png)

## 1. 返回字典
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190213095826.png)

## 2.传递列表
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190213100104.png)

## 3. 进制函数修改列表
**切片表示法[:] 创建列表的副本**
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190213100320.png)

## 4.接收任意数量实参
**形参名*toppings 中的星号让Python创建一个名为toppings 的空元组**

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190213100616.png)

*  结合使用位置实参和任意数量实参

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190213101517.png)

* **形参\*\*user_info 中的两个星号让Python创建一个名为user_info 的
空字典，并将收到的所有名称—值对都封装到这个字典中。**

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190213104513.png)
我们调用build_profile() ，向它传递名（'albert' ）、姓（'einstein' ）和两个键—值对（location='princeton' 和field='physics' ），并将返回
的profile 存储在变量user_profile 中，再打印这个变量：

## 5.导入整个模块

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190213110114.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190213110138.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190213110156.png)

## 6.使用as 给模块指定别名
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190213115203.png)

# 八. 类

**跟php类似**
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190213121249.png)
形参self 必不可少，还必须位于其他形参的前面

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190213122227.png)

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190213123842.png)

## 1.继承 （子类有父类的所有属性）

个现成类的特殊版本，可使用继承 。一个类继承 另一个类时，它将自动获得另一个类的所有属性和方法；原有的
类称为父类 ，而新类称为子类 。子类继承了其父类的所有属性和方法，同时还可以定义自己的属性和方法。
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190213131542.png)

## 2.导入单个类

# 九.文件和异常
# 十 . 数据储存

**模块json 来存储数据。**

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190213161136.png)

**使用json.load() 将这个列表读取到内存中：**

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190213161636.png)

**我们把可能发生错误的语句放在try模块里，用except来处理异常。except可以处理一个专门的异常，也可以处理一组圆括号中的异常，如果except后没有指定异常，则默认处理所有的异常。每一个try，都必须至少有一个except**


try ....except...else 语句，当没有异常发生时，else中的语句将会被执行。
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190213162830.png)

# ▲ 爆破脚本

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190218102459.png)

## 打印头文件
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190218102938.png)

## post请求
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190218110939.png)

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190218110959.png)

## 会话维持
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190218112306.png)


参考链接：https://www.cnblogs.com/mzc1997/p/7813801.html

re 参考链接：https://www.cnblogs.com/tina-python/p/5508402.html

# 十一 应用

## 图片识别（转字符）
