<?php

function getIpAddress()
{
    $ip = '';
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
        $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
        $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

function subString($string, $offset)
{
    $str_view_all = '';
    $content = trim(strip_tags($string));
    $str_len = strlen($content);
    $str_view = ($str_len > $offset) ? substr($content, 0, $offset) : $content;
    if(strlen($str_view) >= $offset) {
        $j = 0;
        for($i = strlen($str_view) - 1; $i >= 0; $i--) {
            if(substr($str_view, $i, strlen(' ')) == ' ') {
                $j = $i;
                break;
            }
        }
        $str_view_all = substr($str_view, 0, $j);
    } else {
        $str_view_all = $str_view;
    }

    if($str_len > $offset) {
        $str_view_all = $str_view_all.'...';
    }
    $output = preg_replace('/\s+/', ' ',$str_view_all);
    return $output;
}

function setLog($path, $data, $log_type="a+", $log_permission=0777, $line="\n"){
    if (empty($path) || empty($data)){
        return false;
    }else{
        $pathinfo = pathinfo($path);
        $logpath = '/' . $pathinfo['dirname'];
        // cread folder if not exits
        if (!is_dir(BASE_PATH . $logpath)) {
            mkdir(BASE_PATH . $logpath, 0777, TRUE);
        }
        $w = fopen($path, $log_type);
        @chmod($path, $log_permission);
        if (is_array($data)){
            fputs($w, json_encode($data).$line );
            fclose($w);
            return true;
        }else{
            fputs($w, $data.$line);
            fclose($w);
            return true;
        }
    }
}

function post_request_array($url, $data){
    $fields_string = '';
    foreach($data as $key=>$value)
    {
        $fields_string .= $key.'='.$value.'&';
    }
    $fields_string = rtrim($fields_string,'&');
    //open connection
    $ch = curl_init();
    //set the url, number of POST vars, POST data
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

function get_request_by_curl($url, $data){
    $fields_string = '';
    foreach($data as $key=>$value)
    {
        $fields_string .= $key.'='.$value.'&';
    }
    $fields_string = rtrim($fields_string,'&');
    // Get cURL resource
    $curl = curl_init();
    // Set some options - we are passing in a useragent too here
    curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $url.'?'.$fields_string
    ));
    // Send the request & save response to $resp
    $resp = curl_exec($curl);
    // Close request to clear up some resources
    curl_close($curl);
    return $resp;
}
/**
 * Formats megabyte in human readable way.
 *
 * @param megabyte $mb
 * @return string Formatted Filesize, e.g. "113.24 MB".
 */
function filesize_formatted($mb)
{
    $bytes = $mb * 1024 * 1024;
    if ($bytes >= 1073741824) {
        return number_format($bytes / 1073741824) . ' GB';
    } elseif ($bytes >= 1048576) {
        return number_format($bytes / 1048576) . ' MB';
    } elseif ($bytes >= 1024) {
        return number_format($bytes / 1024) . ' KB';
    } elseif ($bytes > 1) {
        return $bytes . ' bytes';
    } elseif ($bytes == 1) {
        return '1 byte';
    } else {
        return '0 bytes';
    }
}



