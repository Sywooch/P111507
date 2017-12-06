<?php

/**
 * A Simple Fuzzy Search component using
 * Levenshtein Distance (LD) Algorithm and
 * Longest Common Substring (LCS) Algorithm
 *
 * @author wataridori
 */

namespace frontend\library;

class FuzzySearch {

    /**
     * @var array
     */
    protected $arrayData;

    /**
     * @var array
     */
    protected $attributes;

    /**
     * @var string
     */
    protected $searchString;

    /**
     * @var float Max Levenshtein Distance Rate
     */
    protected $maxLD = 0.3;

    /**
     * @var float Min Longest Common Substring Rate
     */
    protected $minLCS = 0.7;

    const NOT_MATCH = 0;
    const STR2_STARTS_WITH_STR1 = 1;
    const STR2_CONTAINS_STR1 = 2;
    const STR1_STARTS_WITH_STR2 = 3;
    const STR1_CONTAINS_STR2 = 4;
    const LEVENSHTEIN_DISTANCE_CHECK = 5;
    const LONGEST_COMMON_SUBSTRING_CHECK = 6;

    /**
     * Constructor
     * @param array $arrayData
     * @param array|string $attribute
     * @param string|null $searchString
     */
    public function __construct($arrayData, $attribute, $searchString = null) {
        $this->arrayData = $arrayData;
        $this->attributes = is_array($attribute) ? $attribute : [$attribute];
        $this->searchString = $searchString;
    }

    /**
     * Get Max Levenshtein Distance Rate
     * @return float
     */
    public function getMaxLD() {
        return $this->maxLD;
    }

    /**
     * Set Max Levenshtein Distance Rate
     * @param float $ld
     */
    public function setMaxLD($ld) {
        $this->maxLD = $ld;
    }

    /**
     * Get Min Longest Common Substring Rate
     * @return float
     */
    public function getMinLCS() {
        return $this->minLCS;
    }

    /**
     * Set Min Longest Common Substring Rate
     * @param float $lcs
     */
    public function setMinLCS($lcs) {
        $this->minLCS = $lcs;
    }

    /**
     * Search using Levenshtein Distance (LD) Algorithm and
     * Longest Common Substring (LCS) Algorithm
     * @param string|null $searchString
     * @return array
     */
    public function search($searchString = null) {
        $results = [];
        $search = $searchString ? mb_strtolower($searchString, 'UTF-8') : mb_strtolower($this->searchString, 'UTF-8');
        $search = $this->convert_vi_to_en($search);
        if (!$search) {
            return [];
        }
        foreach ($this->arrayData as $obj) {
            $found = false;
            foreach ($this->attributes as $attr) {
                if ($found || !isset($obj[$attr])) {
                    continue;
                }
                $val = mb_strtolower($obj[$attr], 'UTF-8');
                $val = $this->convert_vi_to_en($val);
                if (!$val) {
                    continue;
                }
                $type = self::NOT_MATCH;
                if (strpos($search, $val) !== false && strpos($search, $val) === 0) {
                    $type = self::STR2_STARTS_WITH_STR1;
                    $typeVal = strlen($val);
                } elseif (strpos($search, $val) > 0) {
                    $type = self::STR2_CONTAINS_STR1;
                    $typeVal = strlen($val);
                } elseif (strpos($val, $search) !== false && strpos($val, $search) === 0) {
                    $type = self::STR1_STARTS_WITH_STR2;
                    $typeVal = strlen($val);
                } elseif (strpos($val, $search) > 0) {
                    $type = self::STR1_CONTAINS_STR2;
                    $typeVal = strlen($val);
                } elseif ($this->checkLD($ld = levenshtein($val, $search), $search)) {
                    $type = self::LEVENSHTEIN_DISTANCE_CHECK;
                    $typeVal = $ld / strlen($search);
                } else {
                    $lcs = $this->getLCS($val, $search);
                    $similarPercent = strlen($lcs) / strlen($search);
                    if ($similarPercent > $this->minLCS) {
                        $type = self::LONGEST_COMMON_SUBSTRING_CHECK;
                        $typeVal = strlen($lcs) / strlen($val) * (-1);
                    }
                }
                if ($type !== self::NOT_MATCH) {
                    array_push($results, [$obj, $attr, $type, $typeVal]);
                    $found = true;
                }
            }
        }
        usort($results, [$this, 'sortArray']);

        return $results;
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
        return $str;
    }

    /**
     * Check whether Levenshtein Distance is small enough
     * @param int $ld
     * @param string $str
     * @return bool
     */
    private function checkLD($ld, $str) {
        $length = strlen($str);
        if ($ld / $length <= $this->maxLD) {
            return true;
        }
        return false;
    }

    /**
     * Get Longest Common Substring
     * @param string $firstString
     * @param string $secondString
     * @return string
     */
    private function getLCS($firstString, $secondString) {
        $firstStringLength = strlen($firstString);
        $secondStringLength = strlen($secondString);
        $return = '';

        if ($firstStringLength === 0 || $secondStringLength === 0) {
            return $return;
        }
        $longestCommonSubstring = [];
        for ($i = 0; $i < $firstStringLength; $i++) {
            $longestCommonSubstring[$i] = [];
            for ($j = 0; $j < $secondStringLength; $j++) {
                $longestCommonSubstring[$i][$j] = 0;
            }
        }
        $largestSize = 0;
        for ($i = 0; $i < $firstStringLength; $i++) {
            for ($j = 0; $j < $secondStringLength; $j++) {
                if ($firstString[$i] === $secondString[$j]) {
                    if ($i === 0 || $j === 0) {
                        $longestCommonSubstring[$i][$j] = 1;
                    } else {
                        $longestCommonSubstring[$i][$j] = $longestCommonSubstring[$i - 1][$j - 1] + 1;
                    }
                    if ($longestCommonSubstring[$i][$j] > $largestSize) {
                        $largestSize = $longestCommonSubstring[$i][$j];
                        $return = '';
                    }
                    if ($longestCommonSubstring[$i][$j] === $largestSize) {
                        $return = substr($firstString, $i - $largestSize + 1, $largestSize);
                    }
                }
            }
        }
        return $return;
    }

    /**
     * Sort arrays base on type and typeVal
     * @param array $firstArray
     * @param array $secondArray
     * @return int
     */
    private function sortArray($firstArray, $secondArray) {
        if ($firstArray[2] === $secondArray[2]) {
            if ($firstArray[3] === $secondArray[3]) {
                return 0;
            } else {
                return $firstArray[3] < $secondArray[3] ? -1 : 1;
            }
        } else {
            return $firstArray[2] < $secondArray[2] ? -1 : 1;
        }
    }

}
