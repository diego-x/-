![](https://raw.githubusercontent.com/shanke001/-/master/img/20190123155056.png)

# 一.认识mysql

## 1.数据库基础

### ①.表
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190123160344.png)

### ②.数据类型

整形，浮点型，精确小数型，二进制数据类型，日期/时间数据类型，字符串

### ③.主键

由一列或多列组成，用来查找确定表中数据
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190123161225.png)

## 2.数据库技术的组成

### ①.数据库系统
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190123161657.png)

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190123161825.png)

### ② SQL语言
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190123164209.png)

# 二.数据库的基本操作

## 1.数据库的创建

create database database_name;
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190123200542.png)

查看数据库 show databases;

##  2.删除数据库

drop database database_name;
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190123200732.png)

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190123200829.png)


# 三.数据表的基本操作

## 1.创建数据表
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190124102908.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190124102946.png)

### ①使用主键约束

* 单字段主键
方法一：
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190124105819.png)
方法二：
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190124110955.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190124111110.png)

* 多字段联合主键
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190124111254.png)

### ②使用外键约束
---
不会哥啊

---

### ③ 使用非空约束(not null constraint)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190124113532.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190124113629.png)

### ④使用唯一键约束（unique）
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190124185324.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190124114114.png)

### ⑤使用默认约束 (default)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190124114640.png)

### ⑥ 设置表的属性值自动增加（auto_increment）
也就是自动填充内容
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190124190713.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190124191938.png)

**插入语句insert into <表名>；**
**查看语句select * from <表名>；**
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190124192318.png)

## 2.查看数据表结构

### ①查看基本表结构语句describe
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190124192815.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190124192559.png)

### ②查看表详细结构语句 show cretae table
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190124201255.png)

## 3.修改数据表
### ①修改表名
alter(改变) table < >   ++++  rename <>
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190124201654.png)

### ② 修改字段的数据类型 alert table <> modify <> <>
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190124202546.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190124202700.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190124203306.png)

### ③修改字段名 alter table <> change <> <> <>
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190124203444.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190124203716.png)

### ④ 添加字段 alter table <> add <> \<int>  [][ first | after 出现过的表名]
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190124204022.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190124204219.png)

### ⑤ 删除字段 alter table <表名> drop <字段名>
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190124205314.png)

### ⑥修改字段的排列位置
 **alter table <表名> modify <字段1> <数据类型> first | after <字段2>；**

### ⑦ 更改表的储存引擎
**alter table <表名> engine=<更改后的储存引擎>；**

### ⑧删除表的外键约束（母鸡）

## 2.删除数据表
### ① 删除没有关联的数据表
**drop table [if exists]表一，表二......**
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190125154341.png)

# 四.数据类型和运算符

## 1.mysql 数据类型

### ① 整形

**主要有 (tiny int) (small int) (medium int) (int) (bigint)**
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190125163637.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190125163902.png)

### ② 浮点型和定点数类型
**double,float**  ***定点数型 decimal**
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190125164804.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190125165002.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190125170027.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190125170556.png)

### ③ 时间与日期类型

**datetime、date、timestamp、time、year**
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190125170830.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190125183759.png)

### ④文本字符串类型
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131154333.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131154446.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131155309.png)

* text类型
tinytext text mediumtext longtext

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131155637.png)

* enum（枚举类型）
 略


 * set类型

![](http://img3.redocn.com/20111226/Redocn_2011122108555453.jpg)

## 2.常见运算符介绍
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131162942.png)

* **比较运算符**

in between and （is null） greatest least like regexp


* **逻辑运算符**
ture false not and or xor

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131163646.png)

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131163932.png)

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131164214.png)

* **比较运算符**

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131164318.png)

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131164600.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131164527.png)

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131164736.png)

* **安全等于运算符**

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131164852.png)


* **不等于运算符**

 ![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131165212.png)

 ![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131165410.png)

 * **空运算符**

  ![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131165635.png)

  * **between (a) and (b)**

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131165832.png)

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131170207.png)

**max>=expr>=min**

* **least**

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131170502.png)

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131170550.png)

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131170644.png)

* **greatest**

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131170922.png)

* **in, not in**
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131171142.png)

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131171357.png)

* **like**

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131171912.png)

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131171832.png)

* **regexp**
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131173759.png)

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131173928.png)

## 3.逻辑运算符

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131174110.png)

# 五.mysql函数
## 1.数字函数
### ①.绝对值函数abs（）圆周率pi（）
### ②.平方根sqrt（）求余mod（）
### ③.获取整数函数ceil（） ceilng（） floor（）
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131174715.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131174750.png)
### ④.获取随机数函数rand（）和rand（x）
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131175122.png)

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131175000.png)

### ⑤.round（x），round(x.y),truncate(x,y)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131175302.png)

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131175348.png)

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131175424.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190131175553.png)

### ⑥ 符号函数（判断正负）
sign（x）
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190202191112.png)

### ⑦ pow（x,y）、power(x,y) exp(x)

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190202191252.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190202191425.png)

## 2.字符串函数

### ① char_length(长度)

### ② concat(str1,str2.......)  concat_ws(x,str1,str2...)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190202191910.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190202192017.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190202192100.png)
### ③ insert（str1，x，len，str2）
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190202192312.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190202192527.png)

### ④ lower（）大转小 upper（） ucase（）
### ⑤ 获取指定长度的字符串函数
left（s，n） right （s,n）

### ⑥ 填充字符串的函数 左lpad（str1,len,str2） 右rpad
将串str1填补至len

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190202195114.png)

### ⑦ 删除空格 ltrim , rtrim ,trim
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190202195710.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190202200729.png)

### ⑧ 重复生成字符串函数repeat（s,n）
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190202200848.png)

### ⑨ 空格函数space（n） 替换函数replace（s,s1,s2）
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190202201135.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190202201308.png)

* strcmp
* 逆序串 reverse（s）

### ⑩ 匹配串开始位置
locate position instr
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190202201554.png)

### ⑩+ 返回指定串 elt
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190202201740.png)

field（返回）；返回串的位置
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190202201950.png)

类似 find_in_set()
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190202202057.png)
格式：
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190202202218.png)

### 🔟++
make_set

## 3.判断函数

### ① if
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190202202710.png)

### ② ifnull
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190202203352.png)

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190202203542.png)
### case (x) when 1 when 2;

## 4.系统信息函数

### ① 获取MYSQL版本号。连接数、数据库名 version
 * connection_id() 返回当前mysql服务器连接的次数
 * show  processlist 显示正在连接的用户信息
 ![](https://raw.githubusercontent.com/shanke001/-/master/img/20190202204208.png)
 * database（）查看当前使用的数据库
 * schema

 ### ② 获取用户名函数
 **user（）、current_user(),system_user()、session_user()**


## 5.加解密函数

### ① password（）（不可逆）
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190203181954.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190203181903.png)

* **MD5**

### ② encode（‘str1’，'key'）;
str1 加密的串， key 类似加密的方试
* **decode（）**
 ![](https://raw.githubusercontent.com/shanke001/-/master/img/20190203190014.png)

 ## 6.其他函数

### ① format（）返回字符串
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190203190326.png)

### ② 进制转换conv（）
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190203192011.png)

### ③ ip地址与数字转换 inet_aton
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190203192405.png)

### ④ 重复执行函数
benchmark
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190203192644.png)

### ⑤改变数据类型函数
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190203192845.png)

# 五.数据查询

## 1.表单查询
### ① 查询所有字段
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190203194145.png)

### ② 查询指定的字段
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190203194414.png)

### ③ 查询指定记录
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190203194710.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190203194656.png)

### ④ 带in关键字的查询
http://www.th7.cn/d/file/p/2015/07/02/d8b9c5e20d8b9dbed35af58375950a55.jpg
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190203200153.png)

### ⑤ 带between and 的范围查询
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190203200452.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190203200819.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190203200853.png)

### ⑥ 带like的字符匹配

* **百分号通用符%**
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190203201419.png)

### ⑦ 查询空值 is null
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190203201645.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190203201745.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190203201814.png)

### ⑧ 消除重复（查询结果）distinct

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190203201942.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190203202106.png)

### ⑨ 对查询结果进行排序 order by
![](http://img3.redocn.com/20111226/Redocn_2011122108555453.jpg)

### ⑩ 分组查询
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190204102104.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190204110814.png)

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190204112145.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190204112059.png)

### ⑩+ 使用limit限制查询结果的数量
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190204103210.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190204103710.png)

## 2.使用聚合函数查询

### ① conut()函数 行数
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190204104015.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190204104453.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190204104521.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190204104623.png)

### ② sum 函数
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190204112245.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190204112341.png)

### ③avg（）平均数
### ④ max（）返回值为指定列最大值 min（）

## 3.连接查询
### ① 内连接查询 inner join
![](http://img3.redocn.com/20111226/Redocn_2011122108555453.jpg)


## 4.合并查询
**union**
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190211190057.png)

## 4.为表和字段取别名
### ① 为表取别名

表名 as 表名  （实际表名没有改变）
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190211190709.png)

### ② 为字段取别名

列名 as 列名


## 5.正则匹配
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190211191825.png)

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190211192048.png)

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190211192251.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190211192404.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190211192420.png)

# 七. 插入 更新 与删除数据

## 1. 插入数据

**insert into [表名] values**

## 2.更新数据

update [表名]  set 更新的内容  + 限定条件
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190211193439.png)

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190211193640.png)

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190211193712.png)

## 3.删除数据
**delete from [表名] where + 限定条件**
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190211194021.png)
