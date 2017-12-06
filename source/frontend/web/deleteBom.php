<?php 
function checkBOM($filePath) {
    $isBOM = false;
    if (is_file($filePath)) {
        $str = file_get_contents($filePath);
        $bom = pack("CCC", 0xef, 0xbb, 0xbf);
        if (0 == strncmp($str, $bom, 3)) {
            $isBOM = true;
            $str = substr($str, 3);
            file_put_contents($filePath, $str);
        }
    }

    return $isBOM;
}

function read_dir($dir_path) {
    if ($handle = opendir($dir_path)) {
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {
                $path_file = $dir_path . '/' . $entry;
                if (is_file($path_file)) {
                    if (checkBOM($path_file)) {
                        echo $path_file . "\n";
                    }
                } else {
                    read_dir($path_file);
                }
            }
        }
        closedir($handle);
    }
}

read_dir("../controllers/");
?>