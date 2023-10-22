<?php
    function generateStrongPassword($length = 9, $available_sets = 'luds')
    {
        if($length > 255)
            return 'Max length is 255';

        $sets = array();
        if(strpos($available_sets, 'l') !== false)
            $sets[] = 'abcdefghijklmnopqrstuvwxyz';
        if(strpos($available_sets, 'u') !== false)
            $sets[] = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        if(strpos($available_sets, 'd') !== false)
            $sets[] = '1234567890';
        if(strpos($available_sets, 's') !== false)
            $sets[] = '!@#$%&*?.,<>;/';

        if(count($sets) == 0)
            return 'No set selected';
    
        $all = '';
        $password = '';
        foreach($sets as $set)
        {
            $password .= $set[array_rand(str_split($set))];
            $all .= $set;
        }
    
        $all = str_split($all);
        for($i = 0; $i < $length - count($sets); $i++)
            $password .= $all[array_rand($all)];
    
        $password = str_shuffle($password);
    
        return $password;
    }

    if(isset($_GET['len']))
        $len = $_GET['len'];
    else
        $len = 9;

    if(isset($_GET['sets']))
        $sets = $_GET['sets'];
    else
        $sets = 'luds';

    echo generateStrongPassword($len, $sets);
?>