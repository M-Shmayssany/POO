<?php
$list = ['option1', 'option2', 'option3', 'option4', 'option5'];
class Form {        //create Form class
    private $brack = "<br />";
    private function Label($nameId,$label,$br = NULL){
        echo "<label for='$nameId'>$label</label>"; 
        echo ($br == 1)? $this->brack:"";
    }
    function formTag($tagOpen,$method = NULL,$action = NULL){           //to open form tag 
        echo ($tagOpen == true)? "<form method='$method' action='$action'>":"</form>";
    }
    function Text($nameId,$label,$ph = NULL){          //for text input field with label
        $this->Label($nameId,$label);
        echo "<input type='text' id='$nameId' name='$nameId' placeholder='$ph'>";
    }
    function Select($nameId,$label,array $options){         //for select (dropdown) and label
        $this->Label($nameId,$label);                      // with multiple option
        echo "<select id='$nameId' name='$nameId'>";
        foreach($options as $key=>$option){
            echo "<option value='$key'>$option</option>";
        }
        echo"</select>";
    }
    function Textarea($nameId,$label,$ph = NULL, $rows, $cols){        //textarea with label and .
        $this->Label($nameId,$label,1);                          //control of columns and rows
        echo "<textarea id='$nameId' name='$nameId' rows='$rows' cols='$cols' placeholder='$ph'>";
        echo "</textarea>";
    }
    function Radio($nameId,$label,array $options){          //radio selector and label with
                                                            // multiple options
        $this->Label($nameId,$label,1);
        foreach($options as $key=>$option){
            echo "<input type='radio' id='$nameId' name='$nameId' value='$key' >$option</input><br />";
        }
    }
    function Checkbox($nameId,$label,array $options){              //checkbox with label
        $this->Label($nameId,$label,1);
        foreach($options as $key=>$option){
            echo "<input type='checkbox' id='$nameId' name='$nameId' value='1' >$option</input><br />";
        }
    }
    function Button($name,$value,$title){                   //button with label
        echo "<button type='submit' name='$name' value='$value'>$title</button>";
    }
}


echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO Etape 1</title>
</head>
<body>';

$test = new Form();
echo $test->formTag(true,'get','');
echo $test->Text('text1', 'Any text : ', 'fill me.') . "<br />";
echo $test->Select('select1','Select label', $list) . "<br />";
echo $test->Textarea('textarea', 'Message', 'Enter your message.', '10', '40'). "<br />";
echo $test->Radio('rideo1', 'Choase option', $list) . "<br />";
echo $test->Checkbox('rideo1', 'Choase option', $list) . "<br />";
echo $test->Button('Submit','add', 'ADD');
echo $test->Button('reset','reset', 'RESET');
echo $test->formTag(false);

echo '
</body>
</html>';
?>