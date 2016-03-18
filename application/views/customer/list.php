<div class="col-md-10 content">
 <div class="panel panel-default">
	<div class="panel-heading">
		List
	</div>
<section id="portfolio" class="bg-light-gray">
        <div class="container">
          
         <table class="table table-bordered">
            	<thead>
                    <tr>
                        <td class="success">NO</td>
                        <td class="success">Name</td>
                        <td class="success">Company / Firm</td>
                        <td class="success">Address</td>
                        <td class="success">Location</td>
                        <td class="success">Pincode</td>
                        <td class="success">Email</td>
                        <td class="success">Contact</td>
                        <td class="success">File Name</td>
                        <td class="success">Status</td>
                        <td class="success">Action</td>
                        
                    </tr>
                </thead>
                 <?php if(!empty($info)){?>
                    <?php foreach($info as $intKey=>$strValue){?>
                            <tr>
                                <td><?php echo ($intKey+1)?></td>
                                <td><?php echo $strValue['name'];?></td>
                                <td><?php echo $strValue['company_firm'];?></td>
                                <td><?php echo $strValue['address'];?></td>
                                <td><?php echo $strValue['location']; ?></td>
                                <td><?php echo $strValue['pincode']; ?></td>
                                <td><?php echo $strValue['email']; ?></td>
                                <td><?php echo $strValue['contact']; ?></td>
                                <td><img src="<?php echo base_url('upload'). "/" . $strValue['tfile']; ?>" width="100px" alt=""/></td>
                                <td><?php echo $strValue['isfeatured']; ?></td>

                                <td>
                                    <button class="btn btn-info"><a href="<?php echo base_url();?>customer/editdata/">Edit</a></button>
                                    <button class="btn btn-danger"><a href="<?php echo base_url();?>customer/deletedata/" >Delete</a></button>
                                </td> 	
                            </tr>
                    <?php }?>
                <?php } else {?>
                    <tr>
                        <td colspan="5">No Users found</td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </section>
 </div>
 </div>
   