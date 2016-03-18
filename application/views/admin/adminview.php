<div class="col-md-10 content">
  			  <div class="panel panel-default">
	<div class="panel-heading">
		Add User
	</div>
	<div class="panel-body">
		
        <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/adddata" enctype="multipart/form-data">
        <fieldset>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="firstname">Services Name</label>  
          <div class="col-md-4">
          <input id="s_name" name="s_name" type="text" placeholder="" class="form-control input-md">
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="lastname">Title</label>  
          <div class="col-md-4">
          <input id="title" name="title" type="text" placeholder="" class="form-control input-md">
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="email">Short Description</label>  
          <div class="col-md-4">
          <input id="short_desc" name="short_desc" type="text" placeholder="" class="form-control input-md">
          </div>
        </div>
         
        <div class="form-group">
          <label class="col-md-4 control-label" for="firstname">Long Description</label>  
          <div class="col-md-4">
          <input id="long_desc" name="long_desc" type="text" placeholder="" class="form-control input-md">
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-md-4 control-label" for="password">Tags</label>  
          <div class="col-md-4">
          <input id="tags" name="tags" type="text" placeholder="" class="form-control input-md">
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-md-4 control-label" for="phone">Feature Image</label>  
          <div class="col-md-4">
          <input id="featureimage" name="featureimage" type="file" placeholder="" class="form-control input-md">
           </div>
        </div>
        
        <div class="form-group">
          <label class="col-md-4 control-label" for="phone">Coverpage</label>  
          <div class="col-md-4">
          <input id="coverimage" name="coverimage" type="file" placeholder="" class="form-control input-md">
           </div>
        </div>
        
        <div class="form-group">
          <label class="col-md-4 control-label" for="phone">Icon</label>  
          <div class="col-md-4">
          <input id="icon" name="icon" type="file" placeholder="" class="form-control input-md">
           </div>
        </div>
        
        <div class="form-group">
          <label class="col-md-4 control-label" for="phone">Slug</label>  
          <div class="col-md-4">
          <input id="slug" name="slug" type="text" placeholder="" class="form-control input-md">
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