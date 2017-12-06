<?php 
include("/core_simplehtmldom/simple_html_dom.php");
/****************** CNET ************************/
function cnet_GetUrlSoftwaresWindows($page,$menuhref)
{
	$dataCrawl = array();
	if($page == 1)
	{
		$url = "$menuhref?sort=latest";
		//http://download.cnet.com/s/education-ebooks-reader-manager/windows/?sort=latest
	}
	else
	{
		$url = "$menuhref?page=$page&sort=latest";
		//http://download.cnet.com/s/education-ebooks-reader-manager/windows/?sort=latest&page=2
	}
	$html = file_get_html($url);
	foreach($html->find(".search-results") as $element) // DIV LON NHAT
	{
		/*------- SET CLASS CHO LI VA CLASS --------*/
		foreach($element->find("li") as $liTag)
		{
			$liTag->setAttribute("class","dataget");
		}
		foreach($element->find(".item-anchor") as $aTag)
		{
			$aTag->setAttribute("class","dataget");
		}
	}
	$htmlDate = "";
	foreach($html->find("[class=dataget]") as $element)
	{
		
		if($element->tag=='li')
		{
			$strDate = str_replace("Today - ","",$element->plaintext);
			$htmlDate = date("Y-m-d",strtotime($strDate));
		}
		
		if($element->href !="")
		{
			$description = "";
			if($element->find("p[class=description]",0))
			{
				$description = $element->find("p[class=description]",0)->plaintext;
			}
			
			$dataCrawl[]  = array
			(
							'urlsoftware' 		=> $element->href,
							'htmlDate'	 		=> $htmlDate,
							'htmlPage'			=> $page,
							'htmlDescription' 	=> $description,
			);
		}
		
	}
	
	unset($dataCrawl[0]);
	sort($dataCrawl);
	$html->clear();
	return $dataCrawl;
}


function cnet_GetUrlSoftwareByPage($page,$datepicker,$menuhref)
{
	$dataCrawl = array();
	if($page == 1)
	{
		$url = "$menuhref?sort=latest";
		//http://download.cnet.com/s/education-ebooks-reader-manager/windows/?sort=latest
	}
	else
	{
		$url = "$menuhref?page=$page&sort=latest";
		//http://download.cnet.com/s/education-ebooks-reader-manager/windows/?sort=latest&page=2
	}
	$html = file_get_html($url);
	foreach($html->find(".search-results") as $element) // DIV LON NHAT
	{
		/*------- SET CLASS CHO LI VA CLASS --------*/
		foreach($element->find("li") as $liTag)
		{
			$liTag->setAttribute("class","dataget");
		}
		foreach($element->find(".item-anchor") as $aTag)
		{
			$aTag->setAttribute("class","dataget");
		}
	}
	$htmlDate = "";
	foreach($html->find("[class=dataget]") as $element)
	{
		
		if($element->tag=='li')
		{
			$strDate = str_replace("Today - ","",$element->plaintext);
			$htmlDate = date("Y-m-d",strtotime($strDate));
		}
		//echo $element->plaintext.'<br/><br/>';exit;
		$dayIssue = cnet_IntervalDays($datepicker,$htmlDate); // so sanh ngay hien tai voi ngay get dc, neu ngay get dc nho hon thì dung
		//echo $dayIssue;
		$flagEndDay = 0;
		if($dayIssue < 0) // ngày html tru ngay hien tai nho hon < 0 
		{
			$flagEndDay = 1;
		}
		elseif($dayIssue>0)
		{
			$flagEndDay = 2;
		}
		elseif($dayIssue == 0)
		{
			$flagEndDay = 0;
		}
		
		if($element->href !=="")
		{
			$description = "";
			if($element->find("p[class=description]",0))
			{
				$description = $element->find("p[class=description]",0)->plaintext;
			}
			
			$dataCrawl[]  = array(
							'urlsoftware' 		=> $element->href,
							'flagEndDay'		=> $flagEndDay,
							'htmlDate'	 		=> $htmlDate,
							'htmlPage'			=> $page,
							'htmlDescription' 	=> $description,
						);
		}
		
	}
	
	unset($dataCrawl[0]);
	sort($dataCrawl);
	$html->clear();
	return $dataCrawl;
}

function cnet_GetDetailSoftwareByUrl($url,$description,$href_position)
{
	$dataCrawl = array();
	$html = file_get_html($url);
	$flag = 0;
	foreach($html->find("#content-body-product-single") as $element)
	{
		$i=0;
		$strBreakcum = "";
		foreach($element->find(".breadcrumb li") as $licate)
		{
			if($i == 0)
			{
				$strBreakcum .= $licate->plaintext;
			}
			else
			{
				$strBreakcum .= " > ".$licate->plaintext;
			}
			$i++;
		}
		
		$strNameSoftware 	= 	$element->find("span[itemprop=name]",0)->plaintext;
		$strImages ="";
		if(count($element->find("img[itemprop=image]",0))>0)
		{
			$strImages 			=  	$element->find("img[itemprop=image]",0)->src;
		}
		
		$strDescription  	= 	$description;
		$element->find("#publisher-name",0)->innertext  = "";
		$strBody 			= 	$element->find("#publisher-description",0)->plaintext;
		$strPublisher 		=  	$element->find("#specsPubName td",1)->plaintext;
		$strPublisherUrl	=  	$element->find("#specsPubUrl td",1)->plaintext;
		$strRelaseDate 		= 	$element->find("#specsPubReleaseDate td",1)->plaintext;
		$strSoftwareVersion = 	$element->find("#specsPubVersion td",1)->plaintext;
		$strSoftwareOs 	= 	$element->find("#specsOperatingSystem td",1)->plaintext;
		
		$strImagesOp = array();
		foreach($element->find("#product-screenshots .om-image-view") as $screenshots)
		{
			$strImagesOp[] = $screenshots->src;
		}
		$flag = 1;
		$dataCrawl[]  = array(
							'strBreakcum' 			=> $strBreakcum,
							'strBody'				=> removeHref($strBody),
							'strNameSoftware'		=> $strNameSoftware,
							'strImages'	 			=> $strImages,
							'strDescription'		=> $strDescription,
							'strPublisher' 			=> $strPublisher,
							'strPublisherUrl' 		=> $strPublisherUrl,
							'strRelaseDate' 		=> $strRelaseDate,
							'strSoftwareVersion' 	=> $strSoftwareVersion,
							'strSoftwareOs' 		=> $strSoftwareOs,
							//'strImagesOp' 			=> $strImagesOp,
							'flag'					=> $flag,
							'href_position'			=> $href_position // extra tags
						);
	}
	
	
	$html->clear();
	return $dataCrawl;
}

function cnet_IntervalDays($CheckIn,$CheckOut)
{ 
	$CheckInX 	= 	explode("-", $CheckIn); 
	$CheckOutX 	=  	explode("-", $CheckOut); 
	$date1 		=  	mktime(0, 0, 0, $CheckInX[1],$CheckInX[2],$CheckInX[0]); 
	$date2 		=  	mktime(0, 0, 0, $CheckOutX[1],$CheckOutX[2],$CheckOutX[0]); 
	$interval 	=	($date2 - $date1)/(3600*24); 
	// returns numberofdays 
	return  $interval ; 

}
/****************** END CNET ************************/ 
?>