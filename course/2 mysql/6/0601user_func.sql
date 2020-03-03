-- 创建函数，实现从1到用户传入的值求和，不包括5的倍数

delimiter $$ -- 替换结束符

create function my_sum (t int) returns int 
begin
-- 声明局部变量（declare 必须在函数最前面）
	declare i int default 1; 
	declare s int default 0;
	my_while:while i <= t do
		if i%5 = 0 then
			set i = i + 1;
			iterate my_while;
		end if;
		set s = s + i;
		set i = i + 1;
	end while my_while;
	return s;
end
$$

delimiter ; -- 改回来

-- 调用函数
select my_sum(100),my_sum(-100);