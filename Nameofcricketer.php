<?php
$cricket=array(array('M S Dhoni',40),
array('Virat Kohli',33),
array('Sachin Tendulkar',48),
array('Rohit Sharma',36),
array('Sanju Samson',28));
?>
<html>
<table border="1"><tr><th>Name</th><th>Age</th></tr>
<tr><td><?php echo $cricket[0][0]?></td><td><?php echo $cricket[0][1]?></td></tr>
<tr><td><?php echo $cricket[1][0]?></td><td><?php echo $cricket[1][1]?></td></tr>
<tr><td><?php echo $cricket[2][0]?></td><td><?php echo $cricket[2][1]?></td></tr>
<tr><td><?php echo $cricket[3][0]?></td><td><?php echo $cricket[3][1]?></td></tr>
<tr><td><?php echo $cricket[4][0]?></td><td><?php echo $cricket[4][1]?></td></tr>
</table>
</html>
