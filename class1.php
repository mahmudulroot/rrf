<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> </title>
</head>
<body>
    <?php 
        $city= 'Mymensingh';
        $city1= 'Dhaka';
    
        $cites = array('Mymensingh','Dhaka','Sylet','Barishal');
    
    ?>
    <?php
        if($city == 'Mymensingh') : ?>
        <h1>Most beauty City is Mymensingh</h1>
        <?php else : ?>
        <h1>We don't know</h1>
        <?php endif; ?>
        <?php 
            if($city == $city1){
                echo '<h1>Most beauty City Is'.$city.' </h1>'
            }else{
                echo '<h1>We don\'t know</h1>';
            }
            echo '<h1>Second City Is'.$cites[1].' </h1>';
            if($cites[3]=='Mymensingh'){
                
            }else{
}
        ?>
</body>
</html>
<ul></ul>


































