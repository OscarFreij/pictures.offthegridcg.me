<?php 

class Functions
{
    private $container;

    public function __construct(Container $container)
    {
        $this->container = $container;    
    }

    public function GetAlbums()
    {
        # Open album directory and get handle
        if ($handle = opendir('albums')) {
            # Loop thrue all entries in the directory handle untill it reads boolean FALSE
            while (false !== ($entry = readdir($handle))) {
                # Check to not display root and return links
                if ($entry != "." && $entry != "..") {
                    # Display entry link
                    include "../private_html/templates/albumCell.php";
                }
            }
            closedir($handle);
        }
    }

    public function GetAlbumContent($albumName)
    {
        # Set album directory path
        $targetDirectory = 'albums/'.$albumName.'/';
        # Open album directory and get handle
        if ($handle = opendir($targetDirectory)) {
            # Loop thrue all entries in the directory handle untill it reads boolean FALSE
            while (false !== ($entry = readdir($handle))) {
                # Check to not display root and return links
                if ($entry != "." && $entry != "..") {
                    # Display entry link
                    include "../private_html/templates/imageCell.php";
                }
            }
            closedir($handle);
        }
    }

    public function GetImageHeaders($albumName, $fileName)
    {
        $targetFilePath = 'albums/'.$albumName.'/'.$fileName;
        echo $targetFilePath.":<br />\n";
        $exif = exif_read_data($targetFilePath, 'IFD0');
        echo $exif===false ? "No header data found.<br />\n" : "Image contains headers<br />\n";
        
        $exif = exif_read_data($targetFilePath, 0, true);
        foreach ($exif as $key => $section) {
            foreach ($section as $name => $val) {
                echo "$key.$name: $val<br />\n";
            }
        }
    }
}

?>