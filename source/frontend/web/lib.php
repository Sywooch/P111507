<?php 
//GENERATE SLUG
function slug($string)
{
	// Convert special latin letters and other characters to HTML entities.
	$slug = htmlentities($string, ENT_NOQUOTES, "UTF-8");

	// With those HTML entities, either convert them back to a normal letter, or remove them.
	$slug = preg_replace(array("/&([a-z]{1,2})(acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);/i", "/&[^;]{2,6};/", "/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ|À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ|å/", "/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ|È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ|ë/", "/ì|í|ị|ỉ|ĩ|Ì|Í|Ị|Ỉ|Ĩ|î/", "/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ|Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ|ø/", "/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ|Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ|ů|û/", "/ỳ|ý|ỵ|ỷ|ỹ|Ỳ|Ý|Ỵ|Ỷ|Ỹ/", "/đ|Đ/", "/ç/", "/ñ/", "/ä|æ/", "/ö/", "/ü/", "/Ä/", "/Ü/", "/Ö/", "/ß/"), array("$1", " ", "a", "e", "i", "o", "u", "y", "d", "c", "n", "ae", "oe", "ue", "Ae", "Ue", "Oe", "ss"), $slug);
	// Now replace non-alphanumeric characters with a hyphen, and remove multiple hyphens.
	$slug = strtolower(trim(preg_replace(array("/[^0-9a-z]/i", "/-+/"), "-", $slug), "-"));

	return $slug;
}
?>