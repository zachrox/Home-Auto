<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="Style.css">
<meta charset="UTF-8">
    <head>
        <title>Home Auto</title>
    </Head>
    <body>
        <div id="nav">
            <ul>
                <li><a href="index.php?content=Home">Home</a></li>
                <li><a href="index.php?content=FrontRoom">Front Room</a></li>
                <li><a href="index.php?content=BackGarden">Back Garden</a></li>
                <li><a href="#">Settings</a></li>
            </ul>
        </div>
        <div id="content">
            <?php 
                $content = '';
                if (isset($_GET['content'])):
                    $content = $_GET['content'];
                    $content = filter_var($content, FILTER_SANITIZE_STRING);
                endif;
                    $content = (empty($content)) ? "Home" : $content;
                include 'content/' . $content . '.php';
            ?>    
        </div>
    </body>
</html>
