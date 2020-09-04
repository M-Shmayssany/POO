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
?>