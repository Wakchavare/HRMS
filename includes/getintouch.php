<div class="touch-section">
					<div class="container">
						<h3>get in touch</h3>
						<div class="touch-grids">
							<?php
$sql="SELECT * from tblpage where PageType='contactus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
							<div class="col-md-4 touch-grid">
								<h4>address</h4>
								<h5><?php  echo htmlentities($row->PageDescription);?></h5>
								<!-- <div id="map" style="width:250; height:250;"></div> -->
								<div>
									<iframe width="250" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=-74.22032833099367%2C40.85274125306508%2C-74.17355060577394%2C40.87682284550599&amp;layer=mapnik&amp;marker=40.864783143872174%2C-74.19693946838379" style="border: 1px solid black"></iframe><br/><small><a href="https://www.google.co.in/maps/dir//Montclair+State+University,+1+Normal+Ave,+Montclair,+NJ+07043/@40.8666026,-74.199832,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x89c2fe352883ec55:0xeece028744cfc9ae!2m2!1d-74.1976433!2d40.8666026">Get Direction</a></small>
								</div>
								
							</div>
							<div class="col-md-4 touch-grid">
								<h4>Sales</h4>
								<h5>Sales Enquiries</h5>
								<p>Telephone : +<?php  echo htmlentities($row->MobileNumber);?></p>
							<p>E-mail : <?php  echo htmlentities($row->Email);?></p>
							</div><?php $cnt=$cnt+1;}} ?>
							<div class="col-md-4 touch-grid">
								<?php
$sql="SELECT * from tblpage where PageType='aboutus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
							<h4><?php  echo htmlentities($row->PageTitle);?></h4>
									
								<p><?php  echo htmlentities($row->PageDescription2);?></p>
								
							</div><?php $cnt=$cnt+1;}} ?>
							<div class="clearfix"></div>
						</div>
					</div>
					</div>
				<!--GET IN TOUCH-->