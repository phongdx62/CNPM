<?php
	class c_kinhdoanh
	{
		public function kinhdoanh()
		{
			// models
			include("models/m-kinhdoanh/m-kinhdoanh.php");
			$kd = new m_kinhdoanh();

			if(isset($_SESSION["tk"]) && $_SESSION["cb"] == '2')
		    {
				// ...
		    } 
			else
			{	
				ob_start(); 
				header('Location: ./index.php');
				ob_end_flush();
			}
		
			// views
			include("views/v-kinhdoanh.php");
		}
	} 
?>