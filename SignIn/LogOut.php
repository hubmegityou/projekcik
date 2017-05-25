<?php
    
    setcookie('username',  0, time()-1, '/');
    setcookie('password',  0, time()-1, '/');
    setcookie('admin_name',  0, time()-1, '/');
    setcookie('firstname',  0, time()-1, '/');
    setcookie('lastname',  0, time()-1, '/');
    setcookie('ID',  0, time()-1, '/');
            
    header("Location: ../index.php");

