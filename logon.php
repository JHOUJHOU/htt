<?php 
    if (isset($_POST['username']))
        {
        $_SESSION['txtNo']=$_POST['username'] ;
        $ldapConnect=ldap_connect('210.60.141.188' , '389' );  
        //建立到ldap伺服器的連線192.168.1.200是ldap伺服器ip，389是ldap伺服器埠(預設389)  
            $bind= @ldap_bind($ldapConnect , $_POST['username'] ,$_POST['password'] );  
         //驗證帳號密碼，ldap_bind第一個為繫結的連線，第二個為使用者名稱(注意是否有後綴)，第三個為密碼。  
            if($bind )  
            {//驗證成功,跳轉到ok.php  //>>驗證成功抓取API
                $_SESSION['login']="ok";
         echo '<meta http-equiv="refresh" content="0;url=ok.php">';
            }  
            else  
            {//驗證失敗,彈出提示，並跳轉回login.php
                echo "<script>alert('使用者名稱或密碼錯誤')</script>";
                echo '<meta http-equiv="refresh" content="0;url=login.php">';
         }  
            ldap_close($ldapConnect);   
        //關閉ldap連線  
        }
    else {
        echo "<script>alert('使用者名稱或密碼錯誤')</script>";
        echo '<meta http-equiv="refresh" content="0;url=login.php">';
    }//>>還要多判斷一個是不是109學年度新生
?>

