<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/w3.css">
    <title>Search User</title>
</head>
<body>

<div class="container">
    <h1 class="w3-text-blue">Search Users</h1>
    <form action="">
        <label for="search-user">Search User: </label>
        <input type="text" class="w3-input w3-border w3-round-xxlarge w3-sand w3-animate-input" style="width: 35%"
               name="search-user" id="search-user" onkeyup="showSuggestion(this.value)">
    </form>

    <p>Suggestions: <span id="output" style="font-weight: bold"></span></p>
</div>

<script>
    function showSuggestion(str) {
        if (str.length == 0) {
            document.getElementById('output').innerHTML = '';
        } else {
            // AJAX REQUEST
            let xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('output').innerHTML = this.responseText;
                }
            }

            xmlhttp.open("GET", "suggest.php?q="+str, true);
            xmlhttp.send();
        }
    }
</script>
</body>
</html>