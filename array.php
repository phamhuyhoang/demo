<?php echo "hello";
    $arrArray = array(1, 3, 5, 7, 9, array('a', 'b', 'c'));
    echo $arrArray[5][0].'<br>';
    
    $myArray = array(1, 3, 5, 7, 9);
    echo 'So phan tu trong mang la: '.count($myArray).'<br>';
    echo 'So nho nhat trong mang la: '.min($myArray).'<br>';
    echo 'So phan tu lon nhat trong mang la: '.max($myArray).'<br>';
    echo 'Sap sep tang da trong mang'.sort($myArray); echo '<pre>'.print_r($myArray).'</pre>';
    echo 'Sap sep giam dan trong mang'.rsort($myArray); echo '<pre>'.print_r($myArray).'</pre>';
    echo 'Implode '.implode(', ', $myArray).'<br>';
    
    $myEmail = 'trongyd@gmail.com, admin@gmail.com, test@gmail.com';
    
    // dua chuoi myEmail vao mang
    $split = explode(',', $myEmail);
    
    echo '<pre>';
        print_r($split);
    echo '</pre>';
    
    //echo phan tu vao $split
    
    
?>