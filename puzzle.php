<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8" />
  <title>Simple Javscript Puzzle</title>
  <link rel="stylesheet" href="puzzle.css" type="text/css" media="screen" />
   <script type="text/javascript" src="puzzle.js" defer></script>
</head>
<body>
<?php

function checkDir($dir){
  if(!is_dir($dir)||!is_writeable($dir)){
    return false;
  }
  return true;
}


function tooBig($size){
  global $max;

  if($size>$max){
    return true;
  }
  return false;
}
?>
  <div id="allContent">
    <div id="topContainer">
      <header>
        <h1>Sliding Puzzle</h1>
      </header>
      <div id="sidebar">
        <div id="controls">
          <input type="button" value="Play Again" id="reset">
          <input type="text" readonly value="Best Score" id="best">
          <div id="bestText">Best Score:</div>
        </div>
        <figure>
          <img id="finalImg" src="images/guideImage.jpg" alt="result" />

          <figcaption>Guide Image</figcaption>
        </figure>

        <form action="" method="post" enctype="multipart/form-data" id="uploadImage">
          <table>
            <tr>
              <td><label for="image">Upload image:</label></td>
            </tr>
            <tr>
              <td>
                <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
                <input type="file" name="imageUpload">
                <input type="submit" name="upload" value="Upload">
              </td>
            </tr>
          <tr>
            <td>
              <input id="resetDefault" type="button" value="Reset to default puzzle image" onclick="window.location.assign(document.URL);">
            </td>
          </tr>
        </table>
      </form>
      <?php
      if(!checkDir($dest)){
            echo '<p>ERROR, cannot write to final destination or it does not exist</p>';
      }
      else{
      if(isset($_POST['upload'])){
            echo "<pre>";
            print_r($_FILES);
            echo "</pre>";
      }
      }
            foreach($_FILES as $file){
      
                  if($file['error']){
                  echo 'Error uploading', $file['name'], '<br>';
                  }
                  else if(tooBig($file['size'], $max)){
                  echo 'Error uploading, file ', $file['name'], ' is too large<br>';
                  
                  
                  }
            }
                ?>
    </div>
    <main id="gameboard">
      <!-- nothing here yet. content will be -->
      <!-- added by JavaScript -->
    </main>
  </div>
  </div>
</body>
</html>
