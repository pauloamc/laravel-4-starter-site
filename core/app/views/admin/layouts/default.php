<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Painel de Administração</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?=HTML::style('assets/admin/css/style.min.css')?>

        <!--[if lt IE 9]>
        <?=HTML::script('assets/admin/js/html5shiv.js')?>
        <?=HTML::script('assets/admin/js/respond.min.js')?>
        <![endif]-->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=asset('assets/site/img/apple-touch-icon-144-precomposed.png')?>">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=asset('assets/site/img/apple-touch-icon-114-precomposed.png')?>">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=asset('assets/site/img/apple-touch-icon-72-precomposed.png')?>">
        <link rel="apple-touch-icon-precomposed" href="<?=asset('assets/site/img/apple-touch-icon-57-precomposed.png')?>">
        <link rel="shortcut icon" href="<?=asset('assets/site/img/favicon.png')?>">
        <?=HTML::script('assets/admin/js/jquery-1.10.2.min.js')?>
    </head>
    <body <?php if (isset($home)):?>class="home"<?php endif;?>>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

<nav id="navbar" class="navbar navbar-blue navbar-fixed-top" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Painel de Administração</a>
  </div>
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav navbar-right">
      <li class="divider-vertical"></li>
      <li class="dropdown">

        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon-white"></i> Administrador<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?=route('admin.dashboard')?>">Gerir administradores</a></li>
          <li class="divider"></li>
          <li><a href="<?=route('admin.logout')?>">Sair</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>

<div id="sidebar" class="nav-collapse hidden-xs hidden-sm">
    <div class="accordion" id="accordion2">
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle accordion-inb accordion-current" href="#">
                    <nav id="submenu">
                        <div class="logo">
                            <a href="<?=route('admin.dashboard')?>"><img src="<?=asset('assets/site/img/logo.png')?>" /></a>
                        </div>
                        <ul class="submenu">
                            <li <?php if (isset($menuActive) && $menuActive == 1): ?> class="active"<?php endif; ?>><a href="<?=route('admin.dashboard')?>">Dashboard</a></li>
                            <li><a href="<?=route('admin.logout')?>">Sair</a></li>
                        </ul>
                    </nav>
                </a>
            </div>
        </div>
    </div>         
</div>


<section id="main">
    <div class="container-fluid">
        <div class="row-fluid">
            <!--[if IE 7]>
            <div class="col-lg-12">
                <div class="alert">Algumas funcionalidades importantes poderão não funcionar na versão do seu browser. Por favor actualize-o.</div>
            </div>
            <![endif]-->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <?php if (isset($content)): echo $content; endif;?>
            </div>
        </div>
  </div>
</section>

        <?=HTML::script('assets/admin/js/modernizr-2.6.2.min.js')?>
        <?=HTML::script('assets/admin/js/bootstrap.min.js')?>
        <?=HTML::script('assets/admin/js/fileupload/jquery.ui.widget.js')?>
        <?=HTML::script('assets/admin/js/fileupload/jquery.iframe-transport.js')?>
        <?=HTML::script('assets/admin/js/fileupload/jquery.fileupload.js')?>
        <?=HTML::script('assets/admin/js/masonry.pkgd.min.js')?>
        <?=HTML::style('assets/admin/js/bootstrap-editable/css/bootstrap-editable.css')?>
        <?=HTML::script('assets/admin/js/bootstrap-editable/js/bootstrap-editable.js')?>
        <?=HTML::script('assets/admin/js/application.min.js')?>
</body>
</html>

