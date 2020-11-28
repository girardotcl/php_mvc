<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= SCRIPTS.'css'.DIRECTORY_SEPARATOR.'main.css' ?>">
    <title><?= APP_NAME ?></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/cours_php_poo_nord_coders/"><?= APP_NAME ?></a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/cours_php_poo_nord_coders/">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/cours_php_poo_nord_coders/posts">Articles</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <?= $content ?> 
    </div>
</body>
</html>