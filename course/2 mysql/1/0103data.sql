-- 插入表中数据
use mydatabase;

create table my_teacher(
	name varchar(10);
	age int;
)charset utf8;

insert into my_teacher values ('jack',30);
insert into my_teacher values ('lilei',30);
insert into my_teacher values ('lihua',30);
insert into my_teacher values ('韩梅梅',30);
insert into my_teacher values (`李老四`,30);

-- 获取所有
select * from my_teacher;

-- 获取指定字段
select name from my_teacher;

-- 获取指定条件
select * from my_teacher where age = 30;

-- 删除指定条件
delete from my_teacher where name = 'jack';

-- 更新
update my_teacher set age = 18 where name = 'lilei';

