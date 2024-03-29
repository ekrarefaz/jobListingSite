<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Assignment 1" />
        <meta name="keywords" content="HTML, CSS" />
        <meta name="author" content="s103494172"  />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <script src="./scripts/script.js" defer></script>
        <title>Job Lisitings</title>
    </head>
    <body id="jobsbody">
    <?php include_once "header.inc"; ?>
        <div class="main-wrapper">
            <section class="text-wrapper">
                <h1>We are Hiring !</h1>
                <h4>Check out our openings</h4>
                <p>Currently there are two vacant positions we're looking to fill.<br>Passionate and team-oriented individuals are welcome to apply</p>
                <h5>Our Location</h5>
                <p>We have offices at 3 Locations around the world.Our Office in <em>Australia</em> is situated in the stunning city of <em>Melbourne.</em><br>and for Sweden we are in the cosmopolitan city <em>Sundsvall</em></p>
                <p> **These openings are for <em>Sweden</em> and <em>Australian</em> offices only.</p>
            </section>
        
            <section class="p1-intro">
                <h4>Network Architect</h4>
                <p><strong>Ref No. AX39B</strong></p>  
                <p>Salary Range: 75k-100k AUD</p> 
                <div>
                    <br>
                    <a class="apply-btn" id="job1-apply" href="apply.php">Apply!</a>
                </div> 
            </section>
            <section class="p2-intro">
                <h4>Junior System Administrator</h4>
                <p><strong>Ref No. B6Z20</strong></p>
                <p>Salary Range: 70k-80k AUD</p>
                <div>
                    <br>
                    <a class="apply-btn" id="job2-apply" href="apply.php">Apply!</a>
                </div>
            </section>
            <section class="p1-des">
                <h3>Network Architect</h3>
                <p><em>Ref No. AX39B</em></p>
                <article>
                    <h6>The primary role of Network architect is to maintain our uptime and infrastructure.Make network exansions and routine maintainence. Since we provide security solutions we expect our network architects to build and maintain networks with highest Security priority in mind.</h6>
                </article>
                <p>Salary Range: 75k-100 AUD</p>
                <p><strong>Qualifications</strong></p>
                <ul>
                    <li>Bachelor of Computer Science or IT</li>
                    <li>Certified in CCNA/CCNP or Comptia Network+/Security+</li>
                    <li>At least 1year of relevant industry experience</li>
                </ul>

            </section>
            <section class="p2-des">
                <h3>Jr. System Administrator</h3>
                <p><em>Ref No. B6Z20</em></p>
                <p>Salary Range: 70k-85 AUD</p>
                <p><strong>Qualifications</strong></p>
                <ul>
                    <li>Certified in RHCA/RHCE or Comptia Linux+</li>
                    <li>At least 1 yr experience in any IT support role.</li>
                </ul>
                <article>
                    <h6>Our company provides security solutions to tech-startups so we want our junior system administrators to maintain our *nix servers. Jr. Sysadmins are also responsible for maintainence of on-site employee machines and access controls. Besides, some time has to be spent on our IDS,IPS systems</h6>
                </article>
            </section>
            <section class="p1-eskills">
                <h6>Essential Skills</h6>
                <ol>
                    <li>Familliar with Cisco Proprietory Tools</li>
                    <li>Advanced understanding of Network Infrastucture</li>
                    <li>Experience in Large Network Maintainence and Expansion</li>
                    <li>Support system uptime and maintenance</li>
                </ol>
            </section>
            <section class="p1-preskills">
                <h6>Preferred Skills</h6>
                <ol>
                    <li>Basic Knowledge of Network Security i.e IDS,IPS,Firewall,Honeypotting etc</li>
                    <li>Understanding of network socket programming with python</li>
                    <li>Famillarity with Linux and Unix based OS</li>
                </ol>
            </section>
            <section class="p2-eskills">
                <h6>Essential Skills</h6>
                <ol>
                    <li>Administrating Linux and Unix Servers</li>
                    <li>Monitoring System with and Configuring various opensource monitoring tools.</li>
                    <li>Manage services various opensource and enterprise virtualization tools</li>
                    <li>Monitoring Application with Oracle Enterprise Manager</li>
                </ol>
            </section>
            <section class="p2-preskills">
                <h6>Preferred Skills</h6>
                <ol>
                    <li>Vulnerability assesment</li>
                    <li>At least proeficient in C and shell scripting</li>
                    <li>Knowledge of basic OS security, system hardening, access control and SELinux policy</li>      
                </ol>
            </section>
        </div>
            <div class="jobs-btn-wrapper">
                <div>
                    <br>
                    <a class="apply-btn" href="apply.php">Apply!</a>
                </div>
                <br>
                <div>
                    <br>
                    <a class="home-btn" href="index.php">Home</a>
                </div>
            </div>
            <br>
            <?php include_once "footer.inc"?>
    </body>
</html>