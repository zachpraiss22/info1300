<?php
    //Calls on header.php for <head> tags
    include('header.php');
    
    $note= "";
    if(@$_SESSION['note']){
	$note = $_SESSION['note'];
	unset($_SESSION['note']);
    }
?>
    <script>
    function verify() {
	var name = document.getElementById('name');
	var msg = document.getElementById('msg');
	var subject = document.getElementById('subject');
	if ( ! name.value ) {
	    alert("Please provide your name.");
	    name.focus();
	    return false;
	}
	if ( ! msg.value ) {
	    alert("Please provide your message.");
	    comment.focus();
	    return false;
	}
	if ( ! subject.value ) {
	    alert("Please provide a subject.");
	    comment.focus();
	    return false;
	}
	return true;
    }
    </script>

    <body>
	<?php
	//NAVIGATION: calls on navigation.php
	//Calls on banner.php
	    $current = "CONTACT";
	    include('navigation.php');
	    include('banner.php');
	?>

        <div id="container">
            <div class="content">
                <h2>CONTACT US</h2>
                <h3>WITH ANY QUESTIONS OR CONCERNS</h3>
                <br><br>
            </div>
<<<<<<< Updated upstream
	    <div id="contact">
			<p>Feel free to shoot us a message and we will get back to you as soon as possible.</p>
			<br>
=======
	    <div id=contact>
		<!-- If email has been sent, then $note is echoed-->
		<div id="status" class="message" <?php if(!@$note){echo 'style="display:none;"';}?>><?php echo @$note;?></div>
	    
		<p>Any more questions or concerns? Shoot us an email!</p>
>>>>>>> Stashed changes
		<form method="post" onSubmit="return verify()" action='contact_form.php'>
		    <p class="question">Name:</p>
		    <input type="text" name="name" id="name"><br>
		    <p class="question">Subject:</p>
		    <input type="text" name="subject" id="subject"><br>
		    <p class="question">Message:</p>
		    <textarea name="msg" id="msg" rows="5" cols="40"></textarea><br>
		    <input type="submit" value="Send Email">
		</form>
	    <br><br><br>
	    </div>
        </div>
    
    <?php
	//Footer nav links and credits
	//Calls on footer.php
	include('footer.php')
    ?>

    </body>

</html>
