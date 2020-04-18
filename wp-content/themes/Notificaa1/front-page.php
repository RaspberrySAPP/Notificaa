<?php get_header(); ?>

<section class="page-wrap">
<div class="container">
	<h1><?php the_title();?></h1>
	<?php get_template_part('includes/section','content');?>
</div>


  <!---- Slider ---------->
    <div class="slider-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="slider">
              <div >
                <div class="content-wrapper">
                  <h4>Notificca helps you to accelerate your business by providing you ability to connect with your customers in Xero with SMS messaging.</h4>
                  <h3>Coming Soon . . . .</h3>
                </div>
                <button class="btn-banner1" onclick="window.location.href='/#newsletter'" >Subscribe for updates</button>
              </div>
              <div >
                <div class="content-wrapper">
                  <h4>Automate SMS reminders to due invoices in Xero.</h4>
                  <p>> Get in touch with your Xero customers with SMS.</p>
                  <p>> Notificca uses top notch innovative technologies to provide you best possible services.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6" id="animation_wrapper">
            <div id="animation_container" style="width:100%; height: auto;">
              <canvas id="canvas" style="display: block;  width: 500px;"></canvas>
              <div id="dom_overlay_container" style="width: 500px; pointer-events:none; overflow:hidden;display: block;">
              </div>
            </div>
          </div>
        </div>
      </div>  
      <script type="text/javascript">
          $('.slider').slick({
              dots: true,
              speed: 300,
              arrows: false,
              slidesToShow: 1,
              slidesToScroll: 1,
              
              
            });
      </script>
    </div>
      <!-- welcome -->
  <div class="welcome"> 
    <div class="container">
      <div class="col-md-7 welcome-w3lleft">
        <h3 class="agileits-title">About !</h3>
        <h4>Notificca does seamless integration with Xero in order to only fetch your data from Xero and send SMS to your customers based on tasks you have created.</h4>
        <p>For instance consider a scenario, you want to send SMS reminders to your customer whose invoices are overdue by 7 days. You have to create this task in Notificca which is just a few clicks and notificca will do the rest in background for you.</p>   
        <p>You can create tasks based on multiple actions like when Invoice is created, when payment is received and many more to come.</p>
       </div>  
      <div class="col-md-5 welcome-w3lright">
        <div class="welcome-grids">
          <div class="service-box">
            <div class="agileits-wicon">
              <i class="fa fa-clone" aria-hidden="true"></i>
            </div>
            <h5>Chase debtors with SMS.</h5> 
          </div> 
          <div class="clearfix"> </div>
        </div>
        <div class="welcome-grids">
          <div class="col-md-6 col-sm-6 col-xs-6 service-box">
            <div class="agileits-wicon">
              <i class="fa fa-heart-o" aria-hidden="true"></i>
            </div>
            <h5>Welcome new customers!</h5> 
          </div>
          <div class="col-md-6 col-sm-6 col-xs-6 service-box">
            <div class="agileits-wicon">
              <i class="fa fa-tv" aria-hidden="true"></i>
            </div>
            <h5>Improve cashflow</h5> 
          </div>
          <div class="clearfix"> </div>
        </div>
      </div> 
      <div class="clearfix"> </div>
    </div> 
  </div>
  <!-- //welcome -->
  <!-- features -->
  <div class="features">
    <div class="container"> 
      <div class="features-agileinfo">
        <div class="col-md-4 col-sm-4 features-wthree-grids"> 
          <h4><span class="glyphicon glyphicon-send" aria-hidden="true"></span> Chase Debtors</h4>
          <ul>
            <li>Chase debtors by sending them automated reminder SMS.</li>
            <li>Set multiple reminders as much as you want. eg: 3 days overdue reminder, 7 days overdue reminder, etc.</li>
            <li>Set personalized SMS templates for each reminder.</li>
          </ul>
          <h5 class="w3ls-featext">1</h5>
        </div>
        <div class="col-md-4 col-sm-4 features-wthree-grids"> 
          <h4><i class="fa fa-envelope-o" aria-hidden="true"></i> Acknowledge customers</h4>
          <ul>
            <li>Send an automated welcome message to your customer.</li>
            <li>Acknowledge customers when payment is received.</li>
            <li>Thank you to your customers on the new Invoice.</li>
            <li>Send order confirmation messages.</li>
          </ul>
          <h5 class="w3ls-featext">2</h5>
        </div>
        <div class="col-md-4 col-sm-4 features-wthree-grids"> 
          <h4><i class="fa fa-asl-interpreting" aria-hidden="true"></i> Build great relationships</h4>
          <ul>
            <li>SMS has a phenomenal reach rate.It makes communication fast and cost-efficient. SMS also has the highest opening rates of all messaging services. 90% of SMS messages are read.</li>
            <li>This helps business always in getting touch with customers and getting paid faster as well.</li>
          </ul>
          <h5 class="w3ls-featext">3</h5>
        </div> 
        <div class="clerfix"> </div>
      </div>
    </div>
  </div>
  <!-- //features -->

  <!-- FAQ -->
  <div class="we-offer-about">
    <div class="container">
      <div class="row about">
        <div class="col-sm-6 col-md-6 choose">
           <h3 class="agileits-title">FAQ !</h3>
            <div class="panel-group w3l_panel_group_faq" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title asd">
                  <a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Can I Include fields from Xero in my SMS template?</a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" 
                    aria-labelledby="headingOne">
                <div class="panel-body panel_text">
                  Yes, You can include fields from xero Contact, Account, Invoice, Payment, etc in your message.
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title asd">
                  <a class="pa_italic collapsed" role="button" data-toggle="collapse" 
                    data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>What is Task?</a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" 
                aria-labelledby="headingTwo">
                 <div class="panel-body panel_text">
                    A task is a automation workflow that you set in Notificca. 
                    Eg: Send welcome message when Contact is created is a task. Task is <b>not number executions.</b>
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title asd">
                <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Can I have multiple reminders for overdue Invoices?</a>
                </h4>
              </div>

               <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                 <div class="panel-body panel_text">
                   Yes, You can have multiple remider tasks for overdue invoices. Eg: Overdue by 7 days, Overdue by 10 days, etc.
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingFour">
                <h4 class="panel-title asd">
                <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Can I have my own sender Id for SMS?</a>
                </h4>
              </div>

               <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                 <div class="panel-body panel_text">
                    Yes, This depends on your contry.
                </div>
              </div>
            </div>

             <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingFive">
                <h4 class="panel-title asd">
                <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Does notificca subscription plan depend on the number of tasks?</a>
                </h4>
              </div>

               <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" 
                    aria-labelledby="headingFive">

                 <div class="panel-body panel_text">
                    No, Our subscription plan is not dependent on the number of tasks.
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingSix">
                <h4 class="panel-title asd">
                <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Does notificca creates, updates, deletes any data in my Xero Org?</a>
                </h4>
              </div>

               <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" 
                    aria-labelledby="headingSix">

                 <div class="panel-body panel_text">
                   No, Notificca does not creates/ updates / deletes any data in your Xero org. Notificca only fetch your data from Xero also dont store your data anywhere.
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="col-sm-6 col-md-6">
          <img class="img img-responsive" style="margin-top:-15%; margin-left:auto;" src="images/faq-2.svg" alt=" ">
        </div>
        <div class="clearfix"></div>
      </div>
  </div>
</div>

<!-- FAQ -->

<!-- newsletter -->  
  <div id="newsletter" class="footer-agiletop newsletter">
    <div class="container"> 
      <div class="col-md-6 w3agile_newsletter_left">
        <h3 class="agileits-title">Subscribe Newsletter</h3>
        <p>Subscribe here to get updates from Notificca.</p>
      </div>
      <div class="col-md-6 w3agile_newsletter_right">
        <form action="#" method="post">
          <input type="email" name="Email" placeholder="Email" required="">
          <input type="submit" value="Subscribe" />
        </form>
      </div>
      <div class="clearfix"> </div>   
    </div>
  </div>
  <!-- //newsletter -->  
+
</section>



<?php get_footer();?>