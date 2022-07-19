<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File size</title>
</head>
<body>
    <form>
        <h1>File/direction size</h1>
        <fieldset>
            <h3><label>File/direction name:
                <input type="text" name="filename" id="filename" placeholder="Enter file/direction name">
            </label></h3>
            <input type="submit" name="send" id="send" value="SEND">
        </fieldset>
    </form>

    <?php
        if(!empty($_GET["filename"])){
            $filename = $_GET["filename"];
            if(!file_exists("./tmp")){
                mkdir("./tmp");
            }
            $filepath = "./tmp/$filename";
            if(preg_match("/^[[:alnum:]\/ .]*$/",$filename)){
                if(!file_exists("$filepath")) {
                    echo "<h2>This file does not exist!</h2><br>";
                    exit();
                }
                if(is_dir($filepath)){
                    $dir = opendir($filepath);
                    $size_byte = 0;
                    while(($file = readdir($dir)) !== false){
                        if($file != "." || $file != ".."){
                            $size_byte += filesize("$filepath/$file");
                        }
                    }
                    closedir($dir);
                } else {
                    $size_byte = filesize($filepath);
                }
                $size_megabyte = $size_byte / pow(1024,2);
                $size_gigabyte = $size_byte / pow(1024,3);
                echo "<h2>$filename size is:<br></h2>";
                printf("<h3>%d B<br>
                          %0.2f MB<br>
                          %0.2f GB</h3>",
                    $size_byte, $size_megabyte, $size_gigabyte) ;
            } else {
                echo "<h2>Incorrect input!</h2>";
            }
        }
    ?>
</body>