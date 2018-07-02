<!-- Content -->
<div class="content clearfix" id="contact">

<!-- Intro Title Section 2 -->
<div class="section-block intro-title-1 small bkg-grey-ultralight">
  <div class="row">
    <div class="column width-12">
      <div class="title-container">
        <div class="title-container-inner center">
          <h1 class="title-xlarge font-alt-2 weight-light mb-0 title">Contact us</h1>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Intro Title Section 2 End -->

<!-- About Section -->
<div class="section-block bkg-white">
  <div class="row">
    <div class="column width-5 horizon" data-animate-in="preset:slideInUpShort;duration:1000ms;" data-threshold="1">
      <h3 class="mb-30">Solution Suggestions</h3>
      <p>Think you have a viable solution to help improve the country? Polityvox is a platform for change, but it's the people - their voices, ideas and action - who power that change. If you have an idea or a solution that's gained traction and support on our app, we encourage you to submit a formal proposal. We'll support you, and do all we can to connect you to individuals and organisations that can help you turn your idea into action.</p>
      <a href="mailto:solutions@polityvox.com" class="button pill border-theme bkg-hover-theme color-theme color-hover-white mb-mobile-40">solutions@polityvox.com</a>
    </div>
    <div class="column width-6 offset-1 horizon" data-animate-in="preset:slideInUpShort;duration:1000ms;delay:200ms;" data-threshold="1">
      <h3 class="mb-30">Press Related</h3>
      <p>For all press related questions, to receive a press kit or to speak to a press representative please shoot us an email.</p>
      <a href="mailto:#" class="button pill border-theme bkg-hover-theme color-theme color-hover-white mb-mobile-40">info@polityvox.com</a>
    </div>
  </div>
</div>
<!-- About Section End -->

<!-- Hero 5 Section -->
<div class="section-block hero-5 clear-height show-media-column-on-mobile bkg-theme color-white">
  <div class="media-column width-6">
    <div class="map-container" data-coordinates="[[6.617781, 3.399945]]" data-icon='"images/assets/map-marker.png"' data-info='"Downtown New York Office<br>44 St. West 32"' data-zoom-level="13" data-style="greyscale">
      <div id="map-canvas"></div>
    </div>
  </div>
  <div class="row">
    <div class="column width-5 push-7">
      <div class="hero-content split-hero-content">
        <div class="hero-content-inner left">
          <h3 class="mb-30">Our Address</h3>
          <p class="color-white">Street 124,<br>Magodo<br>Lagos<br><br>+23411122233</p>

          <p class="color-grey-light">Want to grab a coffee sometime? <br>No problem! Come by and say hi.</p>
          
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Hero 5 Section End -->

<!-- Contact Form -->
<section class="section-block replicable-content contact-2">
  <div class="row">
    <div class="column width-4">
      <h2 class="mb-30">Say Hello</h2>
      <div class="row">
        <div class="column width-10">
          <p>Polityvox is here to provide you with more information, or answer any questions you may have. We'd love to hear from you.</p>
          <h5 class="mb-30 color-grey">We're social!</h5>
          <ul class="social-list list-horizontal">
            <li><a href="#"><span class="icon-twitter small"></span></a></li>
            <li><a href="#"><span class="icon-facebook small"></span></a></li>
            <li><a href="#"><span class="icon-youtube small"></span></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="column width-8 left">
      <div class="contact-form-container pu-10">
        <?php if(validation_errors() != false): ?>
          <div class="alert errors">
            <?php echo validation_errors(); ?>
          </div>
        <?php endif;?>
        <?php if($this->session->has_userdata('email_notsent')): ?>
          <div class="alert errors">
            <?= $this->session->flashdata('email_notsent'); ?>
          </div>
        <?php endif;?>
        <?php if($this->session->has_userdata('email_sent')):?>
          <div class="alert success">
            <?= $this->session->flashdata('email_sent'); ?>
          </div>
        <?php endif;?>
        <form class="contact-forms" action="<?= base_url(); ?>contact/submitform" method="post" novalidate>
          <div class="row">
            <div class="column width-12">
              <input type="text" name="name" class="form-fname form-element large" placeholder="Full Name*" tabindex="1" required>
            </div>
            <div class="column width-6">
              <input type="email" name="email" class="form-email form-element large" placeholder="Email address*" tabindex="3" required>
            </div>
            <div class="column width-6">
              <input type="tel" name="number" class="form-website form-element large" placeholder="Phone number" tabindex="4">
            </div>
            <div class="column width-6">
              <input type="text" name="honeypot" class="form-honeypot form-element large">
            </div>
          </div>
          <div class="row">
            <div class="column width-12">
              <textarea name="message" class="form-message form-element large" placeholder="Message*" tabindex="6" required></textarea>
              <button type="submit" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">Submit</button>
              <!-- <input type="submit" value="Send Email" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white"> -->
            </div>
          </div>
        </form>
        <div class="form-response center"></div>
      </div>
    </div>
  </div>
</section>
<!--Contact Form End -->

<!-- Search Modal End -->
<div id="search-modal" class="hide">
  <div class="row">
    <div class="column width-12 center">
      <div class="search-form-container site-search">
        <form action="#" method="get" novalidate>
          <div class="row">
            <div class="column width-12">
              <div class="field-wrapper">
                <input type="text" name="search" class="form-search form-element" placeholder="type &amp; hit enter...">
                <span class="border"></span>
              </div>
            </div>
          </div>
        </form>
        <div class="form-response"></div>
      </div>
      <a href="#" class="tml-aux-exit">Close</a>
    </div>
  </div>
</div>
<!-- Search Modal End -->

</div>
<!-- Content End -->