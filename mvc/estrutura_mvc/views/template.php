<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Meu Site</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css" />
    
</head>
<body>
    <h1>Este é o topo</h1>
    <a href="<?= BASE_URL;?>">Home</a>
    <a href="<?= BASE_URL; ?>galeria">Galería</a>
    <hr>
    <?php $this->loadViewInTemplate($viewName,$viewData); ?>
    <script src="assets/js/script.js"></script>
</body>
</html>