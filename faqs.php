<?php
    //Calls on header.php for <head> tags
    include('php/header.php');
?>

    <body>
	<?php
	//NAVIGATION: calls on navigation.php
	//Calls on banner.php
	    $current = "FAQS";
	    include('php/navigation.php');
	    include('php/banner.php');
	?>

       <div id="container">
            <div class="content">
                <h2>OTHER FAQS</h2>
                <h3>ANSWERED RIGHT HERE</h3>
                <br><br>
                <p class="question">Can I designate my gift to a specific part of Cornell?</p>
                <p class="answer">Gifts to the Cornell Annual Fund provide unrestricted support for Cornell, which allows the university to put funds to use wherever the need is greatest. However, you are welcome to designate your gift to any area of Cornell.To designate your gift on our online giving page, please click on the first drop-down menu, titled "gift designation," and click on the college or unit to which you'd like to direct your gift. Then, click on the second drop-down menu, titled "to support" to select the Cornell Annual Fund.</p>
                <br>
                <p class="question">What is the matching gift program?</p>
                <p class="answer">Contact your Human Resources office to see if your organization matches charitable gifts to Cornell. If so, they can provide you with the form(s) you need to fill out and send to Cornell University, PO Box 25842, Lehigh Valley, PA 18003-9692. If your employer offers a matching gift program you may be able to double or even triple your gift to Cornell!</p>
                <br>
                <p class="question">Will my gift be eligible for tax credit?</p>
                <p class="answer">Yes. Official receipts will be issued.</p>
                <br>
                <p class="question">What is Cornell's tax ID number?</p>
                <p class="answer">Cornell's tax ID number is 150532082.</p>
                <br>
                <p class="question">It seems like Cornell has a lot of money already. Will my gift make a difference?</p>
                <p class="answer">Yes. Unrestricted gifts to the Cornell Annual Fund provide the greatest flexibility for each college or program to meet its most pressing needs. Your gifts are a significant, and vital, source of support. Deans and directors spend $13 million in annual funds each year to meet critical priorities. It would take an additional $325 million in Cornell's endowment to fund that spending. And remember, 75 percent of unrestricted gifts to Cornell are $250 or less. Every gift does count!</p>
                <br><br>
            </div>
        </div>
    
    <?php
	//Footer nav links and credits
	//Calls on footer.php
	include('php/footer.php')
    ?>

    </body>

</html>
