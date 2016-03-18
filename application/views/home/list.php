<html>
<body>
<table border="1">
            	<thead>
                    <tr>
                        <td class="success">NO</td>
                        <td class="success">Name</td>
                        <td class="success">Email</td>
                        <td class="success">Contact</td>
                        <td class="success">Service ID</td>
                        <td class="success">Created</td>
                        <td class="success">Modified</td>
                        <td class="success">ip</td>
                        <td class="success">Action</td>
                        
                    </tr>
                </thead>
                 <?php if(!empty($info)){?>
                    <?php foreach($info as $intKey=>$strValue){?>
                            <tr>
                                <td><?php echo ($intKey+1)?></td>
                                <td><?php echo $strValue['name'];?></td>
                                <td><?php echo $strValue['email'];?></td>
                                <td><?php echo $strValue['contact'];?></td>
                                <td><?php echo $strValue['s_id']; ?></td>
                                <td><?php echo $strValue['created']; ?></td>
                                <td><?php echo $strValue['modified'];?></td>
                                <td><?php echo $strValue['ip']; ?></td>
								<td>
                                    <button class="btn btn-info"><a href="<?php echo base_url();?>admin/editdata/">Edit</a></button>
                                    <button class="btn btn-danger"><a href="<?php echo base_url();?>admin/deletedata/" >Delete</a></button>
                                </td> 	
                            </tr>
                    <?php }?>
                <?php } else {?>
                    <tr>
                        <td colspan="5">No Users found</td>
                    </tr>
                <?php } ?>
</table>
</body>
</html>