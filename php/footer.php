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
                    echo "<li><a class='link' id='current' href=" . $value . ">" . $key . "</a></li>";
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
            <li><a class="link" href="faqs.php">OTHER FAQs</a></li>
            <li><a class="link" href="team.php">OUR TEAM</a></li>
            <li><a class="link" href="join.php">JOIN US</a></li>
            <li><a class="link" href="contact.php">CONTACT US</a></li>
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
                    echo "<li><a class='link' id='current' href=" . $value . ">" . $key . "</a></li>";
                }else{
                    echo "<li><a class='link' href=" . $value . ">" . $key . "</a></li>";
                }
                
            }
            echo "</ul>";
        ?>
    </nav>
    <div id="credits">
        <p>
        Image Source: <a href="http://www.cornellseniorclasscampaign2016.com" target="blank_">cornellseniorclasscampaign2016.com</a>
        <br>
        Gallery Code from: <a href="http://basic-slider.com" target="blank_">basic-slider.com</a><br>
        Logo Courtesy of Cornell University
        </p>
    </div>
</div>