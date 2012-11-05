
 <?php

 $date = "2012-11-10";
 $schedule = "予定";
 $comment = "インサート";
 $c_color = "green";
 		        $chk_flag = 0;

                $chk_flag = 0;

        mysql_connect("localhost", "root", "");
        mysql_select_db("sample");
        mysql_query("SET NAMES UTF8");

        $message1 = "select * from schedule where date = '$date'";
        $message = mysql_query($message1);
        $chk_flag = mysql_num_rows($message);

        if($chk_flag < 1)
        {

        	unset($message1);

        	$message1 = "insert into schedule values('$date','$schedule','$comment','$c_color')";
        	        	echo $message1;
        	mysql_query($message1);


        }
 ?>
