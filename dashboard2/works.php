<?php
// session_start();
$title = "How it works";
// Initialize the session
// Check if the user is logged in, if not then redirect him to login page
// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//     header("location: login.php");
//     exit;
// }
include "header.php";
?>

<style>
    .main {
        background: url("static/images/mockup.jpg") no-repeat;
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
    <!-- <center> -->
    <div class="abttxt">
        <h2>How RaffleItApp works</h2>
        <p></p>
    </div>
    <!-- </center> -->
</div>
<div class="restsect">
    <center>
        <div class="tops">
            <h4>What is a Raffle?</h4>
            <p>A raffle is an activity that may be used to give persons an
                opportunity to win a prize at a low cost or for fundraiser where upon completion of
                the raffle, the prize goes to the winner and 50% goes to host [the person issuing the raffle.
                <!-- randomly* selected winner. -->
            </p>
            <span style="font-family: cursive;">*Winners are selected using a 3rd party, verified, and secure Random
                Number Generator.</span>
        </div>
    </center>
</div>
<div class="picsec2">
    <div class="imgtags">
        <img src="static/images/img1.png" alt="">
        <div class="txt">
            <h4>Host creates and shares raffle event</h4>
        </div>
    </div>
    <div class="imgtags">
        <img src="static/images/img2.png" alt="">
        <div class="txt">
            <h4>Supporter buys tickets for your raffle</h4>
        </div>
    </div>
    <div class="imgtags">
        <img src="static/images/img3.png" alt="">
        <div class="txt">
            <h4>Event ends and winner is chosen at random</h4>
        </div>
    </div>
    <div class="imgtags">
        <img src="static/images/img4.png" alt="">
        <div class="txt">
            <h4>Funds electronically distributed</h4>
        </div>
    </div>
</div>

<div class="funcs">
    <div class="imgtags" style="text-align: left; list-style: disc;">
        <div class="txt" style="list-style: disc;">
            <h2>Host creates and shares raffle event</h2>
            <h4>How to start a raffle</h4>
            <ul>
                <li>Create an account by clicking here or download the iOS or Android app</li>
                <li>Click “Host a Raffle”</li>
                <li>Set up the event</li>
                <li>Share and fundraise</li>
            </ul>
            <h4>Suggested uses</h4>
            <ul>
                <li>Stand alone raffle - Host virtual or in-person charitable events.</li>
                <li>Single or recurring raffle - Host one or multiple raffles, it's up to you.</li>
                <li>Supplemental raffle - Use in conjunction with a main event.</li>
                <li>Hours to days - Set your event to run for an hour all the way up to a year.</li>
            </ul>
            <h4>Account</h4>
            <ul>
                <li>Personalize your raffle - Add logos and a description to attract new donors.</li>
                <li>Sharable links - Promote your event with a unique link just for you.</li>
                <li>Data and metrics - Review insights and measure the success of events.</li>
            </ul>
            <h4>Payment, fees, and legal</h4>
            <ul>
                <li>Payment Processing - Fully integrated. 100% safe and secure & PCI compliant. No need to source
                    your own credit card/payment processor.</li>
                <li>Payout - Funding is automated and fast. Host payout checks are initiated immediately upon draw.
                    Estimated delivery time is 5-7 business days. *ACH option made available to credentialed organizations</li>
                <li>Shipping and handling fees will be deducted to send price to location</li>
                <li>Legal - It's advised to check with your local and state rules</li>
                <li>(*) Denotes future availability</li>
            </ul>
        </div>
    </div>
    <div class="imgtags" style="text-align: left; list-style: disc;">
        <div class="txt" style="list-style: disc;">
            <h2>Supporter buys tickets for your raffle</h2>
            <h4>How to buy tickets</h4>
            <ul>
                <li>Create an account by clicking here or download the iOS or Android app</li>
                <li>Search charities and raffles</li>
                <li>Buy tickets to as many raffles as you'd like</li>
            </ul>
            <h4>Features</h4>
            <ul>
                <li>Share the raffle - Link sharing to increase fundraising and potential winnings.</li>
                <li>Create a watchlist - Never miss out by following your favorite charities and raffles.</li>
                <li>Raffle notifications - Push notifications and alerts for raffle countdowns and winnings.</li>
            </ul>
            <h4>Payment, fees, and legal</h4>
            <ul>
                <li>Payout - Funding is automated and fast. Raffle winners receive prizes within 3-5 business
                    days after depending on the country the prize would be shipped to.</li>
                <li>Payouts managed directly via our enterprise level host organizations can
                    take longer due to withholding requirements</li>
                <li>Legal - It's advised to check with your local and state rules.</li>
            </ul>
        </div>
    </div>
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
