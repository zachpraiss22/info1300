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
                <br><br>
                <div id="team">
                <h1>Our E-Board</h1>
                    <ul>
                        <li>
                            <h2>Garrison</h2>
                            <h2>&nbsp;&nbsp;Lovely</h2>
                            <br>
                            <h3>Co-</h3>
                            <h3>President</h3>
                            <br>
                            <br>
                            <img src="img/team1.jpg" alt="Garrison Lovely" class="img-circle">
                        </li>
                        <li>
                            <h2>&nbsp;Natalie</h2> 
                            <h2>Rosseau</h2>
                            <br>
                            <h3>Co-</h3>
                            <h3>President</h3>
                            <br>
                            <br>
                          <img src="img/team2.jpg" alt="Natalie Rosseau" class="img-circle">
                        </li>
                        <li>
                            <h2>Justin</h2>
                            <h2>Watt</h2>
                            <br>
                            <h3>&nbsp;VP</h3>
                            <h3>Events</h3>
                            <br>
                            <br>
                          <img src="img/team3.jpg" alt="Justin Watt" class="img-circle">
                        </li>
                        <li>
                            <h2>Catherine</h2>
                            <h2>McAnney</h2>
                            <br>
                            <h3>&nbsp;&nbsp;VP</h3>
                            <h3>Operations</h3>
                            <br>
                            <br>
                          <img src="img/team4.jpg" alt="Catherine McAnney" class="img-circle">
                        </li>
                        <li>
                            <h2>&nbsp;Lide</h2>
                            <h2>&nbsp;Forde</h2>
                            <br>
                            <h3>VP</h3>
                            <h3>Outreach</h3>
                            <br>
                            <br>
                          <img src="img/team5.jpg" alt="Lide Forde" class="img-circle">
                        </li>
                        <li>
                            <h2>Carolyn</h2>
                            <h2>Sussman</h2>
                            <br>
                            <h3>VP</h3>
                            <h3>Outreach</h3>
                            <br>
                            <br>
                          <img src="img/team6.jpg" alt="Garrison Lovely" class="img-circle">
                        </li>
                        <li>
                            <h2>&nbsp;&nbsp;&nbsp;Aditi</h2>
                            <h2>Bhowmick</h2>
                            <br>
                            <h3>VP</h3>
                            <h3>Marketing</h3>
                            <br>
                            <br>
                          <img src="img/team7.jpg" alt="Aditi Bhowmick" class="img-circle">
                        </li>
                      </ul>
                 <h1> Our Advisors</h1>
                    <ul>
                        <li>
                            <h2>Corey</h2> 
                            <h2>Earle'07</h2>
                            <br>
                            <h3>Associate</h3>
                            <h3>Director,</h3>
                            <h4>Student & Young Alumni Programs 
                            </h4>
                            <img src="img/advisor1.jpg" alt="Corey Ryan Earle '07" class="img-circle">
                        </li>
                        <li>
                            <h2>Amanda</h2>
                            <h2>&nbsp;Massa</h2>
                            <br>
                            <h3>Assistant</h3>
                            <h3>Director,</h3>
                             <h4>Student & Young Alumni Programs 
                            </h4>
                            <img src="img/advisor2.jpg" alt="Amanda Massa" class="img-circle">
                        </li>  
                    </ul>
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
