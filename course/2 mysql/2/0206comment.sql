-- 创建表，增加字段描述
create table my_comment(
	name varchar(10) not null comment '用户名，非空', -- 用户名，不能为空
	password varchar(20) not null comment '密码，非空',-- 密码
)charset utf8;