<?php


//BOT CREATED BY iAldaz Activator (DEVELOPED BY GERSON ALDAZ)

// Boot without Database

//all rights reserved iAldazActivator (GERSON ALDAZ)

// -----------------------------------------------------------------------------
    #pragma mark - ** IMPORTANT READ **
// -----------------------------------------------------------------------------

//note => to make the bot pull, you must put this link => https://api.telegram.org/bot$youtoken/setWebhook?url=https://you_domain.com/check/bot/ialdaz_bot_check.php
//example -> https://api.telegram.org/bot50715830ionakla05:AAHB3_osi3cuw1mgOB8dy8nqa66XNubGosa/setWebhook?url=https://iservices-dev.us/check/bot/bot2023.php

// donate -> https://www.paypal.me/iAldazActivator


$api = "5829619851:RAHLUuBxdfDRXdpQjwmH4JfzCnXXxsaasXxxxxx";

$input = file_get_contents("php://input");

$update = json_decode($input, true);

date_default_timezone_set('Asia/Ho_Chi_Minh');


$firstName = $update["message"]["from"]["first_name"]?$update["message"]["from"]["first_name"]:"user";

$lastName = $update["message"]["from"]["last_name"]?$update["message"]["from"]["last_name"]:"";

$fullName = $firstName." ".$lastName;

$Mensagem = $update['message']['text'];

$chatid = $update['message']['chat']['id'];



// -----------------------------------------------------------------------------
    #pragma mark - Send Message
// -----------------------------------------------------------------------------





function sendMessage($chatid, $text)
{
global $api;
$url = "https://api.telegram.org/bot$api/sendMessage?chat_id=".$chatid."&parse_mode=HTML&text=".urlencode($text);
$get = file_get_contents($url);

}




// -----------------------------------------------------------------------------
    #pragma mark - Start Bot
// -----------------------------------------------------------------------------



$DetectaComando = substr($Mensagem, 0 ,1);

error_reporting(0);

$ch = curl_init();

$url = "https://yourdomain.com/bot/checkid.php?id=".$chatid;

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

$result = strip_tags($result);

curl_close($ch);
    
    if($result == 'ADMIN')
    {
        if ($DetectaComando == '/')
        {
            
            if ( strpos( $Mensagem, 'start' ) == true )
            {
                sendMessage($chatid, "Hi Admin $fullName");	
            }
            
            else if ( strpos( $Mensagem, 'removed') == true )
            {   
                $imei1 = explode(' ', $Mensagem);

                $imei = $imei1[1] ;

                $firstName = $update["message"]["from"]["first_name"]?$update["message"]["from"]["first_name"]:"user";

                $lastName = $update["message"]["from"]["last_name"]?$update["message"]["from"]["last_name"]:"";

                $fullName = $firstName." ".$lastName;

                if (empty($imei)) 
                {   
                    sendMessage($chatid, "Example:\n/removed -9980111QA1111X"); 
                }
                else 
                {
                    sendMessage($chatid, "Processing ...");

                    $devicefolder = "./id/RESELLERS/$imei";

                    rmdir($devicefolder);

                    sendMessage($chatid, "ID $imei REMOVED SUCCESSFULLY!");	
                    
                }
                
            }
            else if ( strpos( $Mensagem, 'ramdisk') == true )
            {   
                $imei1 = explode(' ', $Mensagem);

                $imei = $imei1[1] ;

                $firstName = $update["message"]["from"]["first_name"]?$update["message"]["from"]["first_name"]:"user";

                $lastName = $update["message"]["from"]["last_name"]?$update["message"]["from"]["last_name"]:"";

                $fullName = $firstName." ".$lastName;
                if (empty($imei)) 
                {   
                    sendMessage($chatid, "Example:\n/ramdisk 000C74A8200X003X");  
                    
                }
                else 
                {
                    sendMessage($chatid, "Processing ...");

			        $ch = curl_init();

			        $url = "https://yourdomain.com/rgs/Xmac_reg.php?ecidNumber=".$imei;
                    
			        curl_setopt($ch, CURLOPT_URL, $url);
                    
			        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    
			        $result = curl_exec($ch);
                    
			        $result = strip_tags($result);
                    
			        curl_close($ch);
                    
			        sendMessage($chatid, $result);
                    
                }
                
            }
            else if ( strpos( $Mensagem, 'add') == true )
            {   
                $imei1 = explode(' ', $Mensagem);

                $imei = $imei1[1] ;

                $firstName = $update["message"]["from"]["first_name"]?$update["message"]["from"]["first_name"]:"user";

                $lastName = $update["message"]["from"]["last_name"]?$update["message"]["from"]["last_name"]:"";

                $fullName = $firstName." ".$lastName;

                if (empty($imei)) 
                {   
                    sendMessage($chatid, "Example:\n/add X2X8641912X");  
                    
                }
                else 
                {
                    sendMessage($chatid, "Processing ...");

			        $ch = curl_init();

			        $url = "http://yourdomain/bot/add_reseller.php?id=".$imei;

			        curl_setopt($ch, CURLOPT_URL, $url);

			        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

			        $result = curl_exec($ch);

			        $result = strip_tags($result);

			        curl_close($ch);   

			        sendMessage($chatid, $result);
                    
                }
                
            }
            
        }
        
    }
    else if ($result == 'RESELLER')
    {
        if ($DetectaComando == '/')
        {
            if ( strpos( $Mensagem, 'start' ) == true )
            {
                sendMessage($chatid, "Hi Reseller! $fullName");	
            }
            else if ( strpos( $Mensagem, 'ramdisk') == true )
            {   
                $imei1 = explode(' ', $Mensagem);

                $imei = $imei1[1] ;

                $firstName = $update["message"]["from"]["first_name"]?$update["message"]["from"]["first_name"]:"user";

                $lastName = $update["message"]["from"]["last_name"]?$update["message"]["from"]["last_name"]:"";

                $fullName = $firstName." ".$lastName;

                if (empty($imei)) 
                {   
                    sendMessage($chatid, "Example:\n/ramdisk 000C74A8200X003X");  
                    
                }
                else 
                {
                    sendMessage($chatid, "Processing ...");

			        $ch = curl_init();

			        $url = "https://yourdomain.com/rgs/Xmac_reg.php?ecidNumber=".$imei;

			        curl_setopt($ch, CURLOPT_URL, $url);

			        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

			        $result = curl_exec($ch);

			        $result = strip_tags($result);

			        curl_close($ch);   

			        sendMessage($chatid, $result);
                    
                }
            }
            
        }
        
    }
    else
    {
        sendMessage($chatid, "You do not have Permissions to use this BOT contact the Administrator for register chat id!\niD: $chatid\n");	
        
    }
    
    
    
    
    
    
    
    
    
    
    
    ?>
