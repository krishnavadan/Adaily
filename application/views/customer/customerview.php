<div class="col-md-10 content">
  			  <div class="panel panel-default">
	<div class="panel-heading">
		Add User
	</div>
	<div class="panel-body">
		
        <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>customer/adddata" enctype="multipart/form-data">
        <fieldset>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="firstname">Name</label>  
          <div class="col-md-4">
          <input id="name" name="name" type="text" placeholder="" class="form-control input-md">
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="lastname">Company / Firm</label>  
          <div class="col-md-4">
          <input id="company_firm" name="company_firm" type="text" placeholder="" class="form-control input-md">
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="address">Address</label>  
          <div class="col-md-4">
          <input id="address" name="address" type="text" placeholder="" class="form-control input-md">
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-md-4 control-label" for="password">Location</label>  
          <div class="col-md-4">
          <input id="location" name="location" type="text" placeholder="" class="form-control input-md">
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-md-4 control-label" for="password">Pincode</label>  
          <div class="col-md-4">
          <input id="pincode" name="pincode" type="text" placeholder="" class="form-control input-md">
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-md-4 control-label" for="password">Email</label>  
          <div class="col-md-4">
          <input id="email" name="email" type="text" placeholder="" class="form-control input-md">
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-md-4 control-label" for="phone">contact	</label>  
          <div class="col-md-4">
          <input id="contact" name="contact" type="text" placeholder="" class="form-control input-md">
           </div>
        </div>
        
        <div class="form-group">
          <label class="col-md-4 control-label" for="phone">Images</label>  
          <div class="col-md-4">
          <input id="images" name="images" type="file" placeholder="" class="form-control input-md">
           </div>
        </div>
        
        
        <div class="form-group">
          <label class="col-md-4 control-label" for="phone">Isfeatured</label>  
          <div class="col-md-4">
                <select id="class" name="isfeatured" class="form-control">
                  <option value="">Select</option>	
                  <option value="1">Active</option>
                  <option value="0">isActive</option>
                </select>
           </div>
        </div>
       
        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="requestquote"></label>
           <div class="col-md-4">
            <input type="submit" id="submit" name="submit" class="btn btn-primary" value="ADD SERVICES">
           </div>
        </div>
        
        
        </fieldset>
    </form>
    
        
	</div>
</div>
</div>