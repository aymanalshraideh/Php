<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $n=[];
       
        for($i=0;$i<count($nums);$i++){
            for($j=$i+1;$j<count($nums);$i++){
        if(($nums[$i]+$nums[$j])==$target){ 
           
            return [$i,$j];
            
            }
        
    }
}
    
    }
}
$obj=new Solution();

print_r($obj->twoSum(array(3,2,4),6));