<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Michael Spencer | Web Solutions</title>
    <link rel="icon" href="assets/icon.ico">
    <link href="css/index.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&amp;subset=cyrillic,cyrillic-ext,devanagari,greek,greek-ext,korean,latin-ext,vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
<section id="header">
    <nav id="nav">
        <ul class="page-container">
            <li>
                <button class="btn btn-primary nav-btn">Recent work</button>
                <button class="btn btn-secondary nav-btn">Web Solutions</button>
            </li>
            <li class="hide-mobile">
                <ul>
                    <li><button class="nav-links margin-delete">About</button></li>
                    <li><button class="nav-links">Recent Work</button></li>
                    <li><button class="nav-links">Get In Touch</button></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div class="hero"></div>
    <div class="overlay"></div>
    <div class="header-content page-container">
        <h1>Michael Spencer</h1>
        <p>Beautifully Created Web Experiences</p>
        <div class="cta-container">
            <button class="btn btn-primary header-btn">Recent work</button>
            <button class="btn btn-secondary header-btn">Web Solutions</button>
        </div>
    </div>
</section>
<section id="about">
    <div class="page-container">
        <h2>About Me</h2>
        <p>My name is Michael Spencer, I am a freelance web developer specialized in creating user friendly websites and user experiences that look great on any desktop or device.</p>
        <div class="techs-container">
            <div class="tech">
                <img src="assets/html5.svg" alt="" class="tech-icon">
                <h4>HTML5</h4>
            </div>
            <div class="tech">
                <img src="assets/css3-alt.svg" alt="" class="tech-icon">
                <h4>CSS3</h4>
            </div>
            <div class="tech">
                <img src="assets/js-square.svg" alt="" class="tech-icon">
                <h4>Javascript</h4>
            </div>
            <div class="tech">
                <img src="assets/mobile-alt.svg" alt="" class="tech-icon">
                <h4>Responsive Design</h4>
            </div>
        </div>
    </div>
</section>
<section id="what-i-can-do">
    <div class="page-container">
        <h2>What I Can Do</h2>
        <p>Creating an aesthetically pleasing and easy user experience.</p>
        <div class="wicd-tri-container">
            <div class="wicd">
                <i class="fas fa-th-list fa-3x"></i>
                <h4>UX/UI Design</h4>
                <p>Imagine, wireframe, sketch, and create simple, intuitive, aesthetic, user-friendly, websites and user interfaces.</p>
            </div>
            <div class="wicd">
                <i class="far fa-lightbulb fa-3x"></i>
                <h4>Business Solutions</h4>
                <p>I'll take care of "how it is going to look attractive" and "how it is going to work effectively."</p>
            </div>
            <div class="wicd">
                <i class="fas fa-code-branch fa-3x"></i>
                <h4>Build and Deploy</h4>
                <p>HTML(5), CSS(3), Javascript(ES6), and related tools, libraries, frameworks.</p>
            </div>
        </div>
    </div>
</section>
<section id="recent-work">
    <div class="page-container">
        <h2>Recent Work</h2>
        <p>Web Mock-ups and javascript apps</p>
        <div class="works-container">
            <a href="https://ms2048.herokuapp.com/" target="blank" class="work">
                <div class="work-overlay c2"></div>
                <h4>2048</h4>
                <img src="assets/w1.png" alt="" class="work-img">
            </a>
            <a href="https://moove-it-1995.herokuapp.com/" target="blank" class="work">
                <div class="work-overlay c4"></div>
                <h4>Moove-it Mock</h4>
                <img src="assets/w2.png" alt="" class="work-img">
            </a>
            <a href="https://twitch-1995.herokuapp.com/" target="blank" class="work">
                <div class="work-overlay c5"></div>
                <h4>Twitch Viewer</h4>
                <img src="assets/w3.png" alt="" class="work-img">
            </a>
        </div>
    </div>
</section>
<div class="divider">
    <img src="assets/divider.svg" alt="">
</div>
<section id="contact">
    <div class="page-container">
        <h2>Get In Touch</h2>
        <p>Contact me for help in web solutions.</p>
        <?php
            if(isset($_POST['submit'])) {
                $name = $_POST['name'];
                $number = $_POST['number'];
                $email = $_POST['email'];
                $message = $_POST['message'];

                if(empty($name) || empty($number) || empty($email) || empty($message)) {
                    ?>
                        <div class="form-submit-msg error-msg">
                            <?php echo "*All input fields are required!"; ?>
                        </div>
                    <?php
                } else {
                    if(mail('biglazypitufo@gmail.com', 'Potential Client', 'name: ' . $name . ', number: ' . $number . ', email: ' . $email . ', message: ' . $message, 'From: mspencerphpserver@gmail.com')) {
                        ?>
                            <div class="form-submit-msg success-msg">
                                <?php echo "Your message was sent succesfully."; ?>
                            </div>
                        <?php
                    } else {
                        ?>
                            <div class="form-submit-msg error-msg">
                                <?php echo "There is a problem with the server."; ?>
                            </div>
                         <?php
                    }
                }
            }
        ?>
        <div class="contact-container">
            <form id="form" action="#contact" method="POST" autocomplete="off" class="contact-form">
            <?php
                if(isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $number = $_POST['number'];
                    $email = $_POST['email'];
                    $message = $_POST['message'];
                ?>
                    <div>
                        <label for="name">Name</label>
                        <?php
                            echo '<input id="name" type="text" name="name" value="' . $name . '" >';
                        ?>
                    </div>
                    <div>
                        <label for="number">Number</label>
                        <?php
                            echo '<input id="number" type="text" name="number" value="' . $number . '" >';
                        ?>
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <?php
                            echo '<input id="email" type="text" name="email" value="' . $email . '" >';
                        ?>
                    </div>
                    <div>
                        <label for="Message">Message</label>
                        <textarea id="message" type="text" name="message"><?php echo htmlspecialchars($message); ?></textarea>
                    </div>
                <?php
                } else {
                ?>
                    <div>
                        <label for="name">Name</label>
                        <input id="name" type="text" name="name">
                    </div>
                    <div>
                        <label for="number">Number</label>
                        <input id="number" type="text" name="number">
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input id="email" type="text" name="email">
                    </div>
                    <div>
                        <label for="Message">Message</label>
                        <textarea id="message" type="text" name="message"></textarea>
                    </div>
                    <?php
                }
                ?>
                <div>
                    <input id="submit-form" type="submit" value="Inquire" name="submit">
                </div>
            </form>
            <div class="iframe-container">
                <iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=200%20millard%20st%20georgetown%20tx%2078628+(Your%20Business%20Name)&amp;t=k&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            </div>
        </div>
    </div>
</section>
<footer>
    <p>Website designed and created by Michael 2022©</p>
</footer>
<script src="https://kit.fontawesome.com/07fc9dc957.js" crossorigin="anonymous"></script>
<script src="js/index.js"></script>
</body>
</html>