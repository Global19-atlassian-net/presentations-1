<?php
function elecmp($a, $b) {
	return ($a == $b);
}

$en = new Adt_Set("elecmp");
$en->insert("hello");
$en->insert("hi");
$en->insert("hallo");
$en->insert("howdy");
$en->insert("hey");

$de = new Adt_Set("elecmp");
$de->insert("gr��gott");
$de->insert("hoi");
$de->insert("hallo");
$de->insert("moin");

$universal = $en->intersect($de);
if ($universal->is_member("hallo")) {
	echo "Hallo is a universal greeting\n";
}

if (!$universal->is_member("gr��gott")) {
	echo "Gr��gott is for S�ddeutsche\n";
}
?>
