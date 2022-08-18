<?php
session_start();
$projectName = $_POST['projectName'];
$scanningMode = $_POST['scanningMode'];
$scanDimensionsX = $_POST['scanDimensionsX'];
$scanDimensionsY = $_POST['scanDimensions Y'];
$scannerFrequency = $_POST['scannerFrequency'];


$errorMessage=[];
$scanningModes=['GANTRY','CRAWLER','AUTO','MANUAL','ARM'];
if(strlen($projectName)<3){
    array_push($errorMessage,"Project Name needs to be more than 3");
}

if(!in_array($scanningMode,$scanningModes)){
    array_push($errorMessage,"Scanning Mode needs to be selected from dropdown list");
}

if($scanDimensionsX<1){
    array_push($errorMessage,"Dimension X needs to be more than 1");

}
if($scanDimensionsY<1){
    array_push($errorMessage,"Dimension Y needs to be more than 1");

}


if($scannerFrequency<1){
    array_push($errorMessage,"Scanner Frequency needs to be more than 1");

}

$_SESSION['errorMessage']= $errorMessage;
    
?>