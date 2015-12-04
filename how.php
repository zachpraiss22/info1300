<?php
    //Calls on header.php for <head> tags
    include('php/header.php');
?>

    <body>
	<?php
	//NAVIGATION: calls on navigation.php
	//Calls on banner.php
	    $current = "HOW";
	    include('php/navigation.php');
	    include('php/banner.php');
	?>

        <div id="container">
            <div class="content">
                <h1>HOW</h1>
                <h3>CAN I GIVE?</h3>
                <br><br>
                <p>Giving back through the Senior Class Campaign (SCC) is simple and pain-free. You can choose to donate either through your bursar account or by credit card.</p>
                <br><br>
            </div>
	    <?php
            include('php/button.php');
        ?>
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
