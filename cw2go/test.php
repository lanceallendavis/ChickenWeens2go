<?php
if(($_SERVER['REQUEST_METHOD'] == 'POST')){
var_dump($_POST);
}
?>
<html>
<head>
</head>
<body>
<form action='test.php' method='post'>
  <select name='char'>
    <option value='vergil'>Vergil</option>
    <option value='nero'>Nero</option>
    <option value='dante'>Dante</option>
  </select>
    <button type='submit'>Submit</button>
</form>
</body>
