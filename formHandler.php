<?php
    // Working With Email
    if(isset($_POST['submit']))
    {
        $username= $_POST['username'];
        $email= $_POST['email'];
        $subject= $_POST['subject'];
        $message= $_POST['message'];
        
        $to= "csecec.reshabh@gmail.com";
        $emailSubject= "New Form Submission";
        $body = " UserName IS:- $username" ."<br>".
                " Email Is:- $email"."<br>".
                " Subject Is:- $subject"."<br>".
                " Message Is:- $message"."<br>";
        $headers= 
        [
          "MIME-Version: 1.0",
          "Content-type: text/html; charset=utf-8",
          "From: Organizationwebsite@gmail.com",
          "Reply-To: $email"
        ];
        //Converting this headers array into string because mail function string ko he as a argumnet leta hai..
        $headers= implode("\r\n",$headers);
        if(mail($to,$emailSubject,$body,$headers))
        {
            echo "<script> alert('Email Has Been Sent'); </script>";
            header("refresh: 2; url=contact.html"); //basically 2 second ke baad vo redirect karega..
        }
        else
        {
            echo "Message not Sent";
        }
      
    }


?>