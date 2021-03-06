<?php require("simphp.php"); ?>
<!DOCTYPE html>
<html lang="it" ng-app="prog-int">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta description="Studio di progettazione interni per nuove composizioni degli spazi, studio dell'arredamento degli stessi. Contattaci e gratuitamente un professionista abilitato risponderà alle tue domande, dandoti idee e consigli, cercando di chiarire i tuoi dubbi.">
    <meta author="Francesco Borzì">
    <title>Progettazione Interni</title>

    <script src="https://apis.google.com/js/platform.js" async defer>
      {lang: 'it'}
    </script>
    <script src="js/lib/angular.min.js"></script>
    <script src="js/lib/angular-ui-router.min.js"></script>
    <script src="js/lib/ui-bootstrap-tpls-0.12.0.min.js"></script>
    <script src="js/lib/angular-touch.min.js"></script>
    <script src="js/lib/angular-carousel.min.js"></script>
    <script src="js/prog-int/main.js"></script>
    <script src="js/prog-int/config.js"></script>
    <script src="js/prog-int/progetti.js"></script>

    <!-- Slider -->
    <link rel="stylesheet" href="css/visuallightbox/vlightbox1.css" type="text/css" />
    <link rel="stylesheet" href="css/visuallightbox/visuallightbox.css" type="text/css" media="screen" />
    <script src="js/lib/jquery.min.js" type="text/javascript"></script>
    <!-- End Slider -->

    <!-- Home slider -->
    <link href="css/angular-carousel.css" rel="stylesheet" type="text/css">
    <!-- End Home slider -->

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap-social.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
  </head>
  <body>
    <div class="container">
      <div ng-include="'partials/navbar.html'"></div>
      <div class="row">
        <div class="col-sm-6">
          <img class="img-responsive" src="img/progettazione-interni-logo.png">
        </div>
        <div class="col-sm-6 text-right social" style="padding-top: 10px;">
          <a title="Facebook" href="https://www.facebook.com/StudioProgettazioneInterni" class="btn btn-social-icon btn-lg btn-facebook" target="_blank">
            <i class="fa fa-facebook"></i>
          </a>
          <a title="Google Plus" href="https://plus.google.com/111892307357642321308/" class="btn btn-social-icon btn-lg btn-google-plus" target="_blank">
            <i class="fa fa-google-plus"></i>
          </a>
          <a title="YouTube" href="https://www.youtube.com/watch?v=etUno0T-ot4" class="btn btn-social-icon btn-lg btn-pinterest" target="_blank">
            <i class="fa fa-youtube"></i>
          </a>
          <a title="Wordpress" href="./blog" class="btn btn-social-icon btn-lg btn-github" target="_blank">
            <i class="fa fa-wordpress"></i>
          </a>
          <div class="hits"><?php echo $info; ?></div>
        </div>
      </div>
      <div class="row page">
        <div class="col-sm-4 hidden-xs" ng-include="'partials/sidebar.html'"></div>
        <div class="col-sm-8 pagebox">
          <div ui-view autoscroll="true"></div>
          <div style="margin-top: 6px;">
            <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FStudioProgettazioneInterni&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=35&amp;appId=504431039703771" scrolling="no" frameborder="0" style="border:none; overflow:hidden; max-width: 250px; max-height:22px;" allowTransparency="true"></iframe>

            <div class="g-plusone" data-annotation="inline" data-width="300" data-href="http://www.progettazione-interni.com"></div>

            <p class="h5">Scopri la nostra <a class="opzione-gratis-sidebar" href="./#/opzione-gratis"><strong>opzione gratis</strong></a></p>
            <br>
          </div>
        </div>
      </div>

      <div ui-view="home-bottom"></div>
      <div style="margin-top: 10px">
        <script type="text/javascript">
          /* <![CDATA[ */
          document.write('<s'+'cript type="text/javascript" src="http://ad.altervista.org/js.ad/size=728X90/r='+new Date().getTime()+'"><\/s'+'cript>');
          /* ]]> */
        </script>
      </div>
      <div ng-include="'partials/footer.html'"></div>
    </div>
  </body>
</html>
