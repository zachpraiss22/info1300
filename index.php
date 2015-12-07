<?php
    //Calls on header.php for <head> tags
    include('php/header.php');
?>

    <body>
	<?php
	//NAVIGATION: calls on navigation.php
	//Calls on banner.php
	    $current = "WHO";
	    include('php/navigation.php');
	    include('php/banner.php');
	?>

        <div id="container">
            <div class="content">
                <h1>WHO</h1>
                <h3>IS THE CORNELL CLASS OF 2016?</h3>
                <br><br>
                <p>Hailing from all over the United States and from 46 different countries from across the world, the Class of 2016 came into Cornell as one of the most diverse and talented classes in the university&#8217;s history.</p>
                <br>
                <p>In the past four years, we&#8217;ve come together as a class and as a community in calling this place our home. From academics to athletics to extracurriculars, it&#8217;s an understatement to say we&#8217;ve come so far.</p>
                <br><br>
            </div>
	    <?php
            include('php/button.php');
        ?>
        <br>
	    <!-- Calls on slideshow.php for images -->
	    <?php
	        include('php/slideshow.php');
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
	include('php/footer.php')
    ?>

    </body>

</html>
