<div id="header-dropdown-menu" class="header-dropdown-menu-navbar-collapse container collapse" aria-expanded="false">
  <div class="header-dropdown-menu-accordion-goes-here">
  <!-- header-dropdown-menu-accordion placed here via jQuery -->
  </div>
  <div class="wrapper clearfix text-center" style="margin-bottom: 15px; font-weight: bold;">
    <!-- <a href="tel:1-888-997-2632" class="" title="Call CarePanda" style="margin-right: 15px;">(888) 99 Panda</a>
    <a href="https://secure.carepanda.com/" class="" title="Log in">Log in</a> -->
  </div>
</div><!-- end of <div id="header-dropdown-menu" -->
<script type="text/javascript">
jQuery(document).ready(function(){
  var siteLink = '<?php echo get_site_url(); ?>';
  /* Create accordion */
  jQuery('.header-dropdown-menu-accordion-goes-here').prepend('<div id="header-dropdown-menu-accordion" class="header-dropdown-menu-panel-group panel-group text-center" role="tablist" aria-multiselectable="true"></div>');
  /* Create New Panels */
  var panelCount = 1;
  jQuery('.header-menu-row .menu-item').each(function(){
  /* if the menu item has a parent with a class of create-dropdown-from-this-menu */
  if ( jQuery(this).parent().hasClass('create-dropdown-from-this-menu') ){
    var $this = jQuery(this);
    var aTarget = '';
    var aText = jQuery(this).children('a').text();
    var aHref = jQuery(this).children('a').attr('href');

    if (aHref.indexOf(siteLink) != -1 || aHref .indexOf('#') != -1 ){
      /* This is a Link Within the Site */
    } else {
      /* This is a Link Outside the Site */
      aTarget = '_blank';
    }
    if ( ! ( jQuery(this).hasClass('menu-item-has-children') ) ){
      /* Menu Item Does Not Have Children */
      var newPanel = '<div class="panel panel-default"><h3 class="panel-title"><a href="'+aHref+'" target="'+aTarget+'" class="smooth-scroll">'+aText+'</a></h3></div>';
      jQuery('.header-dropdown-menu-panel-group').append(newPanel);
      panelCount++;
    } else {
      /* Menu Item Has Children */
      /* Put Children Links into panelCollapse */
      var dropdownList = '';
      $this.children('ul').find('a').each(function(){
        var aDropdownTarget = '';
        var aDropdownText = jQuery(this).text();
        var aDropdownHref = jQuery(this).attr('href');
        if (aHref){
          if (aHref.indexOf(siteLink) != -1){
            /* This is a Link Within the Site */
          } else {
            /* This is a Link Outside the Site */
            var aTarget = '_blank';
          }    
        }
        dropdownList += '<li><a href="'+aDropdownHref+'" target="'+aDropdownTarget+'">'+aDropdownText+'</a></li>';
      });
      var newPanel = '<div class="panel panel-default"><div class="panel-heading" role="tab" id="heading'+panelCount+'"><h3 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#header-dropdown-menu-accordion" href="#collapseM'+panelCount+'" aria-expanded="false" aria-controls="collapseM'+panelCount+'">'+aText+'&nbsp;&nbsp;<i class="fa fa-angle-down rotate-0"></i></a></h3></div><div id="collapseM'+panelCount+'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingM'+panelCount+'" aria-expanded="false" style="height: 0px;"><div class="panel-body"><ul class="menu list-unstyled">'+dropdownList+'</ul></div></div></div>';


      jQuery('.header-dropdown-menu-panel-group').append(newPanel);
      panelCount++;
    }/* end of if ( ! ( jQuery(this).hasClass('menu-item-has-children') ) ){ */    
  }
  });
  // Turn last button into Watch Live Button
  jQuery( '#header-dropdown-menu-accordion').append('<div class="panel panel-default"><h3 class="panel-title" style="background: #f00; color: #fff; border-radius: 5px; padding: 15px 5px;" ><a role="button" data-toggle="modal" data-parent="#header-dropdown-menu-accordion" data-target="#watch-live"><i class="fa fa-youtube-play"></i> Watch LIVE</a></h3></div>');
});
</script>