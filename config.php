<?php

	define ("IS_DEBUG",true);
	if(IS_DEBUG)
	{
		$GLOBALS['_CFG']['db_config'] = array(
			"dbms"=>"mysql",
			"dbhost"=>"localhost",
			"dbuser"=>"root",
			"dbport"=>"3306",
			"dbpwd"=>"aszx0316",
			"dbname"=>"todo",
			'dbcharset'=>"utf8"
		);
	}
	else
	{
		$GLOBALS['_CFG']['db_config'] = array(
			"dbms"=>"mysql",
			"dbhost"=>"",
			"dbuser"=>"root",
			"dbport"=>"3306",
			"dbpwd"=>"",
			"dbname"=>"wdt_crm_v2",
			'dbcharset'=>"utf8"
		);
	}


?>
