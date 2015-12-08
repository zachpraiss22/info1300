<?php
    //Calls on header.php for <head> tags
    include('php/header.php');
?>

    <body>
	<?php
	//NAVIGATION: calls on navigation.php
	//Calls on banner.php
	    $current = "OUR TEAM";
	    include('php/navigation.php');
	    include('php/banner.php');
	?>

<div id="container">
            <div class="content">
                <h2>OUR TEAM</h2>
                <h3>FOR THE CAMPAIGN</h3>
                <br><br>
                <p>The Senior Class Campaign (SCC) is organized by a hardworking and dedicated group of seniors who are committed to making sure that the Cornell Class of 2016 has the most successful senior class campaign in the university&#8217;s history.</p>
                <br>
                <div class="team">
                    <h1>OUR EXECUTIVE BOARD</h1>
                </div>
                <br style="clear:both">
                <div class="team">
                    <div class="person">
                        <img src="img/team1.jpg" alt="Garrison Lovely" class="img-circle">
                        <div class="biography">
                            <h2>Garrison Lovely</h2>
                            <br>
                            <h3>Co-President</h3>
                            <br>
                        </div>
                    </div>
                    <div class="person">
                        <img src="img/team2.jpg" alt="Natalie Rosseau" class="img-circle">
                        <div class="biography">
                            <h2>Natalie Rosseau</h2>
                            <br>
                            <h3>Co-President</h3>
                            <br>
                        </div>
                    </div>
                    <div class="person">
                        <img src="img/team3.jpg" alt="Justin Watt" class="img-circle">
                        <div class="biography">
                            <h2>Justin Watt</h2>
                            <br>
                            <h3>VP Events</h3>
                            <br>
                        </div>
                    </div>
                    <div class="person">
                        <img src="img/team4.jpg" alt="Catherine McAnney" class="img-circle">
                        <div class="biography">
                            <h2>Catherine McAnney</h2>
                            <br>
                            <h3>VP Operations</h3>
                            <br>
                        </div>
                    </div>
                    <div class="person">
                        <img src="img/team5.jpg" alt="Lide Forde" class="img-circle">
                        <div class="biography">
                            <h2>Lide Forde</h2>
                            <br>
                            <h3>VP Outreach</h3>
                            <br>
                        </div>
                    </div>
                    <div class="person">
                        <img src="img/team6.jpg" alt="Garrison Lovely" class="img-circle">
                        <div class="biography">
                            <h2>Carolyn Sussman</h2>
                            <br>
                            <h3>VP Outreach</h3>
                            <br>
                        </div>
                    </div>
                    <div class="person">
                        <img src="img/team7.jpg" alt="Aditi Bhowmick" class="img-circle">
                        <div class="biography">
                            <h2>Aditi Bhowmick</h2>
                            <br>
                            <h3>VP Marketing</h3>
                            <br>
                        </div>
                    </div>
                </div>
                <br style="clear:both">
                <div class="team">
                    <h1>OUR ADVISORS</h1>
                </div>
                <br style="clear:both">
                <div class="team"> 
                    <div class="person">
                        <img src="img/advisor1.jpg" alt="Corey Ryan Earle '07" class="img-circle">
                        <div class="biography">
                            <h2>Corey Earle</h2>
                            <br>
                            <h3>Associate Director</h3>
                            <br>
                        </div>
                    </div>
                    <div class="person">
                        <img src="img/advisor2.jpg" alt="Amanda Massa" class="img-circle">
                        <div class="biography">
                            <h2>Amanda Massa</h2>
                            <br>
                            <h3>Assistant Director</h3>
                            <br>
                        </div>
                    </div>
                    <br style="clear:both"><br>
                </div><!--team-->
            </div><!--content-->
        </div><!--container-->
    
    <?php
	//Footer nav links and credits
	//Calls on footer.php
	include('php/footer.php')
    ?>

    </body>

</html>
