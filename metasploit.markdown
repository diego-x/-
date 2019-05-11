---
layout: "post"
title: "metasploit"
date: "2019-02-13 20:37"
---
![](https://raw.githubusercontent.com/shanke001/-/master/img/20190213203814.png)

X02Metasploit渗透攻击步骤

1. 扫描目标机系统，寻找可利用漏洞

Nessus

nmap -sV –script=nmap-vulners/vulscan.nse www.example.com

Metasploit使用search模块搜索可用端口扫描模块

Metasploit中利用Nmap工具 msf>nmap -O -Pn/-p0 URI

2. 选择并配置漏洞利用模块

3. 选择并配置攻击载荷模块

4. 利用编码模块免杀

5. 渗透攻击



## 1.端口扫描

**开启metaspolit 使用---> msfconsole**

### ① nmap -v -sV ip地址


### ② 使用search模块搜索可用端口扫描模块

命令search portscan

可用use ..... tcp

show options 查看可选项

set rhosts + ip地址
set threads + 线程数
run 运行

上面方法很慢，

### ③ 使用smb模块检测版本系统

命令 **use auxiliary/scanner/smb/sumb_version**

设置 rhosts 和 线程 即可

### ④ syn 扫描
### ⑤ ssh 扫描 ftp 扫描

命令 ..../scanner/ssh/ssh_version
ftp命令相同

## whatweb

whatweb + url 即可查询服务器版本
