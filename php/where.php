<?php
    //Calls on header.php for <head> tags
    include('header.php');
?>

    <body>
	<?php
	//NAVIGATION: calls on navigation.php
	//Calls on banner.php
	    $current = "WHERE";
	    include('navigation.php');
	    include('banner.php');
	?>

        <div id="container">
            <div class="content">
                <h1>WHERE</h1>
                <h3>CAN I DONATE IN THE SCC?</h3>
                <br><br>
                <p>Through the Senior Class Campaign (SCC), you can choose where you want to donate within the university. You can donate to the Cornell Annual Fund or you can choose the specific aspect of Cornell that you would like to see your donation go towards.</p>
                <br>
                <p>The SCC is your opportunity to give back to the university, programs, or clubs that have been formative in your college experience here at Cornell.</p>
            </div>
            <br>
         <div class="column1">
                <div class="columntext">
                    <h1>CORNELL ANNUAL FUND</h1>
                    <p class="italics">The Annual Fund helps finance many of the programs and departments that make Cornell what it is. It helps support the students, staff, as well as the continuous growth of the university.</p>
                </div>
            </div>
            <div class="column">
                <div class="columntext">
                    <h1>COLLEGES OR DEPARTMENTS</h1>
                    <p class="italics">You can choose to give back to your college or your department out of loyalty and thanks to help them continue to be the best they can be and to have a positive impact for many students to come.</p>
                </div>
            </div>
            <div class="column">
                <div class="columntext">
                    <h1>EXTRACURRICULAR GROUPS</h1>
                    <p class="italics">Perhaps there was one group that was especially pivotal in your time here at Cornell like a project team or club. If they&#8217;re associated with the university, you can choose to give back to them.</p>
                </div>
            </div>
            <br style="clear:both"><br>
        </div>

    <?php
	//Footer nav links and credits
	//Calls on footer.php
	include('footer.php')
    ?>

    </body>

</html>
