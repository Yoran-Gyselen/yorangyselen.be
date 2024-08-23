<?php include_once 'db_connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="copyright" content="Property of Yoran Gyselen">
    <meta name="keywords" content="yoran gyselen">
    <meta name="description" content="Website van Yoran Gyselen">
    <meta name="robots" content="index,follow">
    <!-- Stylesheets & Icons -->
    <link rel="stylesheet" href="style/css/index.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="icon" href="images/icons/icon_dark.png" media="(prefers-color-scheme: light)">
    <link rel="icon" href="images/icons/icon_light.png" media="(prefers-color-scheme: dark)">
    <!-- Title -->
    <title>Yoran Gyselen</title>
    <!-- Scripts -->
    <script defer src="js/index.js"></script>
</head>
<body>
    <header id="background">
        <nav id="nav-menu">
            <span>
                <a href="/">Yoran Gyselen</a>
                <i class="fa-solid fa-bars" id="hamburger-menu"></i>
            </span>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="https://github.com/Yoran-Gyselen">Github</a></li>
                <li><a href="https://www.instagram.com/yoran_gyselen">Instagram</a></li>
                <li><a href="https://www.twitter.com/YGyselen">Twitter</a></li>
                <li><a href="https://www.linkedin.com/in/yoran-gyselen/">LinkedIn</a></li>
            </ul>
        </nav>
        <section>
            <h1 id="background-title">Yoran Gyselen</h1>
            <h2>
                <i class="fa-solid fa-code"></i>
                <i class="fa-solid fa-mug-hot"></i>
                <i class="fa-solid fa-robot"></i>
            </h2>
        </section>
    </header>
    
    <main>
        <article id="who-am-i" class="hidden">
            <h1>Who am i?</h1>
            <div id="who-am-i-content">
                <img src="images/ProfilePicture.jpeg" alt="">
                <p>
                    Hi 👋, I'm Yoran. Welcome to my corner of the internet! I'm 
                    <?php 
                        $now = date_create();
                        $birthday = date_create('2004-09-30');

                        $interval = date_diff($now, $birthday);
                        echo $interval->format('%y');
                    ?> 
                    and currently a third year Computer Science student with a passion for everything technology-related. Hit me up via email or via one of my socials!
                </p>
                <h2>Yoran Gyselen</h2>
            </div>
        </article>
        <hr class="hidden">
        <article id="social-media" class="hidden">
            <h1>Social Media</h1>
            <div id="social-media-logos">
                <a href="https://www.facebook.com/yoran.gyselen/"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/yoran_gyselen/"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.youtube.com/@yorangyselen"><i class="fa-brands fa-youtube"></i></a>
                <a href="https://github.com/Yoran-Gyselen"><i class="fa-brands fa-github"></i></a>
                <a href="https://twitter.com/YGyselen"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://www.linkedin.com/in/yoran-gyselen/"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </article>
        <hr class="hidden">
        <article id="quote" class="hidden">
            <h1>Quote of the Day</h1>
            <div id="quote-content">
                <h2>&#8220;</h2>
                <?php
                    if(!$connection) exit(1);

                    $query = "SELECT * FROM `quotes`;";
                    $result = mysqli_query($connection, $query);
                    
                    $rowcount = mysqli_num_rows($result);
                    
                    srand(date('Ymd'));
                    $random_id = rand(1, $rowcount);

                    while($row = mysqli_fetch_assoc($result)) {
                        if($row['quote_id'] == $random_id) {
                            echo '<p>' . $row['quote_text'] . '</p>';
                            echo '<h3>' . $row['quote_owner'] . '</h3>';
                        }
                    }

                    mysqli_close($connection);
                ?>
            </div>
        </article>
    </main>

    <footer>
        <div>&copy; Yoran Gyselen, <?php echo date("Y"); ?></div>
        <div><a href="mailto:yoran@gyselen.be">yoran@gyselen.be</a></div>
    </footer>
</body>
</html>