<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="Pharmacy Students" content="Pharmacy Classes">
    <title>PharmaBuddy 25</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../exams.css" />
  </head>
  <body>
    <div class="background-imageZ">
      <h3 class="background-imageB" style="color:white; text-decoration: underline; position: absolute; top:15px; margin:0px 10px 10px 15px; padding:4px 5px 8px 8px; border:3px solid black; height:50px; width:250px;">MICROBIOLOGIE:</h3>
      <div style="position:absolute; top:65px; left:15px;">
        <?php

        ?>

        <form method="POST" enctype="multipart/form-data" action="upload.php">
            <input style="font-size:12px;" type="file" name="file">
            <input style="font-size: 12px;" type="submit" value="Upload">
        </form>

      <ol style="font-size:12px; height:40%; overflow:hidden; overflow-y:scroll;">
        <?php
        $files = scandir("uploads");

        for ($a = 2; $a < count($files); $a++) {
          ?>

            <li><a download="<?php echo $files[$a] ?>" href="uploads/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a></li>

          <?php
       } ?>
      </ol>
     </div>
    </div>


  </body>
