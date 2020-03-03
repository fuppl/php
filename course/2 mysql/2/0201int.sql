-- 创建数据表
create table my_int(
	int1 tinyint,
	int2 smallint,
	int3 mediumint,
	int4 int,
	int5 bigint
)charset utf8;

-- 插入数据
insert into my_int();

-- 增加无符号标识，可使数字没有符号，增加存储范围
alter table my_int add int_6 tinyint unsigned first;