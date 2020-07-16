
  

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><?php echo $title; ?></h2> 
          <ol>
            <li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$general['index']['url']['default']; ?>"><?php echo $general['index']['title']; ?></a></li>
            <li><?php echo $title; ?></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="why-us">
      <div class="container-fluid">

        <div class="row">
          <div class="col-lg-12 d-flex flex-column justify-content-center align-items-stretch video-box" style='background-image: url("http://placehold.it/1200x300");'>
			<div class="bg-dark text-white text-center">
				<h2><?php echo $title; ?></h2>
				<p><?php echo $description; ?></p>
			</div>
          </div>

        </div>

      </div>
    </section>

    <section class="inner-page">
      <div class="container">
		<div class="row">
			<div class="col-lg-12">
            <h3>Debug (Sites)</h3> 
			
			</div>
			
			<div class="col-lg-12">
				<div class="table-responsive">
					<table class="table table-hover">
					  <thead class="thead-dark">
						<tr>
						  <th scope="col"><?php echo $debug['index']['content']['table']['title']['1']; ?></th>
						  <th scope="col"><?php echo $debug['index']['content']['table']['title']['2']; ?></th>
						  <th scope="col"><?php echo $debug['index']['content']['table']['title']['3']; ?></th>
						</tr>
					  </thead>
					  <tbody>
						<tr>
							<td class="text-center">
								<?php echo $debug['index']['content']['table']['tr']['sites']['1']; ?>
							</td>
							<td class="text-center">
								<?php echo $debug['index']['content']['table']['tr']['sites']['2']; ?>
							</td>
							<td class="text-center">
								<?php echo $debug['index']['content']['table']['tr']['sites']['3']; ?> 
								 - <small><b>[<?php echo $sites['domain']; ?>]</b><a href="<?php echo $protocols.'://'.$sites['domain'].'/debug/sites.json'; ?>">/<em>debug/sites.json</em></a></small>
							</td>
						</tr>
					  </tbody>
					</table>
				</div>
			</div>
			
		</div>
		
		<div class="row">
			<div class="col-lg-12">
            <h3>Debug (social)</h3> 
			
			</div>
			
			<div class="col-lg-12">
				<div class="table-responsive">
					<table class="table table-hover">
					  <thead class="thead-dark">
						<tr>
						  <th scope="col"><?php echo $debug['index']['content']['table']['title']['1']; ?></th>
						  <th scope="col"><?php echo $debug['index']['content']['table']['title']['2']; ?></th>
						  <th scope="col"><?php echo $debug['index']['content']['table']['title']['3']; ?></th>
						</tr>
					  </thead>
					  <tbody>
						<tr>
							<td class="text-center">
								<?php echo $debug['index']['content']['table']['tr']['social']['1']; ?>
							</td>
							<td class="text-center">
								<?php echo $debug['index']['content']['table']['tr']['social']['2']; ?>
							</td>
							<td class="text-center">
								<?php echo $debug['index']['content']['table']['tr']['social']['3']; ?> 
								 - <small><b>[<?php echo $sites['domain']; ?>]</b><a href="<?php echo $protocols.'://'.$sites['domain'].'/debug/social.json'; ?>">/<em>debug/social.json</em></a></small>
							</td>
						</tr>
					  </tbody>
					</table>
				</div>
			</div>
			
		</div>
		
		
		<div class="row">
			<div class="col-lg-12">
            <h3>Debug (private)</h3> 
			
			</div>
			
			<div class="col-lg-12">
				<div class="table-responsive">
					<table class="table table-hover">
					  <thead class="thead-dark">
						<tr>
						  <th scope="col"><?php echo $debug['index']['content']['table']['title']['1']; ?></th>
						  <th scope="col"><?php echo $debug['index']['content']['table']['title']['2']; ?></th>
						  <th scope="col"><?php echo $debug['index']['content']['table']['title']['3']; ?></th>
						</tr>
					  </thead>
					  <tbody>
						<tr>
							<td class="text-center">
								<?php echo $debug['index']['content']['table']['tr']['private']['1']; ?>
							</td>
							<td class="text-center">
								<?php echo $debug['index']['content']['table']['tr']['private']['2']; ?>
							</td>
							<td class="text-center">
								<?php echo $debug['index']['content']['table']['tr']['private']['3']; ?> 
								 - <small><b>[<?php echo $sites['domain']; ?>]</b><a href="<?php echo $protocols.'://'.$sites['domain'].'/debug/private.json'; ?>">/<em>debug/private.json</em></a></small>
							</td>
						</tr>
					  </tbody>
					</table>
				</div>
			</div>
			
		</div>
		
		<div class="row">
			<div class="col-lg-12">
            <h3>Debug (business)</h3> 
			
			</div>
			
			<div class="col-lg-12">
				<div class="table-responsive">
					<table class="table table-hover">
					  <thead class="thead-dark">
						<tr>
						  <th scope="col"><?php echo $debug['index']['content']['table']['title']['1']; ?></th>
						  <th scope="col"><?php echo $debug['index']['content']['table']['title']['2']; ?></th>
						  <th scope="col"><?php echo $debug['index']['content']['table']['title']['3']; ?></th>
						</tr>
					  </thead>
					  <tbody>
						<tr>
							<td class="text-center">
								<?php echo $debug['index']['content']['table']['tr']['business']['1']; ?>
							</td>
							<td class="text-center">
								<?php echo $debug['index']['content']['table']['tr']['business']['2']; ?>
							</td>
							<td class="text-center">
								<?php echo $debug['index']['content']['table']['tr']['business']['3']; ?> 
								 - <small><b>[<?php echo $sites['domain']; ?>]</b><a href="<?php echo $protocols.'://'.$sites['domain'].'/debug/business.json'; ?>">/<em>debug/business.json</em></a></small>
							</td>
						</tr>
					  </tbody>
					</table>
				</div>
			</div>
			
		</div>
		
		<div class="row">
			<div class="col-lg-12">
            <h3>Debug (images)</h3> 
			
			</div>
			
			<div class="col-lg-12">
				<div class="table-responsive">
					<table class="table table-hover">
					  <thead class="thead-dark">
						<tr>
						  <th scope="col"><?php echo $debug['index']['content']['table']['title']['1']; ?></th>
						  <th scope="col"><?php echo $debug['index']['content']['table']['title']['2']; ?></th>
						  <th scope="col"><?php echo $debug['index']['content']['table']['title']['3']; ?></th>
						</tr>
					  </thead>
					  <tbody>
						<tr>
							<td class="text-center">
								<?php echo $debug['index']['content']['table']['tr']['images']['1']; ?>
							</td>
							<td class="text-center">
								<?php echo $debug['index']['content']['table']['tr']['images']['2']; ?>
							</td>
							<td class="text-center">
								<?php echo $debug['index']['content']['table']['tr']['images']['3']; ?> 
								 - <small><b>[<?php echo $sites['domain']; ?>]</b><a href="<?php echo $protocols.'://'.$sites['domain'].'/debug/images.json'; ?>">/<em>debug/images.json</em></a></small>
							</td>
						</tr>
					  </tbody>
					</table>
				</div>
			</div>
			
		</div>
		
		<div class="row">
			<div class="col-lg-12">
            <h3>Debug (partner)</h3> 
			
			</div>
			
			<div class="col-lg-12">
				<div class="table-responsive">
					<table class="table table-hover">
					  <thead class="thead-dark">
						<tr>
						  <th scope="col"><?php echo $debug['index']['content']['table']['title']['1']; ?></th>
						  <th scope="col"><?php echo $debug['index']['content']['table']['title']['2']; ?></th>
						  <th scope="col"><?php echo $debug['index']['content']['table']['title']['3']; ?></th>
						</tr>
					  </thead>
					  <tbody>
						<tr>
							<td class="text-center">
								<?php echo $debug['index']['content']['table']['tr']['partner']['1']; ?>
							</td>
							<td class="text-center">
								<?php echo $debug['index']['content']['table']['tr']['partner']['2']; ?>
							</td>
							<td class="text-center">
								<?php echo $debug['index']['content']['table']['tr']['partner']['3']; ?> 
								 - <small><b>[<?php echo $sites['domain']; ?>]</b><a href="<?php echo $protocols.'://'.$sites['domain'].'/debug/partner.json'; ?>">/<em>debug/partner.json</em></a></small>
							</td>
						</tr>
					  </tbody>
					</table>
				</div>
			</div>
			
		</div>
		
		<div class="row">
			<div class="col-lg-12">
            <h3>Debug (sponsor)</h3> 
			
			</div>
			
			<div class="col-lg-12">
				<div class="table-responsive">
					<table class="table table-hover">
					  <thead class="thead-dark">
						<tr>
						  <th scope="col"><?php echo $debug['index']['content']['table']['title']['1']; ?></th>
						  <th scope="col"><?php echo $debug['index']['content']['table']['title']['2']; ?></th>
						  <th scope="col"><?php echo $debug['index']['content']['table']['title']['3']; ?></th>
						</tr>
					  </thead>
					  <tbody>
						<tr>
							<td class="text-center">
								<?php echo $debug['index']['content']['table']['tr']['sponsor']['1']; ?>
							</td>
							<td class="text-center">
								<?php echo $debug['index']['content']['table']['tr']['sponsor']['2']; ?>
							</td>
							<td class="text-center">
								<?php echo $debug['index']['content']['table']['tr']['sponsor']['3']; ?> 
								 - <small><b>[<?php echo $sites['domain']; ?>]</b><a href="<?php echo $protocols.'://'.$sites['domain'].'/debug/sponsor.json'; ?>">/<em>debug/sponsor.json</em></a></small>
							</td>
						</tr>
					  </tbody>
					</table>
				</div>
			</div>
			
		</div>
		
		<div class="row">
			<div class="col-lg-12">
            <h3>Debug (Credits)</h3> 
			
			</div>
			
			<div class="col-lg-12">
				<div class="table-responsive">
					<table class="table table-hover">
					  <thead class="thead-dark">
						<tr>
						  <th scope="col"><?php echo $debug['index']['content']['table']['title']['1']; ?></th>
						  <th scope="col"><?php echo $debug['index']['content']['table']['title']['2']; ?></th>
						  <th scope="col"><?php echo $debug['index']['content']['table']['title']['3']; ?></th>
						</tr>
					  </thead>
					  <tbody>
						<tr>
							<td class="text-center">
								<?php echo $debug['index']['content']['table']['tr']['credits']['1']; ?>
							</td>
							<td class="text-center">
								<?php echo $debug['index']['content']['table']['tr']['credits']['2']; ?>
							</td>
							<td class="text-center">
								<?php echo $debug['index']['content']['table']['tr']['credits']['3']; ?> 
								 - <small><b>[<?php echo $sites['domain']; ?>]</b><a href="<?php echo $protocols.'://'.$sites['domain'].'/debug/credits.json'; ?>">/<em>debug/credits.json</em></a></small>
							</td>
						</tr>
					  </tbody>
					</table>
				</div>
			</div>
			
		</div>
      </div>
    </section>
