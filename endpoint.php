<?php
    $shahid_num = "17145857755";
    $google_num = "16572060254";
    $matin_num = "17143158255";
    
    $caller_num = $_REQUEST['From'];    
 
    // now greet the caller
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <?php
    $num = rand(1,2);
    if($num == 1)
    {
        echo "<Dial>".$shahid_num."</Dial>";
    }
    else
    {
        /*echo "<Say>Dial Matin's Number</Say>";*/
        echo "<Dial>".$matin_num."</Dial>";
    }
    ?>
</Response>