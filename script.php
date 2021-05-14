<?php  
error_reporting(0);
$weather= "";
    $totalCases= "";
    $totalRecovered= "";
    $totalDeaths= "";
    $totalCountries= "";   
    $urlContents = file_get_contents("https:/disease.sh/v3/covid-19/all");    
        $weatherArray = json_decode($urlContents, true);     
if($weatherArray){       
$totalCases = $weatherArray['cases'];
$totalRecovered = $weatherArray['recovered'];
$totalDeaths = $weatherArray['deaths'];
$totalCountries = $weatherArray['affectedCountries'];
$weather= "Total cases are ".$totalCases.", Total Deaths are ".$totalDeaths.", Total Recoveries are ".$totalRecovered." , Total Countries Affected are ".$totalCountries.".";
}
else{
    $weather= "Data Not Available";
}
?>
