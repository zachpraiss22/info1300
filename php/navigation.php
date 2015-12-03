<!--
Author: Karen Zhou
Date last modified: Nov. 30, 2015
navigation.php is called on by all pages
The top navigation bar
-->

<header>
    <a href="index.php"><img src="img/logo.png" alt="Cornell logo" id="logo"></a>
    <nav>
        
        <?php
            echo "<ul>";
            $nav = array(
                "WHO" => "index.php",
                "WHAT" => "what.php",
                "WHEN" => "when.php",
                "WHERE" => "where.php",
                "WHY" => "why.php",
                "HOW" => "how.php"
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
</header>