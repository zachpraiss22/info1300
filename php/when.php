<?php
    //Calls on header.php for <head> tags
    include('header.php');
?>

    <body>
	<?php
	//NAVIGATION: calls on navigation.php
	//Calls on banner.php
	    $current = "WHEN";
	    include('navigation.php');
	    include('banner.php');
	?>

        <div id="container">
            <div class="content">
                <h1>WHEN</h1>
                <h3>CAN I GIVE BACK?</h3>
                <br><br>
                <p>There&#8217;s no better time than right now to give back to the university through the Senior Class Campaign. It only takes a few minutes and you can choose where you want to donate within the university.</p>
                <br>
                <p>Giving back is a simple way for you to express your gratitude for everything you&#8217;ve gained in your time here at Cornell. Take a moment to give back today.</p>
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
