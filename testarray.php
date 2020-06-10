<form method="POST" action="testarray.php">
    <input type="text" name="username" value="">
    <input type="password" name="password" value="">
    <input type="submit">
</form>
<?php
//$data1 = array('1','2','3');
//
//
//for($a = 1;$a<=1;$a++){
//    if ($a='1'){
//        echo "$data1[1]<br>";
//    }
//}
//
//$b = 1;
//while ($b <=1){
//    if ($b='1'){
//        echo "$data1[$b]<br>";
//    }
//    $b++;
//}
//
//foreach ($data1 as $c){
//    if($c == '1'){
//        echo "$data1[$c]<br>";
//    }
//}

checklogin($_POST['username'],$_POST['password']);

function checklogin($username,$password){

    $date2 = array(['username' => 'pech', 'password' => '1234', 'role' => ['1','2','3']]);
    foreach ($date2 as $xx){

        if (isset($username) && isset($password)) {

            if ($username == $xx['username'] && $password == $xx['password']) {
                echo "username & password success<br>";
            } else if ($username == $xx['username'] && $password != $xx['password']) {
                echo "password fail<br>";
            }else if ($username != $xx['username'] && $password == $xx['password']) {
                echo "username fail<br>";
            }else { echo 'username & password fail';}

//            if ($password == $xx['password']) {
//                echo 'password success';
//            } else {
//                echo "password fail";
//            }
        }

    }


}