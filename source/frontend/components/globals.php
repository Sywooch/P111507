<?php 
function word_limit($chuoi, $gioihan) {
        $chuoi = strip_tags($chuoi);
        if (strlen($chuoi) <= $gioihan) {
            return $chuoi;
        } else {
            if (strpos($chuoi, " ", $gioihan) > $gioihan) {
                $new_gioihan = strpos($chuoi, " ", $gioihan);
                $new_chuoi = substr($chuoi, 0, $new_gioihan);
                return $new_chuoi;
            }
            $new_chuoi = substr($chuoi, 0, $gioihan);
            return $new_chuoi;
        }
    }
 function divPage($total = 0,$currentPage =1,$div = 5,$rows = 10,$url,$urlExt='')
    {

        if(!$total || !$rows || !$div || $total<=$rows) return false;
        $nPage = floor($total/$rows) + (($total%$rows)?1:0);
        $nDiv  = floor($nPage/$div) + (($nPage%$div)?1:0);
        $currentDiv = floor($currentPage/$div) ;
        $sPage = '';
        $sPage="<div class=\"pagination mgift-pagination\">";
        if($currentDiv)
        {
            $sPage .= '<a  href="'.$url.$urlExt.'0"><i class="glyphicon glyphicon-step-backward"></i></a>';
            $sPage .= '<a  href="'.$url.($currentDiv*$div - 1).$urlExt.'"><i class="glyphicon glyphicon-triangle-left"></i></a>';
        }
        $count =($nPage<=($currentDiv+1)*$div)?($nPage-$currentDiv*$div):$div;
        for($i=0;$i<$count;$i++)
        {
            $page = ($currentDiv*$div + $i+1);

            $sPage .= '<a '.(($page==$currentPage)?' class="active"':'').' href="'.$url.($currentDiv*$div + $i +1).$urlExt.'" >'.($page).'</a>';
        }
        if($currentDiv < $nDiv - 1)
        {
            $sPage .= '<a  href="'.$url.(($currentDiv+1)*$div).$urlExt.'"><i class="glyphicon glyphicon-triangle-right"></i></a>';
            $sPage .= '<a  href="'.$url.(($nDiv-1)*$div ).$urlExt.'"><i class="glyphicon glyphicon-step-forward"></i></a>';
        }
        $sPage.="</div>";
        return $sPage;
    }   
?>