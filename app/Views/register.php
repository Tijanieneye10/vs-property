<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container col-lg-4" style="padding-top:10px ">
    <?php if(session()->error) : ?>
        <?= session()->error; ?>
    <?php endif; ?>
    <form method="post" action="<?= base_url('registration/reg') ?>">
<div class="form-group">
    <input type="text" class="form-control"  name="email" placeholder="Enter Email">
</div>

<div class="form-group">
    <input type="password" class="form-control"  name="pass" placeholder="Enter Pass">
</div>

<div class="form-group">
    <input type="password" class="form-control"  name="cpass" placeholder="Repeat Pass">
</div>

<div class="form-group">
    <input type="submit" class="form-control btn btn-info"  name="submit" value="Register">
</div>
</form>

    </div>


</body>
</html>