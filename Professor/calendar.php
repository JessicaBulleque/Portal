<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profInterface-style.css">
    <title>QCU | Calendar</title>
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
                    <li> <a href=""> <img src="../icons/open-book.png" alt=""> CALENDAR </a> </li>
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








        <section class = "info">
            <div class="qcu">
                <img src="../icons/qcu_logo.png" alt="">
                <h1> Quezon City University Calendar </h1>
                <h3> A.Y 2021 - 2022 </h3>
            </div>

            <div class="sem">
                <h3 id="firstSem"> First Semester </h3>
                <p> August 16 - December 18, 2021 </p>
            </div>
        </section>





        
        
        <section class = "calendar">
            <table class = "dates" border = "1">
                <th> Dates </th> 
                    <tr> <td>  August 2 - 13, 2021  </td> </tr>
                    <tr> <td>  August 2 - 13, 2021  </td> </tr>
                    <tr> <td>  August 2 - 13, 2021  </td> </tr>
                    <tr> <td>  August 2 - 13, 2021  </td> </tr>
                    <tr> <td>  August 2 - 13, 2021  </td> </tr>
                    <tr> <td>  August 2 - 13, 2021  </td> </tr>
                    <tr> <td>  August 2 - 13, 2021  </td> </tr>
                    <tr> <td>  August 2 - 13, 2021  </td> </tr>
                    <tr> <td>  August 2 - 13, 2021  </td> </tr>
                    <tr> <td>  August 2 - 13, 2021  </td> </tr>
            </table>
        </section>

        <section class = "calendar">
            <table class = "Events" border = "1">
                <th> Dates </th> 
                    <tr> <td>  Enrollment Period  </td> </tr>
                    <tr> <td>  Enrollment Period  </td> </tr>
                    <tr> <td>  Enrollment Period  </td> </tr>
                    <tr> <td>  Enrollment Period  </td> </tr>
                    <tr> <td>  Enrollment Period  </td> </tr>
                    <tr> <td>  Enrollment Period  </td> </tr>
                    <tr> <td>  Enrollment Period  </td> </tr>
                    <tr> <td>  Enrollment Period  </td> </tr>
                    <tr> <td>  Enrollment Period  </td> </tr>
                    <tr> <td>  Enrollment Period  </td> </tr>
            </table>
        </section>





    
</body>
<script src = "../js/date.js">
</script>
</html>