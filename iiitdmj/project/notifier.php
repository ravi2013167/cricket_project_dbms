
			<?php 
			session_start();
				$noti = $_POST['noti'];$t=0;
				$s1=""; $s2="";
				$arr;
				for($i=0;$i<=20;$i++) $arr[$i]=0;
				for($i=0; $i<count($noti); $i++) {
					$arr[$noti[$i]]=1;
				}
				for($i=1; $i<=10; $i++) if($arr[$i]==1) $s1=$s1."1"; else $s1=$s1."0";
				for($i=11; $i<=20; $i++) if($arr[$i]==1) $s2=$s2."1"; else $s2=$s2."0";
									include('../dbms.php');
									$qry="UPDATE logins SET INTERESTS='".$s1."' ,SPORTS='".$s2."' WHERE USERNAME='".$_SESSION['USER_ID']."'";
									$i=1;
									mysql_query($qry);
				header('location:dashboard.php');
			?>
