<?php
    include('connect.php');
    session_start();

    if( isset($_SESSION['u_name'])){
        header("Location: home.php");
    }
    if (isset($_POST['login'])) {
        $u_name = $_POST['u_name'];
        $p_word = $_POST['p_word'];

        $sql = "select * from login where u_name = '$u_name' and p_word = '$p_word'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
            header("Location: resources.php");
        }  
        else{  
            echo  '<script>
                        window.location.href = "login.php";
                        alert("Login failed. Invalid username or password!!")
                    </script>';
        }     
    }

    ?>