<?= view('templates/header') ?>

        <h5 class="mb-4"><div class="alert alert-success" role="alert">
          <strong>GBICTS ACADEMY PORTAL</strong>
        </div></h5>
       <div class="card">
         <div class="card-header">
          <h4><strong>REGISTER CERTIFICATE</strong></h4> 
         </div>
         <div class="card-body">
                    <div id="loadData">

                    </div>
         </div>
       </div>
<script>
    $(document).ready(function(){
       
        function loadcarts()
                {
                    $.get('<?php echo base_url("test/viewsession"); ?>', function(data) {
                        $('#loadData').html(data);
                    });
                }

                setInterval(function(){
                    loadcarts();
                }, 1000);

    });
</script>
      
    <?= view('templates/footer') ?>