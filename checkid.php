<?php

$id =  $_GET['id'];

if (!isset($id) || empty($id)) {
    echo 'NULL';
    exit;
}

if(exec("grep ".$id." ./id/admin.log"))
{ 
    echo 'ADMIN';
    exit;
}
else 
{
    $devicefolder = "./id/RESELLERS/$id";
    if (!file_exists($devicefolder)) 
    {
        echo "NOT_RESELLER";
    }
    else
    {
        
        echo "RESELLER";
    }
}

?>