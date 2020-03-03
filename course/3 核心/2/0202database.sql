create database News charset utf8;

create table n_news(
	id int primary key auto_increment,
	title varchar(50) not null comment '新闻标题',
	isTop tinyint not null comment '是否置顶',
	content text comment '内容',
	publisher varchar(20) comment '发布者',
	pub_time int not null comment '发布时间'
)charset utf8; 