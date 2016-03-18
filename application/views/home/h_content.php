
 <section id="main-slider" class="no-margin">
                        <div style="" class="inq_box">
                            	<div class="col-xs-12" id="inq-title">
                                	<h2 class="text-center" id="service-Title">Get Any Services Now</h2>
                                </div>
                                <div class="col-xs-12" id="inq-sub-title">
                                	<h6  class="text-center" id="sb-title">Fill your Details,<br>We will Contact you Shortly</h6>
                                </div>
                                 <div class="col-xs-12" id="inq-service-id">
                                	<input type="hidden" name="sid" id="sid-ctrl" class="form-control" placeholder="service id" required>
                                </div>
                                <div class="col-xs-12" id="inq-name">
                                	<input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="col-xs-12" id="inq-email">
                                	<input type="text" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="col-xs-12" id="inq-contact">
                                	<input type="text" name="contact" class="form-control" placeholder="Contact" required>
                                </div>
                                <div class="col-xs-12" id="inq-submit">
                                	<input type="submit" id="inq-form" name="save" value="submit" class="form-control btn btn-danger">
                                </div>
                                
                            </div>
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

              

                <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                         

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                   
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->
                
                 <div class="item" style="background-image: url(images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                         

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                   
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(images/slider/bg3.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                         

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                   
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->

    <!--/#feature-->

    <section id="services" class="service-item">
	   <div class="container">
            <div class="center wow fadeInDown">
                <h2>Our Service</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">
            
            	<!--<div class="col-sm-6 col-md-4">
                        <div class="media services-wrap wow fadeInDown">
                            <div class="pull-left">
                                <img class="img-responsive" src="images/services/services1.png">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">Plumbing Services</h3>
                                <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                            </div>
                         </div>-->
                         
                        <?php if(!empty($services)){?>
							<?php 
								//var_dump($services);
							foreach($services as $intKey=>$strValue){?>
                            <div class="col-sm-6 col-md-4">
                        <div class="media services-wrap wow fadeInDown">
                            <div class="pull-left">
                            	<span class="img-id" style="display:none"><?php echo $strValue['s_id']; ?></span>
                               <img src="<?php  echo base_url('upload'). "/" . $strValue['featureimage']; ?>" width="100px" alt=""/>
                           
                           
                                <h3 class="media-heading"><?php echo $strValue['s_name'];?></h3>
                                <p><?php echo $strValue['short_desc'];?></p>
                             </div>
                         </div> 	</div>
                                  
                            <?php }?>
                       		 <?php } else {?>
                            
                        <?php } ?>
              
                
             </div>
            <!--/.row-->
        </div><!--/.container-->		
    </section><!--/#services-->
 
 