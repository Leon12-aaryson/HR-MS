<?php
session_start();
// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//     header("location: login.php");
//     exit;
// }

$title = "About Us";
include "header.php";

?>

<style>
    .main {
        /*background: url("static/images/donate.jpg") no-repeat;*/
        background: linear-gradient(to bottom, rgba(17, 17, 17, 0.52), rgba(17, 17, 17, 0.52)),
            url('static/images/donate.jpg');
        background-size: cover;
        height: 50vh;
        padding: 1.5rem;
    }

    @media (max-width: 756px) {
        .main {
            height: 45vh;
        }
    }
</style>

</head>

<div class="main">
    <center>
        <div class="abttxt">
            <h2>About RaffleItApp</h2>
            <p>Do Good. Have Fun.</p>
        </div>
    </center>
</div>
<div class="restsect">
    <div class="side">
        <div class="sect">
            <img src="static/images/abt.jpg" alt="">
            <div class="txt">
                <h4>RaffleItApp exists to help organizations easily <br>
                    raffle personal items, products from your company, raise funds & for<br>
                    everyone to have fun along the way.</h4>

                <p>Born from the belief that we can all Do Good & Have Fun,
                    RaffleItApp has set out to revolutionize raffle platform for the 21st century;
                    less work for anyone to run a raffle from the comfort of their homes and office.</p>

                <p>By leveraging technology and social sharing, we're creating a new category of incentivized,
                    gamified raffles and charitable giving.</p>

                <p>Our online platform seamlessly connects individuals, companies, organizations, clubs, charities
                    and more with virtually a limitless audience made available through the power of mobile
                    connectivity. This combined with an intuitive interface creates an engaging raffling experience
                    both on and off-site, providing everyone an exciting way to make a difference.</p>

                <p>Additionally, while our platform allows for raffles across state lines (where accepted) and in
                    turn enhances the raffling experience and audience reach for all. As the world embraces
                    technological advancements, We've built our platform not only for today, but also for tomorrow.
                    By providing an efficient and scalable solution for everyone to easily host raffles and access
                    clients, we're excited to take part in re-writing how raffles are conducted while having fun
                    in the process.</p>

                <!-- <p>It's our hope that as the world finds its new footing, charitable giving will be in stride with
                    these advancements and it's why we've built our platform not only for today, but also for
                    tomorrow. By providing an efficient and scalable solution for charities to easily host raffles
                    and access new donors, we're excited to take part in re-writing how people fundraise while
                    having fun in the process.</p>
            </div> -->
            </div>
        </div>
        
        <?php
        include "new.php";
        ?>
        <!-- <center>
            <div class="allbtns">
                <a href="createraffle.php" id="btn2">START FUNDRAISING</a>
            </div>
        </center> -->
        <?php
        include "footer.php";
