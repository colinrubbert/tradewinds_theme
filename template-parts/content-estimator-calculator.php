<?php
/*
  Template part for displaying the Estimator Calculator section
*/
?>

<!-- Calculater Container Section -->
<section id="calculator-container">
  <h2>Website Pricing Cost Calculator:</h2>
  <form role="form" action="https://formspree.io/colinrubbert@gmail.com" method="post" class="form-wrapper" target="_blank">
    <label for=""><h3>How many pages?</h3> <em>(about, contact, jobs, blog, etc.)</em></label>
    <input type="text" name="pageCount" id="pageCount" value="1" />
    <br />
    <label for=""><h3>Is this an eCommerce site?</h3></label>
    <input type="checkbox" name="ecSite" id="ecSite" />
    <br />
    <label for=""><h3>Will you need Search Engine Optimization?</h3></label>
    <input type="checkbox" name="seoSite" id="seoSite" />
    <br />
    <label for=""><h3>Include Google Analytics?</h3></label>
    <input type="checkbox" name="gaSite" id="gaSite" />
    <br />
    <label for=""><h3>Do you need professional copy edit?</h3></label>
    <input type="checkbox" name="copyEdit" id="copyEdit" />
    <br /><br />
    <label for=""><h3>Sub Total Estimate Range</h3></label>
    <br />
    <div class="min-max-wrapper">
      <input type="text" name="minSite" id="minSite" readonly />
      <input type="text" name="maxSite" id="maxSite" readonly />
    </div>
    <br>
    <input type="hidden" name="_subject" value="New Tradewinds estimate submission" />
    <input type="email" name="email" placeholder="youremail@kickassdomain.com">
    <input type="submit" value="Submit" class="btn"/>
  </form>
  <small>* all prices are rough estimates; a proper quote will be made upon request</small>
</section>
