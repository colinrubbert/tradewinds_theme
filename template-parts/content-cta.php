<?php
/*
  Template part for displaying the Call to Action section
*/
// Advanced Custom Fields
$cta_header               = get_field('cta_header');
$cta_tagline              = get_field('cta_tagline');
$cta_subscribe            = get_field('cta_subscribe');
$cta_button_message       = get_field('cta_button_message');
$cta_email_placeholder    = get_field('cta_email_placeholder');
?>

<div class="content-container">
  <section id="cta">
    <div class="content-wrapper">
      <h1><?php echo $cta_header ?></h1>
      <p><?php echo $cta_tagline ?></p>

      <form role="form" action="//colinrubbert.us9.list-manage.com/subscribe/post?u=f31dac061aafe8bc28e3eef41&amp;id=f77e69cc3a" method="post" class="cta-form validate" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate>
        <input type="email" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="<?php echo $cta_email_placeholder ?>">
        <div id="mce-responses" class="clear">
      		<div class="response" id="mce-error-response" style="display:none"></div>
      		<div class="response" id="mce-success-response" style="display:none"></div>
      	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <br>
        <input type="submit" value="<?php echo $cta_button_message ?>" name="subscribe" id="mc-embedded-subscribe" class="btn">
        <p><?php echo $cta_subscribe ?></p>
      </form>
    </div>
  </section>

  <section id="hero">
    <div class="hero"></div>
  </section>
</div>
