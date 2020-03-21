<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Gbicts Verify certificate</title>
  </head>
  <body class="mt-5">
      <div class="container">
      <div class="jumbotron">
        <div class="row">
          <div class="col-md-4">
            
          </div>
          <div class="col-md-4">
              
    <div class="card">
        <div class="card-body">
        <div class="rounded mx-auto d-block">
              <img class="mx-auto d-block" src="<?=base_url('assets/images/logoit.png') ?>" alt="" width="100px" height="100px">
              </div >
 
  <p class="lead text-center" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif"><strong> Enter the Certificate number to verify the authenticity of this certficate.</strong>   </p>
  <hr class="my-4">
  <?php if(session()->error) : ?>
     <?= session()->error ?>
 <?php endif; ?>
 <form action="<?=base_url('registration/verifycert') ?>" method="post">
     <div class="form-group">
         <input type="text" class="form-control" placeholder="Enter Certificate number" name="name" value="<?=old('name') ?>">
     </div>

     <div class="form-group">
         <input type="submit" class="btn btn-info form-control" value="Check" >
     </div>
 </form>
 
        </div>
    </div>















  
  </div>
  </div>
</div>
      </div>
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>