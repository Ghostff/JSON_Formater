<?php

class Json
{
    private static $line_break = '<br />';
    
    private static $o_tag = '<div style=\'margin-left:20px;\'>';
    
    private static $c_tag = '</div>';
    
    private static $allow_font = true;
    
    private static $font_family = 'Courier New, Courier, monospace';
    
    
    
    public static function setBreak($line_break_replacement)
    {
        if (defined($line_break_replacement)) {
            self::$line_break = constant($line_break_replacement);
        }
        else {
            self::$line_break = $line_break_replacement;
        }
    }
    
    public static function allowFont($allow, $fontFamily = null)
    {
        self::$allow_font = $allow;
        if ($fontFamily) {
            self::$font_family = $fontFamily;    
        }
        
    }
    
    public static function setIndent($o_tag_replacement, $c_tag_replacement = null)
    {
        if ($o_tag_replacement && $c_tag_replacement) {
            self::$o_tag = $o_tag_replacement;
            self::$c_tag = $c_tag_replacement;
        }
        else {
            self::$o_tag = $o_tag_replacement;
            self::$o_tag = null;
        }
    }
    
    public static function encode($json)
    {
        $string = json_encode($json, JSON_FORCE_OBJECT);
        
        $new_string = null;
        if (self::$allow_font) {
            $new_string .= '<div style="font-family:' . self::$font_family . ';">';
        }
                   
        $pathern = array(
            '/\{/',
            '/\}/',
            '/(",|\d,|true(,|)|false(,|)|\},|null,)/'
         );
        
        if ( ! self::$c_tag) {
            self::$c_tag =     self::$line_break;
        }
        
        $replacement = array(
            '$0' . self::$line_break . self::$o_tag,
            self::$c_tag . '$0',
            '$0' . self::$line_break
        );
        
        $string = preg_replace($pathern, $replacement, $string);
        
        foreach (explode(self::$line_break, $string) as $nw_string)
        {
            $new_string .= preg_replace(
                '/"(.*?)\":/',
                '"$1": ',
                $nw_string
            );
            
            $new_string .= self::$line_break;
        }
        
        $new_string = str_replace(
            array('>: ', '\/'),
            array(">: </span>", '/'),
            $new_string
        );
        
        if (self::$allow_font) {
            $new_string .= '</div>';
        }
        
        return $new_string;
    }
}
