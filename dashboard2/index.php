<?php
// session_start();
$title = "Raffleitapp";
include "header.php";
?>
<style>
    .main {
        background: linear-gradient(to bottom, rgba(17, 17, 17, 0.52), rgba(17, 17, 17, 0.52)),
            url('static/images/donat.jpg') no-repeat;
        background-size: cover;
        height: 80vh;
        padding: 1.5rem;
    }

    @media (max-width: 756px) {
        .main {
            height: 50vh;
        }
    }

    @media (max-width: 1300px) {
        .main {
            height: 100vh;
        }
    }
</style>

<div class="main">
    <div class="maintxt">
        <h2>THE BEST SPACE TO <br>DO YOUR FUNDING</h2>
        <p>Raffleit is a supplementary fundraising solution that's engaging, expands audience reach & boosts
            donations.</p>
    </div>
</div>
<div class="restsect">
    <center>
        <div class="tops">
            <h4>HOW RAFFLEIT WORKS</h4>
            <p>The winner gets the price, the person or company who issues the raffle receives 50% of the total </p>

        </div>
        <div class="tops">
            <h4>FOR CHARITY DONATIONS</h4>
            <h5>NOTE: THIS IS FOR DONATIONS WHICH IS NOT PART OF THE RAFFLE: THESE ARE FOR PERSONS WHO MAY WANT TO DONATE BUT IS NOT TAKING PART IN THE RAFFLE
                90% goes to the charity
            </h5>
            <p>The agreed amount goes to the charity, and the agreed price goes to the lucky winner. Participants
                now get the chance to donate to a good cause and have the chance of winning themselves!
                It's a DO GOOD, HAVE FUN event.</p>
            <!-- <div class="allbtns">
                <a href="works.php" id="btn2">LEARN MORE</a>
            </div> -->
        </div>
        <div class="tops">
            <h4>HOW RAFFLEITAPP ATTRACTS INDIVIDUALS AND DONORS</h4>
            <p>RaffleItApp connects your raffle to persons and donors outside of your community so they can take
                 part in the raffle or donate remotely to your cause. Revolutionize raffles and fundraising!</p>
        </div>
    </center>
    <div class="picsec">
        <div class="imgtags">
            <!-- <img src="static/images/team.jpeg" alt=""> -->
            <div class="txt">
                <h4>Simple & Secure</h4>
                <p>Set up a raffle in minutes, for free. No credit card required. 
                    Integrated PCI-compliant payment process to collect prices or donations simply, securely 
                    and remotely depending on the situation.</p>
            </div>
        </div>
        <div class="imgtags">
            <!-- <img src="static/images/team.jpeg" alt=""> -->
            <div class="txt">
                <h4>Customizable</h4>
                <p>Create a personalized raffle page. Set the duration as long as you'd like. Great 
                    for stand-alone raffles or to supplement an existing one.</p>
            </div>
            <!-- <div class="allbtns">
                <a href="createraffle.php" id="btn2">START HERE</a>
                <a href="createraffle.php" id="btn1">DONATIONS</a>
            </div> -->
        </div>
        <div class="imgtags">
            <!-- <img src="static/images/team.jpeg" alt=""> -->
            <div class="txt">
                <h4>Seamless</h4>
                <p>Electronic tickets. Share links and QR codes at your fingertips. Automated raffle countdown, 
                    winner selection and payout. Plus analytics!</p>
            </div>
        </div>
    </div>

    <div class="side">
        <div class="sect">
            <img src="static/images/act.jpg" alt="">
            <div class="txt">
                <h4>Raffles Meet Mobile <br> Conveniently Raffle from Anywhere</h4>
                <p>Anyone can raffle from the comfort of their home or business. Additionally,
                    with built in share features, they can spread awareness of your business,
                    your product or charity or nonprofit.</p>
            </div>
        </div>
        <div class="sect">
            <img src="static/images/cheering.jpg" alt="">
            <div class="txt">
                <h4>No hardware.<br>No paper tickets. <br>No cash to manage.</h4>
                <p>Let the technology do the work. With no “stuff” or volunteers to manage,
                    you can now effortlessly rollout enterprise level raffles more efficiently.</p>
            </div>
            <!-- <img src="static/images/cheering.jpg" alt=""> -->
        </div>
        <div class="sect">
            <img src="static/images/donation.jpg" alt="">
            <div class="txt">
                <h4>More Than a Donation <br>It's an Experience.</h4>
                <p>Elevate your game and create engaging digital company raffles, individual
                    raffles or fundraisers that help your cause or brighten the day of a lucky winner.</p>
            </div>
        </div>
    </div>
    <center>
        <div class="tops">
            <h4>Live Support to Help You & Your Event</h4>
            <p>We're more than just a raffle platform. We're passionate about
                fundraising and dedicated to helping you run a successful event for
                your charity. Please don't hesitate to contact us with any questions you might have.

            </p>
        </div>
    </center>
</div>
<?php
include "new.php";
?>
<!-- <center>
    <div class="allbtns">
        <a href="createraffle.php" id="btn2">Start Your Raffle Now</a>
        <a href="createraffle.php" id="btn1">Start Donation</a>
    </div>
</center> -->

<?php

include "footer.php";
