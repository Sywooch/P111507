<?php

include_once 'Util/CVarDumper.php';
include_once 'Util/CTimestamp.php';

function in_array_field($needle, $needle_field, $haystack, $strict = false) {
	if ($strict) {
		foreach ($haystack as $item) {
			if (isset($item->$needle_field) && $item->$needle_field === $needle) {
				return true;
			}
		}
	} else {
		foreach ($haystack as $item) {
			if (isset($item->$needle_field) && $item->$needle_field == $needle) {
				return true;
			}
		}
	}
	return false;
}
function nv_get_plaintext($string, $keep_image = false, $keep_link = false) {
	// Get image tags
	if ($keep_image) {
		if (preg_match_all("/\<img[^\>]*src=\"([^\"]*)\"[^\>]*\>/is", $string, $match)) {
			foreach ($match[0] as $key => $_m) {
				$textimg = '';
				if (strpos($match[1][$key], 'data:image/png;base64') === false) {
					$textimg = " " . $match[1][$key];
				}
				if (preg_match_all("/\<img[^\>]*alt=\"([^\"]+)\"[^\>]*\>/is", $_m, $m_alt)) {
					$textimg .= " " . $m_alt[1][0];
				}
				$string = str_replace($_m, $textimg, $string);
			}
		}
	}

	// Get link tags
	if ($keep_link) {
		if (preg_match_all("/\<a[^\>]*href=\"([^\"]+)\"[^\>]*\>(.*)\<\/a\>/isU", $string, $match)) {
			foreach ($match[0] as $key => $_m) {
				$string = str_replace($_m, $match[1][$key] . " " . $match[2][$key], $string);
			}
		}
	}

	$string = str_replace(' ', ' ', strip_tags($string));
	return preg_replace('/[ ]+/', ' ', $string);
}
function detectEggFieldArray($haystack) // Xoa Phan Tu Trung Lap Trong Array
{
	foreach ($haystack as $item) {
		$itemSlug = vietnamese_permalink($item);
		$newArray = array();
		if (vietnamese_permalink($item) != "" && !in_array($itemSlug, $newArray)) {
			array_push($newArray, $itemSlug);
		} else {
			unset($haystack[$item]);
		}
	}
	return $haystack;
}

function word_limit($chuoi, $gioihan) {
	$chuoi = strip_tags($chuoi);
	if (strlen($chuoi) <= $gioihan) {
		return $chuoi;
	} else {
		/*
			        so sánh vị trí cắt
			        với kí tự khoảng trắng đầu tiên trong chuỗi ban đầu tính từ vị trí cắt
			        nếu vị trí khoảng trắng lớn hơn
			        thì cắt chuỗi tại vị trí khoảng trắng đó
		*/
		if (strpos($chuoi, " ", $gioihan) > $gioihan) {
			$new_gioihan = strpos($chuoi, " ", $gioihan);
			$new_chuoi = substr($chuoi, 0, $new_gioihan);
			return $new_chuoi . '...';
		}
		// trường hợp còn lại không ảnh hưởng tới kết quả
		$new_chuoi = substr($chuoi, 0, $gioihan);
		return $new_chuoi;
	}
}

function to_slug($str) {
	$str = trim(mb_strtolower($str));
	$str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
	$str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
	$str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
	$str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
	$str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
	$str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
	$str = preg_replace('/(đ)/', 'd', $str);
	$str = preg_replace('/[^a-z0-9-\s]/', '', $str);
	$str = preg_replace('/([\s]+)/', '-', $str);
	return $str;
}

//GENERATE SLUG
function slug($string) {
	// Convert special latin letters and other characters to HTML entities.
	$slug = htmlentities($string, ENT_NOQUOTES, "UTF-8");

	// With those HTML entities, either convert them back to a normal letter, or remove them.
	$slug = preg_replace(array("/&([a-z]{1,2})(acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);/i", "/&[^;]{2,6};/", "/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ|À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ|å/", "/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ|È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ|ë/", "/ì|í|ị|ỉ|ĩ|Ì|Í|Ị|Ỉ|Ĩ|î/", "/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ|Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ|ø/", "/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ|Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ|ů|û/", "/ỳ|ý|ỵ|ỷ|ỹ|Ỳ|Ý|Ỵ|Ỷ|Ỹ/", "/đ|Đ/", "/ç/", "/ñ/", "/ä|æ/", "/ö/", "/ü/", "/Ä/", "/Ü/", "/Ö/", "/ß/"), array("$1", " ", "a", "e", "i", "o", "u", "y", "d", "c", "n", "ae", "oe", "ue", "Ae", "Ue", "Oe", "ss"), $slug);
	// Now replace non-alphanumeric characters with a hyphen, and remove multiple hyphens.
	$slug = strtolower(trim(preg_replace(array("/[^0-9a-z]/i", "/-+/"), "-", $slug), "-"));

	return $slug;
}

function vietnamese_permalink($title, $replacement = '-') {
	/*  Replace with "-"
     */
	$map = array();
	$quotedReplacement = preg_quote($replacement, '/');
	$default = array(
		'/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ|À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ|å/' => 'a',
		'/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ|È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ|ë/' => 'e',
		'/ì|í|ị|ỉ|ĩ|Ì|Í|Ị|Ỉ|Ĩ|î/' => 'i',
		'/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ|Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ|ø/' => 'o',
		'/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ|Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ|ů|û/' => 'u',
		'/ỳ|ý|ỵ|ỷ|ỹ|Ỳ|Ý|Ỵ|Ỷ|Ỹ/' => 'y',
		'/đ|Đ/' => 'd',
		'/ç/' => 'c',
		'/ñ/' => 'n',
		'/ä|æ/' => 'ae',
		'/ö/' => 'oe',
		'/ü/' => 'ue',
		'/Ä/' => 'Ae',
		'/Ü/' => 'Ue',
		'/Ö/' => 'Oe',
		'/ß/' => 'ss',
		'/[^\s\p{Ll}\p{Lm}\p{Lo}\p{Lt}\p{Lu}\p{Nd}]/mu' => ' ',
		'/\\s+/' => $replacement,
		sprintf('/^[%s]+|[%s]+$/', $quotedReplacement, $quotedReplacement) => '',
	);
	//Some URL was encode, decode first
	$title = urldecode($title);
	$map = array_merge($map, $default);
	return strtolower(preg_replace(array_keys($map), array_values($map), $title));
}

function getYoutubeVideoId($domainUrl) {
	$domainFull = explode("/", $domainUrl);
	$idVideo = str_replace("watch?v=", "", $domainFull[3]);
	$idVideo = str_replace("&feature=youtu.be", "", $idVideo);
	return $idVideo;
}
function grab_image($url, $saveto) {
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
	$raw = curl_exec($ch);
	curl_close($ch);
	if (file_exists($saveto)) {
		unlink($saveto);
	}
	$fp = fopen($saveto, 'x');
	fwrite($fp, $raw);
	fclose($fp);
}

//=== remove html tag A trong bai viet ===//
function removeHref($content) {
	$string = $content;
	$pattern = "/\<a([^>]*)\>([^<]*)\<\/a\>/i";
	//$pattern = '/<a href=\"(.*?)\">(.*?)<\/a>/';
	$result = preg_replace($pattern, "\\2", $string);
	$result = str_replace("Read More", "", $result);
	return $result; // this will output "I am a lot of text with links in it"
}

function convert_vi_to_en($str) {
	$str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
	$str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
	$str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
	$str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
	$str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
	$str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
	$str = preg_replace("/(đ)/", 'd', $str);
	$str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
	$str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
	$str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
	$str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
	$str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
	$str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
	$str = preg_replace("/(Đ)/", 'D', $str);
	//$str = str_replace(" ", "-", str_replace("&*#39;","",$str));
	return $str;
}

function debug($value, $exit = true) {
	CVarDumper::dump($value);
	if ($exit === true) {
		exit();
	}
}

function dd($value, $exit = true) {
	CVarDumper::dump($value);
	if ($exit === true) {
		exit();
	}
}

function cuser() {
	if (!Yii::$app->user->isGuest) {
		return Yii::$app->user->identity;
	} else {
		return false;
	}
}

function crequest() {
	return Yii::$app->request;
}

function cparams($params) {
	if (!empty(Yii::$app->params[$params])) {
		return Yii::$app->params[$params];
	}
	die("please config params $params");
}
function orderUpload(&$file) {
	$orderedFiles = array();
	$count = count($file['name']);
	$keys = array_keys($file);

	for ($i = 0; $i < $count; $i++) {
		foreach ($keys as $key) {
			if ('name' == $key) {
				$orderedFiles[$i]['extension'] = strtolower(strrchr($file[$key][$i], "."));
			}
			$orderedFiles[$i][$key] = $file[$key][$i];
		}
	}

	return $orderedFiles;
}

function time_elapsed_string($datetime, $full = false) {
	$now = new DateTime;
	$ago = new DateTime($datetime);
	$diff = $now->diff($ago);

	$diff->w = floor($diff->d / 7);
	$diff->d -= $diff->w * 7;

	$string = array(
		'y' => 'năm',
		'm' => 'tháng',
		'w' => 'tuần',
		'd' => 'ngày',
		'h' => 'giờ',
		'i' => 'phút',
		's' => 'giây',
	);
	foreach ($string as $k => &$v) {
		if ($diff->$k) {
			$v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
		} else {
			unset($string[$k]);
		}
	}

	if (!$full) {
		$string = array_slice($string, 0, 1);
	}

	return $string ? implode(', ', $string) . ' trước' : 'ngay bây giờ';
}
