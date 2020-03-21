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
   <table class="table table-bordered">
     <thead>
       <tr>
        
         <th scope="col">Title</th>
         <th scope="col">Body</th>
         <th scope="col">Edit</th>
         <th scope="col">Delete</th>
      
       </tr>
     </thead>
     <tbody>


    <?php  foreach ($fetch as $row) : ?>

       <tr>
         <td><?=$row->title; ?> </td>
         <td><?=$row->body; ?></td>
         <td><a href="<?=base_url('test/editPost/'.$row->id) ?>" class="btn btn-info">Edit</a></td>
         <td><a href="<?=base_url('test/deletePost/'.$row->id) ?>" class="btn btn-danger">Delete</a></td>
       </tr>
    <?php endforeach; ?>

     </tbody>
   </table>

    </div>


</body>
</html>