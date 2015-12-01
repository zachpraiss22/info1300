<?php
    //Calls on header.php for <head> tags
    include('header.php');
?>

    <body>
	<?php
	//NAVIGATION: calls on navigation.php
	//Calls on banner.php
	    $current = "OUR TEAM";
	    include('navigation.php');
	    include('banner.php');
	?>

        <div id="container">
            <div class="content">
                <h2>OUR TEAM</h2>
                <h3>FOR THE CAMPAIGN</h3>
                <br><br>
                <p>The Senior Class Campaign (SCC) is an annual fundraising campaign organized by the graduating senior class of Cornell University to celebrate our school spirit, enhance the ties that bind us together as a community, and give up back to the insititution.</p>
                <br>
                <p>The Senior Class Campaign (SCC) is an annual fundraising campaign organized by the graduating senior class of Cornell University to celebrate our school spirit, enhance the ties that bind us together as a community, and give up back to the insititution.</p>
                <br><br>
                <div id="team">
                <h1>Our E-Board</h1>
                    <ul>
                        <li>
                          <h2>Garrison Lovely</h2>
                            <br>
                          <h3>Co-President</h3>
                            <br>
                            <br>
                            <img src="img/team1.jpg" alt="Garrison Lovely" class="img-circle">
                        </li>
                        <li>
                          <h2>Natalie Rosseau</h2>
                            <br>
                          <h3>Co-President</h3>
                            <br>
                            <br>
                          <img src="img/team2.jpg" alt="Natalie Rosseau" class="img-circle">
                        </li>
                        <li>
                          <h2>Justin<br>Watt</h2>
                            <br>
                          <h3>VP Events</h3>
                            <br>
                            <br>
                          <img src="img/team3.jpg" alt="Justin Watt" class="img-circle">
                        </li>
                        <li>
                          <h2>Catherine McAnney</h2>
                            <br>
                          <h3>VP Operations</h3>
                            <br>
                            <br>
                          <img src="img/team4.jpg" alt="Catherine McAnney" class="img-circle">
                        </li>
                        <li>
                          <h2>Lide<br>Forde</h2>
                            <br>
                          <h3>VP Outreach</h3>
                            <br>
                            <br>
                          <img src="img/team5.jpg" alt="Lide Forde" class="img-circle">
                        </li>
                        <li>
                          <h2>Carolyn Sussman</h2>
                            <br>
                          <h3>VP Outreach</h3>
                            <br>
                            <br>
                          <img src="img/team6.jpg" alt="Garrison Lovely" class="img-circle">
                        </li>
                        <li>
                          <h2>Aditi Bhowmick</h2>
                            <br>
                          <h3>VP Marketing</h3>
                            <br>
                            <br>
                          <img src="img/team7.jpg" alt="Aditi Bhowmick" class="img-circle">
                        </li>
                      </ul>
                 <h1> Our Advisors</h1>
                    <ul>
                        <li>
                            <h2>Corey Ryan Earle '07</h2>
                            <br>
                            <h3>Associate Director,
                            <br>
                            Student & Young Alumni Programs 
                            </h3>
                            <br>
                            <br>
                            <img src="img/advisor1.jpg" alt="Corey Ryan Earle '07" class="img-circle">
                        </li>
                        <li>
                            <h2>Amanda<br>Massa</h2>
                            <br>
                            <h3>Assistant Director,
                            <br>
                            Student & Young Alumni Programs 
                            </h3>
                            <br>
                            <br>
                            <img src="img/advisor2.jpg" alt="Amanda Massa" class="img-circle">
                        </li>  
                    </ul>
                </div><!--team-->
            </div><!--content-->
        </div><!--container-->
    
    <?php
	//Footer nav links and credits
	//Calls on footer.php
	include('footer.php')
    ?>

    </body>

</html>
