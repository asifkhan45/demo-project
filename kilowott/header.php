<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Demo Project</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/headers/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
<link href="<?php echo get_template_directory_uri();?>/assets/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(function() {
    $('a[href*=\\#]:not([href=\\#])').on('click', function() {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
        if (target.length) {
            $('html,body').animate({
                scrollTop: target.offset().top
            }, 800);
            return false;
        }
    });
});
</script>
    <style>
	body{ background:#eee;}
	  .whitebg{ background: #fff;}
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
		.formbg{ background-image:url("<?php echo get_template_directory_uri();?>/images/formbg.jpg"); height:500px; background-repeat:repeat-x; padding:50px 30px; 
		color:#fff; font-size:16px; line-height:20px; margin-top: 0px; position: relative;}
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="<?php echo get_template_directory_uri();?>/style.css" rel="stylesheet">
  </head>
  <body>

<main>
  <header class="p-3 bg-dark text-white c2">
    <div class="container">
      <div id="top"class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#section1" class="nav-link px-2 text-secondary">Beliggenhet</a></li>
          <li><a href="#section2" class="nav-link px-2 text-white">Om Drøbak</a></li>
          <li><a href="#section3" class="nav-link px-2 text-white">Om Boligene</a></li>
          <li><a href="#section4" class="nav-link px-2 text-white">Løsning</a></li>
        </ul>

        
      </div>
    </div>
  </header>