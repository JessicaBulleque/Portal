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
        <div class="logo"> <img src="../icons/qcu_logo.png" alt=""> 
        </div>
            <div class="qcu"><h1>Quezon City University <span>Online Portal</span></h1>
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
                    <li> <a href="profInterface.php"> <img src="../icons/open-book.png" alt="">  OVERVIEW </a> </li>
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

       









        <section class = "change-prof">
                <img id = "user" src="../icons/user.png" alt="">
                <button class = "cDP"> Choose Profile </button>
        </section>


        
        <section class = "change-pass">
            <div class="pw">
                <label for="curPass"> Current Password </label> <br>
                <input type="password" name="curPass" id="curPass"><br>

                <label for="newPass"> New Password <span> * 8 - 16 characters * </span> </label> <br>
                <input type="password" name="newPass" id="newPass"><br>

                <label for="conPass"> Confirm Password </label> <br>
                <input type="password" name="conPass" id="conPass"><br>
                
                <input type="submit" value="Change">
            </div>
                
                
        </section>










        <!--
        <section class="editProf">
            <table class="personalInfo">
                <th colspan="4"> Personal Information </th> 
                <tr>
                    <td> <input type="text" name="" id="" disabled> <br> <label for=""> Employee ID </label> </td>
                    <td> <input type="text" name="" id="" disabled>  <br> <label for=""> Department </label> </td>
                    <td> <input type="text" name="" id="" disabled> <br>  <label for=""> Year </label> </td>
                    <td> <input type="text" name="" id="" disabled> <br>  <label for=""> Campus </label> </td>
                </tr>

                <tr>
                    <td> <input type="text" name="" id="" disabled> <br> <label for=""> Lastname </label> </td>
                    <td> <input type="text" name="" id="" disabled> <br> <label for=""> Fistname </label> </td>
                    <td> <input type="text" name="" id="" disabled> <br> <label for=""> Middlename </label> </td>
                    <td> <input type="text" name="" id="" disabled> <br> <label for=""> Suffix (ex. Jr) </label> </td>
                </tr>

                <tr>
                    <td> <input type="text" name="" id="" disabled> <br> <label for=""> Birthdate </label> </td>
                    <td> <input type="text" name="" id="" disabled> <br> <label for=""> Gender </label> </td>
                    <td> <input type="text" name="" id="" disabled> <br> <label for=""> Nationality </label> </td>
                    <td> <input type="text" name="" id=""> <br> <label for=""> Religion </label> </td>
                </tr>

                <tr>
                    <td> <input type="text" name="" id=""> <br> <label for=""> House no./Street Address </label> </td>
                    <td> <input type="text" name="" id=""> <br> <label for=""> Baranggay </label> </td>
                    <td> <input type="text" name="" id=""> <br> <label for=""> City/Province </label> </td>
                    <td> <input type="text" name="" id=""> <br> <label for=""> Zipcode </label> </td>
                </tr>

                <tr>
                    <td> <input type="text" name="" id="" > <br> <label for=""> Cellphone Number </label> </td>
                    <td> <input type="text" name="" id=""> <br> <label for=""> Telephone Number </label> </td>
                    <td colspan="2"> <input type="text" name="" id="" > <br> <label for=""> School Email Address </label> </td>
                </tr>
                
            </table>



            <table class="emergency">
                <th colspan="2"> In Case Of Emergency </th>

                    <tr>
                        <td> <input type="text" name="" id="">  <label for=""> Fullname </label> </td>
                        <td> <input type="text" name="" id="">  <label for=""> Relationship </label> </td>
                    </tr>

                    <tr>
                        <td> <input type="text" name="" id="" >  <label for=""> Contact Number </label> </td>
                        <td> <input type="text" name="" id="">  <label for=""> Home Address </label> </td>
                    </tr>
            </table>


            <input type="submit" value="Save" class="saveBtn">
        </section>
        -->
    </div>




   






</body>
<script src = "../js/date.js">
    
    </script>
</html>