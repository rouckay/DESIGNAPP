<?php require_once "header.php"; ?>

<div class="niwaxofcanvas offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample">
<div class="offcanvas-body">
<div class="cbtn animation">
<div class="btnclose"> <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button></div>
</div>
<div class="form-block sidebarform">
<h4>Request A Quote</h4>
<form id="contactForm" data-bs-toggle="validator" class="shake mt20">
<div class="row">
<div class="form-group col-sm-12">
<input type="text" id="names" placeholder="Enter name" required data-error="Please fill Out">
<div class="help-block with-errors"></div>
</div>
<div class="form-group col-sm-12">
<input type="email" id="emails" placeholder="Enter email" required>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="row">
<div class="form-group col-sm-12">
<input type="text" id="mobile" placeholder="Enter mobile" required data-error="Please fill Out">
<div class="help-block with-errors"></div>
</div>
<div class="form-group col-sm-12">
<select name="Dtype" id="Dtype" required>
<option value="">Select Requirement</option>
<option value="web">web</option>
<option value="graphic">graphic</option>
<option value="video">video</option>
</select>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="form-group">
<textarea id="message" rows="5" placeholder="Enter your message" required></textarea>
<div class="help-block with-errors"></div>
</div>
<button type="submit" id="form-submit" class="btn lnk btn-main bg-btn">Submit <span class="circle"></span></button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</form>
</div>
<div class="getintouchblock mt30">
<h4>Get In Touch</h4>
<p class="mt10">Please fill out the form below if you have a plan or project in mind that you'd like to share with us.</p>
<div class="media mt15">
<div class="icondive"><img src="images/icons/call.svg" alt="icon"></div>
<div class="media-body getintouchinfo">
<a href="tel:123456790">+91-123 4567 890 <span>Mon-Fri 9am - 6pm</span></a>
</div>
</div>
<div class="media mt15">
<div class="icondive"><img src="images/icons/whatsapp.svg" alt="icon"></div>
<div class="media-body getintouchinfo">
<a href="tel:123456790">+91-123 4567 890 <span>Mon-Fri 9am - 6pm</span></a>
</div>
</div>
<div class="media mt15">
<div class="icondive"><img src="images/icons/mail.svg" alt="icon"></div>
<div class="media-body getintouchinfo">
<a href="https://separateweb.com/cdn-cgi/l/email-protection#e68f888089a6918384958f9283c885898b"><span class="__cf_email__" data-cfemail="c0a9aea6af80b7a5a2b3a9b4a5eea3afad">[email&#160;protected]</span> <span>Online Support</span></a>
</div>
</div>
<div class="media mt15">
<div class="icondive"><img src="images/icons/map.svg" alt="icon"></div>
<div class="media-body getintouchinfo">
<a href="https://separateweb.com/cdn-cgi/l/email-protection#e48d8a828ba4938186978d9081ca878b89">Jaipur, Rajasthan, Afghanistan<span>Visit Our Office</span></a>
</div>
</div>
</div>
<div class="contact-data mt30">
<h4>Follow Us On:</h4>
<div class="social-media-linkz mt10">
<a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
<a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
<a href="javascript:void(0)" target="blank"><i class="fab fa-instagram"></i></a>
<a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
<a href="javascript:void(0)" target="blank"><i class="fab fa-youtube"></i></a>
<a href="javascript:void(0)" target="blank"><i class="fab fa-pinterest-p"></i></a>
</div>
</div>
</div>
</div>


<section class="breadcrumb-area banner-6">
<div class="text-block">
<div class="container">
<div class="row">
<div class="col-lg-12 v-center">
<div class="bread-inner">
<div class="bread-menu wow fadeInUp" data-wow-delay=".2s">
<ul>
<li><a href="index-2.html">Home</a></li>
<li><a href="#">Contact</a></li>
</ul>
</div>
<div class="bread-title wow fadeInUp" data-wow-delay=".5s">
<h2>Contact</h2>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<div class="statistics-wrap bg-gradient5">
<div class="container">
<div class="row small t-ctr mt0">
<div class="col-lg-3 col-sm-6">
<div class="statistics">
<div class="statistics-img">
<img src="images/icons/deal.svg" alt="happy" class="img-fluid">
</div>
<div class="statnumb">
<span class="counter">450</span>
<p>Happy Clients</p>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="statistics">
<div class="statistics-img">
<img src="images/icons/computers.svg" alt="project" class="img-fluid">
</div>
<div class="statnumb counter-number">
<span class="counter">48</span><span>k</span>
<p>Projects Done</p>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="statistics">
<div class="statistics-img">
<img src="images/icons/worker.svg" alt="work" class="img-fluid">
</div>
<div class="statnumb">
<span class="counter">95</span><span>k</span>
<p>Hours Worked</p>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="statistics mb0">
<div class="statistics-img">
<img src="images/icons/customer-service.svg" alt="support" class="img-fluid">
</div>
<div class="statnumb">
<span class="counter">24</span><span>/</span><span class="counter">7</span>
<p>Support Available</p>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="contact-info pad-tb">
<div class="container">
<div class="row">
<div class="col-lg-8">
<h2><span class="typer" id="main" data-words="नमस्ते, Hola, Bonjour, Guten tag, Salve, Nǐn hǎo, Olá, Salaam Alaikum, Konnichiwa, Hello" data-delay="100" data-deleteDelay="1000"></span> <span class="cursorx" data-owner="first-typer">|</span></h2>
<p class="mt10">Please fill out the form below if you have a plan or project in mind that you'd like to share with us.</p>
</div>
</div>
<div class="row justify-content-between">
<div class="col-lg-8">
<h5 class="mt30 mb30">Visit Our offices</h5>
<div class="getintouchblock">
<div class="locations ">
<div class="ouroffice">
<h4>Afghanistan</h4>
<p>33, Sarvodaya Trust Bldg, Gokhale Road (s), Near Portuges Church, Dadar Afghanistan - 302013</p>
<a href="#" target="blank">View on map <i class="fas fa-location-arrow fa-icon"></i></a>
</div>
<div class="ouroffice">
<h4>Tokyo HQ</h4>
<p>33, Sarvodaya Trust Bldg, Gokhale Road (s), Near Portuges Church, Dadar Japan </p>
<a href="#" target="blank">View on map <i class="fas fa-location-arrow fa-icon"></i></a>
</div>
<div class="ouroffice">
<h4>London</h4>
<p>33, Sarvodaya Trust Bldg, Gokhale Road (s), Near Portuges Church, Dadar London </p>
<a href="#" target="blank">View on map <i class="fas fa-location-arrow fa-icon"></i></a>
</div>
<div class="ouroffice">
<h4>New York </h4>
<p>33, Sarvodaya Trust Bldg, Gokhale Road (s), Near Portuges Church, Dadar New York </p>
<a href="#" target="blank">View on map <i class="fas fa-location-arrow fa-icon"></i></a>
</div>
</div>
</div>
</div>
<div class="col-lg-3">
<h5 class="mt30 mb30">Dial a Call or Drop an Email</h5>
<div class="media mt15">
<div class="icondive"><img src="images/icons/call.svg" alt="icon"></div>
<div class="media-body getintouchinfo">
<a href="tel:123456790">+91-123 4567 890 <span>Mon-Fri 9am - 6pm</span></a>
</div>
</div>
<div class="media mt15">
<div class="icondive"><img src="images/icons/whatsapp.svg" alt="icon"></div>
<div class="media-body getintouchinfo">
<a href="tel:123456790">+91-123 4567 890 <span>Mon-Fri 9am - 6pm</span></a>
</div>
</div>
<div class="media mt15">
<div class="icondive"><img src="images/icons/mail.svg" alt="icon"></div>
<div class="media-body getintouchinfo">
<a href="https://separateweb.com/cdn-cgi/l/email-protection#6c05020a032c1b090e1f051809420f0301"><span class="__cf_email__" data-cfemail="5c35323a331c2b393e2f352839723f3331">[email&#160;protected]</span> <span>Online Support</span></a>
</div>
</div>
<div class="media mt15">
<div class="icondive"><img src="images/icons/skype.svg" alt="icon"></div>
<div class="media-body getintouchinfo">
<a href="skype:niwax.company?call">Niwax.Company<span>Visit Our Office</span></a>
</div>
</div>
</div>
</div>
</div>
</div>


<section class="contact-page pad-tb bg-gradient3">
<div class="container">
<div class="row justify-content-between">
<div class="col-lg-7">
<div class="niwax23form shadow">
<div class="common-heading text-l">
<h2 class="mt0 mb0">Get in touch</h2>
<p class="mb50 mt10">We will catch you as early as we receive the message</p>
</div>
<div class="contact-form-card-pr contact-block-sw m0 iconin">
<div class="form-block niwaxform">
<form action="#" id="contactform" method="post">
<div class="fieldsets row">
<div class="col-md-6 form-group floating-label">
<div class="formicon"><i class="fas fa-user"></i></div>
<input type="text" placeholder=" " required="required" id="name" class="floating-input" name="fullname">
<label>Full Name*</label>
<div class="error-label"></div>
</div>
<div class="col-md-6 form-group floating-label">
<div class="formicon"><i class="fas fa-phone-alt"></i></div>
<input type="tel" placeholder=" " required="required" id="mobile_number" class="floating-input" name="mobile_number">
<label>Mobile Number*</label>
<div class="error-label"></div>
</div>
</div>
<div class="fieldsets row">
<div class="col-md-6 form-group floating-label">
<div class="formicon"><i class="fas fa-envelope"></i></div>
<input type="email" placeholder=" " required="required" id="email" class="floating-input" name="email">
<label>Email Address*</label>
<div class="error-label"></div>
</div>
<div class="col-md-6 form-group floating-label">
<div class="formicon"><i class="fas fa-file-alt"></i></div>
<select required="required" id="interested_in" class="floating-select" name="interested_in">
<option value="">&nbsp;</option>
<option value="Graphic Design">Graphic Design</option>
<option value="Web Design">Web Design</option>
<option value="App Design">App Design</option>
<option value="Other">Other</option>
</select>
<label>Interested In*</label>
<div class="error-label"></div>
</div>
</div>
<div class="fieldsets row">
<div class="col-md-6 form-group floating-label">
<div class="formicon"><i class="fas fa-map-marker-alt"></i></div>
<input type="text" placeholder=" " required="required" id="your_location" class="floating-input" name="your_location">
<label>Your Location*</label>
<div class="error-label"></div>
</div>
<div class="col-md-6 form-group floating-label">
<div class="formicon"><i class="fab fa-skype"></i></div>
<input type="text" placeholder=" " required="required" id="skype_whatsapp_no" class="floating-input" name="skype_whatsapp_no">
<label>Skype ID/Whatsapp No.*</label>
<div class="error-label"></div>
</div>
</div>
<div class="fieldsets row textareax">
<div class="col-md-12 form-group floating-label">
<div class="formicon"><i class="fas fa-comment-dots"></i></div>
<textarea placeholder=" " required="required" id="description" class="floating-input" name="description"></textarea>
<label>Brief about the project*</label>
<div class="error-label"></div>
</div>
</div>
<div class="custom-control custom-checkbox ctmsetsw">
<input type="checkbox" class="custom-control-input ctminpt" id="agree" name="agree" checked="checked">
<label class="custom-control-label ctmlabl" for="agree">By clicking the “Submit” button you agree to our <a href="javascript:void(0)">Terms &amp; Conditions</a>.</label>
</div>
<div class="fieldsets mt20"> <button type="submit" name="submit" class="btn btn-main bg-btn w-fit mb20"><span>Submit <i class="fas fa-chevron-right fa-icon"></i></span> <span class="loader"></span></button> </div>
</form>
</div>
</div>
</div>
</div>
<div class="col-lg-5 m-mt30">
<div class="pl--50">
<h2>Trusted by</h2>
<p class="mt10">Clients belive us and we deliverd them good service</p>
<div class="client-trust-us mt30">
<div class="clientsicons">
<a href="#"><img src="images/client/customer-logo-1.png" alt="icon"></a>
<a href="#"><img src="images/client/customer-logo-2.png" alt="icon"></a>
<a href="#"><img src="images/client/customer-logo-3.png" alt="icon"></a>
<a href="#"><img src="images/client/customer-logo-4.png" alt="icon"></a>
<a href="#"><img src="images/client/customer-logo-5.png" alt="icon"></a>
<a href="#"><img src="images/client/customer-logo-6.png" alt="icon"></a>
<a href="#"><img src="images/client/customer-logo-7.png" alt="icon"></a>
<a href="#"><img src="images/client/customer-logo-8.png" alt="icon"></a>
<a href="#"><img src="images/client/customer-logo-9.png" alt="icon"></a>
</div>
</div>
<div class="owl-carousel testimonial-card-a contact-review shadow mt40">
<div class="testimonial-card">
<div class="tt-text">
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
</div>
<div class="client-thumbs mt20">
<div class="media v-center">
<div class="user-image bdr-radius"><img src="images/client/client-pic-x.jpg" alt="girl" class="img-fluid" /></div>
<div class="media-body user-info v-center">
<h5>Mike Smith</h5>
<p>Business Owner, <small>Sydney, Australia</small></p>
</div>
</div>
</div>
</div>
<div class="testimonial-card">
<div class="tt-text">
<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
</div>
<div class="client-thumbs mt20">
<div class="media v-center">
<div class="user-image bdr-radius"><img src="images/client/client-pic-x.jpg" alt="girl" class="img-fluid" /></div>
<div class="media-body user-info">
<h5>Fred Chener</h5>
<p>CEO of Aramxx, <small>Ohio, US State</small></p>
</div>
</div>
</div>
</div>
<div class="testimonial-card">
<div class="tt-text">
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
</div>
<div class="client-thumbs mt20">
<div class="media v-center">
<div class="user-image bdr-radius"><img src="images/client/client-pic-x.jpg" alt="girl" class="img-fluid" /></div>
<div class="media-body user-info">
<h5>Mathilda Burns</h5>
<p>Backery Shop, <small>Tronto, Italy</small></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="service-block pad-tb light-dark">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8">
<div class="common-heading ptag">
<h2>Here we are giving you three reasons to choose Niwax</h2>
<p>Our design process follows a proven approach. We begin with a deep understanding of your needs and create a planning template.</p>
</div>
</div>
</div>
<div class="row upset justify-content-center mt60">
<div class="col-lg-4 v-center order1">
<div class="image-blockx">
<img src="images/process/deadline.svg" alt="Process" class="img-fluid" />
</div>
</div>
<div class="col-lg-7 v-center order2">
<div class="ps-block">
<span>1</span>
<h3>Top 1% IT Talent</h3>
<p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis. Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
</div>
</div>
</div>
<div class="row upset justify-content-center mt60">
<div class="col-lg-7 v-center order2">
<div class="ps-block">
<span>2</span>
<h3>Time Zone Aligned</h3>
<p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis. Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
</div>
</div>
<div class="col-lg-4 v-center order1">
<div class="image-blockx">
<img src="images/process/working-globe.svg" alt="Process" class="img-fluid" />
</div>
</div>
</div>
<div class="row upset justify-content-center mt60">
<div class="col-lg-4 v-center order1">
<div class="image-blockx">
<img src="images/process/team.svg" alt="Process" class="img-fluid" />
</div>
</div>
<div class="col-lg-7 v-center order2">
<div class="ps-block">
<span>3</span>
<h3>Experienced Team</h3>
<p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis. Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
</div>
</div>
</div>
</div>
</section>

<?php require_once "footer.php"; ?>
