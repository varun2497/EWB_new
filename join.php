<?php $title="Join"; include 'head.php';?>


    <div style="background-color:#fffef9; margin-top:-20px">
    <div id="join6"></div>
<form action="index1.php" method="post">
      
        <h1>Join Us<br><small style="font-family:'Lucida Sans'; font-size: 20px;">Become a Member!</small></h1>
        
        <fieldset>
          <legend ><b>Your Basic Information</b></legend>
          <label for="name">Name</label>
          <input type="text" id="name" name="name">
          
          <label for="dob">Date of Birth</label>
          <input type="dob" id="dob" name="dob">

          <label for="age">Age</label>
          <input type="age" id="age" name="age">

          <label for="gender">Gender</label>
            <select id="gender" name="gender">
                <option value="female">Female</option>
                <option value="male">Male</option>
            </select>
          </label>

          <label for="college">College</label>
          <input type="college" id="college" name="college">

          <label for="contact">Contact No.</label>
          <input type="contact" id="contact" name="contact">          

          <label for="address">Address</label>
          <input type="address" id="address" name="address">

          <label for="mail">Email</label>
          <input type="email" id="mail" name="email">
        </fieldset>
        
        <fieldset>
          <legend><b>Your Profile</b></legend>
          <label for="bio">Biography</label>
          <textarea id="bio" name="bio"></textarea>

          <label for="inthob">Interests/ Hobbies</label>
          <textarea id="inthob" name="inthob"></textarea>
        </fieldset>

        <div class="button">
            <button type="submit">Submit</button>
        </div>
      </form>   
    <footer style="margin-top: 0px; margin-bottom: 0px; background-color: #023D67">
            <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p style="font-size: 17px; font-family: 'Lucida Sans'; padding-top: 20px; color: white;">Quick Links</p>
                </div>
            </div>
            
            <table>
                <tr class="tc">
                    <td style="padding-right: 20px;"><b>About</b><p></td>
                    <td><b>Projects</b><p></td>
                </tr>
                <tr class="tc">
                    <td style="padding-right: 20px;"><a href="aboutus.html">About Us</a></td>
                    <td style="padding-right: 20px;"><a href="suc_projects.html">Successful Projects</a></td>
                </tr>
                <tr class="tc">
                    <td style="padding-right: 20px;"><a href="mis.html">Mission and Vision</a></td>
                    <td style="padding-right: 20px;"><a href="und_projects.html">Undergoing Projects</a></td>
                </tr>
                <tr class="tc">
                    <td style="padding-right: 20px;"><a href="adv.html">Advisory Board</a></td>
                    <td style="padding-right: 20px;"><a href="up_projects.html">Upcoming Projects</a></td>
                </tr>
            </table>
        <hr style="margin-top: 30px;">
        <p class="pull-left" style="font-family:'Lucida Sans'; color: white; padding-top: .5em;">Copyright &copy; Engineers Without Borders 2017</p>
    <div class="pull-right">
        <ul class="list-inline">
        <li><a class="fblogo" target="_blank" title="Find us on Facebook" href="https://www.facebook.com/ewbindia/" ><img class="h" src="images/facebook.png" height="30px" width="30px" ></a></li>
        <li><a href="#top" class="back-to-top" title="Go to Top"><img src = "images/Back-to-top-icon.png" width="40px" height="40px"></a></li>
    </div>
    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $('a.back-to-top').click(function() {
            $('body').animate({
                scrollTop: 0
            }, 700)

            return false;
        })
    </script>
</body>
</html>'
