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
                <p>The Senior Class Campaign (SCC) is an annual fundraising campaign organized by the graduating senior class of Cornell University to celebrate our school spirit, enhance the ties that bind us together as a community, and give up back to the insititution.</p>
                <br>
                <p>The Senior Class Campaign (SCC) is an annual fundraising campaign organized by the graduating senior class of Cornell University to celebrate our school spirit, enhance the ties that bind us together as a community, and give up back to the insititution.</p>
                <br><br>
            </div>
	    <div id=contact>
		<p>Any more questions or concerns? Shoot us an email!</p>
		<form method="post" onSubmit="return verify()" action='contact_form.php'>
		    Name:<br>
		    <input type="text" name="name" id="name"><br>
		    Subject:<br>
		    <input type="text" name="subject" id="subject"><br>
		    Message:<br>
		    <textarea name="msg" id="msg" rows="5" cols="40"></textarea><br>
		    <input type="submit" value="Send Email">
		</form>
	    </div>
        </div>
    
    <?php
	//Footer nav links and credits
	//Calls on footer.php
	include('footer.php')
    ?>

    </body>

</html>