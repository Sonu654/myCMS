<?php
  if(empty($_GET['url'])){
  	header('location: Main/Index');
  }

require_once('Applications/Config.php');
