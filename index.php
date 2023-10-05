<?php
$f_json = 'D:\Programms\Projects\test.json';
$json = file_get_contents("$f_json");
$arr = json_decode($json, true);
$arr2 = array();
foreach ($arr['Остров'] as $key => $value)
{
    if($value['rb_fact'] != NULL)
    $arr2[$key]['rb_fact'] = $value['rb_fact'];
}
file_put_contents("encode.json", json_encode($arr2,JSON_PRETTY_PRINT));
