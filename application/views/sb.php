<?php

if($_POST)
{
	$name = $_POST['name'];
	
	?>
    
    <table border="0">
    
    <tr>
    <td colspan="2">Succedd !!!</td>
    </tr>
    
    <tr>
    <td colspan="2"><hr /></td>
    </tr>
    
    <tr>
    <td>First Name</td>
    <td><?php echo $name ?></td>
    </tr>
    
   
    </table>
    <?php
	
}

?>