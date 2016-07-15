<?php

class Json
{
    public static function print($json)
    {
        $string = json_encode($json, JSON_FORCE_OBJECT);
        $new_string = '<div style="font-size:13px;font-family:Courier New, ';
        $new_string .= 'Courier, monospace !important;">';

        $pattern = array('/\{/', '/\}/',
                         '/(",|\d,|true|false|\},|null,)/');

        $replacement =  array("$0<br /><div style='margin-left:20px;'>",
                              "</div>$0", "$0<br />");

        $string = preg_replace($pattern, $replacement, $string);

        foreach(explode('<br />', $string) as $nw_string){
          $new_string .= preg_replace("/\"(.*?)\"\:/", "\"$1\": ", $nw_string) . '<br>';
        }
        $new_string = str_replace(array('>: ', '\/'), array(">: </span>", '/'), $new_string);
        $new_string .= '</div>';

        return $new_string;
    }
}
