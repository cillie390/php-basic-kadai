<!DOCTYPE html>
<html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
         <?php
          $variable_name = ['id' =>'1','名前'=>'侍太郎','年齢'=>30];
          foreach ($variable_name as  $rabel =>$value){
            echo  "{$rabel}: {$value}<br>";}
          
        ?>
      </p>
  </body>
</html>