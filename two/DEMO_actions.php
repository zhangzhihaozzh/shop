<?php

  class DEMO_actions{
	  
	  function __construct(&$pluginManager){
		  $pluginManager->register($demo ,$this,'say_hello');
		  
	  }
	   function say_hello(){
		  echo "helloworld";
		  
	  }
	  
	  
  }
?>