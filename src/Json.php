<?php

class Json
{
    public static function encode($json)
    {
        $string = json_encode($json, JSON_FORCE_OBJECT);
        
        $new_string = '<div style="font-family:Courier New, Courier, monospace;">';
                   
        $pathern = array(
			'/\{/',
			'/\}/',
			'/(",|\d,|true(,|)|false(,|)|\},|null,)/'
         );
		 
        $replacement = array(
			'$0<br /><div style=\'margin-left:20px;\'>',
			'</div>$0',
			'$0<br />'
		);
		
        $string = preg_replace($pathern, $replacement, $string);
        
        foreach (explode('<br />', $string) as $nw_string)
		{
            $new_string .= preg_replace(
				'/"(.*?)\":/',
				'"$1": ',
				$nw_string
			);
			
			$new_string .= '<br />';
        }
		
        $new_string = str_replace(
			array('>: ', '\/'),
			array(">: </span>", '/'),
			$new_string
		);
		
        $new_string .= '</div>';
        
        return $new_string;
    }
}
