<?php include 'head.php' ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li class="active">Courses</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	
      <div class="row"> 
	   
	   <div class="col-lg-12 col-xs-12 col-md-12">
			 <!-- START CUSTOM TABS -->
      <h2 class="page-header">Settings</h2>

          <!-- general form elements disabled -->
          <div class="box ">
            <div class="box-header with-border">
              <h3 class="box-title">Receive Notifications Regarding</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action = "notifier.php" method = "post">
                
				<!-- checkbox -->
                <div class="form-group" style="overflow:auto">
                  <h4>Clubs & Interests</h4>
				  <table class="table table-responsive" cellpadding=0 cellspacing=0 style="overflow:scroll;border-collapse:collapse;margin:0;padding:0">
				  <tr>
				  <td>
                    
                      <input type="checkbox" value="1" id="1" name="noti[]">
                      Programming
                    
                  </td>

                  <td>
                    
                      <input type="checkbox" value="2" id="2" name="noti[]">
                      Design
                    
                  </td>
				  
                  <td>
                    
                      <input type="checkbox" value="3" id="3" name="noti[]">
                      Electronics
                    
                  </td>
				  
                  <td>
                    
                      <input type="checkbox" value="4" id="4" name="noti[]">
                      Music
                    
                  </td>
				  
                  <td>
                    
                      <input type="checkbox" value="5" id="5" name="noti[]">
                      Dance
                    
                  </td>
				  </tr>
				  <tr>
				  <td>
                      <input type="checkbox" value="6" id="6" name="noti[]">
                      Drama
                  </td>
				  <td>
                      <input type="checkbox" value="7" id="7" name="noti[]">
                      Literary
                  </td>
				  <td>
                      <input type="checkbox" value="8" id="8" name="noti[]">
                      Astronomy
                  </td>
				  <td>
                      <input type="checkbox" value="9" id="9" name="noti[]">
                      CAD
                  </td>
				  <td>
                      <input type="checkbox" value="10" id="10" name="noti[]">
						Bussiness
                  </td>
				  </tr>
				</table>
                  
                </div>

				<!-- checkbox -->
                <div class="form-group" style="overflow:auto">
                  <h4>Sports & Fitness</h4>
				  <table class="table table-responsive" cellpadding=0 cellspacing=0 style="overflow:scroll;border-collapse:collapse;margin:0;padding:0">
				  <tr>
				  <td>
                    
                      <input type="checkbox" value="11" id="11" name="noti[]">
                      Cricket
                    
                  </td>

                  <td>
                    
                      <input type="checkbox" value="12" id="12" name="noti[]">
                      Football
                    
                  </td>
				  
                  <td>
                    
                      <input type="checkbox" value="13" id="13" name="noti[]">
                      Chess
                    
                  </td>
				  
                  <td>
                    
                      <input type="checkbox" value="14" id="14" name="noti[]">
                      Badminton
                    
                  </td>
				  
                  <td>
                    
                      <input type="checkbox" value="" id="15" name="noti[]">
                      Table Tennis
                    
                  </td>
				  </tr>
				  <tr>
				  <td>
                      <input type="checkbox" value="16" id="16" name="noti[]">
                      Carrom
                  </td>
				  <td>
                      <input type="checkbox" value="17" id="17" name="noti[]">
                      Basketball
                  </td>
				  <td>
                      <input type="checkbox" value="18" id="18" name="noti[]">
                      Lawn Tennis
                  </td>
				  <td>
                      <input type="checkbox" value="19" id="19" name="noti[]">
                      Gym
                  </td>
				  <td>
                      <input type="checkbox" value="20" id="20" name="noti[]">
                      Health
                  </td>
				  </tr>
				</table>
                <?php
									include('../dbms.php');
									$qry="SELECT * FROM logins WHERE USERNAME='".$_SESSION['USER_ID']."' ";
									$result=mysql_query($qry);
									while($row=mysql_fetch_assoc($result))
									{
										
										$s=$row['INTERESTS'].$row['SPORTS'];
										for($i=1;$i<=20;$i++)
										{
											if($s[$i-1]=='1')
												{
													echo "<script>document.getElementById('".$i."').checked=true;</script>";
												}
											else {
												echo "<script>document.getElementById('".$i."').checked=false;</script>";
											}
										}
									}				
				  ?>
                </div>
				<div class="form-group" style="overflow:auto">
				  
                  
                </div>
				                    <button type="submit" class="btn btn-block btn-primary btn-lg">Submit</button>
			 </form>
            </div>
            <!-- /.box-body -->
          </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
      
		
      
	  
	  
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include 'foot.php' ?>