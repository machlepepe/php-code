<?php require __DIR__ . '/app/config.php'; ?>
<?php require __DIR__ . '/app/functions.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo title ?></title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
        <div class="app">
            <?php view('layouts/header.php',['title' => 'My Portfolio', 'heading' => 'Welcome to my portfolio']);?>

            <div class="main">
                Contact page contents goes here...
            </div>

            <?php include __DIR__ . '/layouts/footer.php'; ?>
        </div>
</body>
</html>