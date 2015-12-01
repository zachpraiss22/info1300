<?php
    //Calls on header.php for <head> tags
    include('header.php');
?>

    <body>
	<?php
	//NAVIGATION: calls on navigation.php
	//Calls on banner.php
	    include('navigation.php');
	    include('banner.php');
	?>

        <div id="container">
            <div class="content">
                <h2>CONTACT US</h2>
                <h3>WITH ANY QUESTIONS OR CONCERNS</h3>
                <br><br>
            </div>
	    <div id="contact">
			<p>Feel free to shoot us a message and we will get back to you as soon as possible.</p>
			<br>
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
