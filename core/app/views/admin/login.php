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
        <?=HTML::style('assets/admin/css/login.min.css')?>
        <!--[if lt IE 9]>
        <?=HTML::script('assets/admin/js/html5shiv.js')?>
        <?=HTML::script('assets/admin/js/respond.min.js')?>
        <![endif]-->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=asset('assets/site/img/apple-touch-icon-144-precomposed.png')?>">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=asset('assets/site/img/apple-touch-icon-114-precomposed.png')?>">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=asset('assets/site/img/apple-touch-icon-72-precomposed.png')?>">
        <link rel="apple-touch-icon-precomposed" href="<?=asset('assets/site/img/apple-touch-icon-57-precomposed.png')?>">
        <link rel="shortcut icon" href="<?=asset('assets/site/img/favicon.png')?>">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4">
                    <div class="content text-center <?php if ($errors->has()): echo 'shake'; else: echo 'down'; endif; ?>">
                        <p class="title">ADMIN</p>
                        <form method="POST" action="<?=route('admin.login.auth')?>">
                            <div class="form-group">
                                <label class="sr-only" for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-default">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>

