<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Blogging on writing, with a focus on Irish writing.">
    <meta name="author" content="Brian Collins">
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/b53f515300.js"></script>
    <!-- Custom styles for this template -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
</head>

<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-1185274-19', 'auto');
  ga('send', 'pageview');

</script>

    <!--<div class="blog-masthead">
        <div class="container">
            <div class="blog-masthead">
                <div class="container">
                    <nav class="blog-nav"> <a class="blog-nav-item active" href="#">Home</a>
                        <?php wp_list_pages( '&title_li='); ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>-->
    <div class="container">
        <div class="blog-header">
            <h1 class="blog-title"><a href="<?php bloginfo('wpurl');?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
            <p class="lead blog-description">
                <?php echo get_bloginfo( 'description' ); ?>
            </p>
        </div>