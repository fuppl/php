-- 日期类型
create table my_date(
	d1 date,
	d2 time,
	d3 datetime,
	d4 timestamp,
	d5 year
)charset utf8;

insert into my_date values(
	'1900-01-01',
	'14:14:14',
	'1900-01-01 14:14:14',
	'1999-01-01 14:14:14',
	69
);