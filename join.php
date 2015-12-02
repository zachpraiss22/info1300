<?php
    //Calls on header.php for <head> tags
    include('php/header.php');
?>

    <body>
	<?php
	//NAVIGATION: calls on navigation.php
	//Calls on banner.php
	    $current = "JOIN US";
	    include('php/navigation.php');
	    include('php/banner.php');
	?>

        <div id="container">
            <div class="content">
                <h2>JOIN US</h2>
                <h3>ON THE CAMPAIGN TEAM</h3>
                <br><br>
                <p>The Office of Alumni Affairs works closely with student volunteers on the Senior Class Campaign (SCC). This group of leaders plays an important role during senior year, working closely with staff, trustees, and alumni to help seniors transition to alumni and continue to be a part of the Cornell network.</p>
                <br>
                <p>There are different levels of membership from Ambassadors to the Executive board but all members gain experience, skills, and a network of peers and alumni that are invaluable after gradaution.</p>
                <br>
                <p>You can get involved by filling out an <a href="https://docs.google.com/forms/d/1bVn55wsLyAycp0ctswl9Zd2zKkW6IRqvRaVZT8fktTM/viewform">online application</a> and sending your resume to Cory Earle at <a href="mailto:cre8@cornell.edu">cre8&#64;cornell.edu.</a></p>
                <br><br>
            </div>
        </div>
    
    <?php
	//Footer nav links and credits
	//Calls on footer.php
	include('php/footer.php')
    ?>

    </body>

</html>
