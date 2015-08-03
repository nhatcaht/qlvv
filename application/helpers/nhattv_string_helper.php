<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(!function_exists('cutnchar'))
{
    function cutnchar($str = NULL, $n = 0)
    {
        if(strlen($str) < $n) return $str;
        $html = substr($str,0, $n);
        $html = substr($html, 0, strrpos($html, ' '));
        return $html.'...';
    }
}


