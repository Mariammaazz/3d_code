<?php
    function loadImage()
    {
        $all_files = glob("../assets/images/*.*");
        $path;
        $allowed;
        for ($i=0; $i<count($all_files); $i++)
        {
            $image_name = $all_files[$i];
            if(filesize($image_name)<100000){
                $supported_format = array('gif','jpg','jpeg','png');
                $ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
                    $allowed="Yes";
                }
                else{
                    $allowed="No";
                }
        }
        return $allowed;
    }
?>