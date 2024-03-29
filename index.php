<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Assignment 1" />
        <meta name="keywords" content="HTML, CSS" />
        <meta name="author" content="s103494172"  />
        <!--Linking my css file. Keep in same folder for it to work-->
        <link rel="stylesheet" type="text/css" href="./styles/style.css">
        <link rel="stylesheet" id="theme-style" href="">

        <!--Adding fonts from google fonts-->
        <!--FONT VT32-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet"> 
        <!--Font AMATIC SC-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet"> 
        <!--Font Press Start 2P-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet"> 
        <!-- Link to Javascripts -->
        <script src="./scripts/enhancements.js" defer></script>
        <title>Shakdart</title>
    </head>
    <body>
    <?php include_once "header.inc";?>
    <div class="index-main-wrapper">
        <div class="s1">
            
            <div class="co-name">
                <h1>SHaCKDART</h1>
                
            </div>
            <p>It's Plankton here. Chief Technical Officer at Shockdart</p>
            <p>Shockdart is working to help startups set-up their security solutions easily.</p>
            <p>startups often miss out on strengthening their security because of budgets, so we at Shockdart want startups to never compromise their security. We aim to provide world class security solutions to startups at an affordable cost.</p>
            <p> It's <strong>your</strong> dream company after all</p>
        </div>

        <div class="s2">
            <section class="why-text">   
                <h3>Why work with us?</h3>
                <p>Ofcourse we are not FAANG, but we offer great<br> benifits and WLB for our employees.<br>Squidward also left KrustyKrab and Bikini Bottoms to work with us<br>so what's holding you back?</p>
                <p>Your goals align with ours? Then join us!<br>If it doesn't still join us, we'll align our goals with yours!</p>
                <p>Who knows Spongebob might join us later...</p>
            </section>
                <aside class="squid-reveal">
                    <div class="img-frame">
                        <figure>
                            <img src="./images/squidward.jpg" alt="Employee Of the Decade" >
                        </figure>
                    </div>
                    <aside>
                        <p>Employee of the decade: Squidward</p>                   
                        <p><em>"I hate Spongebob."</em></p>
                    </aside>
                </aside>  
        </div>
        <div class="s3">
                <p>Check out our available positions</p>
            <div>
                <br>
                
                <a  href="jobs.php">Join Us!</a>
            </div>
        </div>
    </div>
        <?php include_once "footer.inc"; ?>
    </body>
</html>
