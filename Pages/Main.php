<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="Style.css">
        <meta charset="UTF-8">
        <title>Home Auto</title>
    </Head>
    <body>
        <div id="nav">
            <ul>
                <li><a class="active" href="Main.php">Home</a></li>
                <li><a href="BackGarden.php">Back Garden</a></li>
                <li><a href="#">Front Room</a></li>
                <li><a href="#">Settings</a></li>
            </ul>
        </div>

    <div id="widget_box">
        <p>The date is: </p>

        <?php echo gmdate('<p> d/m/Y <p/>'); ?> 

    
    <FORM METHOD=GET ACTION="textarea.php"> <INPUT TYPE=SUBMIT> </FORM>
    </div>
    </FORM>
    </body>
</html>
