<?php 
	class C_dangnhap 
	{
    	public function c_login()
    	{
        	//model
	        include("models/m-login.php");
	        $m_login = new M_dangnhap();
	       	if(isset($_POST['ok']))
			{
				$tk = addslashes(stripslashes($_POST['tk']));
				$mk = md5(addslashes(stripslashes($_POST['mk'])));
				if(isset($tk) && isset($mk))
				{
					if($m_login->check_login($tk, $mk) == 'fail')
					{
						$err = "<p style='color: red;'>* Bạn nhập sai tài khoản hoặc mật khẩu</p>";
					}
					else
					{
						if($_SESSION['cb'] == '0')
						{
							ob_start(); 
							header('Location: ./nhansu.php');
							ob_end_flush();
						}
						elseif($_SESSION['cb'] == '1')
						{
							ob_start(); 
							header('Location: ./dieuhanh.php');
							ob_end_flush();
						}
						elseif($_SESSION['cb'] == '2')
						{
							ob_start(); 
							header('Location: ./kinhdoanh.php');
							ob_end_flush();
						}
						else
						{
							header('Location: ./index.php');
						}
					}
					$m_login->disconnect();
				}
			}			
	        //view
	        include("views/v-login.php");
    	}
	}			 		
?>
