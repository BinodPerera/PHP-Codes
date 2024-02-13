<ul>
    <li><a href="?location=home">Home</a></li>
    <li><a href="?location=about">About</a></li>
</ul>

<?php 
    if(isset($_REQUEST["location"])){
        echo "<br>".$_REQUEST["location"];
    }
?>