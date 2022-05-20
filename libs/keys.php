<?php
    if (stristr(htmlentities($_SERVER['PHP_SELF']), "keys.php")) {
        Header("Location: ../403.html");
        die();
    }

    
    // $server = "ec2-34-194-73-236.compute-1.amazonaws.com";
    // $port = "5432";
    // $user = "tcsssdrvqnkgwo";
    // $pass = "b881b6cec6bf0c75053feb420e42198e1b44005d2810f16b40bea5ec5e1d40cb";
    // $db = "diamb042ncosg";

?>