<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="assets/bootstrap.min.css" />
</head>
<body>
  <div class='container'>
    <h3> PHP AJAX</h3>
    <form>
      Search User: <input type='text' class='form-control' onkeyup="showSuggestions(this.value)">
    </form>
    <p> Suggestions: <span id="output"> </span></p>
  </div>
</body>
<script>
  function showSuggestions(str){
    if (str.length == 0){
      document.getElementById("output").innerHTML = "";
    } else {
      var xhr = new XMLHttpRequest();
      var URL = `suggest.php?q=${str}`;
      xhr.open('GET', URL, true);
      xhr.onload = function(){
        document.getElementById("output").innerHTML = this.responseText;
      }
      xhr.send();
    }
  }
</script>
</html>
