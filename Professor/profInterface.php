<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profInterface-style.css">
    <title>Quezon City University | Professor Login</title>
</head>
<body>
    <div class="header">
        <div class="qc-title">
            <div class="logo"> <img src="../icons/qcu_logo.png" alt=""> 
            </div>
            <div class="qcu">
                <h1>Quezon City University <span>Online Portal</span></h1>
            </div>
        </div>

        <div class="time-logout">
            <p class="date" id = "date"> Sept. 29 (Wed) </p>
            <p class="time" id = "time"> 10:00 am </p>
            <button> Logout </button>
        </div>

       

        
    </div>


    

    <div class="container">
        <section class ="admin-panel">
            <div class="prof-profile">
                <div class="profile">
                    <img src="../icons/user.png" alt="">
                    <div class="prof-name">
                        <h3>Professor's name</h3>
                        <h5>21-0001</h5>
                    </div>
                </div>
                <a href="editProfile.php" class="edit"> Edit Profile</a>
            </div>

            <div class="navigation">
                <ul>
                    <li> <a href=""> <img src="../icons/open-book.png" alt="">  OVERVIEW </a> </li>
                    <li> <a href=""> <img src="../icons/open-book.png" alt="">  ACADEMIC PROFILE </a> </li>
                    <li> <a href="calendar.php"> <img src="../icons/open-book.png" alt=""> CALENDAR </a> </li>
                    <li> <a href=""> <img src="../icons/open-book.png" alt=""> DOCUMENTS </a> </li>
                    <li> <a href=""> <img src="../icons/open-book.png" alt=""> ANNOUNCEMENTS </a> </li>
                </ul>
            </div>

            <div class="up-events">
                <h2>Upcoming Events</h2>
                <p><img src="../icons/party.png" alt="">Quezon City University U-Week</p>
                <p><img src="../icons/party.png" alt="">QCU Foundation Day</p>
                <p><img src="../icons/party.png" alt="">Buwan ng wika</p>
            </div>
        </section>

        <section class = "admin-container">
            <div class="overview">
                <h1>Academic Year 2021 - 2022</h1>
                <h2 id = "overview"> <img src="../icons/open-book.png" alt=""> Overview</h2>

                <div class="summary">
                    <div class="boxes"><p> Total number of students </p> <h1> 250 </h1> </div>
                    <div class="boxes"><p> Total number of Sections </p> <h1> 5 </h1> </div>
                    <div class="boxes"><p> Total number of subjects </p> <h1> 4 </h1> </div>
                </div>
            </div>

            <div class="content-container">
                <div class="first-container">
                    <h1>Quezon City University Calendar</h1>

                    <div class="date">
                            <h1>11</h1>
                            <h2>Friday, <span>Oct</span></h2>
                            <h3>1st Day of Exam</h3>
                        
                    </div>

                    <div class="sched">
                        <h3>Schedule for the month of October</h3>
                        <p> Last day of dropping subjects <span> October 1  </span> </p>
                        <p> Last day of dropping subjects <span> October 1  </span> </p>
                        <p> Last day of dropping subjects <span> October 1  </span> </p>
                        <p> Last day of dropping subjects <span> October 1  </span> </p>
                    </div>

                    <div class="announcement">
                        <h1> <img src="../icons/announcement.png" alt=""> Announcements </h1>
                        <div class="announce-box">
                            <h3> September 21, 2021</h3>
                            <p>Want to know more about UniFAST-UAQTEA?
                               How about Free Higher Education? or how to apply for Tertiary Education
                               savail stipend or allowance per Academic Year? Say no more scholars! Because 
                               today, September 24, 2021 at 2:00 - 3:00 pm, we will be conducting an Online 
                               Orientation via zoom, and live at our Facebook Page. This orientation is exclusive 
                               only for 2nd, 3rd, & 4th Year QCU Students (all courses).See you there scholars!</p>
                        </div> 

                        <div class="announce-box">
                            <h3> September 21, 2021</h3>
                            <p>Want to know more about UniFAST-UAQTEA?
                               How about Free Higher Education? or how to apply for Tertiary Education
                               savail stipend or allowance per Academic Year? Say no more scholars! Because 
                               today, September 24, 2021 at 2:00 - 3:00 pm, we will be conducting an Online 
                               Orientation via zoom, and live at our Facebook Page. This orientation is exclusive 
                               only for 2nd, 3rd, & 4th Year QCU Students (all courses).See you there scholars!</p>
                        </div> 
                    </div>


                </div>

                <div class="second-container">

                    <div class="reminders">
                        <h3>Reminders</h3>
                        <ul>
                            <li>Midterm examination is near</li>
                            <li>Submission of midterm grade is scheduled after midterm exam.    </li>
                        </ul>
                    </div>

                    <div class="exam-sched">

                    </div>
                </div>
            </div>



            <footer>
            <div class="footer-primary">
                <div class="footer-info">
                    <h2> ABOUT QCU </h2>
                    <ul>
                        <li> <a href="#"> About us</a> </li>
                        <li> <a href="#"> Privacy Policy </a> </li>
                        <li> <a href="#"> Terms and Agreement </a> </li>
                    </ul>
                </div>

                <div class="footer-info">
                    <h2> QUICK LINKS </h2>
                    <ul>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Mikeni Mikeni </a> </li>
                        <li> <a href="#"> Dugdug Doremi </a> </li>
                    </ul>
            </div>
            <div class="footer-info">
                <h2> SCHOOL BRANCHES </h2>
                <ul>
                    <li> <a href="#"> San Bartolome </a> </li>
                    <li> <a href="#"> Batasan </a> </li>
                    <li> <a href="#"> San Francisco </a> </li>
                </ul>
            </div>
                </div>
            </footer>
        </section>
    

    </div>




   






</body>
<script src = "../js/date.js">

</script>
</html>