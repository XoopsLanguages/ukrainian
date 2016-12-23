<?php
//  Author: Trabis
//  URL: http://www.xuups.com
//  E-Mail: lusopoemas@gmail.com
include("../../mainfile.php");
include(XOOPS_ROOT_PATH."/header.php");

$meta_keywords = "dummy, page, keywords";
$meta_description = "dummy page description";
$pagetitle = "dummy page title";

if(isset($xoTheme) && is_object($xoTheme)) {
    $xoTheme->addMeta( 'meta', 'keywords', $meta_keywords);
    $xoTheme->addMeta( 'meta', 'description', $meta_description);
} else {    // Compatibility for old Xoops versions
    $xoopsTpl->assign('xoops_meta_keywords', $meta_keywords);
    $xoopsTpl->assign('xoops_meta_description', $meta_description);
}

$xoopsTpl->assign('xoops_pagetitle', $pagetitle);

//this will only work if your theme is using this smarty variables
$xoopsTpl->assign( 'xoops_showlblock', 1); //set to 0 to hide left blocks
$xoopsTpl->assign( 'xoops_showrblock', 1); //set to 0 to hide right blocks
$xoopsTpl->assign( 'xoops_showcblock', 1); //set to 0 to hide center blocks
?>

<!--DUMMY HTML CONTENT-->
<center><font size="+2"><b>Radio Free Ukraine<br>Weekly Broadcast Schedule</b></font></center><br>
<br>
<center><img src="http://rfu.in.ua/uploads/images/img57503616b1e73.jpg"></center><br>
<center>
<table border="1" align="center" bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0">
<tr bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0">
	<td align="center" bgcolor="#0000FF"><font face="Calibri" size="+1" color="#FFFFFF">TIME</font></td>
	<td align="center" bgcolor="#0000FF"><font face="Calibri" size="+1" color="#FFFFFF">Monday</font></td>
	<td align="center" bgcolor="#0000FF"><font face="Calibri" size="+1" color="#FFFFFF">Tuesday</font></td>
	<td align="center" bgcolor="#0000FF"><font face="Calibri" size="+1" color="#FFFFFF">Wednesday</font></td>
	<td align="center" bgcolor="#0000FF"><font face="Calibri" size="+1" color="#FFFFFF">Thursday</font></td>
	<td align="center" bgcolor="#0000FF"><font face="Calibri" size="+1" color="#FFFFFF">Friday</font></td>
	<td align="center" bgcolor="#0000FF"><font face="Calibri" size="+1" color="#FFFFFF">Saturday</font></td>
	<td align="center" bgcolor="#0000FF"><font face="Calibri" size="+1" color="#FFFFFF">Sunday</font></td>
</tr>
<tr bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0">
	<td align="center" bgcolor="#99CCFF" bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" font face="Calibri" size="+1">00:00 to 03:30</td>
	<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Free Play<br>English</font></td>
	<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Free Play<br>English</font></td>
	<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Free Play<br>English</font></td>
	<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Free Play<br>English</font></td>
	<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Free Play<br>English</font></td>
	<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Free Play<br>English</font></td>
	<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Free Play<br>English</font></td>
	
</tr>
<tr bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0">
	<td align="center" bgcolor="#99CCFF" bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" font face="Calibri" size="+1">03:30 to 07:00</td>
	<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Free Play<br>Ukrainian</font></td>
	<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Free Play<br>Ukrainian</font></td>
	<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Free Play<br>Ukrainian</font></td>
	<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Free Play<br>Ukrainian</font></td>
	<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Free Play<br>Ukrainian</font></td>
	<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Free Play<br>Ukrainian</font></td>
	<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Free Play<br>Ukrainian</font></td>
</tr>
<tr bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0">
	<td align="center" bgcolor="#99CCFF" bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" font face="Calibri" size="+1">07:00 to 08:00</td>
	<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the latest news, weather and sports & music"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=1">Drive Time<br>English</a></font></td>
    <td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the latest news, weather and sports & music"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=1">Drive Time<br>English</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the latest news, weather and sports & music"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=1">Drive Time<br>English</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the latest news, weather and sports & music"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=1">Drive Time<br>English</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the latest news, weather and sports & music"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=1">Drive Time<br>English</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the latest news, weather and sports & music"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=3">Morning News<br>Break<br>English</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the latest news, weather and sports & music"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=3">Morning News<br>Break<br>English</a></font></td>
</tr>
<tr bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0">
	<td align="center" bgcolor="#99CCFF" bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" font face="Calibri" size="+1">08:00 to 09:00</td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the latest news, weather and sports & music"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=2">Drive Time<br>Ukrainian</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the latest news, weather and sports & music"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=2">Drive Time<br>Ukrainian</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the latest news, weather and sports & music"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=2">Drive Time<br>Ukrainian</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the latest news, weather and sports & music"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=2">Drive Time<br>Ukrainian</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the latest news, weather and sports & music"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=2">Drive Time<br>Ukrainian</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the latest news, weather and sports & music"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=4">Morning News<br>Break<br>Ukrainian</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the latest news, weather and sports & music"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=4">Morning News<br>Break<br>Ukrainian</a></font></td>
</tr>
<tr bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0">
	<td align="center" bgcolor="#99CCFF" bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" font face="Calibri" size="+1">09:00 to 10:30</td>
	<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
	<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
		<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
			<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
				<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
					<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
						<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
</tr>
<tr bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0">
	<td align="center" bgcolor="#99CCFF" bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" font face="Calibri" size="+1">10:30 to 11:00</td>
	<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="Radio call in - what's good & bad in your community"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=5">Beefs & Bouquets<br>English</a></font></td>
	<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="Radio call in - what's good & bad in your community"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=5">Beefs & Bouquets<br>English</a></font></td>
	<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="Radio call in - what's good & bad in your community"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=5">Beefs & Bouquets<br>English</a></font></td>
	<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="Radio call in - what's good & bad in your community"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=5">Beefs & Bouquets<br>English</a></font></td>
	<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="Radio call in - what's good & bad in your community"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=5">Beefs & Bouquets<br>English</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
</tr>
<tr bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0">
	<td align="center" bgcolor="#99CCFF" bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" font face="Calibri" size="+1">11:00 to 12:00</td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="Radio call in - what's good & bad in your community"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=6">Beefs & Bouquets<br>Ukrainian</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="Radio call in - what's good & bad in your community"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=6">Beefs & Bouquets<br>Ukrainian</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="Radio call in - what's good & bad in your community"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=6">Beefs & Bouquets<br>Ukrainian</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="Radio call in - what's good & bad in your community"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=6">Beefs & Bouquets<br>Ukrainian</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="Radio call in - what's good & bad in your community"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=6">Beefs & Bouquets<br>Ukrainian</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
</tr>
<tr bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0">
	<td align="center" bgcolor="#99CCFF" bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" font face="Calibri" size="+1">12:00 to 12:30</td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=24">News, Weather,<br>Sports - English</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=24">News, Weather,<br>Sports - English</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=24">News, Weather,<br>Sports - English</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=24">News, Weather,<br>Sports - English</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=24">News, Weather,<br>Sports - English</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=24">News, Weather,<br>Sports - English</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=24">News, Weather,<br>Sports - English</a></font></td>
</tr>
<tr bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0">
	<td align="center" bgcolor="#99CCFF" bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" font face="Calibri" size="+1">12:30 to 13:00</td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=25">News, Weather,<br>Sports - Ukrainian</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=25">News, Weather,<br>Sports - Ukrainian</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=25">News, Weather,<br>Sports - Ukrainian</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=25">News, Weather,<br>Sports - Ukrainian</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=25">News, Weather,<br>Sports - Ukrainian</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=25">News, Weather,<br>Sports - Ukrainian</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=25">News, Weather,<br>Sports - Ukrainian</a></font></td>
</tr>
<tr bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0">
	<td align="center" bgcolor="#99CCFF" bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" font face="Calibri" size="+1">13:00 to 13:15</td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the events in and around your town"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=7">Take Notice<br>English</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the events in and around your town"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=7">Take Notice<br>English</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the events in and around your town"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=7">Take Notice<br>English</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the events in and around your town"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=7">Take Notice<br>English</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the events in and around your town"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=7">Take Notice<br>English</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the events in and around your town"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=7">Take Notice<br>English</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the events in and around your town"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=7">Take Notice<br>English</a></font></td>
</tr>
<tr bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0">
	<td align="center" bgcolor="#99CCFF" bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" font face="Calibri" size="+1">13:15 to 13:30</td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the events in and around your town"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=8">Take Notice<br>Ukrainian</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the events in and around your town"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=8">Take Notice<br>Ukrainian</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the events in and around your town"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=8">Take Notice<br>Ukrainian</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the events in and around your town"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=8">Take Notice<br>Ukrainian</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the events in and around your town"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=8">Take Notice<br>Ukrainian</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the events in and around your town"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=8">Take Notice<br>Ukrainian</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the events in and around your town"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=8">Take Notice<br>Ukrainian</a></font></td>
</tr>
<tr bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0">
	<td align="center" bgcolor="#99CCFF" bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" font face="Calibri" size="+1">13:30 to 14:00</td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
</tr>
<tr bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0">
	<td align="center" bgcolor="#99CCFF" bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" font face="Calibri" size="+1">14:00 to 14:30</td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="Learn English provides information, tips and resources to help adults learn English"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=26">Learn English</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="Learn English provides information, tips and resources to help adults learn English"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=26">Learn English</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="how our local & national players are doing in all kinds of sports"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=9">Saturday Sports<br>Team - English</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="what local charities & clubs are achieving"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=11">Over to You<br>English</a></font></td>
</tr>
<tr bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0">
	<td align="center" bgcolor="#99CCFF" bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" font face="Calibri" size="+1">14:30 to 15:00</td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="15 minutes English, 15 minutes Ukrainian - local employment opportunities"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=13">Job Spot<br>English<br>& Ukrainian</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="15 minutes English, 15 minutes Ukrainian - local employment opportunities"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=13">Job Spot<br>English<br>& Ukrainian</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="15 minutes English, 15 minutes Ukrainian - local employment opportunities"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=13">Job Spot<br>English<br>& Ukrainian</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="15 minutes English, 15 minutes Ukrainian - local employment opportunities"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=13">Job Spot<br>English<br>& Ukrainian</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="15 minutes English, 15 minutes Ukrainian - local employment opportunities"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=13">Job Spot<br>English<br>& Ukrainian</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="how our local & national players are doing in all kinds of sports"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=10">Saturday Sports<br>Team - Ukrainian</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="what local charities & clubs are achieving"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=12">Over to You<br>Ukrainian</a></font></td>
</tr>
<tr bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0">
	<td align="center" bgcolor="#99CCFF" bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" font face="Calibri" size="+1">15:00 to 17:00</td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
</tr>
<tr bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0">
	<td align="center" bgcolor="#99CCFF" bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" font face="Calibri" size="+1">17:00 to 17:45</td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the latest news, weather and sports & music"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=14">Evening<br>Drive Time<br>English</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the latest news, weather and sports & music"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=14">Evening<br>Drive Time<br>English</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the latest news, weather and sports & music"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=14">Evening<br>Drive Time<br>English</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the latest news, weather and sports & music"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=14">Evening<br>Drive Time<br>English</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the latest news, weather and sports & music"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=14">Evening<br>Drive Time<br>English</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the latest news, weather and sports & music"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=16">Evening News<br>English</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the latest news, weather and sports & music"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=16">Evening News<br>English</a></font></td>
</tr>
<tr bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0">
	<td align="center" bgcolor="#99CCFF" bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" font face="Calibri" size="+1">17:45 to 18:00</td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="English only Talk Radio rebroadcast from Radio Liberty Europe"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=18">The Power<br>Vertical</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="English only Talk Radio rebroadcast from Radio Liberty Europe"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=18">The Power<br>Vertical</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="English only Talk Radio rebroadcast from Radio Liberty Europe"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=18">The Power<br>Vertical</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="English only Talk Radio rebroadcast from Radio Liberty Europe"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=18">The Power<br>Vertical</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="English only Talk Radio rebroadcast from Radio Liberty Europe"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=18">The Power<br>Vertical</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the latest news, weather and sports & music"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=16">Evening News<br>English</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the latest news, weather and sports & music"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=16">Evening News<br>English</a></font></td>
</tr>
<tr bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0">
	<td align="center" bgcolor="#99CCFF" bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" font face="Calibri" size="+1">18:00 to 19:00</td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the latest news, weather and sports & music"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=15">Evening<br>Drive Time<br>Ukrainian</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the latest news, weather and sports & music"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=15">Evening<br>Drive Time<br>Ukrainian</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the latest news, weather and sports & music"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=15">Evening<br>Drive Time<br>Ukrainian</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the latest news, weather and sports & music"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=15">Evening<br>Drive Time<br>Ukrainian</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the latest news, weather and sports & music"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=15">Evening<br>Drive Time<br>Ukrainian</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the latest news, weather and sports & music"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=17">Evening News<br>Ukrainian</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="the latest news, weather and sports & music"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=17">Evening News<br>Ukrainian</a></font></td>
</tr>
<tr bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0">
	<td align="center" bgcolor="#99CCFF" bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" font face="Calibri" size="+1">19:00 to 20:00</td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
</tr>
<tr bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0">
	<td align="center" bgcolor="#99CCFF" bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" font face="Calibri" size="+1">20:00 to 21:00</td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
</tr>
<tr bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0">
	<td align="center" bgcolor="#99CCFF" bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" font face="Calibri" size="+1">21:00 to 22:00</td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="The series places its generality on documentation of musical artists or groups who are interviewed and profiled, and discuss how their careers became successful and what hardships they undertook"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=23">Behind the<br>Music</a></font></td>
</tr>
<tr bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0">
	<td align="center" bgcolor="#99CCFF" bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" font face="Calibri" size="+1">22:00 to 23:00</td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="classic rock and the greatest hits of the 70's, 80's and 90's"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=19">Moondog<br>Medicine<br>Show</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="The best in blues. Every Saturday evening from 22:00, two hours  of the best in blues. From Buddy to Muddy and everything in between and beyond. From pre-war Mississippi Delta blues to new releases, always an eclectic mix, including local blues as well as artists with impending performances in Ukraine."><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=20">Blues<br>Power</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="our specialist arts and music programme, keeps you updated with all the local gigs, introduces new musicians, plays and drama productions"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=21">Spotlight<br>English</a></font></td>
</tr>
<tr bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0">
	<td align="center" bgcolor="#99CCFF" bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" font face="Calibri" size="+1">23:00 to 00:00</td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1">Music<br>Mix</font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="classic rock and the greatest hits of the 70's, 80's and 90's"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=19">Moondog<br>Medicine<br>Show</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="The best in blues. Every Saturday evening from 22:00, two hours  of the best in blues. From Buddy to Muddy and everything in between and beyond. From pre-war Mississippi Delta blues to new releases, always an eclectic mix, including local blues as well as artists with impending performances in Ukraine."><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=20">Blues<br>Power</a></font></td>
<td bordercolor="#C0C0C0" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0" align="center"><font face="Calibri" size="+1" title="our specialist arts and music programme, keeps you updated with all the local gigs, introduces new musicians, plays and drama productions"><a href="http://rfu.in.ua/modules/bschedule/item.php?itemid=22">Spotlight<br>Ukrainian</a></font></td>

</tr>

</table></center>
<?php
include(XOOPS_ROOT_PATH."/footer.php");
?>
