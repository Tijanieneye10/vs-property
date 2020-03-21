<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <?php if(session()->error) : ?>
        <?= session()->error; ?>
    <?php endif; ?>
    <form method="post" action="<?= base_url('test/create') ?>">
    <input type="text" name="title" placeholder="Enter title">
    <input type="text" name="body" placeholder="Enter body">
    <input type="submit" name="yes" class="btn btn-primary"> 
</form>

    </div>


</body>
</html>