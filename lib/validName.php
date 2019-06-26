<?php

class validName
{
	function check_NAME($val,$emp,&$err)
	{
		if ( is_null($val) )
		{
			if ( $emp === true )
			{
				$err[]	      = self::err("name","null","name is require","ERROR");
				return  1;
			}
			else
			{
				return 0;
			}				
		}
		if (strlen($val)>10 ) 
		{
			$err[]	      = self::err("name","null","long text","ERROR");
			return 1;
		}
		return 0;
	}
	function err($name,$how,$why,$level)
	{
		$err = array( "what" => $name, "how" => $how, "why" => $why, "level" => $level );

		return $err;
	}
} 
?>
