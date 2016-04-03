<?php
include 'lang-array.inc';
header("Content-Type: text/plain");
$build_dir = dirname(__FILE__).DIRECTORY_SEPARATOR.'build'.DIRECTORY_SEPARATOR;

if (!is_dir($build_dir))
    mkdir($build_dir, 0755, true);

    
$locale[9023]['nl_NL'] = 'Parelmoer donkergrijs';


$locale_array = array();
foreach ($locale as $ral => $locle_strings)
{
    foreach($locle_strings as $locale_ID => $locale_phrase)
    {
        $locale_entry = array();
        if(!array_key_exists($locale_ID,$locale_array))
            $locale_array[$locale_ID] = array();
        
        $locale_array[$locale_ID][$ral] = $locale_phrase;
    }
}


foreach ($locale_array as $lang => $data)
{
    file_put_contents($build_dir.'locale.'.$lang.'.json', json_encode($data,JSON_PRETTY_PRINT));
    print 'locale.'.$lang.'.json created!'."\n";
}
exit();
