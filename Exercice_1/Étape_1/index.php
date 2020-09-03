<?php
$list = ['option1', 'option2', 'option3', 'option4', 'option5'];
class Form {        //create Form class
    function Create($method,$action){           //to open form tag
        echo "<form method='$method' action='$action'>";
    }
    function Text($nameId,$label,$ph){          //for text input field with label
        echo "<label for='$nameId'>$label</label>";
        echo "<input type='text' id='$nameId' name='$nameId' placeholder='$ph'>";
    }
    function Select($nameId,$label,array $options){         //for select (dropdown) and label
        echo "<label for='$nameId'>$label</label>";         // with multiple option
        echo "<select id='$nameId' name='$nameId'>";
        foreach($options as $key=>$option){
            echo "<option value='$key'>$option</option>";
        }
        echo"</select>";
    }
    function Textarea($nameId,$label,$ph, $rows, $cols){        //textarea with label and .
        echo "<label for='$nameId'>$label</label><br />";       //control of columns and rows
        echo "<textarea id='$nameId' name='$nameId' rows='$rows' cols='$cols' placeholder='$ph'>";
        echo "</textarea>";
    }
    function Radio($nameId,$label,array $options){          //radio selector and label with
                                                            // multiple options
        echo "<label for='$nameId'>$label</label><br />";
        foreach($options as $key=>$option){
            
            echo "<input type='radio' id='$nameId' name='$nameId' value='$key' >$option</input><br />";
        }
    }
    function Checkbox($nameId,$label,$option){              //checkbox with label
        
        echo "<label for='$nameId'>$label</label><br />";
        echo "<input type='checkbox' id='$nameId' name='$nameId' value='1' >$option</input><br />";
        
    }

    function Button($name,$value,$title){                   //button with label
        echo "<button type='submit' name='$name' value='$value'>$title</button>";
    }
    function End(){                                       // close the form tag
        echo "</form>";
    }
}


echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>';

$test = new Form();
echo $test->Create('get','');
echo $test->Text('text1', 'Any text : ', 'fill me.') . "<br />";
echo $test->Select('select1','Select label', $list) . "<br />";
echo $test->Textarea('textarea', 'Message', 'Enter your message.', '10', '40'). "<br />";
echo $test->Radio('rideo1', 'Choase option', $list) . "<br />";
echo $test->Checkbox('rideo1', 'Choase option', 'Test') . "<br />";
echo $test->Button('Submit','add', 'ADD');
echo $test->Button('reset','reset', 'RESET');
echo $test->End();

echo '
</body>
</html>';
?>