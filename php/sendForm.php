<?php

if(isset($_POST["form_call"])){
    $form = json_decode($_POST["form_call"]);
    @$name = trim(htmlspecialchars(stripslashes($form->name)));
    @$phone = trim(htmlspecialchars(stripslashes($form->phone)));

    $order_date = date('j').'.'.date('m').'.'.date('Y');


    $recepients = 'test@mail.ru';

    $header = "Content-Type: text/html; charset=utf-8";


//    if ($form_is_sent =='zvonok'){
        $order_message = '<b>'.$order_date.' поступило Заявка на звонок: </b><br /><br />';
        $order_message .= 'Фамилия/Организация : '.$name.'<br />';
        // $order_message .= 'Имя  : '.$name1.'<br />';
        $order_message .= 'Телефон : '.$phone.'<br />';

        $theme = 'Поступило сообщение с сайта';
 //   }

  //  $res=@mail($recepients, $theme, $order_message, $header);



    echo '<p><strong>Результат отправки</strong></p>';
    if($res)echo '<p>Сообщение отправлено!</p>';
    else echo '<p class="error">К сожалению, письмо не отправлено, попытайтесь еще раз.</p>';


   // var_dump($form->name);
}

  @ $form_is_sent = $_POST['form_is_sent'];
  if ($form_is_sent){
    @$name = trim(htmlspecialchars(stripslashes($_POST['name'])));
    @$phone = trim(htmlspecialchars(stripslashes($_POST['phone'])));
    @$mail = trim(htmlspecialchars(stripslashes($_POST['mail'])));
    @$family = trim(htmlspecialchars(stripslashes($_POST['family'])));
    @$times = trim(htmlspecialchars(stripslashes($_POST['times'])));
    @$tovar = trim(htmlspecialchars(stripslashes($_POST['tovar'])));
    @$comment = trim(htmlspecialchars(stripslashes($_POST['comment'])));
    @$itogo = trim(htmlspecialchars(stripslashes($_POST['itogo'])));
    @$itogo1 = trim(htmlspecialchars(stripslashes($_POST['kolvo'])));

//    $name = iconv('UTF-8','WINDOWS-1251',$name);
//    $phone = iconv('UTF-8','WINDOWS-1251',$phone);
//    $comment = iconv('UTF-8','WINDOWS-1251',$comment);
//    $times = iconv('UTF-8','WINDOWS-1251',$times);
//    $email = iconv('UTF-8','WINDOWS-1251',$email);

    $order_date = date('j').'.'.date('m').'.'.date('Y');


    $recepients = 'vova199046@mail.ru';

    $header = "Content-Type: text/html; charset=utf-8";


    if ($form_is_sent =='zvonok'){
      $order_message = '<b>'.$order_date.' поступило Заявка на звонок: </b><br /><br />';
      $order_message .= 'Фамилия/Организация : '.$name.'<br />';
     // $order_message .= 'Имя  : '.$name1.'<br />';
      $order_message .= 'Телефон : '.$phone1.'<br />';
      $order_message .= 'Комментарий : '.$comment.'<br />';
	  
      $theme = 'Поступило сообщение с сайта';
    }


    if ($form_is_sent =='knop2'){
      $order_message = '<b>'.$order_date.' поступило сообщение с сайта, блок ПОЛУЧИТЬ ИНФОРМАЦИЮ : </b><br /><br />';

      $order_message .= 'Телефон : '.$phone.'<br />';
      $theme = 'Поступило сообщение с сайта';
    }
    if ($form_is_sent =='knop3'){
      $order_message = '<b>'.$order_date.' поступил заказ с сайта : </b><br /><br />';
      $order_message .= 'Имя : '.$name.'<br />';
      $order_message .= 'Телефон : '.$phone.'<br />';
      $order_message .= 'Сообщение : '.$comment.'<br />';
      $theme = 'Поступил заказ с сайта';
    }





    if ($form_is_sent =='zakaz'){
      $order_message = '<b>'.$order_date.' поступил заказ товара с сайта : </b><br /><br />';
      $order_message .= 'Фамилия/Организация : '.$name.'<br />';
      $order_message .= 'Заказал товар : '.$family.'<br />';
      $order_message .= 'Телефон : '.$phone.'<br />';
      $theme = 'Поступил заказ товара с сайта';
    }
    if ($form_is_sent =='otziv'){
      $order_message = '<b>'.$order_date.' поступил "Отзыв" : </b><br /><br />';
      $order_message .= 'Имя : '.$name.'<br />';
      $order_message .= 'Сообщение : '.$comment.'<br />';
      $theme = 'Отзыв с сайта '.$_SERVER['HTTP_HOST'];
    }
//echo "$recepients+$theme+$order_message+$header";
    $res=@mail($recepients, $theme, $order_message, $header);

	

    echo '<p><strong>Результат отправки</strong></p>';
    if($res)echo '<p>Сообщение отправлено!</p>';
    else echo '<p class="error">К сожалению, письмо не отправлено, попытайтесь еще раз.</p>';
}
?>