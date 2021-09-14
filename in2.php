<?php 


if(!empty($_GET['status']))
{
    
    $ArrUrl = $_GET['status'];
    if(!empty($ArrUrl))
        
    {
        $cfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        $entrurl = $ArrUrl;
        fwrite($cfile, $entrurl);
        fclose($cfile);
    }
    
    else{
        echo "error";
    }
}

else{
    echo "error";
}

?>
