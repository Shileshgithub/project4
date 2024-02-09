<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
            <title></title>
        </head>
    <body>

         <div class="container">
            <table class="table table-bordered">
                 <tr class="bg-info ">
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Gender</th>
                    <th>City</th>
                    <th>Hobby</th>
                    <th colspan="2">Action</th>
                </tr>
               <?php if(!empty($arr)){
                foreach ($arr as $key => $value){
               ?>
                <tr>
                    <td><?=++$key?></td>
                    <td><?=$value->name?></td>
                    <td><?=$value->gender?></td>
                    <td><?=$value->city?></td>
                    <td><?=$value->hobby?></td>
                    <td><a href="all_data<?=$value->id?> "class="btn btn-outline-primary">Update</a></td>
                    
                </tr>
         <?php  } }else{?>
                <tr>
                    <td></td>
                </tr>
                <?php } ?>
            </table>
  
         </div>

    </body>
</html>