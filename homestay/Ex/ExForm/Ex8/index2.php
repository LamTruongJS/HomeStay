<?php 
    $userName =$_POST['userName'];
    $password =$_POST['password'];
    $sex =$_POST['sex'] ?? '';
    $address =$_POST['address'];
    $email =$_POST['email'];
    $skill =$_POST['skill'];
    $hobby =$_POST['hobby'] ?? '';
    $note=$_POST['note']??'';
    $textHobby='';
    $textSex='';
    // echo 'UserName: ',$userName,'<br>';
    // echo 'Password: ',$password,'<br>';
    
    if(!isset($set)){
      
       $textSex =$sex;
    }
   
    // echo 'Address: ',$address,'<br>';
    // echo 'Email: ',$email,'<br>';
    // echo 'Skills: ',$skill, '<br>';
    
    if(empty($hobby)){
        $textHobby= 'No hobby';
    }
    else{
        $n = count($hobby);
        
        for($i=0;$i<$n;$i++){
           $textHobby .="$hobby[$i] ";
        }
    }
    echo '<table>';
    echo "<tr><td>UserName:</td><td>$userName</td></tr>";
    echo "<tr><td>Password:</td><td>$password</td></tr>";
    echo "<tr><td>Sex:</td><td>$sex</td></tr>";
    echo "<tr><td>Address:</td><td>$address</td></tr>";
    echo "<tr><td>Email:</td><td>$email</td></tr>";
    echo "<tr><td>Skills:</td><td>$skill</td></tr>";
    echo "<tr><td>Your Hooby:</td><td>$textHobby</td></tr>";
    echo "<tr><td colspan='2'><a href='javascript:window.history.back();'>Back</a></td></tr>";
    echo '</table>';