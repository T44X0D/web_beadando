<!doctype html>
<html>
    <head>
   
     <!-- CSS -->
    <link href='/oldal/photobox/photobox.css' rel='stylesheet' type='text/css'>
       <link href='/oldal/galeria.style.css' rel='stylesheet' type='text/css'> 
        
      

        <!-- Script -->
        <script src='/oldal/jquery-3.3.1.js' type='text/javascript'></script> 
        <script type="text/javascript" src="/oldal/photobox/jquery.photobox.js"></script>
    </head>
    <body>
    <div class='container'>
		<?php
        if(isset($_POST['upload'])){

            // Getting file name
            $filename = $_FILES['imagefiles']['name'];
         
            // Valid extension
            $valid_ext = array('png','jpeg','jpg');

            // Location
            $location = "img/gal/".$filename;
            $thumbnail_location = "img/gal/".$filename;

            // file extension
            $file_extension = pathinfo($location, PATHINFO_EXTENSION);
            $file_extension = strtolower($file_extension);

            // Check extension
            if(in_array($file_extension,$valid_ext)){  
                
                // Upload file
                if(move_uploaded_file($_FILES['imagefiles']['tmp_name'],$location)){

                    // Compress Image
                    compressImage($_FILES['imagefiles']['type'],$location,$thumbnail_location,60);

              		echo "Sikeres képfeltöltés";
                }

            }

        }

        // Compress image
        function compressImage($type,$source, $destination, $quality) {

            $info = getimagesize($source);

            if ($type == 'img/gal/jpeg') 
                $image = imagecreatefromjpeg($source);

            elseif ($type == 'img/gal/gif') 
                $image = imagecreatefromgif($source);

            elseif ($type == 'img/gal/png') 
                $image = imagecreatefrompng($source);

            imagejpeg($image, $destination, $quality);

        }

        ?>

        <!-- Upload form -->
        <form method='post' action='' enctype='multipart/form-data'>
            <input type='file' name='imagefiles' >
            <input type='submit' value='Feltöltés' name='upload'>    
        </form>
		
		<!--Megjelenítő-->
       
            <div class="gallery">
              
            <?php 
            // Image extensions
            $image_extensions = array("png","jpg","jpeg","gif");

            // Target directory
            $dir = 'img/gal/';
            if (is_dir($dir)){
                
                if ($dh = opendir($dir)){
                    $count = 1;

                    // Read files
                    while (($file = readdir($dh)) !== false){

                        if($file != '' && $file != '.' && $file != '..'){
                            
                            // Thumbnail image path
                            $thumbnail_path = "img/gal/".$file;

                            // Image path
                            $image_path = "img/gal/".$file;
                            
                            $thumbnail_ext = pathinfo($thumbnail_path, PATHINFO_EXTENSION);
                            $image_ext = pathinfo($image_path, PATHINFO_EXTENSION);

                            // Check its not folder and it is image file
                            if(!is_dir($image_path) && 
                                in_array($thumbnail_ext,$image_extensions) && 
                                in_array($image_ext,$image_extensions)){
                                ?>

                                <!-- Image -->
                                <a href="<?= $image_path; ?>">
                                    <img src="<?= $thumbnail_path; ?>">
                                </a>
                                
                                <?php

                                // Break
                                if( $count%4 == 0){
                                ?>
                                    <div class="clear"></div>
                                <?php    
                                }
                                $count++;
                            }
                        }
                            
                    }
                    closedir($dh);
                }
            }
            ?>
            </div>
        </div>
        
        <!-- Script -->
        <script type='text/javascript'>
        $(document).ready(function(){
             $('.gallery').photobox('a',{ time:0 });
            
        });
        </script>
</div>
    </body>
    <br> <br> <br> <br> <br> <br> <br> <br>
    <footer>
    <div class="footer">
 
    </div>
    </footer>
</html>

