-- 创建数据表
create table mydatabase.class(
	name varchar(10)
);

-- 使用表选项
create table student (
	name varchar(10)
)Engine = innodb charset utf8;

-- 再test数据库下创建一个与class数据库相同的数据库
use test;
create table class like mydatabase.class;

-- 显示所有表
show tables;

-- 显示匹配表
show tables like 'cl%';

-- 显示表结构
describe class;

desc class;

show columns from class;	-- 这三个效果相同

-- 查看表创建语句
show create table class;

-- 修改表选项
alter table class charset gbk;

-- 数据库中表名字通常有前缀，去数据库前两个字母加下划线
rename table class to my_class;

-- 给表增加age字段
alter table my_class add age int;   

-- 增加字段，放到第一个位置
alter table my_class add id int first;

-- 增加字段，放到name之后
alter table my_class add addr varchar(20) after name;

-- 修改字段名
alter table my_class change addr address varchar(20);

-- 修改字段类型
alter table my_class modify name varchar(20);

-- 删除字段类型
alter table my_class drop age;

-- 删除表名
drop table  my_class;










































