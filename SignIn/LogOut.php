<?php

    setcookie('username',  0, time()-1, '/');
    setcookie('password',  0, time()-1, '/');
            
    header("Location: ../index.php");

