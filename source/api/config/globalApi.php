<?php
include("YoutubeDownloader.php");
/*
 * function to get via cUrl 
 * From lastRSS 0.9.1 by Vojtech Semecky, webmaster @ webdot . cz
 * See      http://lastrss.webdot.cz/
 */
 
function curlGet($URL) {
	global $config; // get global $config to know if $config['multipleIPs'] is true
    $ch = curl_init();
    $timeout = 3;
    curl_setopt( $ch , CURLOPT_URL , $URL );
    curl_setopt( $ch , CURLOPT_RETURNTRANSFER , 1 );
    curl_setopt( $ch , CURLOPT_CONNECTTIMEOUT , $timeout );
	/* if you want to force to ipv6, uncomment the following line */ 
	//curl_setopt( $ch , CURLOPT_IPRESOLVE , 'CURLOPT_IPRESOLVE_V6');
    $tmp = curl_exec( $ch );
    curl_close( $ch );
    return $tmp;
}  

/* 
 * function to use cUrl to get the headers of the file 
 */ 
function get_location($url) {
	global $config;
	$my_ch = curl_init();
	curl_setopt($my_ch, CURLOPT_URL,$url);
	curl_setopt($my_ch, CURLOPT_HEADER,         true);
	curl_setopt($my_ch, CURLOPT_NOBODY,         true);
	curl_setopt($my_ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($my_ch, CURLOPT_TIMEOUT,        10);
	$r = curl_exec($my_ch);
	 foreach(explode("\n", $r) as $header) {
		if(strpos($header, 'Location: ') === 0) {
			return trim(substr($header,10)); 
		}
	 }
	return '';
}

function get_size($url) {
	global $config;
	$my_ch = curl_init();
	curl_setopt($my_ch, CURLOPT_URL,$url);
	curl_setopt($my_ch, CURLOPT_HEADER,         true);
	curl_setopt($my_ch, CURLOPT_NOBODY,         true);
	curl_setopt($my_ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($my_ch, CURLOPT_TIMEOUT,        10);
	$r = curl_exec($my_ch);
	 foreach(explode("\n", $r) as $header) {
		if(strpos($header, 'Content-Length:') === 0) {
			return trim(substr($header,16)); 
		}
	 }
	return '';
}

function get_description($url) {
	$fullpage = curlGet($url);
	$dom = new DOMDocument();
	@$dom->loadHTML($fullpage);
	$xpath = new DOMXPath($dom); 
	$tags = $xpath->query('//div[@class="info-description-body"]');
	foreach ($tags as $tag) {
		$my_description .= (trim($tag->nodeValue));
	}	
	
	return utf8_decode($my_description);
}

function clean($string) {
   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}

function formatBytes($bytes, $precision = 2) { 
    $units = array('B', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'); 
    $bytes = max($bytes, 0); 
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
    $pow = min($pow, count($units) - 1); 
    $bytes /= pow(1024, $pow);
    return round($bytes, $precision) . '' . $units[$pow]; 
} 
/*************** BEGIN Google Photo Video *******************/
function curlGooglePhoto($url) {
         $ch = @curl_init();
         curl_setopt($ch, CURLOPT_URL, $url);
         $head[] = "Connection: keep-alive";
         $head[] = "Keep-Alive: 300";
         $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
         $head[] = "Accept-Language: en-us,en;q=0.5";
         curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36');
         curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
         curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
         curl_setopt($ch, CURLOPT_TIMEOUT, 60);
         curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
         curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
         curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
         $page = curl_exec($ch);
         curl_close($ch);
         return $page;
    }

function getPhotoGoogle($link)
{
        $get = curlGooglePhoto($link);
        $data = explode('url\u003d', $get);
        
        $url = explode('%3Dm', $data[1]);
        $decode = urldecode($url[0]);
        $count = count($data);
        $linkDownload = array();
        if($count > 4) {
            $v1080p = $decode.'=m37';
            $v720p = $decode.'=m22';
            $v360p = $decode.'=m18';
            $linkDownload['1080p'] = $v1080p;
            $linkDownload['720p'] = $v720p;
            $linkDownload['360p'] = $v360p;
        }
        if($count > 3) {
            $v720p = $decode.'=m22';
            $v360p = $decode.'=m18';
            $linkDownload['720p'] = $v720p;
            $linkDownload['360p'] = $v360p;
        }
        if($count > 2) {
            $v360p = $decode.'=m18';
            $linkDownload['360p'] = $v360p;
        }
        $i = 0;
        $strVideos = "";
        foreach($linkDownload as $key => $link)
        {
            if($i==0)
                $strVideos .='{"file":"'.$link.'","type":"mp4","label":"'.$key.'"}';
            else
                $strVideos .=',{"file":"'.$link.'","type":"mp4","label":"'.$key.'"}';
           
           $i++;     
        }
        return $strVideos;
}
/*************** End Google Photo Video *******************/

/*************** Begin Google Drive Video *****************/
function getYoutubeVideo($idVideo)
{       
         $strVideos = "";
        $qualitys = YoutbeDownloader::getInstance()->getLink($idVideo); 
		//var_dump($qualitys);exit;	
        if(is_array($qualitys))
        {
                /* now that we have the array, print the options */
				$i=0;
                foreach ($qualitys as $video) 
				{
                    if($i==0)
					{
						$strVideos .='{"file":"'.$video['url'].'","type":"mp4","label":"'.$video['quality'].'"}';
					}
                    else
					{
						$strVideos .=',{"file":"'.$video['url'].'","type":"mp4","label":"'.$video['quality'].'"}';
					}   
					
					$i++;
                }
                
        }
        return $strVideos;
}
function setQualityVideo($iTag)
{
    $result = "";
    switch($iTag)
    {
        case "18":
            $result ="360p";
            break;
        case "22":
            $result ="720p";
            break;
        case "34":
            $result ="360p";
            break;
        case "35":
            $result ="480p";
            break;
        case "36":
            $result = "240p";
            break;
        case "37":
            $result = "1080p";
            break;
        case "38":
            $result = "3072p";
            break;
        case "43":
            $result = "360p";
            break;
        case "44":
            $result = "480p";
            break;
        case "45":
            $result = "720p";
            break;
        case "46":
            $result = "1080p";
            break;
        default:
            $result = "720p";
        return $result;          
    }  
}
/*************** End Google Drive Video *****************/
function getTypeLinkVideo($domainUrl)
{
    $domainFull = explode("/",$domainUrl);
    $htmlVideo = "";
    if(count($domainFull) >0)
    {
        $domain = str_replace("www.","",$domainFull[2]);
        switch($domain)
        {
            case "youtube.com":
                $idVideo = str_replace("watch?v=","",$domainFull[3]);
                $htmlVideo = getYoutubeVideo($idVideo);
                break;
            case "drive.google.com":
                $htmlVideo = "{}";
                break;
            case "photos.google.com":
                $htmlVideo = getPhotoGoogle($domainUrl);
                break;       
        }
    }
    else
    {
        die;
    }
    return $htmlVideo;
}
?>