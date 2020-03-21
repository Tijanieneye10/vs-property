<table class="table table-striped table-condensed  ">
        <thead class="thead-inverse">
            <tr>
                <th>SN</th>
                <th>FIRSTNAME</th>
                <th>LASTNAME</th>
                <th>CERT NUMBER</th>
                <th>GENDER</th>
                <th>ACTIONS</th>
                
            </tr>
            </thead>
            <tbody>

                <?php if($fetch): ?>
                   <?php $i = 1; ?>
                <?php foreach($fetch as $row): ?>
                <tr>
                <td><?= $i++ ?></td>
                    <td scope="row"><?=$row->firstname; ?></td>
                    <td><?=$row->lastname; ?></td>
                    <td><?=$row->cert_number; ?></td>
                    <td><?=$row->gender; ?></td>
                    <td>
                        <div style="text-align:left;"> 
                       
                             <a href="<?=base_url('test/showsingle/'. $row->id) ?>" class="btn btn-info" data-toggle="tooltip" title="Show"> <i class="fa fa-eye"></i></a>
                             <a href="<?=base_url('test/updateit/'. $row->id) ?>" class="btn btn-primary" data-toggle="tooltip" title="Edit"> <i class="fa fa-edit"></i></a>
                            
                             <form action="<?=base_url('test/deletecert/'. $row->id) ?>" method="post" style="float:left; padding:0 3px;" id="del<?php echo $row->id; ?>">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete?')"  data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></button>
                    </form>
                    
                  
                    </div>
                            <!-- <a href="<?=base_url('test/deletecert/'. $row->id) ?>" onclick="return confirm('Do you want to delete?')" class="btn btn-danger" data-toggle="tooltip" title="Delete"> <i class="fa fa-trash-o"></i></a> -->
                       
                    </td>
                    
                </tr>
                <?php endforeach; ?>
             
                <?php endif; ?>
            </tbody>
    </table>
    <script>
        $(document).ready(function(){

            <?php foreach($fetch as $row): ?>
                $('#del<?php echo $row->id; ?>').on('submit', function(e) {
                 e.preventDefault();

            $.ajax({
                    url: '<?php echo base_url('test/deletecert/'.$row->id) ?>',
                    method: 'POST',
                    contentType: false,
                    processData: false,
                    cache: false,
                    data: new FormData(this),
                    success: function(data){                     
                    }
                });
});

        <?php endforeach; ?>
        });
    </script>