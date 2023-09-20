<?php

$title = "Raffles";

include "header.php";
require "dbconn.php";

$sql = "SELECT * FROM raffles";
$querry = $conn->prepare($sql);

$retdata = $querry->execute();

$raffles = $querry->fetchAll(PDO::FETCH_OBJ);

?>

<style>

</style>
</head>
<center>
    <p></p>
</center>

<div class="restsec2">
    <?php foreach ($raffles as $samp): ?>
        <div class="rafcard">
            <img src="<?php echo $samp->picture; ?>" alt="">
            <!-- <img src="static/images/abt_50.jpg" alt=""> -->
            <div class="detail">
                <!-- <h4><?php echo $samp->company; ?></h4> -->
                <h4>
                    <?php echo $samp->reason; ?>
                </h4>
                <h6>@
                    <?php echo $samp->hostname; ?>
                </h6>
                <h5> Draws
                    <?php echo $samp->enddate; ?>
                </h5>
                <!-- <h4><?php echo $samp->enddate; ?></h4> amount paid -->
            </div>
            <p><a href="paypal/payment.php">Buy tickets</a></p>
        </div>

    <?php endforeach ?>
</div>


<?php
include "footer.php";
?>

<style>
    /* raffle cards */
    .restsec2 {
        padding: 2rem;
        display: grid;
        grid-template-columns: repeat(3, 1.2fr);
        gap: 1rem;
    }

    .rafcard {
        display: grid;
        grid-template-columns: repeat(2, 50%);
        gap: 1rem;
        grid-template: 0.3rem;
        border-radius: .2rem;
        height: 10rem;
        background: #fff;
        padding: 0.8rem;
        align-items: center;
        box-shadow: 1px 1px 3px grey;
        align-items: center;
    }

    .rafcard h4 {
        font-weight: 400;
    }

    .rafcard img {
        width: 95%;
        height: 7rem;
        border-radius: .2rem;
    }

    .rafcard .detail {
        padding: 0.5rem;
        height: 80%;
    }

    .rafcard p a {
        background: blue;
        color: white;
        border-radius: .2rem;
        padding: .3rem;
    }

    @media (max-width: 756px) {
        .restsec2 {
            padding: 1rem;
            /* display: grid; */
            grid-template-columns: auto;
            /* gap: 1rem; */
        }

        .rafcard {
            height: auto;
        }
    }
</style>