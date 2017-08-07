      
      <?php
         $to = "anita.k.nandi@gmail.com";
         $subject = $_POST["subject"];
         
         $message = $_POST["name"] . " sent a message\n\n";
         $message .= "email: " . $_POST["email"] ."\n\n";
         $message .= $_POST["text"]; 
         
         $retval = mail ($to,$subject,$message);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
      	    header('Location: ./contact.php?sent');
         }else {
            echo "Message could not be sent...";
         }

      ?>
      

