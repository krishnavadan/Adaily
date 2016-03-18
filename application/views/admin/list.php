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
                        <td class="success">Services name</td>
                        <td class="success">Title</td>
                        <td class="success">short dec</td>
                        <td class="success">Long des</td>
                        <td class="success">Tags</td>
                        <td class="success">Feature Image</td>
                        <td class="success">Cover Image</td>
                        <td class="success">Icon</td>
                        <td class="success">Slug</td>
                        <td class="success">Action</td>
                        
                    </tr>
                </thead>
                 <?php if(!empty($info)){?>
                    <?php foreach($info as $intKey=>$strValue){?>
                            <tr>
                                <td><?php echo ($intKey+1)?></td>
                                <td><?php echo $strValue['s_name'];?></td>
                                <td><?php echo $strValue['title'];?></td>
                                <td><?php echo $strValue['short_desc'];?></td>
                                <td><?php echo $strValue['long_desc']; ?></td>
                                <td><?php echo $strValue['tags']; ?></td>
                                <td><img src="<?php echo base_url('upload'). "/" . $strValue['featureimage']; ?>" width="100px" alt=""/></td>
                                <td><img src="<?php echo base_url('upload'). "/" . $strValue['coverimage']; ?>" width="100px" alt=""/></td>
                                <td><img src="<?php echo base_url('upload'). "/" . $strValue['icon']; ?>" width="100px" alt=""/></td>
                                <td><?php echo $strValue['slug']; ?></td>

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
        </div>
    </section>
 </div>
 </div>
 <?php $phpgrid->display(); ?>   