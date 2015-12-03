<!--
Author: Karen Zhou
Date last modified: Nov. 30, 2015
footer.php is called on by all the other pages.
-->

<div id="footer">
    <nav>
        <?php
            echo "<ul>";
            $nav = array(
                "WHO" => "index.php",
                "WHAT" => "what.php",
                "WHEN" => "when.php",
                "WHERE" => "where.php",
                "WHY" => "why.php",
                "HOW" => "how.php",
            );
            
            foreach ($nav as $key => $value){
                if($key == $current){
                    echo "<li><a class='link' id='currentf' href=" . $value . ">" . $key . "</a></li>";
                }else{
                    echo "<li><a class='link' href=" . $value . ">" . $key . "</a></li>";
                }
                
            }
            echo "</ul>";
        ?>
    </nav>
</div>

<div id="bottom">
    <nav>
        <?php
            echo "<ul>";
            $nav = array(
                "OTHER FAQs" => "faqs.php",
                "OUR TEAM" => "team.php",
                "JOIN US" => "join.php",
                "CONTACT US" => "contact.php"
            );
            
            foreach ($nav as $key => $value){
                if($key == $current){
                    echo "<li><a class='link' id='currentf1' href=" . $value . ">" . $key . "</a></li>";
                }else{
                    echo "<li><a class='link' href=" . $value . ">" . $key . "</a></li>";
                }
                
            }
            echo "</ul>";
        ?>
    </nav>
            <div id="credits">
                <a href="http://www.facebook.com/CornellSCC2016/" target="_blank"><img src="img/facebook.png" alt="Facebook logo" class="media"></a>
                <a href="http://www.instagram.com/cuseniors16/" target="_blank"><img src="img/instagram.png" alt="Instagram logo" class="media"></a>
                <p class="email"><a class="email" href="mailto:seniorclasscampaign@gcornell.edu.com">seniorclasscampaign@cornell.edu</a></p>
                <p class="credits">
                Image Source: <a href="http://www.cornellseniorclasscampaign2016.com" target="blank_">cornellseniorclasscampaign2016.com</a>
                <br>
                Gallery Code from: <a href="http://basic-slider.com" target="blank_">basic-slider.com</a>
                <br>
                Logo courtesy of Cornell University 
                </p>
                <br>
                <img src="img/CULogo.png" alt="Cornell logo" id="large_logo">
            </div>
</div>
