<?php
	$days = array(
		"monday" => array(),
		"tuesday" => array(),
		"wednesday" => array(),
		"thursday" => array(),
		"friday" => array()
	)
	
	$xmlDoc = new XMLReader;
	$xmlDoc->open("currentschedule.xml");
	if ($xmlDoc->setSchema("scheduleschema.xsd"))
	{
		//proceed
		foreach array("monday", "tuesday", "wednesday", "thursday", "friday") as $dayOfWeek
		{
			$parentNode = $xmlDoc->moveToElement($dayOfWeek);
			$days[$dayOfWeek] = new RNC()
		}
	}
	else
	{
		//exit sad
	}
?>