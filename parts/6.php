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
echo "Designed & Hosted by Guru Computers Ltd."."<br />";
echo "&copy".$cy." S.M. Roche";
?>
</div>