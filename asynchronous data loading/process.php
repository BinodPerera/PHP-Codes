<!DOCTYPE html>
<html>
<head>
    <title>API Example</title>
</head>
<body>
    <h1>API Example</h1>
    <button onclick="fetchData()">Fetch Data</button>
    <div id="output"></div>

    <script>
        function fetchData() {
            fetch('api.php')
                .then(response => response.json())
                .then(data => {
                    // Process the data
                    console.log(data);
                    document.getElementById('output').innerHTML = JSON.stringify(data, null, 2);
                })
                .catch(error => console.error('Error:', error));
        }
    </script>
</body>
</html>

