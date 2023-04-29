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
<a href="https://separateweb.com/cdn-cgi/l/email-protection#046d6a626b44736166776d70612a676b69"><span class="__cf_email__" data-cfemail="f891969e97b88f9d9a8b918c9dd69b9795">[email&#160;protected]</span> <span>Online Support</span></a>
</div>
</div>
<div class="media mt15">
<div class="icondive"><img src="images/icons/map.svg" alt="icon"></div>
<div class="media-body getintouchinfo">
<a href="https://separateweb.com/cdn-cgi/l/email-protection#563f38303916213334253f22337835393b">Jaipur, Rajasthan, Afghanistan<span>Visit Our Office</span></a>
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
<li><a href="#">Contact Form</a></li>
</ul>
</div>
<div class="bread-title wow fadeInUp" data-wow-delay=".5s">
<h2>Ajax Modern SMTP Contact Form</h2>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="contact-page pad-tb bg-gradient5">
<div class="container">
<div class="row justify-content-center">
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
</div>
</div>
</section>


<footer>
<div class="footer-row2">
<div class="container">
<div class="row justify-content-between">
<div class="col-lg-3 col-sm-6  ftr-brand-pp">
<a class="navbar-brand mt30 mb25 f-dark-logo" href="#"> <img src="images/logo.png" alt="Logo" /></a>
<a class="navbar-brand mt30 mb25 f-white-logo" href="#"> <img src="images/white-logo.png" alt="Logo" /></a>
<p>News letter dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Enter your email</p>
<a href="#" class="btn-main bg-btn3 lnk mt20">Become Partner <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
</div>
<div class="col-lg-3 col-sm-6">
<h5>Contact Us</h5>
<ul class="footer-address-list ftr-details">
<li>
<span><i class="fas fa-envelope"></i></span>
<p>Email <span> <a href="https://separateweb.com/cdn-cgi/l/email-protection#70191e161f30120503191e1503031e111d155e131f1d"><span class="__cf_email__" data-cfemail="472e292128072532342e2922343429262a226924282a">[email&#160;protected]</span></a></span></p>
</li>
<li>
<span><i class="fas fa-phone-alt"></i></span>
<p>Phone <span> <a href="tel:+10000000000">+1 0000 000 000</a></span></p>
</li>
<li>
<span><i class="fas fa-map-marker-alt"></i></span>
<p>Address <span> 123 Business Centre London SW1A 1AA</span></p>
</li>
</ul>
</div>
<div class="col-lg-2 col-sm-6">
<h5>Company</h5>
<ul class="footer-address-list link-hover">
<li><a href="get-quote.html">Contact</a></li>
<li><a href="javascript:void(0)">Customer's FAQ</a></li>
<li><a href="javascript:void(0)">Refund Policy</a></li>
<li><a href="javascript:void(0)">Privacy Policy</a></li>
<li><a href="javascript:void(0)">Terms and Conditions</a></li>
<li><a href="javascript:void(0)">License & Copyright</a></li>
</ul>
</div>
<div class="col-lg-4 col-sm-6 footer-blog-">
<h5>Latest Blogs</h5>
<div class="single-blog-">
<div class="post-thumb"><a href="#"><img src="images/blog/blog-small.jpg" alt="blog"></a></div>
<div class="content">
<p class="post-meta"><span class="post-date"><i class="far fa-clock"></i>April 15, 2020</span></p>
<h4 class="title"><a href="https://separateweb.com/">We Provide you Best &amp; Creative Consulting Service</a></h4>
</div>
</div>
<div class="single-blog-">
<div class="post-thumb"><a href="#"><img src="images/blog/blog-small.jpg" alt="blog"></a></div>
<div class="content">
<p class="post-meta"><span class="post-date"><i class="far fa-clock"></i>April 15, 2020</span></p>
<h4 class="title"><a href="https://separateweb.com/">We Provide you Best &amp; Creative Consulting Service</a></h4>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="footer-brands">
<div class="container">
<div class="row">
<div class="col-lg-4 v-center">
<h5 class="mb10">Top App Development Companies</h5>
<p>News letter dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Enter your email</p>
</div>
<div class="col-lg-8 v-center">
<ul class="footer-badges-">
<li><a href="#"><img src="images/about/badges-a.png" alt="badges"></a></li>
<li><a href="#"><img src="images/about/badges-b.png" alt="badges"></a></li>
<li><a href="#"><img src="images/about/badges-c.png" alt="badges"></a></li>
<li><a href="#"><img src="images/about/badges-d.png" alt="badges"></a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="footer-row3">
<div class="copyright">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="footer-social-media-icons">
<a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
<a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
<a href="javascript:void(0)" target="blank"><i class="fab fa-instagram"></i></a>
<a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
<a href="javascript:void(0)" target="blank"><i class="fab fa-youtube"></i></a>
<a href="javascript:void(0)" target="blank"><i class="fab fa-pinterest-p"></i></a>
<a href="javascript:void(0)" target="blank"><i class="fab fa-vimeo-v"></i></a>
<a href="javascript:void(0)" target="blank"><i class="fab fa-dribbble"></i></a>
<a href="javascript:void(0)" target="blank"><i class="fab fa-behance"></i></a>
</div>
<div class="footer-">
<p>© 2020-2022. All Rights Reserved By <a href="https://themeforest.net/user/rajesh-doot/portfolio" target="blank">Farhad Rahmani</a></p>
</div>
</div>
</div>
</div>
</div>
</div>
</footer>


<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/plugin.min.js"></script>
<script src="phpmailer/js/jquery.validate.min.js"></script>
<script src="phpmailer/js/sweetalert2.all.min.js"></script>
<script src="js/dark-mode.js"></script>

<script src="phpmailer/js/main.js"></script>

<script async src="js/typer.js"></script>

<script src="js/main.js"></script>
</body>

<!-- Mirrored from separateweb.com/niwax-template/contact-from.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Apr 2023 05:28:07 GMT -->
</html>