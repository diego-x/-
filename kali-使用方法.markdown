---
layout: "post"
title: "kali 使用方法"
date: "2019-02-14 10:57"
---


![](https://raw.githubusercontent.com/shanke001/-/master/img/20190214110013.png)

# 基本命令
* **压解文件 tar -xvf 压解的文件名称**
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190419124455.png)

* **ls
-a ：全部的文件，连同隐藏档( 开头为 . 的文件) 一起列出来(常用)
-d ：仅列出目录本身，而不是列出目录内的文件数据(常用)
-l ：长数据串列出，包含文件的属性与权限等等数据；(常用)**

* **rm -rf file删除一个叫file的目录**
* **cd
使用 mkdir 命令创建 runoob 目录
[root@www ~]# mkdir runoob
使用绝对路径切换到 runoob 目录
[root@www ~]# cd /root/runoob/
使用相对路径切换到 runoob 目录
[root@www ~]# cd ./runoob/
 表示回到自己的家目录，亦即是 /root 这个目录
[root@www runoob]# cd ~
 表示去到目前的上一级目录，亦即是 /root 的上一级目录的意思；
[root@www ~]# cd ..**

* **rm
 -f file删除一个叫file的文件**
* **pwd
 -P ：显示出确实的路径，而非使用连结 (link) 路径。**
* **ls列出文件和目录ls /home(列出home下面的所有文件和目录)ls -l简单的列出所有目录   列出以.txt结尾的文件: ls \*.txt**
* **mkdir (创建新目录)
-m ：配置文件的权限喔！直接配置，不需要看默认权限 (umask) 的脸色～
-p ：帮助你直接将所需要的目录(包含上一级目录)递归创建起来！**
* **cat查看文件内容**
* cat  由第一行开始显示文件内容
* tac  从最后一行开始显示，可以看出 tac 是 cat 的倒著写！
* nl   显示的时候，顺道输出行号！
* more 一页一页的显示文件内容
* less 与 more 类似，但是比 more 更好的是，他可以往前翻页！
* head 只看头几行
* tail 只看尾巴几行
* **mv移动文件和改文件名如：mv/home/Test.txt/(表示将home下的Test.txt文件移动到根目录下) mv/Test.txt/Hello.java(表示将Test.txt文件名改成Hello.java)**
* **cp (复制文件或目录)
-a：相当於 -pdr 的意思，至於 pdr 请参考下列说明；(常用)
-d：若来源档为连结档的属性(link file)，则复制连结档属性而非文件本身；
-f：为强制(force)的意思，若目标文件已经存在且无法开启，则移除后再尝试一次；
-i：若目标档(destination)已经存在时，在覆盖时会先询问动作的进行(常用)
-l：进行硬式连结(hard link)的连结档创建，而非复制文件本身；
-p：连同文件的属性一起复制过去，而非使用默认属性(备份常用)；
-r：递归持续复制，用於目录的复制行为；(常用)
-s：复制成为符号连结档 (symbolic link)，亦即『捷径』文件；
-u：若 destination 比 source 旧才升级 destination ！**
* **touch建立空文件如：touchTest.txt**
*
* **vi编辑文件** （退出先按esc键）
 ![](https://raw.githubusercontent.com/shanke001/-/master/img/20190214121343.png)



# 工具操作


## 一.binwalk(逆向分析、文件提取)

### 提取命令

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190419123656.png)

**dd if=文件名 of=生成的文件名 skip=开始位置 bs=1**

2.1、固件扫描

　　命令：binwalk firmware.bin      ----->   通过扫描能够智能地发现目标文件中包含的所有可识别的文件类型。

2.2、提取文件

　　命令：binwalk -e firmware.bin ------>   选项“-e"和“--extract"用于按照定义的配置文件中的提取方法从固件中提取探测到的文件系统。

　　命令：binwalk -Me firmware.bin -----> 选项“-M"和“--matryoshka"用于根据magic签名扫描结果进行递归提取，仅对"-e"和“--dd"选项有效。

　　命令：binwalk -Me -d 5 firmware.bin ----> 选项“-d"和“--depth=<int>"用于限制递归提取深度，默认深度为8，仅当“-M"选项存在时有效。

2.3、显示完整的扫描结果

　　命令：binwalk -I firmware.bin ------>   选项"-I"和“--invalid"用于显示扫描的所有结果（即使是扫描过程中被定义为“invalid“的项）。

　　　　　　当我们认为binwalk错把有效的文件当成无效文件时，可以通过该选项来检查。

2.4、指令系统分析

　　选项“A"和“--opcodes"用于扫描指定文件中通用CPU架构的可执行代码。

　　由于某些操作码签名比较短，所以比较容易造成误判。如果我们需要确定一个可执行文件的CPU架构，可以使用该命令。

　　命令：命令：binwalk -A 70|more

　　使用Binwalk扫描从firmware.bin中提取的文件的文件“70”中的可执行代码，在该文件中可以发现CPU的架构（大端或者小端也会给出）。

## 二 . foremost（自动化提取文件）

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190214113205.png)

## 三. fcrackzip破解zip密码

**:~$ fcrackzip -b -c1 -u test.zip (－b 指定模式为暴破，-c1指定密码类型为纯数字，其它类型可以rtfm,-u这个参数非常重要不然不显示破解出来的密码,-l 5-6可以指定长度)**

USAGE: fcrackzip
          [-b|--brute-force]            use brute force algorithm　暴破
          [-D|--dictionary]             use a dictionary　字典模式
          [-B|--benchmark]              execute a small benchmark　速度测试
          [-c|--charset characterset]   use characters from charset　指定字符类型（数字，字母，混合等）
          [-h|--help]                   show this message
          [--version]                   show the version of this program
          [-V|--validate]               sanity-check the algortihm
          [-v|--verbose]                be more verbose
          [-p|--init-password string]   use string as initial password/file　指定开始字符（比如要只记得密码是５开头的６位纯数字，可以指定从５００００００开始破解，节约时间）
          [-l|--length min-max]         check password with length min to max　（指定密码长度区间）
          [-u|--use-unzip]              use unzip to weed out wrong passwords　　（这个选项很很重要，很重要）
          [-m|--method num]             use method number "num" (see below)　（指定破解类型）
          [-2|--modulo r/m]             only calculcate 1/m of the password
          file...                    the zipfiles to crack

methods compiled in (* = default):

## 四. file（检查文件属性）

**file+文件路径**
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190214130703.png)

## 五 nmap使用（端口扫描）

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190420183624.png)

## 六 vim编译器
https://blog.csdn.net/sevensevensevenday/article/details/55098879

## 七 字典生成 crunch
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190422101959.png)

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190422103558.png)

## 八 无线攻击 airccrack-ng
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190422103748.png)

Linux 网络渗透 如何使用Aircrack-ng 系列工具进行WPA/WPA2的监听和破解
https://blog.csdn.net/tonyzhejiang/article/details/72152512


# 详细

##  xsser

## 用 grep 过滤

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190415221659.png)

## 文件操作

* **touch 创建文件**
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190415221859.png)

* **标显行数**
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190416133321.png)

* **mkdir 创建目录**
* **使用 SED 查找和替换**
* **复制文件**
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190416133737.png)

## 分析和管理网络

iwconfig 来获取无线适配器（网卡）信息

* **更改你的 IP 地址**
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190416134037.png)

* **更改你的子网掩码和广播地址**
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190416134115.png)

* **修改MAC地址**

MAC(Media Access Control或者Medium Access Control)地址，意译为媒体访问控制，或称为物理地址、硬件地址，用来定义网络设备的位置。

* **映射您自己的 IP 地址**
在你的操作系统中一个被称为 hosts 的特殊文件总是执行域名——IP 地址转换。这个 hosts 文件位于
/etc/hosts，与 DNS 有点类似，你可以使用它来指定你自己的 IP 地址——域名映射。换句话说，当你在浏览
器输入 www.microsoft.com（或者其他任何域名）时，你可以决定浏览器将访问哪个 IP 地址而不是让 DNS
服务决定。对于黑客，这对于劫持局域网上的 TCP 连接以使用 dnsspoof 等工具将流量定向到恶意 Web 服务
器非常有用。

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190416163738.png)

## 权限管理以及文件控制

### 赋予个人用户权限

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190416164739.png)

* **文件权限设置**
```
chmod +(-) x(可执行) r（可读） w（可写）；
```

## 进程管理

* **查看进程**
ps  aux

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190416172232.png)

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190416172255.png)

* **通过进程名过滤进程**
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190416173252.png)

* **通过 top 命令查找资源占用率过高的进程**
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190416173823.png)

![](https://raw.githubusercontent.com/shanke001/-/master/img/20190416173955.png)

* **使用 nice 命令改变进程优先级**

 ![](https://raw.githubusercontent.com/shanke001/-/master/img/20190416174140.png)

 ![](https://raw.githubusercontent.com/shanke001/-/master/img/20190416174238.png)

 * **终止进程**
 ![](https://raw.githubusercontent.com/shanke001/-/master/img/20190416174634.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190416174709.png)
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190416174751.png)
