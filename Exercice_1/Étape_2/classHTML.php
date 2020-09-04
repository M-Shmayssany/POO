<?php
// class to create HTML elements

class HTML {
    private $htmlOpenTags = "<!DOCTYPE html>";
    private $meta;
    private $htmlTitle;
    private $css;
    private $extraCss = array();
    
    function __construct($title = NULL,$cssHref = NULL) {
        $this->meta();
        $this->css = isset($cssHref) ? "<link rel='stylesheet' href='$cssHref'>" :"";
        $this->htmlTitle = isset($title) ? "<title>$title</title>" : "<title>Document</title>";
    }
    function htmlOpen(){
        echo $this->htmlOpenTags;
        echo $this->htmlTag(true);
        echo $this->head(true);
        echo $this->meta;
        echo $this->css;
        if(count($this->extraCss) > 0){
            foreach($this->extraCss as $css){
                echo "<link rel='stylesheet' href='$css'>";
            }
        }
        echo $this->htmlTitle;
        echo $this->head(false);
        echo $this->body(true);
    }
    function css($cssHref){
        array_push($this->extraCss, $cssHref);
    }
    private function head($state){
        echo ($state == true) ? "<head>":"</head>";
    }
    private function meta(){
        $this->meta = '<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">';
    
    }
    function htmlTag($state,$lang = 'en'){
        return ($state == true) ? "<html lang='$lang'>" : "</html>";
    }
    function body($state){
        return ($state == true) ? "<body>" : "</body>";
    }
    function script($src){
        echo "<script type='text/javascript' src='$src' >";
    }
    function link($href,$title){
        echo "<a href='$href'>$title</a>";
    }
    function img($src,$alt){
        echo "<img src='$src' alt='$alt'>";
    }
}

?>
