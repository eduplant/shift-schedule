<?php
	class RNC
	{
		private $displayName;
		private $color;
		private $shifts;
		
		public function __construct($displayName, $color, $shifts)
		{
			$this->$displayName = $displayName;
			$this->$color = $color;
			$this->$shifts = $shifts;
		}
		
		public function __toString()
		{
			$returnable = $displayName . " (" . count($shifts) . " shifts)";
		}
		
		public function getDisplayName()
		{
			return $this->$displayName;
		}
		
		public function getColor()
		{
			return $this->$color;
		}
		
		public function getShifts()
		{
			return $this->$shifts;
		}
	}
?>