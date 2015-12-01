<?php
    //Function to send user back to contact.php with notification
    function backToContact($note){
        $_SESSION['note']= $note;
        echo '<script>location.href="contact.php"</script>';
    }
    // variables
    $subject = $_POST['subject'] . " from " . $_POST['name'];
    $msg = $_POST['msg'];
    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);

    
    // send email
    mail("seniorclasscampaign@cornell.edu", $subject ,$msg);
    
    header('Location: contact.php');

    //Notify user
    backToContact("Your email has been sent!");
    
?>
