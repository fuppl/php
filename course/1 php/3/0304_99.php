<table border=1px,black,solid>
	<?php  for($i = 1; $i <= 9;$i++){?>
		<tr>
			<?php for($j = 1;$j <= $i;$j++){?>
				<td>
					<?php
						echo $j.' * '.$i.' = ',$i * $j; 
					?>
				</td>
			<?php }?>
		</tr>
	<?php }?>
</table>

<table border=1px,black,solid>
	<?php  for($i = 1; $i <= 9;$i++):?>
		<tr>
			<?php for($j = 1;$j <= $i;$j++):?>
				<td>
					<?php
						echo $j.' * '.$i.' = ',$i * $j; 
					?>
				</td>
			<?php endfor;?>
		</tr>
	<?php endfor;?>
</table>