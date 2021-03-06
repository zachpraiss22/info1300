<?php
    //Calls on header.php for <head> tags
    include('php/header.php');
?>

    <body>
	<?php
	//NAVIGATION: calls on navigation.php
	//Calls on banner.php
	    $current = "WHAT";
	    include('php/navigation.php');
	    include('php/banner.php');
	?>

        <div id="container">
            <div class="content">
                <h1>WHAT</h1>
                <h3>IS THE SENIOR CLASS CAMPAIGN?</h3>
                <br><br>
                <p>The Senior Class Campaign (SCC) is an annual fundraising campaign organized by the graduating senior class of Cornell University to celebrate our school spirit, enhance the ties that bind us together as a community, and give up back to the insititution.</p>
                <br>
                <p>This is our chance as the Class of 2016 to celebrate and commemorate the experiences, memories, and friendships we&#8217;ve made in our time here at Cornell.</p>
                <br><br>
            </div>
            <?php
                include('php/button.php');
            ?>
            <div class="column1">
                <div class="columntext">
                    <h1>OUR TARGET</h1>
                    <p class="italics">The Senior Class Campaign will be nothing without the participation of our seniors. We are aiming to have at least a 50% participation from the senior class. Let's show Cornell that we are the best class ever.</p>
                </div>
            </div>
            <div class="column">
                <div class="columntext">
                    <h1>OUR GOAL</h1>
                    <p class="italics">Because we are the great Class of 2016, we are asking that each senior give $20.16 to the SCC. But, this amount is not set in stone. Whether you decide to give more or less, the most important thing is that you give.</p>
                </div>
            </div>
            <div class="column">
                <div class="columntext">
                    <h1>WHERE YOU COME IN</h1>
                    <p class="italics"> It's never to late to donate or to help out with the campaign. Spread the word about the Senior Class Campaign. Get your friends involved and see the tremendous impact that you can make here at Cornell.</p>
                </div>
            </div>
            <br style="clear:both"><br>
            <br><br>
        </div>
    
    <?php
	//Footer nav links and credits
	//Calls on footer.php
	include('php/footer.php')
    ?>

    </body>

</html>
