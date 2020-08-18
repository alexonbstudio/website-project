
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3"><?php echo $title; ?>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$general['index']['url']; ?>"><?php echo $general['index']['title']; ?></a>
      </li>
      <li class="breadcrumb-item active"><?php echo $title; ?></li>
    </ol>

    <!-- Image Header -->
    <img class="img-fluid rounded mb-4" src="<?php echo $images['dir'].'/'.$law['pages']['sitemap']['images']; ?>" alt="<?php echo $title; ?>">

    <div class="row">
      <div class="col-lg-12">
           <p>
				<ul>
					<li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$law['pages']['url']['default'];?>"><?php echo $law['pages']['title'];?></a> </li>
					<li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$law['rgpd']['url']['default'];?>"><?php echo $law['rgpd']['title'];?></a> </li>
					<li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$law['policy-privacy']['url']['default'];?>"><?php echo $law['policy-privacy']['title'];?></a> </li>
					<li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$law['legal']['url']['default'];?>"><?php echo $law['legal']['title'];?></a> </li>
					<li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$law['dmca']['url']['default'];?>"><?php echo $law['dmca']['title'];?></a> </li>
					<li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$law['cgv']['url']['default'];?>"><?php echo $law['cgv']['title'];?></a> </li>
					<li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$law['cgu']['url']['default'];?>"><?php echo $law['cgu']['title'];?></a> </li>
					<li><a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$law['cookies']['url']['default'];?>"><?php echo $law['cookies']['title'];?></a> </li>
					
				</ul>
		   </p>
      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
