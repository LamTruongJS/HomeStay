<?php 
    $userName =$_POST['userName'];
    $password =$_POST['password'];
    $sex =$_POST['sex'] ?? '';
    $address =$_POST['address'];
    $email =$_POST['email'];
    $skill =$_POST['skill'];
    $hobby =$_POST['hobby'] ?? '';
    $imagePath = basename($_FILES['imageEmployee']['name']);
    echo "<h4>Information Profile:</h4>" ;

    $target_dir="uploads/";
    $target_file =$target_dir . $imagePath;
    if(move_uploaded_file($_FILES["imageEmployee"]["tmp_name"],$target_file)){
        echo "<img src='".$target_file."' width='100px' ><br>";
    }
    else echo "No Picture Upload<br>";
    
    echo 'UserName: ',$userName,'<br>';
    echo 'Password: ',$password,'<br>';
    
    if(!isset($set)){
      
        echo 'Sex: ',$sex,'<br>';
    }
   
    echo 'Address: ',$address,'<br>';
    echo 'Email: ',$email,'<br>';
    echo 'Skills: ',$skill, '<br>';
    
    if(empty($hobby)){
        echo 'No hobby';
    }
    else{
        $n = count($hobby);
        echo 'Your Hooby: ';
        for($i=0;$i<$n;$i++){
            echo ($hobby[$i].' ' );
        }
    }
   
?>