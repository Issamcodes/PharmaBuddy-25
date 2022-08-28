<html>
  <head>
    <meta charset="utf-8">
    <meta name="Pharmacy Students" content="Pharmacy Classes">
    <title>PharmaBuddy 25</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="books.css" />

  </head>
  <body>
   <nav class="navbar navbar-expand-lg bg-light">
    <div class="background-image" style="position:absolute; top:0px;">
     <div class="container-fluid">
       <a class="navbar-brand" href="#">PharmaBuddy 25</a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
         <div class="navbar-nav">
           <a class="nav-link" href="../Home.php">Home</a>
           <a class="nav-link" href="../courses/courses.php">courses</a>
           <a class="nav-link" href="../exams/exams.php">Exams</a>
           <a class="nav-link active" aria-current="page" href="books.php">Books</a>
           <a class="nav-link" href="../extra/extra.php">Extra</a>
         </div>
        </div>
      </div>
    <div style="position:absolute; top:115px; left:15px;">
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
    <h2 class="background-image0" style="color:white; font-family: serif;; text-decoration: underline; position:absolute; top:25px; margin:45px 10px 10px 15px;padding:0px 5px 5px 5px; border:3px solid black; height:45px; width:200px;">Books:</h2>
   </div>
 </div>
</nav>




  </body>

  </html>
