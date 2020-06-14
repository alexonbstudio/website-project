
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3"><?php echo $law['pages']['name']; ?>
      <small><?php echo $title; ?></small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$general['index']['url']; ?>"><?php echo $general['index']['name']; ?></a>
      </li>
      <li class="breadcrumb-item">
        <a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$law['pages']['url']; ?>"><?php echo $law['pages']['name']; ?></a>
      </li>
      <li class="breadcrumb-item active"><?php echo $title; ?></li>
    </ol>

    <!-- Image Header -->
    <img class="img-fluid rounded mb-4" src="http://placehold.it/1200x300" alt="">

    <div class="row">
      <div class="col-lg-12">
		   <ul>
			<!-- index -->
				<li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$general['index']['url']['default'];?>"><?php echo $general['index']['title'];?></a></li>
			<!-- email -->
				<li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$email['index']['url']['default'];?>"><?php echo $email['index']['title'];?></a></li>
			<!-- law -->
				<li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$law['pages']['url']['default'];?>"><?php echo $law['pages']['title'];?></a>    
					<ul>
						<li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$law['rgpd']['url']['default'];?>"><?php echo $law['rgpd']['title'];?></a> </li>
						<li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$law['policy-privacy']['url']['default'];?>"><?php echo $law['policy-privacy']['title'];?></a> </li>
						<li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$law['legal']['url']['default'];?>"><?php echo $law['legal']['title'];?></a> </li>
						<li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$law['dmca']['url']['default'];?>"><?php echo $law['dmca']['title'];?></a> </li>
						<li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$law['cgv']['url']['default'];?>"><?php echo $law['cgv']['title'];?></a> </li>
						<li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$law['cgu']['url']['default'];?>"><?php echo $law['cgu']['title'];?></a> </li>
					</ul>
				</li>
			<!-- partner -->
				<li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$partner['index']['url']['default'];?>"><?php echo $partner['index']['title'];?></a></li>
			<!-- sponsor -->
				<li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$sponsor['index']['url']['default'];?>"><?php echo $sponsor['index']['title'];?></a></li>
  
			</ul>
		   </p>
      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
