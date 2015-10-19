<?php 

/**
* @author nasnasa
* @license FREE TO USE FOR EDUCATION ONLY
* @email sudaneseh@gmail.com
* @phone (00249) 912740956
* @copyright 2015
*/


// You most Include you languge file frist :) 
// After this line 

function time_ago($ptime)
{   
    global $lang;
    global $ago_pos;
    $etime = time() - $ptime;
    if ($etime < 1)
    {
        return $lang['just_now'];
    }
    
    $a = array( 365 * 24 * 60 * 60  =>  $lang['year'],
                 30 * 24 * 60 * 60  =>  $lang['month'],
                      24 * 60 * 60  =>  $lang['day'],
                           60 * 60  =>  $lang['hour'],
                                60  =>  $lang['minute'],
                                 1  =>  $lang['second']
                );
                
    $a_plural = array( $lang['year']   => $lang['years'],
                       $lang['month']  => $lang['months'],
                       $lang['day']    => $lang['days'],
                       $lang['hour']   => $lang['hours'],
                       $lang['minute'] => $lang['minutes'],
                       $lang['second'] => $lang['seconds']
                );

    foreach ($a as $secs => $str)
    {
        $d = $etime / $secs;
        if ($d >= 1)
        {
            $r = round($d);
            if($ago_pos == 0) {
            return $r . ' ' . ($r > 1 ? $a_plural[$str] : $str) . ' '.$lang['ago'];
            } else {
            return $lang['ago'].' '.$r . ' ' . ($r > 1 ? $a_plural[$str] : $str); 
            }
        }
    }
}

?>
