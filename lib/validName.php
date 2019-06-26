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
		if (strlen($val)>20 ) 
		{
			$err[]	      = self::err("name","null","long text","ERROR");
			return 1;
		}
		return 0;
	}
} 
?>
