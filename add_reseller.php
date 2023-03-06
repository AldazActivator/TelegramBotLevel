<?php


$SN = $_GET['id'];
$devicefolder = "./id/RESELLERS/$SN";
if (!file_exists($devicefolder)) {
    
    mkdir($devicefolder, 0777, true);
    echo "ID REGISTRED SUCCESSFULLY!";
}
else
{
    
    echo "ID ALREADY EXIST";
}


