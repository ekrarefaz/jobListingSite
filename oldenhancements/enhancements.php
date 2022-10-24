<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Assignment 1" />
    <meta name="keywords" content="HTML, CSS" />
    <meta name="author" content="s103494172"  />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Linking my css file. Keep in same folder for it to work-->
    <link rel="stylesheet" type="text/css" href="./styles/style.css">
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
    <!-- Link to JS -->
    <script src="./scripts/enhancements.js" defer></script>
    <title>Enhancements</title>
</head>
<body>
    <?php include_once "header.inc"; ?>
    <div class="enhance-wrapper">
        <section class="enhance-1">
            <h3>Responsive Design for Apply Page</h3>
            <p>
                I used Media Query to make the Apply Page with Form Responsive to Mobile devices.
                When the viewport width is less than 800px
            </p>
            <div class="first-row-wrapper">
                <p>
                    The Navbar Switches from <em>display:flex</em> --> <em>display:inline-block</em><br>
                    to fit into the width of mobile devices <br> <a href="./apply.php" class="link-to">View Responsive Layout</a>
                </p>
                <img src="./images/rsz_responsive-navbar.png" alt="responsive navbar">
            </div>
            <div class="second-row-wrapper"> 
                <p>Then Grid Layout Changes from two-columns to one-column.<br>
                    The responsive page can viewed by pressing <em>Ctrl + Shift + M</em>
                </p>
                <img src="./images/rsz_responsive-page.png" alt="responsive grid layout">
            </div>
        </section>
        <section class="enhance-2">
            <h3>Grid Layout on Jobs Page</h3>
            <div class="third-row-wrapper">
                <p>
                    The whole layout of the jobs page and apply page is done by CSS grid.
                    The Grid has two columns and multiple rows defined by grid-template-rows and grid-template-columns.
                    Then the layout is set using the css element grid-template-areas.<br>
                    The layout can be observed using the Browser Developer Tools.<br><a href="./jobs.php" class="link-to">View Grid</a>
                </p>
                <img src="./images/grid2.png" alt="Grid Layout Image">
            </div>
        </section>
    </div>
    <? include_once "footer.inc";?>
</body>
</html>