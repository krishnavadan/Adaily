<div class="col-md-10 content">
 <div class="panel panel-default">
	<div class="panel-heading">
		Edit Data
	</div>
<section id="services">
    	<div class="container">
        	 <?php 
				$user = $user[0];
			 ?>
            <table class="table table-bordered">
                 <form method="post" action="<?php echo base_url();?>admin/editdata/<?php echo $user['id'];?>" enctype="multipart/form-data">
                    <input class="form-control" type="text" name="fname" placeholder="First Name" value="<?php echo $user['fname'];?>"/><br/>
                    <input class="form-control" type="text" name="lname" placeholder="Last Name" value="<?php echo $user['lname'];?>"/><br/>
                    <input class="form-control" type="text" name="email" placeholder="Email" value="<?php echo $user['email'];?>"/><br/>
                    <input class="form-control" type="text" name="user_name" value="<?php echo $user['user_name'];?>"/><br/>
                    <input class="form-control" type="text" name="password" placeholder="password" value="<?php echo $user['password'];?>"/><br/>
                    <input class="form-control" type="text" name="phone" placeholder="Phone" value="<?php echo $user['phone'];?>"/><br/>
                    
                   <input type="submit" name="submit" value="Update User" class="btn btn-primary"/><br/>
                        
                 </form>
            </table>
     </div>
    </section>
    </div>
    </div>
