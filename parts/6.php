<div id="copyright">
<?php
$start=2014;
$current=date("Y");
$cy="";
if ($current=$start) {
	$cy=$start;
}
if ($current>$start) {
	$cy=$start."-".$current;
}
echo "Designed & Hosted by <a href=\"http://gurucomputers.co.uk\" alt=\"guru computers ltd website\" id=\"guru\" target=\"_blank\">Guru Computers Ltd.</a>"."<br />";
echo "&copy"." ".$cy." S.M. Roche";
?>
</div>