<?php
   session_start();

// 유저 세션 검증
   if(!isset($_SESSION['is_login'])){
      header('Location: ./su_script_logout_support.php');
   };

// include function
     function my_autoloader($class){
         include './classes/'.$class.'.php';
    }
 spl_autoload_register('my_autoloader');

//db 연결 파트
        $conn = mysqli_connect('localhost','root','9708258a');
        if(!$conn) { $_SESSION['msg']='DB연결에 실패하였습니다.';
           header('Location: ./su_script_login_interface.php');
        }
        $use = mysqli_select_db($conn,"suproject");
        if(!$use) die('cannot open db'.mysqli_error($conn));

//php 객체 생성파트
      $ob2 = new su_class_value_name_convert_with_code();
      $ob_tg = new su_class_db_view_generator();





        $ob_tg->su_function_throw_table_name($conn,'task_document_header_table');








?>