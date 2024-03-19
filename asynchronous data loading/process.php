<script>
    var javascriptValue = "Your JavaScript value";
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "process.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText); // Response from PHP
        }
    };
    xhr.send("javascriptValue=" + encodeURIComponent(javascriptValue));
</script>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["javascriptValue"])) {
        $phpVariable = "Your existing PHP variable content";
        $javascriptValue = $_POST["javascriptValue"];
        $phpVariable .= $javascriptValue; // Append JavaScript value to PHP variable
        echo $phpVariable; // Return updated content to JavaScript
    } else {
        echo "No value received in PHP.";
    }
} else {
    echo "Invalid request method.";
}
?>
