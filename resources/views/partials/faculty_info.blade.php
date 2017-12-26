<div class="col-md-3">
  <div class="panel panel-default">
    <div class="panel-heading cc" id="cc"> <h4 style="text-align:center">faculty Information</h2></div>
    <div class="panel-body">
      <i class="fa fa-user-circle fa-3x" aria-hidden="true" style="padding:3px;"></i> Total faculty :<?php
      $query="select * from faculty";
      $run=mysql_query($query);
      $rows=mysql_num_rows($run);
      echo $rows;
      
      ?><br><br>
      <i class="fa fa-book fa-3x" aria-hidden="true" style="padding:3px;"></i> Issue Book to faculty : <?php
      $query="select * from faculty_borrowing_info";
      $run=mysql_query($query);
      $rows=mysql_num_rows($run);
      echo $rows;
      
      ?>
      
    </div>
  </div>
</div>

</div>