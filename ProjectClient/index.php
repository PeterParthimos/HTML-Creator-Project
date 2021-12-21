<?php
//entry point to the application to send in the requests.

//this makes it mandatory for the applicastion to load app/init.php
//before loading anything else. If it can't find that file, it won't work
require "app/init.php";

//Make a new App object
new App\core\App();

?>
