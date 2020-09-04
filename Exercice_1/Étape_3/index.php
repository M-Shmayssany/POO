<?php

class Validator{
    private $valType;
    private $boolean = FILTER_VALIDATE_BOOLEAN;
    private $domain = FILTER_VALIDATE_DOMAIN;
    private $email = FILTER_VALIDATE_EMAIL;
    private $ip = FILTER_VALIDATE_IP;
    private $int = FILTER_VALIDATE_INT;
    private $float = FILTER_VALIDATE_FLOAT;
    private $macAddress = FILTER_VALIDATE_MAC;
    private $regexp = FILTER_VALIDATE_REGEXP;
    private $url = FILTER_VALIDATE_URL;

    function validate($type,$data){
        switch($type){
            case 'boolean':
                $switch = $this->boolean;
                break;
            case 'domain':
                $switch = $this->domain;
                break;
            case 'email':
                $switch = $this->email;
                break;
            case 'ip':
                $switch = $this->ip;
                break;
            case 'int':
                $switch = $this->int;
                break;
            case 'float':
                $switch = $this->float;
                break;
            case 'macAddress':
                $switch = $this->macAddress;
                break;
            case 'regexp':
                $switch = $this->regexp;
                break;
            case 'url':
                $switch = $this->url;
                break;
            default:
                echo "Unknown Validator type";
                break;
        }
        if(!filter_var($data,$switch)){
            echo "data provided is not valid";
        }else{
            echo "Thank's for using a valed input";
        }
        
    }
}
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