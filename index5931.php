<!DOCTYPE html>
<html lang="en-US" class="no-js">

<!-- Mirrored from www.iitg.ernet.in/civil/site/?page_id=181 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Feb 2018 04:28:16 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<?php

	include("includes/homepage/head.php");
?>
<body class="page-template page-template-page-templates page-template-inner-page page-template-page-templatesinner-page-php page page-id-181">
<div id="wrapper" class="site">
	<?php

	include("includes/homepage/header.php");
?>
<div class="page-content-section">
<div id="primary" class="content-area">
    <div id="post" class="banner-innerpages" style="background-image: url('wp-content/uploads/2017/05/DSCN1096.jpg')">
    <div class="banner-caption">
        <div class="row">
            <div class="medium-12 columns">
                <h2>Activites and Achievments</h2>            </div>
        </div>
        
    </div>
</div>
<section class="all-pages">
<div style="padding-right: 50px; padding-left: 50px;">
	<?php 
	$query=mysqli_query($mysqli,"SELECT * FROM sub_pages WHERE uid=45");
while($row=mysqli_fetch_array($query))
{
echo $row['pageinfo'];

}
?>
</section>

<?php

	include("includes/homepage/footer.php");
?>
<script src="wp-content/themes/iitg/js/plugins.js"></script>
<script src="wp-content/themes/iitg/js/site.js"></script>

</div><!--END: WRAPPER-->
<nav id="mobile_menu">
	<ul id="menu-tnb-1" class="menu"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-has-children menu-item-55"><a href="index.php">Home</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-111"><a href="indexc4a7.php?page_id=59">Objectives</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-110"><a href="indexcc8a.php?page_id=61">Programs</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-109"><a href="index0594.php?page_id=95">Contact Us</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-119"><a href="#">Academic</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-114"><a href="index57fd.php?page_id=63">Students Corner</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-113"><a href="index85da.php?page_id=65">Laboratories/Divisions</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-112"><a href="index3d3a.php?page_id=67">Course Structure</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-117"><a href="#">Research</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-121"><a href="index0743.php?page_id=69">Major Research Areas</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-120"><a href="index8090.php?page_id=115">Sponsored Projects</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-127"><a href="indexf62f.php?page_id=122">Consultancies</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-130"><a href="index7d80.php?page_id=128">Theses / Reports</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-134"><a href="index08d2.php?page_id=131">Publications</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-118"><a href="#">People</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-141"><a href="indexed66.php?page_id=135">Faculty</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-161"><a href="indexffc4.php?page_id=142">Scientific Officer</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-159"><a href="index6b58.php?page_id=151">Technical Staff</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-158"><a href="index14cc.php?page_id=153">Office Staff</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-160"><a href="index82f9.php?page_id=148">Students</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-157"><a href="indexcbbc.php?page_id=155">Alumni</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-171"><a href="#">Activities</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-174"><a href="index30c2.php?page_id=172">Students Achievement</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-175"><a href="http://www.iitg.ernet.in/ace/">ACE</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-185"><a href="indexebb0.php?page_id=176">QIP</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-184"><a href="index2dd6.php?page_id=179">Short Term Courses/Workshops</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-181 current_page_item menu-item-183"><a href="index5931.php?page_id=181">Summer Training</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-191"><a href="#">Information</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-193"><a href="index449e.php?page_id=186">Placement Information</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-192"><a href="indexc55d.php?page_id=188">Departmental Committees</a></li>
</ul>
</li>
</ul>	
</nav>
<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/jquery.form.mind03d.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/scripts4906.js?ver=4.7'></script>
<script type='text/javascript' src='wp-includes/js/wp-embed.min66f2.js?ver=4.7.5'></script>
</body>

<!-- Mirrored from www.iitg.ernet.in/civil/site/?page_id=181 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Feb 2018 04:28:16 GMT -->
</html>
