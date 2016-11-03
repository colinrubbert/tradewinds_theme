/* Web Design Calculator */

$(document).ready(function(){
  // Calculates values automatically
  $('#ecSite, #pageCount, #seoSite, #gaSite, #copyEdit').on('click keyup keydown', function(){
    pageCountMin();
    pageCountMax();
    ecSiteMin();
    ecSiteMax();
    seoSiteMin();
    seoSiteMax();
    gaSiteMin();
    gaSiteMax();
    copyEditMin();
    copyEditMax();
    total();
  });

});

function total() {
  var basePriceMin = 1350;
  var basePriceMax = 2750;
  var totalMin = basePriceMin + pageCountMin() + ecSiteMin() + seoSiteMin() + gaSiteMin() + copyEditMin();
  var totalMax = basePriceMax + pageCountMax() + ecSiteMax() + seoSiteMax() + gaSiteMax() + copyEditMax();
  if (!isNaN(totalMin && totalMax)) {
    document.getElementById('minSite').value = totalMin;
    document.getElementById('maxSite').value = totalMax;
  }
}

function pageCountMin(){
  /* Price price min */
  var pageMin = 150;
  var pageCountMin = parseFloat($('input[name=pageCount]').val()) * pageMin;
  return pageCountMin;
}

function pageCountMax(){
  /* Page price max */
  var pageMax = 250;
  var pageCountMax = parseFloat($('input[name=pageCount]').val()) * pageMax;
  return pageCountMax;
}

function ecSiteMin() {
  /* eCommerce min */
  var ecommerceMin = 750;
  if ($('#ecSite').prop('checked') == true ){
    var ecSite = 1;
  } else if ($('#ecSite').prop('checked') == false ) {
    var ecSite = 0;
  }
  var ecSiteMin = parseInt(ecSite * ecommerceMin);
  return ecSiteMin;
}

function ecSiteMax() {
  /* eCommerce max */
  var ecommerceMax = 1500;
  if ($('#ecSite').prop('checked') == true ){
    var ecSite = 1;
  } else if ($('#ecSite').prop('checked') == false ) {
    var ecSite = 0;
  }
  var ecSiteMax = parseInt(ecSite * ecommerceMax);
  return ecSiteMax;
}

function seoSiteMin() {
  /* SEO min */
  var seoMin = 200;
  if ($('#seoSite').prop('checked') == true ){
    var seoSite = 1;
  } else if ($('#seoSite').prop('checked') == false ) {
    var seoSite = 0;
  }
  var seoSiteMin = parseInt(seoSite * seoMin);
  return seoSiteMin;
}

function seoSiteMax() {
  /* SEO max */
  var seoMax = 750;
  if ($('#seoSite').prop('checked') == true ){
    var seoSite = 1;
  } else if ($('#seoSite').prop('checked') == false ) {
    var seoSite = 0;
  }
  var seoSiteMax = parseInt(seoSite * seoMax);
  return seoSiteMax;
}

function gaSiteMin() {
  /* Google Analytics min */
  var gaMin = 50;
  if ($('#gaSite').prop('checked') == true ){
    var gaSite = 1;
  } else if ($('#gaSite').prop('checked') == false ) {
    var gaSite = 0;
  }
  var gaSiteMin = parseInt(gaSite * gaMin);
  return gaSiteMin;
}

function gaSiteMax() {
  /* Google Analytics max */
  var gaMax = 100;
  if ($('#gaSite').prop('checked') == true ){
    var gaSite = 1;
  } else if ($('#gaSite').prop('checked') == false ) {
    var gaSite = 0;
  }
  var gaSiteMax = parseInt(gaSite * gaMax);
  return gaSiteMax;
}

function copyEditMin() {
  /* Copy Edit min */
  var copyEditMin = 100;
  if ($('#copyEdit').prop('checked') == true ){
    var copyEdit = 1;
  } else if ($('#copyEdit').prop('checked') == false ) {
    var copyEdit = 0;
  }
  var copyEditMin = parseInt(copyEdit * copyEditMin);
  return copyEditMin;
}

function copyEditMax() {
  /* Copy Edit max */
  var copyEditMax = 200;
  if ($('#copyEdit').prop('checked') == true ){
    var copyEdit = 1;
  } else if ($('#copyEdit').prop('checked') == false ) {
    var copyEdit = 0;
  }
  var copyEditMax = parseInt(copyEdit * copyEditMax);
  return copyEditMax;
}
