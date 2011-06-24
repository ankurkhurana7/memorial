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
<body>
<div id="body_inside">

<div class="breadcrumb"><strong>Contact Us</strong> </div>


  <br />
Memorial Park Funeral Home and Cemetery<br />
5668 Poplar Avenue <br />
Memphis, TN 38119 <br />
Phone: (901) 767-8930 <br /> 
Fax: (901) 763-2442 <br />
Email: <a href="mailto:info@memorialparkfuneralandcemetery.com" style="text-decoration:none;">info@memorialparkfuneralandcemetery.com</a> <br />
<a href="/" style="text-decoration:none;">Hours Of Operation</a> <br /> <br/>
Please use the form below to send us your questions, comments or suggestions. Our representative will get back to you as soon as possible. 
For pre-planning arrangements click <a href="/" style="text-decoration:none;" >here</a>. 
<br /><br />

<form action="/contactus" method="post" id="mailer" name="mailer[contact]">

<table width="100%" border="0" cellspacing="0" cellpadding="5">

     <tr>

<td >First Name: *</td> 

 <td ><input type="text" value="" id="fname" name="mailer[fname]" /> <div id="fname_error" style="display:none; color:red;" >First name is required</div>
<div id="validation_error_0" style="display:none; color:red;" >Invalid character
Please enter valid character</div>

</td>


     </tr>

<tr>



       <td>Last Name: *</td>



       <td><input type="text" value="" id="lname" name="mailer[lname]" /> <div id="lname_error" style="display:none; color:red;">Last name is required  </div>

<div id="validation_error_1" style="display:none; color:red;" >Invalid character
Please enter valid character</div>
</td>



     </tr>

<tr>



       <td>Contact me via:</td>


       <td><select size="1" id="contactvia" name="mailer[contactvia]">

          

	 		<option value="Phone" >Phone</option>

	 		<option value="Email" >Email</option>

                        <option value="Mail" >Mail</option>

	 		

	 	</select></td>

     </tr>

     <tr>

<td colspan="2">

 

 </td>

</tr>

<tr>

      <td>Phone #: </td>



       <td><input type="text" value="" id="phone" name="mailer[phone]" />

<div id="phone_error" style="display:none; color:red;"> Phone is required </div>
<div id="validation_error_2" style="display:none; color:red;" >Invalid character
Please enter valid character</div>
</td>

     </tr>

     <tr>

<td >&nbsp;&nbsp;&nbsp;</td><td>        <div id="address_error" style="display:none; color:red;"> Full Address is required </div>
</td>

</tr>    

<tr>

   <td>Address:</td>



       <td><input type="text" value="" id="address" name="mailer[address]" />
       <div id="validation_error_3" style="display:none; color:red;" >Invalid character
       Please enter valid character</div>
       </td>



     </tr>

     <tr>



       <td>City:</td>



       <td><input type="text" value="" id="city" name="mailer[city]" /><div id="validation_error_4" style="display:none; color:red;" >Invalid character
       Please enter valid character</div>
       </td>



     </tr>

     <tr>



       <td>State:</td>



       <td><input type="text" value="" id="state" name="mailer[state]" /><div id="validation_error_5" style="display:none; color:red;" >Invalid character
       Please enter valid character</div>

       </td>



     </tr>

     <tr>



       <td>Zip:</td>


       <td><input type="text" value="" id="zip" name="mailer[zip]" /><div id="validation_error_6" style="display:none; color:red;" >Invalid character
       Please enter valid character</div>
       </td>



     </tr>

     <tr>

     

       <td>Email Address:  </td>



       <td><input type="text" value="" id="email" name="mailer[email]" /> <div id="email_error" style="display:none; color:red"> Either entered email address is not valid or empty. </div></td>



     </tr>

     <tr>


       <td>Questions/Comments:</td>



       <td><textarea id="comments" rows="5" cols="35" name="mailer[comments]"></textarea>
       <div id="validation_error_7" style="display:none; color:red;" >Invalid character
       Please enter valid character</div>
       </td>


     </tr>


     

     <tr>



       <td>&nbsp; </td>

<td>


<input type="button" value="Send" onclick="validateForm(this.form);" />

</td></tr>

</table>

</form>
</div>


<?php print $closure; ?>
</body></html>
