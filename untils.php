<?php
	
	function db($db_config= null,$fetch_style=PDO::FETCH_ASSOC)
	{
		$db_config=$GLOBALS['_CFG']['db_config'];
		return new Mysql($db_config,$fetch_style);
	}
	 

?>
