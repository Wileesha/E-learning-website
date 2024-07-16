<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educamp</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  
</head>
<body>
    <header>
        <div class="logo">
            <div><img src="images/logo.png" alt="educamp"></div>
            <div><p>Educamp</p></div>
        </div>
        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#categories">Categories</a></li>
            <li><a href="#courses">Courses</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <div class="headicons">
            <div class='bx bx-user' id="usericon"></div>
            <div class="bx bx-menu" id="menuicon"></div>
        </div>
    </header>
    <section class="home" id="home">
        <div class="hometext">
            <h6>Best online learning platform</h6>
            <h1>Education opens up the mind</h1>
            <p>The world's largest selection of courses</p>
        </div>
        <div class="homeimg">
            <img src="images/home.png" alt="courses">
        </div>
    </section>
    <section class="categories" id="categories">
        <div class="centertext">
            <h5>CATEGORIES</h5>
            <h2>Popular Categories</h2>
        </div>
        <div class="categoriescontent">
            <div class="box">
                <img src="images/cate1.png" alt="design">
                <h3>Design Thinking</h3>
                <p>3 Courses</p>
            </div>
            <div class="box">
                <img src="images/cate2.png" alt="Web">
                <h3>Web Development</h3>
                <p>3 Courses</p>
            </div>
            <div class="box">
                <img src="images/cate3.png" alt="design">
                <h3>Marketing</h3>
                <p>3 Courses</p>
            </div>
            <div class="box">
                <img src="images/cate4.png" alt="design">
                <h3>Data Science</h3>
                <p>3 Courses</p>
            </div>
        </div>
        <div class="mainbtn">
            <a href="#" class="btn">All Categories</a>
        </div>
    </section>
    <section class="courses" id="courses">
        <div class="centertext">
            <h5>COURSES</h5>
            <h2>Explore Popular Courses</h2>
        </div>
        <div class="coursescontent" id="courses-content">
        <?php
            include("config.php");
            $result = mysqli_query($con, "SELECT * FROM courses");
            while ($course = mysqli_fetch_assoc($result)) {
                echo '
                <div class="row">
                    <img src="images/' . $course['image_url'] . '" alt="courses">
                    <div class="coursetext">
                        <h3>' . $course['title'] . '</h3>
                        <h6>' . $course['duration'] . ' hours</h6>
                        <div class="price">
                            <div>
                                <h5>$' . $course['price'] . '</h5>
                            </div>
                            <div>
                                <a href="pay.php?courseid=' . $course['id'] . '&coursetitle=' . urlencode($course['title']) . '&courseprice=' . $course['price'] . '" class="btn">Enroll</a>
                            </div>
                        </div>
                    </div>
                </div>
                ';
            }
            ?>
            
        </div>
        <div class="mainbtn">
            <a href="courses.php" class="btn">All Courses</a>
        </div>
    </section>
    <section class="about" id="about">
        <div class="aboutimg">
            <img src="images/about.jpg" alt="online courses">
        </div>
        <div class="abouttext">
            <h2>Helping people by making education easy to get, interesting, and really helpful.</h2>
            <p>Welcome to our online learning space! We use fun tools for personalized learning. Whether you're into work skills or just want to learn something new, our courses are here for you. We're all about making sure you succeed in a friendly environment. Join us now!</p>
            <h4>Best Courses</h4>
            <h5>Top rated Instructors</h5>
        </div>
    </section>
    <section class="contact" id="contact">
        <div class="maincontent">
            <div class="contactcontent">
                <img src="images/logo.png" alt="logo">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Twitter</a></li>
            </div>
            <div class="contactcontent">
                <li><a href="#">Home</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
            </div>
            <div class="contactcontent">
                <li><a href="#">Jyothi circle,Manglore</a></li>
                <li><a href="#">educamp@gmail.com</a></li>
                <li><a href="#">8966677887</a></li>
            </div>
        </div>
    </section>
    <div class="lasttext">
            <p>Created by Wileesha Moras.All rights reserved</p>
        </div>
    <!--js link-->
    <script src="script.js"></script>
</body>
</html>