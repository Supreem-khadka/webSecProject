<?php
    require 'vendor/autoload.php';
    require __DIR__ . '/vendor/autoload.php';

    use Spatie\Browsershot\Browsershot;

    if(isset($_POST['screenshot'])){
        $url = $_POST["url"];
         
        try{
            //generate the screenshot
            Browsershot::url($url)
            ->setScreenshotType('png')
            ->setDelay(1000)
            ->fullpage()
            ->save('screenshot.png');

            echo "<h3>Screenshot sucessfully generated!,</h3>";
            echo "<img src='screenshot.png' alt='screenshot of $url' style='max-width:100%;'>";
            }
            catch (Exception $e) {
                echo "Error: ".$e->getMessage();
            }
        }
?>