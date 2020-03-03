-- 过程
-- 求1到100的和；
delimiter $$
create procedure my)pro1()
begin
	declare i int default 1;
	-- declare s int default 0;
	set @sum = 0;
	while i <= 100 do 
		set @sum = @sum + i;
		set i = i +1;
	end while;
	-- 显示结果
	select @sum;
end
delimiter ; 