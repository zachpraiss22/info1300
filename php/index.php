<?php
  $title = "Senior Class Campaign";
  include('header.php');
?>

<body>
  <?php
    include('navigation.php');
  ?>

  <?php
    $topic = "HOME";
    include('banner.php');
  ?>


<div id="container">
    <div class="content">
      <p>The Senior Class Campaign (SCC) is an annual fundraising campaign
      organized by the graduating senior class of Cornell University to
      celebrate our school spirit, enhance the ties that bind us together
      as a community, and give up back to the insititution.</p>
        <br>
        <br>
        <div id="banner-slide">
            <ul class="bjqs">
                <li><img src="../img/gallery1.jpg" alt="Cornell Clock Tower" ></li>
                <li><img src="../img/gallery2.jpg" alt="Cornell Class of 2016 Sign" ></li>
                <li><img src="../img/gallery3.jpg" alt="Cornell Class of 2016 Students"></li>
                <li><img src="../img/gallery4.jpg" alt="Cornell Class of 2016 Students" ></li>
                <li><img src="../img/gallery5.jpg" alt="Cornell Class of 2016 Students" ></li>
                <li><img src="../img/gallery6.jpg" alt="Cornell Class of 2016 Students" ></li>
                <li><img src="../img/gallery7.jpg" alt="Cornell Class of 2016 Students" ></li>
                <li><img src="../img/gallery8.jpg" alt="Cornell Class of 2016 Students" ></li>
                <li><img src="../img/gallery9.jpg" alt="Cornell Class of 2016 Students" ></li>
                <li><img src="../img/gallery10.jpg" alt="Cornell Class of 2016 Students" ></li>
            </ul>
        </div> <!--banner-slide-->
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
        <br><br>
        <p class="credits">
            Image Source: <a href="http://www.cornellseniorclasscampaign2016.com" target="blank_">cornellseniorclasscampaign2016.com</a>
            <br>
            Gallery Code from: <a href="http://basic-slider.com" target="blank_">basic-slider.com</a><br>
            Logo Courtesy of Cornell University
        </p>
    </div><!--content-->
</div><!--container-->   
</body>
</html>
