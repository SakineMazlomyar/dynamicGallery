<?php
    return showImages();
    function showImages(){
        $out = "<h1>Image Gallery for this website</h1>";
        $out .= "<ul id='images'>";
        //We select the folder which contains the images
        $folder = "img";

        // We create a new instance of directoryIterator with the name of folder
        $filesInFolder = new DirectoryIterator($folder);

        // We check if it has found the folder/true or false
        //If it is true then loop throw it
        while($filesInFolder->valid()){
            //We take the first element from our directory
            $file = $filesInFolder->current();
            //We take the name of first element
            $filename =$file->getFilename();
            // We save the src of first element in src variable
            $src = "$folder/$filename";

            //Then we decide the mine type py passing first the src file
            $fileInfo = new Finfo(FILEINFO_MIME_TYPE);
            $mimeType = $fileInfo->file($src);

            if($mimeType  === 'image/jpeg'){

                $out .="<li><img src='$src' /> </li>";
            }

            $filesInFolder->next();
        }
        $out .= "</ul>";
        return $out;
    }

   

?>