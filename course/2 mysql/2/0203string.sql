-- 字符串

-- set集合
create table my_set(
	hobby set('篮球','足球','羽毛球')
)charset utf8;

insert into my_set values ('篮球,足球','篮球,乒乓球');