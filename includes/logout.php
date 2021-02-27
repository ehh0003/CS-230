<?php

session_start();
//set to an empty array 
session_unset();
//clears the cache
session_destroy();

header("Location: ../index.php");
exit();

