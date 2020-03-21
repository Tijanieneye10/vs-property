<?php if(!empty($fetch)) : ?>
<?php
   foreach ($query->getResult() as $row)
   {
           echo $row->title;
   }
?>
<?php endif; ?>




