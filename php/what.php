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
                <h1>WHAT</h1>
                <h3>IS THE SENIOR CLASS CAMPAIGN?</h3>
                <br><br>
                <p>The Senior Class Campaign (SCC) is an annual fundraising campaign organized by the graduating senior class of Cornell University to celebrate our school spirit, enhance the ties that bind us together as a community, and give up back to the insititution.</p>
                <br>
                <p>This is our chance as the Class of 2016 to celebrate and commemorate the experiences, memories, and friendships we&#8217;ve made in our time here at Cornell.</p>
                <br><br>
            </div>
	    <!-- Calls on slideshow.php for images -->
	    <?php
	        include('slideshow.php');
	    ?>
            <script type="text/javascript">
                jQuery(document).ready(function($) {
        
                    $('#banner-slide').bjqs({
                        animtype: 'slide',
                        height: 320,
                        width: 620,
                        responsive: true,
                        randomstart: true
                    });
                });
            </script>
        </div>
    
    <?php
	//Footer nav links and credits
	//Calls on footer.php
	include('footer.php')
    ?>

    </body>

</html>
