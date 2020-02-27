<?php
// form one function
// Multiple check box checked function
function is_Checked($inputName, $value){ // input name and value dynamic function
    if(isset($_REQUEST[$inputName]) && is_array($_REQUEST[$inputName]) && in_array($value, $_REQUEST[$inputName])){
        echo " checked ";
    }
}

function isFruitChecked($value){ // value dynamic function (input name  fix takle )
    if(isset($_REQUEST['fruits']) && is_array($_REQUEST['fruits']) && in_array( $value, $_REQUEST['fruits'])){
        echo " checked ";
    }
}

// form two function
function displayOptions($options, $selectedValues){
    foreach ($options as $option){
        $option = strtolower($option);
        $selected = '';
        if(in_array($option, $selectedValues)){
            $selected = "selected";
        }
        printf("<option value='%s' %s>%s</option>\n", $option, $selected, ucwords($option) );
    }
}