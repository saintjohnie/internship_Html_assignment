<?php

   $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message']; $email_from = 'Johniomatic';
            $email_subject = 'New Mail From Johnie';
            $email_body = "name: $name.\n".
                            "email: $email.\n".
                            "message: $message. \n"; $to = 'nwagbojohn@gmail.com';
            $headers = "FROM: $email_from \r\n";
            $headers = "REPLY-TO: $email \r\n"; mail($to, $email_subject, $email_body, $headers);
            header('location: index.html');