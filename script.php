<?php  
$weather= "";
    $totalCases= "";
    $totalRecovered= "";
    $totalDeaths= "";
    $totalCountries= "";   
    $urlContents = file_get_contents("http://localhost/Covid-API/");    
        $weatherArray = json_decode($urlContents, true);     
            $totalCases = $weatherArray[0]['Total Cases'];
$totalRecovered = $weatherArray[0]['Total Recovered'];
$totalDeaths = $weatherArray[0]['Total Dead'];
$totalCountries = $weatherArray[0]['Countries Affected'];
$weather= "Total cases are ".$totalCases.", Total Deaths are ".$totalDeaths.", Total Recoveries are ".$totalRecovered." , Total Countries Affected are ".$totalCountries.".";
?>