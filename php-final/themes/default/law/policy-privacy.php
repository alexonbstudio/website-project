
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
    <img class="img-fluid rounded mb-4" src="<?php echo $images['dir'].'/'.$law['policy-privacy']['sitemap']['images']; ?>" alt="<?php echo $title; ?>">

    <div class="row">
      <div class="col-lg-12">
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
