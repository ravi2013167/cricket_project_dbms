<?php include 'head.php'; ?>
	<div class="content-wrapper">
	
		<section class="content">
	
      <div class="row"> 
	   
	   <div class="col-lg-12 col-xs-12 col-md-12">
			 <!-- START CUSTOM TABS -->
      <h2 class="page-header">Notifications</h2>

      <div class="row">
	  
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                </a>
                <ul class="dropdown-menu">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                </ul>
              </li>
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                
					  <?php include('../dbms.php');
					  $Narr =array("Programming","Design","Electronics","Music","Dance","Drama","Literary","Astronomy","CAD","Bussiness","Cricket","Football","Chess","Badminton","Table
Tanis","Carrom","Basketball","Lawn Tennis","Gym","Health");
									$qry="SELECT * FROM Notification ORDER BY Genre";
									$i=1;
									$result=mysql_query($qry);
									$p=-1;
									while($row=mysql_fetch_assoc($result))
									{	
										if($p!=$row['Genre'])
										{
											if($row['Genre']!=0)
											{
												echo "</table>
                      
													</div>
												  </div>
												</div>";
											}
											echo "<div class='panel box box-primary' 	>
												  <div class='box-header with-border'>
													<h4 class='box-title'>
													  <a data-toggle='collapse' data-parent='#accordion' href='#1'>
															".$Narr[$row['Genre']]."
													  </a>
													</h4>
												  </div>
												  <div id='1' class='panel-collapse collapse in'>
													<div class='box-body'>
													<table class='table table-condensed table-hover table-responsive' >
												<tr class='warning '>
													<td class='col-md-8'>
														".$row['Notification']."
													</td>
												</tr>
												";
											$p=$row['Genre'];
										}
										else{
												echo "<tr class='warning '>
														<td class='col-md-8'>
																".$row['Notification']."
														</td>
													</tr>";
										}
									}
									?>
                 </table>
                      
													</div>
												  </div>
												</div>
              </div>
            </div>
            <!-- /.box-body -->
          
              </div>
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
			
		
            </div>
        
		</div>
    </section>
		
		
		

	</div>
<?php include 'foot.php'; ?>