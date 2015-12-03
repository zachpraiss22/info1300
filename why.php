<?php
    //Calls on header.php for <head> tags
    include('php/header.php');
?>

    <body>
	<?php
	//NAVIGATION: calls on navigation.php
	//Calls on banner.php
	    $current = "WHY";
	    include('php/navigation.php');
	    include('php/banner.php');
	?>


        <div id="container">
            <div class="content">
                <h1>WHY</h1>
                <h3>SHOULD I GIVE BACK?</h3>
                <br><br>
                <p>There are many reasons for why you should give back to Cornell through the Senior Class Campaign. Just reflecting for a moment, this place has transformed each and every one of our lives in so many ways that we will forever carry with us throughout the rest of our lives.</p>
                <br>
                <p>At the same time, there are many questions that should be addressed to help you better understand why this campaign is important and you should take a moment to give back today.</p>
            </div>
            <br>
              <div class="column1">
                <div class="columntext">
                    <h1>BUT I&#8217;VE ALREADY GIVEN ENOUGH</h1>
                    <p class="italics">Of course, we&#8217;ve all paid our tuition bills to attend Cornell, but this is our chance to give back to the specific programs, institutions, or clubs that have been so formative in our time here. Let&#8217;s make sure those continue to thrive for students after us.</p>
                </div>
            </div>
            <div class="column">
                <div class="columntext">
                    <h1>CORNELL NEED&#8217;S MORE OF MY MONEY?</h1>
                    <p class="italics">Did you know that a large portion of the university&#8217;s operating budget comes from philanthrophy and not just your tuition? Cornell is a non-profit that works and thrives thanks to the generous donations of its students and alumni.</p>
                </div>
            </div>
            <div class="column">
                <div class="columntext">
                    <h1>I DON&#8217;T HAVE ANYTHING TO GIVE</h1>
                    <p class="italics">We&#8217;re not talking about a sizable donation. Most of our donations are small sums, averaging around $20. We recommend making whatever size donation you feel most appropriate. Even a small bit can go a long way.</p>
                </div>
            </div>
            <br style="clear:both"><br>
        </div>
    
    <?php
	//Footer nav links and credits
	//Calls on footer.php
	include('php/footer.php')
    ?>

    </body>

</html>
