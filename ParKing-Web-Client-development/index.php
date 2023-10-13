<!DOCTYPE html>
<html lang="en">

<head>
    <title>ParKing</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="src/css/main.css">
    <link rel="stylesheet" href="src/css/colors-light.css" id="theme-style">
    <link rel="apple-touch-icon" sizes="180x180" href="src/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="src/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="src/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="src/img/favicon/site.webmanifest">
</head>

<body>
    <header class="header-container" id="header">
        <div class="header">
            <img src="src/img/logo.png" alt="ParKing" class="logo">
            <div class="header-links">
                <div class="header-links-clickable">
                    <a href="index.php" class="link">Homepage</a>
                    <a href="parking_list.php" class="link">Parking List</a>
                    <button class="btn btn-primary" onclick="window.location.href='login.php'">
                        <?php
                        if (!isset($_SESSION)) {
                            session_start();
                        }

                        if (!isset($_SESSION['username'])) {
                            echo "My Parking";
                        } else {
                            echo $_SESSION['username'];
                        }

                        ?>
                    </button>
                </div>
                <div>
                    <svg id="light-theme-toggle" class="theme-change" xmlns="http://www.w3.org/2000/svg" width="32"
                        height="32" viewBox="0 0 24 24">
                        <path fill="rgb(var(--primary-color))"
                            d="M12 5q-.425 0-.712-.288Q11 4.425 11 4V2q0-.425.288-.713Q11.575 1 12 1t.713.287Q13 1.575 13 2v2q0 .425-.287.712Q12.425 5 12 5Zm4.95 2.05q-.275-.275-.275-.688q0-.412.275-.712l1.4-1.425q.3-.3.712-.3q.413 0 .713.3q.275.275.275.7q0 .425-.275.7L18.35 7.05q-.275.275-.7.275q-.425 0-.7-.275ZM20 13q-.425 0-.712-.288Q19 12.425 19 12t.288-.713Q19.575 11 20 11h2q.425 0 .712.287q.288.288.288.713t-.288.712Q22.425 13 22 13Zm-8 10q-.425 0-.712-.288Q11 22.425 11 22v-2q0-.425.288-.712Q11.575 19 12 19t.713.288Q13 19.575 13 20v2q0 .425-.287.712Q12.425 23 12 23ZM5.65 7.05l-1.425-1.4q-.3-.3-.3-.725t.3-.7q.275-.275.7-.275q.425 0 .7.275L7.05 5.65q.275.275.275.7q0 .425-.275.7q-.3.275-.7.275q-.4 0-.7-.275Zm12.7 12.725l-1.4-1.425q-.275-.3-.275-.712q0-.413.275-.688q.275-.275.688-.275q.412 0 .712.275l1.425 1.4q.3.275.287.7q-.012.425-.287.725q-.3.3-.725.3t-.7-.3ZM2 13q-.425 0-.712-.288Q1 12.425 1 12t.288-.713Q1.575 11 2 11h2q.425 0 .713.287Q5 11.575 5 12t-.287.712Q4.425 13 4 13Zm2.225 6.775q-.275-.275-.275-.7q0-.425.275-.7L5.65 16.95q.275-.275.688-.275q.412 0 .712.275q.3.3.3.713q0 .412-.3.712l-1.4 1.4q-.3.3-.725.3t-.7-.3ZM12 18q-2.5 0-4.25-1.75T6 12q0-2.5 1.75-4.25T12 6q2.5 0 4.25 1.75T18 12q0 2.5-1.75 4.25T12 18Zm0-2q1.65 0 2.825-1.175Q16 13.65 16 12q0-1.65-1.175-2.825Q13.65 8 12 8q-1.65 0-2.825 1.175Q8 10.35 8 12q0 1.65 1.175 2.825Q10.35 16 12 16Zm0 0q-1.65 0-2.825-1.175Q8 13.65 8 12q0-1.65 1.175-2.825Q10.35 8 12 8q1.65 0 2.825 1.175Q16 10.35 16 12q0 1.65-1.175 2.825Q13.65 16 12 16Z" />
                    </svg>
                    <svg id="dark-theme-toggle" class="hide theme-change" xmlns="http://www.w3.org/2000/svg" width="32"
                        height="32" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M12 21q-3.75 0-6.375-2.625T3 12q0-3.75 2.625-6.375T12 3q.35 0 .688.025t.662.075q-1.025.725-1.638 1.888T11.1 7.5q0 2.25 1.575 3.825T16.5 12.9q1.375 0 2.525-.613T20.9 10.65q.05.325.075.662T21 12q0 3.75-2.625 6.375T12 21Z" />
                    </svg>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="hide-hamburger" width="42" height="42"
                        viewBox="0 0 24 24">
                        <path fill="none" stroke="rgb(var(--primary-color))" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M5 17h14M5 12h14M5 7h14" />
                    </svg>
                </div>
            </div>
        </div>
    </header>
    <div class="header-dropshadow"></div>
    <div class="container">
        <div class="hero-container">
            <div class="hero">
                <div class="hero-text">
                    <h1>Welcome to <b class="gradient-text">ParKing</b></h1>
                    <h2>The easiest way to find and reserve parking</h2>
                    <h3>
                        Whether you need a place to park for an hour, a day, or a week, <b
                            class="gradient-text">ParKing</b> has you covered. browse a list of available parking spaces
                        near you, see the price and location, and book them with a few taps.
                    </h3>
                </div>
                <img src="src/img/car.svg" alt="Car" class="hero-img dark-glow">
            </div>
        </div>
        <div class="functions">
            <h2 class="gradient-text dark-glow-text">How it works</h2>
            <div class="functions-container">
                <div class="function gradient-functions">
                    <h2 class="function-number">#1</h2>
                    <div class="function-info">
                        <img src="src/img/function1.svg" alt="function 1" class="function-img">
                        <div class="function-text">
                            <h2>Browse</h2>
                            <p>Browse a map of available parking spots in the area.</p>
                        </div>
                    </div>
                </div>
                <div class="function gradient-functions">
                    <h2 class="function-number">#2</h2>
                    <div class="function-info">
                        <img src="src/img/function2.svg" alt="function 2" class="function-img">
                        <div class="function-text">
                            <h2>Select</h2>
                            <p>Select a spot and make a reservation.</p>
                        </div>
                    </div>
                </div>
                <div class="function gradient-functions">
                    <h2 class="function-number">#3</h2>
                    <div class="function-info">
                        <img src="src/img/function1.svg" alt="function 3" class="function-img">
                        <div class="function-text">
                            <h2>Drive</h2>
                            <p>Drive to the spot and park your car.</p>
                        </div>
                    </div>
                </div>
            </div>
            <h3><b>That's it!</b></h3>
            <p><b class="gradient-text">ParKing</b> makes parking easy and convenient.</p>
        </div>
        <div class="features">
            <h2 class="gradient-text features-title dark-glow-text">Features</h2>
            <div class="features-container">
                <div class="feature">
                    <div class="feature-title dark-glow">
                        <img src="src/img/feature1.svg" alt="feature 1" class="feature-img">
                        <h2>Find parking</h2>
                    </div>
                    <p>Browse and view information about parking spots in your local area.</p>
                </div>
            </div>
            <div class="features-container">
                <div class="feature">
                    <div class="feature-title dark-glow">
                        <img src="src/img/feature2.svg" alt="feature 2" class="feature-img">
                        <h2>Free Parking</h2>
                    </div>
                    <p>Check out local community parking spot reports.</p>
                </div>
            </div>
            <div class="features-container">
                <div class="feature">
                    <div class="feature-title dark-glow">
                        <img src="src/img/feature3.svg" alt="feature 3" class="feature-img">
                        <h2>Premium Parking</h2>
                    </div>
                    <p>Reserve premium parking spots at popular locations, such as airports, train stations, and
                        sporting events.</p>
                </div>
            </div>
            <div class="features-container">
                <div class="feature">
                    <div class="feature-title">
                        <img src="src/img/feature4.svg" alt="feature 4" class="feature-img">
                        <h2>Feedback</h2>
                    </div>
                    <p>Become part of the community! Report and list free parking spaces in your area.</p>
                </div>
            </div>
            <div class="features-container">
                <div class="feature">
                    <div class="feature-title">
                        <img src="src/img/feature5.svg" alt="feature 5" class="feature-img">
                        <h2>Rewards</h2>
                    </div>
                    <p>Receive rewards and level up for posting reports about your near by parking pots.</p>
                </div>
            </div>
        </div>
        <div class="app-dl graident-app-dl">
            <h2 class="gradient-text dark-glow-text">Give it a test drive</h2>
            <div class="app-dl-container">
                <img src="src/img/google-play.svg" alt="Google Play" class="google-play">
                <p>Download the ParKing app today and see how easy it is to find and reserve parking!</p>
            </div>
        </div>
        <div class="plans">
            <h2 class="gradient-text dark-glow-text">Plans & Pricing</h2>
            <div class="plans-container">
                <div class="plan">
                    <h2>Basic</h2>
                    <h3>0$</h3>
                    <ul class="premium-list">
                        <li>Find parking spots in your local area based on community reports</li>
                        <li>Favorite your most visited parking spots for later</li>
                        <li>View your parking history</li>
                    </ul>
                    <button class="btn btn-secondary">Sign up</button>
                </div>
                <div class="plan plan-premium dark-glow">
                    <div class="plan-title">
                        <img src="src/img/feature3.svg" alt="Premium" class="premium-img">
                        <h2>Premium</h2>
                    </div>
                    <h3>9.99$ / month</h3>
                    <ul class="premium-list">
                        <li>Reserve premium parking spots at popular locations</li>
                        <li>Receive discounts on parking</li>
                        <li>Get priority support from customer service</li>
                        <li>Enjoy the ParKing app without any ads</li>
                    </ul>
                    <button class="btn btn-primary">Sign up</button>
                </div>
            </div>
        </div>
        <div class="footer">
            <img src="src/img/logo.png" alt="ParKing" class="footer-logo">
            <p>Copyright © 2023 ParKing. All rights reserved.</p>
        </div>
</body>
<script src="src/js/main.js"></script>

</html>