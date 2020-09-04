<?php
include 'validator_helper.php';
$var = (isset($_GET['text']))?$_GET['text']:"";
$val = new Validator();
(isset($_GET['text']))? $val->validate($_GET['validator'],$var):NULL;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="">
    <select name="validator" >
    <option value="boolean">boolean</option>
    <option value="domain">domain</option>
    <option value="email">email</option>
    <option value="ip">ip</option>
    <option value="int">int</option>
    <option value="float">float</option>
    <option value="macAddress">macAddress</option>
    <option value="regexp">regexp</option>
    <option value="url">url</option>
    </select>
    <label for="text">Input to validate</label>
    <input type="text" name="text">
    <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>