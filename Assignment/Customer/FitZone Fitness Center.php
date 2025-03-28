


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = $_POST['name'];
        $email= $_POST['email'];
        $message= $_POST['message'];
        
        echo "<br>";

         // database connection
         include 'dbc.php';


            // Prepare an insert statement
            $stmt = $conn->prepare("INSERT INTO query (Name,Email,Query) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name,$email,$message);

            // execute the statement
            $stmt->execute();
           
            // Close the statement and connection
            $stmt->close();
            $conn->close();
        }
 
?>

<!DOCTYPE html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="Home.css">
<link rel="stylesheet" href="query.css?v=<?php echo time(); ?>">

<title> FitZone Fitness Center </title>

</head>
<body>
    <header>

        <a href="HOME" class="logo"> FitZone <span> Fitness Center</span> </a>
       

        <div class='bx bx-menu' id="menu-icon"></div>
<nav>
        <ul class="navigationbar">
            
            <li> <a href="#home"> Home</a></li>
            <li> <a href="#services"> Services </a></li>
            <li> <a href="#plans"> Pricing </a></li>
            <li> <a href="#trainers">  Trainers </a></li>
            <li> <a href="#about"> About Us </a></li>
            <li> <a href="blog.php"> Blog </a></li>
            <li> <a href="Store.php"> Store </a></li>
        </ul>
</nav>
        <div class="top-btn">
            <div>
            <a href="Registration.php" class="nav-btn"> Join US </a>
            </div>




    </header>

    <!--Home section code-->

    <section class="home" id="home">
        <div class="home-content">

        <h3> Build Your</h3>
        <h1> Dream </h1>
        <h3> <span class="multiple-text"> </span></h3>
        <p> Welcome to FitZone Fitness Center - Your Ultimate Fitness Destination  </p>
        
        <p> We are dedicated to helping you achieve your fitness goals and live your healthiest life. Whether you’re a beginner starting your fitness journey or an experienced athlete pushing to the next level, we offer a range of state-of-the-art equipment, expert guidance, and a welcoming community to support you every step of the way.
            
        Join us and discover a space designed to empower and inspire, with personalized training plans, group classes, and resources to boost your strength, endurance, and overall well-being. Start today, and let FitZone Fitness Center be the place where you transform your body, mind, and spirit.
    
        Ready to unlock your full potential? Lets get moving! </p>
    
            <p> FitZone Fitness Center, Kurunegala </p>
           

        
        <a href="login.php" class="btn"> Sign-In </a>
        <a href="logout.php" class="btn"> Sign-Out </a>
        

    </div>

    <div class="home-img">
    <img src="images/file.png"  alt="Home Image">
        
    </div>

    


    </section>


        <!--Services Section-->


        <section class="services" id="services">
            <h2 class="heading"> Our<span> Services</span></h2>

            <div class="services-content">
                <div class="row">
                    <img src="images/image1.jpg" alt="">

                    <h4> Physical Fitness </h4>

                </div>


                <div class="row">
                    <img src="images/image2.jpg" alt="">

                    <h4> Personalized Training Sessions </h4>

                </div>



                <div class="row">
                    <img src="images/nutri.png" alt="">

                    <h4> Nutrition Councelling </h4>

                </div>



                <div class="row">
                    <img src="images/cardio access.jpg" alt="">

                    <h4> Cardio and Strength Equipment Access </h4>

                </div>



                <div class="row">
                    <img src="images/group.jpg" alt="">

                    <h4> Group Fitness Classes </h4>

                </div>

                <div class="row">
                    <img src="images/image5.jpg" alt="">

                    <h4> Weight and Cardio Training </h4>

                </div>

 
            </div>




        </section>


         <!--Class Section-->


         <section class="services" id="services">
            <h2 class="heading"> Our<span> Classes</span></h2>

            <div class="services-content">
                <div class="row">
                    <img src="images/yoga.jpg" alt="">

                    <h4> Yoga </h4>

                </div>


                <div class="row">
                    <img src="images/image3.jpg" alt="">

                    <h4> Strength Training </h4>

                </div>



                <div class="row">
                    <img src="images/difference-between-strength-training-and-cardio.jpg" alt="">

                    <h4> Cardio </h4>

                </div>



                <div class="row">
                    <img src="images/core.jpg" alt="">

                    <h4> Core Conditioning  </h4>

                </div>



                <div class="row">
                    <img src="images/pilates.jpg" alt="">

                    <h4>  Pilates </h4>

                </div>

                <div class="row">
                    <img src="images/trx.jpg" alt="">

                    <h4> TRX Suspension Training </h4>

                </div>

 
            </div>




        </section>

       


    <!--about section code-->

    <section class="about" id="about">
        <div class="about-img">
            <img src="images/about.jpg" alt="">
        </div>

        <div class="about-content">
            <h2 class="heading"> Why you choose us</h2>

            <p> Certified and Experienced Trainers </p>
                <p>Our trainers are certified professionals with years of experience in helping clients achieve their fitness goals. They’re dedicated to providing personalized guidance and support.</p>
            <p>State-of-the-Art Equipment</p>
                <p>FitZone is equipped with modern, high-quality machines and tools to ensure a safe and effective workout experience. We update our equipment regularly to keep you at the cutting edge of fitness.</p>
                
            <p>Customized Workout Plans </p>
                <p>We understand that everyone’s fitness journey is unique. Our team offers personalized workout plans tailored to fit your goals

                    <p>Nutritional Guidance</p>
                    <p>Our nutrition experts provide guidance and meal plans to help you fuel your body and achieve a balanced, healthy lifestyle.</p>

                    <p>Group Classes for All Levels</p>
                    <p>From beginners to advanced, our group classes are led by experts and cover a wide range of workouts like HIIT, yoga, Zumba, and more..</p>
                
                <a href="class shedule.php" class="btn"> Book a Class Now </a>
        </div>

        
    </section>


    <!--pricing seciton code-->

    <section class="plans" id="plans">

        <h2 class="heading"> Our <span> Plans</span></h2>

        <div class="plans-content">

            <div class="box">

                    <h3> BASIC </h3>
                    <h2><span> Rs.2500/Month</span></h2>

                            <ul>

                                <li> Basic Workout Routines</li>
                                <li> At Home Workout</li>
                                <li> Community Access</li>

                                        </ul>

                    <a href="Registration.php"> 
                                    Join Now
                                    <i class='bx bx-right-arrow-alt'></i>
                    </a>

            </div>


                    <div class="box">

                    <h3> PRO </h3>
                    <h2><span> Rs.4000/Month</span></h2>

                            <ul>
                                <li> Customized Workout Plans </li>
                                <li> Advanced Meal Plans</li>
                                <li> Priority Support</li>
                                <li> Basic Goal Tracking</li>
                                        </ul>

                    <a href="Registration.php"> 
                                    Join Now
                                    <i class='bx bx-right-arrow-alt'></i>
                    </a>

                    </div>

                    <div class="box">

                    <h3> PREMIUM </h3>
                    <h2><span> Rs.6500/Month</span></h2>

                            <ul>
                                <li> All Pro Features</li>
                                <li> Personalized Coaching</li>
                                <li>Advanced Goal Tracking</li>
                                <li> Video Consultations</li>
                                <li> Exclusive Community Group</li>
                                
                                        </ul>

                    <a href="Registration.php"> 
                                    Join Now
                                    <i class='bx bx-right-arrow-alt'></i>
                    </a>


                    </div>



    </section>

    <!--certified trainers code-->

            <section class="trainers" id="trainers">
                <div class="trainers-box">
                    <h2 class="heading"> Our Certified <span>Trainers</span></h2>

                    <div class="wrapper">
                        <div class="trainers-item">
                            <img src="images/trainee (2).jpg" alt="">
                            <h2> Ishan Perera</h2>
                            <h3>Strength & Conditioning Specialist</h3>
                    
                            <div class="rating">
                            <i class='bx bxs-medal'id="medal"></i>
                            <i class='bx bxs-medal'id="medal"></i>
                            <i class='bx bxs-medal'id="medal"></i>
                            <i class='bx bxs-medal'id="medal"></i>
                            <i class='bx bxs-medal'id="medal"></i>
                        </div>

                        <p> With over 5 years of experience, Ishan Perera specializes in strength training and conditioning, helping clients build muscle and improve endurance. His motivational coaching style empowers members to exceed their fitness goals safely and effectively.</p>
                    </div>

                    <div class="trainers-item">
                        <img src="images/trainee.jpg" alt="">
                        <h2> Nirvan Dissanayake</h2>
                        <h3>Certified Nutrition & Wellness Coach</h3>
                        <div class="rating">
                        <i class='bx bxs-medal' id="medal"></i>
                        <i class='bx bxs-medal' id="medal"></i>
                        <i class='bx bxs-medal' id="medal"></i>
                        <i class='bx bxs-medal' id="medal"></i>
                        <i class='bx bxs-medal' id="medal"></i>
                        <i class='bx bxs-medal' id="medal"></i>
                    </div>

                    <p> Nirvan Dissanayake combines his fitness knowledge with nutrition coaching to help members achieve holistic wellness. With 6 years in the field, she supports clients in reaching weight management goals and building healthier lifestyle habits.</p>
                </div>

                <div class="trainers-item">
                    <img src="images/2.jpg" alt="">
                    <h2> Shehan Fernando </h2>
                    <h3>Certified Cardio Fitness Specialist</h3>
                    <div class="rating">
                    <i class='bx bxs-medal' id="medal"></i>
                    <i class='bx bxs-medal' id="medal"></i>
                    <i class='bx bxs-medal' id="medal"></i>
                    <i class='bx bxs-medal' id="medal"></i>
                    <i class='bx bxs-medal' id="medal"></i>
                    <i class='bx bxs-medal' id="medal"></i>
                </div>

                <p> Shehan Fernando brings 6 years of expertise in cardiovascular training, helping members improve stamina, heart health, and overall energy levels. His sessions combine a variety of high-intensity, low-impact, and interval-based cardio exercises designed to be engaging and effective. Known for his enthusiastic coaching style, 
                    Shehan motivates clients to push their limits while ensuring exercises are safe and tailored to individual fitness levels.
                    
                    
                    
                    </p>
            </div>

            <div class="trainers-item">
                <img src="images/trainee (2) women.jpeg" alt="">
                <h2> Bhaghya Gamage</h2>
                <h3> Certified Yoga & Pilates Instructor</h3>
                <div class="rating"> 
                <i class='bx bxs-medal'id="medal"></i>
                <i class='bx bxs-medal'id="medal"></i>
                <i class='bx bxs-medal' id="medal"></i>
                <i class='bx bxs-medal' id="medal"></i>
                <i class='bx bxs-medal' id="medal"></i>
            </div>

            <p> Bhagya Gamage brings a calm, nurturing approach to yoga and Pilates, guiding members through techniques that improve flexibility, posture, and mental well-being. She has 5 years of experience and is known for her personalized sessions that balance body and mind.
            </p>
        </div> 
        </div>

                </div>



            </section>


        <section class="contact">
            <!--query code-->
          
            <div class="form">
            <form action="FitZone Fitness Center.php" method="post">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Your Email</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Your Message</label>
                <textarea id="message" name="message" rows="5" required></textarea><br>

                <button type="submit">Send Message</button>
            </form>
            
            </div>
        </section>

            <!--footer section code-->


            <footer class="footer">
                <div class="social">
                <a href="#"><i class='bx bxl-facebook-square'></i></a>
                <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                <a href="#"><i class='bx bxl-linkedin-square'></i></a>

            </div>

            <p class="copyright">

                &copy; FitZone Fitness Center Kurunegala - All Rights Reserved 
            </p>
                
            </footer>

            <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
            <script src="Home.js"></script>


               


</body>



   
</html>