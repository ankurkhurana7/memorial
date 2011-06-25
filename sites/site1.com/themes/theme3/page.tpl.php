<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="Memorial Park, Memphis, TN, Funeral Home, Funeral Home Tennessee, Cemetery, Crematory, Cremation, Arrangements, Services, Pre-Arrangements, Pre-Need, National Historic Cemetery, Crystal Shrine Grotto, Memorial Park Funeral Home and Crematory"> 
<meta name="keywords" content="Memorial, Cemetery, Funeral Homes, Monuments, Funeral Home, Memorials, Memorial Park, Memorial Service, Graveyards,Memphis Funeral Home, Local Funeral Homes, Memorial Park Funeral Home Memphis, Memorial Park Funeral Home, Memphis Funeral Homes, West Memphis Funeral Home"> 
<meta name="description" content="Your loved one deserves a beautiful memorial in a peaceful, serene cemetery once they have passed. Not all funeral homes in Memphis provide this, but Memorial Park does.">
<title><?php print $head_title ?></title>
 <?php print $head; ?>
<!--<title>Welcome to Memorial Park Funeral Home and Cemetery </title> -->
<meta name="google-site-verification" content="JCLMHXSylSarLZtjGJHXYYnjXLDPm3lS4LtlL6bCfHk">
<?php print $styles ?>
<?php print $scripts ?>
<script type="text/javascript" src="<?php print($path_to_theme); ?>/sites/site1.com/themes/theme3/javascript/flowplayer-3.js"></script> 
<style type="text/css" media="print">
	.noprint
        {
		display:none;
	}
        .nodash
        {
             border-bottom:0px;
        }
	.printtext
        {
               font-size:15px;
	}
</style>
<!-- InstanceBeginEditable name="head" -->
</head>
<body class="<?php print $body_classes; ?>">
<?php $path_to_theme = base_path().path_to_theme(); ?>
<div id="container">
<div id="main">
<div id="menu_holder">
<div id="menu_place_holder" class="noprint">
<table border="0" cellpadding="2" cellspacing="0" width="100%">
  <tbody><tr>
    <td><img src="<?php print($path_to_theme); ?>/images/mempark.gif" alt="logo" height="88" width="63"></td>
    <td style="text-align: right;" align="right">
        <a href="<?php print base_path(); ?>contact_us"> <img src="<?php print($path_to_theme); ?>/images/contact_us.gif" alt="contact  us" class="borderless_img"></a> &nbsp; &nbsp;
 <a href="/plan-ahead"> <img src="<?php print($path_to_theme); ?>/images/free_gift.gif" alt="free gift" class="borderless_img"></a>
   </td>
 </tr>
      
  <tr>
    <td colspan="2" style="text-align: center;" align="center">
    <div id="menu">
    <?php print $header ?>
    </div>
  <!--       <div id="menu">
    
	<?php if (is_array($primary_links)) : ?>
<ul>
<?php foreach ($primary_links as $link): ?>
<li><?php           
    $href = $link['href'] == "<front>" ? base_path() : base_path() . drupal_get_path_alias($link['href']);
    print "<a href='" . $href . "'>" . $link['title'] . "</a>";               
    ?></li>
<?php endforeach; ?>
</ul>
<?php endif; ?>
</div>
-->

        </td>
  </tr>
</tbody></table>
</div>
</div>
<div id="body_inside">
<div class="inside_left_col">

  <?php if (count($secondary_links)){ ?>
  <div id="secondary">
    <?php print theme('links', $secondary_links,array('class' => 'secondary_menu')) ?>
  </div> <!-- /#secondary -->
<?php } ?>


<?php if ($title!="contact_us"): ?>

   <?php if ($left): ?>
   <div>
   <?php print $left ?>
   </div>
   <?php endif; ?>
   </div>

<?php endif; ?>

<div class="inside_right_col">

<?php print $breadcrumb ?>
<h2><?php print $title ?></h2>
<?php print $content ?>
</div>
</div>
<br>
<div id="footer" class="noprint">Memorial Park Funeral Home and Cemetery,5668 Poplar Avenue,Memphis, TN 38119<br>
Copyright 2009, All Rights Reserved by<a href="http://www.nsmg-ext.com/" style="text-decoration: none; color: white;" target="_blank"> NSMG</a>. Designed by <a href="http://gksil.com/" style="color: blue;" target="_blank">GKSIL</a> &nbsp;<a href="http://www.memorialparkfuneralandcemetery.com/oadmin" style="text-decoration: none; color: white;" target="_blank"> Admin</a> 
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script><script src="ga.js" type="text/javascript"></script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-12313671-1");
pageTracker._trackPageview();
} catch(err) {}
</script>
<?php if ($footer_message || $footer) : ?>
<div id="footer" class="noprint">
    <?php print $footer_message . $footer;?>
</div>
<?php endif; ?>
</div>
</div>
<?php print $closure; ?>
</body></html>
