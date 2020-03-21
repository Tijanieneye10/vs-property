


<!-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong><</strong> 
</div> -->




<script>
<?php foreach($errors as $error) :?>
toastr.options.closeButton = true;
toastr.options.positionClass = 'toast-top-right';
toastr['error']('<?=$error ?>');
<?php endforeach; ?>

</script>