<form method="POST" action="index.php">
    <input type="text" name="username" value="">
    <input type="password" name="password" value="">
    <input type="submit">
</form>
<?php

    check($_POST['username'],$_POST['password']);

//    if (isset($_POST['username']) && isset($_POST['password'])) {
//
//        if ($_POST['username'] == 'pech'){
//            $username = $_POST['username'];
//        } else {echo "fail username <br>";}
//
//        if ($_POST['password'] == 'pech'){
//            $password = $_POST['password'];
//        } else {echo 'fail password';}
//    }

    function check($username,$password){
        if (isset($username) && isset($password)) {

            if ($username == 'pech'){
                echo "username pass<br>";
            } else {echo "fail username <br>";}

            if ($password == 'pech'){
                echo "password pass<br>";
            } else {echo "fail password<br>";}
        }


    }

$data1 = array(
            'data1'=>
                ['1','2','3'],
            'data2'=>
                ['1'=>
                    ['ฉันอยู่นี่'], '2','3'],
            'data3'=>
                ['1','2','3']
        );



var_dump($data1);
echo "<br>";
echo "<br>";
echo $data1['data2'][1][0];
?>