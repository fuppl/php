-- 创建数据库
create database mydatabase;

-- 显示所有数据库
show databases;

-- 查看以my开头的shujuku
show databases like 'my%';

-- 显示数据库查询语句
show create database mydatabase;

-- 选择数据库
use mydatabase;

-- 修改数据库
alter database mydatabase charset gbk;

-- 删除数据库
drop database mydatabase;