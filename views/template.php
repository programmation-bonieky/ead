<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css" />
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
    <title>EAD</title>
</head>
<body>
    <h1>Este é o Topo</h1>
    <a href="<?php echo BASE_URL;?>home">HOME</a>
    

    <hr/>

    ...
    <?php $this->loadViewInTemplate($viewName, $viewData); ?>
</body>
</html>