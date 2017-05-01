<?php
session_start();
include("logindb.php");
?>
<!doctype html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script type="text/css">
body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }
</script>

</head>
  <body>
<!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

  
  <form method="POST" action="index.php">
  <!--Navigational Bar-->
  <nav >
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo">HOC Cell</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="higher_education.php">Higher Education</a></li>
        <li><a href="online_courses.php">Online Courses</a></li>
        <li><a href="professional_certifications.php">Professional Certfications</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="online_videos.php">Online Videos</a></li>
        
<?php
if(!isset($_SESSION["Email"]))
{
 echo '<li><a href="#modal1">Login</a></li>';
}

else
{
 echo' <li><a href="profile.php">'.$_SESSION["Name"].'</a></li>';
 echo' <li><a href="logout.php">Logout</a></li>';
}
?>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li class="active"><a href="index.php">Home</a></li>
         <li><a class="dropdown-button" href="#" data-activates="dropdown2">HOC<i class="material-icons right">arrow_drop_down</i></a>
        <ul class="dropdown-content" id="dropdown2">
        <li><a href="higher_education.php">Higher Education</a></li>
        <li><a href="online_courses.php">Online Courses</a></li>
        <li><a href="professional_certifications.php">Professional Certfications</a></li>
        </ul>
        </li>
        <li><a href="gallery.php"><i class="material-icons">perm_media</i>Gallery</a></li>
         <li><a href="online_videos.php"><i class="material-icons">perm_media</i>Online Videos</a></li>
        <?php
if(!isset($_SESSION["Email"]))
{
 echo '<li><a href="#modal1"><i class="material-icons">perm_identity</i>Login</a></li>';
}

else
{
 echo' <li><a href="profile.php"><i class="material-icons">perm_identity</i>'.$_SESSION["Name"].'</a></li>';
  echo' <li><a href="logout.php"><i class="material-icons">perm_identity</i>Logout</a></li>';
}
?>
        <li><a href="contact.php"><i class="material-icons">perm_phone_msg</i>Contact Us</a></li>
      </ul>
    </div>
  </nav>
  <!--Navigational Bar script-->
  <script type="text/javascript">
    $(".button-collapse").sideNav();
  </script>
  <script type="text/javascript">  
  $(".dropdown-button").dropdown();
  </script>
  <!--End of Navigational Bar script-->
  <!--End of Navigational Bar-->
  <!--start container-->
        <div class="container">
          <div class="section">
              <h4>
            <p class="caption">Have a question? Don't hesitate to send us a message. Our team will be happy to help you.</p>
              </h4>
            
            
            <div id="contact-page" class="card">
                 <div class="card-content">                    
                                                            
                      <div class="col s12 m6">
                        <ul class="collapsible collapsible-accordion" data-collapsible="accordion">
                          <li>
                            <div class="collapsible-header"><i class="material-icons">error</i> FAQ</div>
                            <div class="collapsible-body" style="">
  <h6> <b> Question: What are the basic steps for applying abroad?</b><br><br>
Answer: The basic steps for applying abroad are: <br>
· Identifying the country, university, and the course of your interest<br>
· Requesting universities for Application forms<br>
· Taking various required tests<br>
· Arranging and preparing essays, SOPs, and recommendation letters (recos for short)<br>
· Completing and sending application forms along with required documents<br>
· Reporting various test scores to the universities<br><br>

<b>Question: What should I do once I have been accepted?</b><br><br>

Answer: Each college will tell you exactly what steps to follow to confirm your acceptance of their offer of admission and how to prepare for your first term. This information is included with the letter of admission or in materials that will be sent to you. You must respond with a "yes" or "no" for each offer of admission. You may also be required to submit to the institution that you plan to attend a statement on your financial soundness. This is to guarantee your place in the class. Make sure you do not miss any deadlines. <br>

<b>Question: What is F1 and J1 visa?</b><br><br>

Answer: F-1 (Student Visa): The F-1 visa is for full-time students enrolled in an academic or language program. F-1 students may stay in the US for the full length of their academic program plus 60 days. F-1 students must maintain a full-time course load and complete their studies by the expiration date mentioned on the I-20 form.<br>

J-1 (Exchange Visitor Visa): The J-1 visa is issued for students needing practical training that is not available in their home country to complete their academic program. The training must be directly related to the academic program. The J-1 visa obligates the students to return to their home country for a minimum of two years after the end of their studies in the US before they can become eligible to apply for an immigrant (permanent residence) visa. <br><br>

<b>Question: What are the documents required to go abroad?</b><br><br>

Answer: The documents required are:<br>
· Valid passport <br>
· One passport size photograph (black and white / color) <br>
· A Non-immigrant Visa Application (Form 156) available from the Consular section. <br>
· Form I-20 executed by the authorizing official of institution concerned, and signed by the applicant.<br><br> 
· Evidence of financial ability to cover the cost of the education and maintenance involved <br>
· Visa fee to be paid in Indian rupees by Bank Draft <br><br>

<b>Question: How many universities should I apply to? Is there any standard number?</b><br><br>

Answer: Selecting universities is a very important and time-consuming process not only from the admission point of view but also because applying to universities is very expensive by Indian standards. Hence, you may restrict to 10 the number of universities you apply to.<br><br>

<b>Question: What is the academic eligibility for admission?</b><br><br>

Answer: Each university and college has its own requirements or conditions for admission. However, there is considerable flexibility in the acceptance policies of most schools. The requirements are different for different countries.<br><br>

<b>Question: Does the past academic record have any importance?</b><br><br>

Answer: Your past academic record is one of the most important deciding factors in your getting admission to a college abroad. Most schools require you to have a good academic record, especially for programs and courses offering a master’s or doctoral degree. Each university has its own minimum requirements for its programs, which are flexible depending on the candidate's profile. <br>

Universities in each country have their own marking and evaluation systems, which are vastly different from the Indian system. For example, US follows the GPA (Grade Point Average) system which is based on 5 points scheme — A,B,C,D & F. <br><br>

<b>Question: When should I begin the application process?</b><br><br>

Answer: The application process begins with your decision on the programs you are interested in applying. Typically, you would begin with a long list of universities and then start the elimination process based on certain factors.
<br><br>
<b>Question: How important is the GRE score? </b><br><br>

Answer: GRE score is compulsory for admissions to most colleges in the US, some colleges in Canada and a few in other countries. <br>
Your GRE score is the single most important factor in your admission to the top program. No matter how good your undergraduate GPA is, or how inspiring your statement of purpose is, you do not stand a chance in the top program unless you have a good GRE score. <br>

<b>Question: Can I take the GRE test any number of times?</b><br><br>

Answer: If you are not happy with your GRE score, you can take the GRE test any number of times until you get the score you want. Most schools consider only your highest score. Your ‘GRE transcript’ will provide only three of your most recent scores. It does not matter if you send your transcript after every test or after you have scored the number of marks you wanted. The application will ask you to specify the score you want the admissions committee to consider. Please remember that you cannot mix the sectional scores from different tests. In other words, you cannot take the quantitative score from one test and the verbal score from another. <br><br>

<b>Question: Statement of Purpose – how should I write it?</b><br><br>

Answer: Your statement of purpose should be unique. Instead of writing words like “problem-solver” and “hard worker”, try to focus on one or two experiences that are unique, interesting and something you are proud of. Describe the situations that justify your statement. If you have been research-oriented, elaborate on not only what you have achieved but also how you achieved it. Focus on what you learnt and how that experience will help your classmates. Have a clear focus of your goals. Don’t make fanciful statements like, “I will be the CEO of Hewlett-Packard in 10 years”. Be realistic. Think about your goals and ambitions and link them closely to your achievements. It is important to convincingly prove the reasons for choosing a particular course and university.<br><br>

<b>Question: Recommendation letters – are they important?</b><br><br>

Answer: The recommendations you get are important because they verify your claims and provide the admissions committee an opportunity to learn more about you from people you have worked with closely. Hence, good recommendations can serve as a powerful tool to ‘sell’ yourself to the committee.<br><br>

<b>Question: Is fluency in English counted? </b><br><br>

Answer: Fluency in English is mandatory for education abroad, whether it be in the US, the UK, or any other country. You would be required to take tests like TOEFL, IELTS, TSE or other tests depending on the country, university and program you are applying to. The minimum scores required in these tests vary depending on the college and the program. Individual departments and colleges usually set their own minimum requirements for admissions. <br><br>

<b>Question: What about financial aid?</b><br><br>

Answer: Most Indians are concerned about the high cost of education abroad and seek information on opportunities for financial assistance. The expenses for education abroad include tuition fees, living expenses, health insurance, and transportation. This is an important criterion for selecting the university as well as the course. 
It is important to understand that most universities offer financial assistance to international students based primarily on merit and rarely on need. The amount and the type of assistance offered vary depending on the university, department and level of study. Financial assistance is more likely in Graduate studies than in Undergraduate courses. Similarly, chances of assistance are more in specific countries like the US and the UK. Also, funds are more likely to be available in fields such as Engineering, Physical Sciences and Biological Sciences, than in courses such as Humanities, Social Sciences and Management. <br><br>

<b>Question: What are the various tests that one has to take to apply abroad?</b><br><br>

Answer: The various tests that one has to take for college admission abroad are listed here. You would be required to take at least one of the following English proficiency tests along with the standardized tests for admission to any program.<br></h6>
                            </div>
                          </li>
                          <li class="active">
                            <div class="collapsible-header active"><i class="material-icons">mode_edit</i> Need Help?</div>
                            <div class="collapsible-body" style="display: none;">
                              <p>We welcome your inquiries at the email address <a mailto="support@tcethoc.com">support@tcethoc.com</a>.We will get in touch with you soon.</p>
                            </div>
                          </li>
                          <li>
                            <div class="collapsible-header"><i class="material-icons">call</i> Call Us</div>
                            <div class="collapsible-body" style="">
                              <blockquote> +91 9876543210 </blockquote>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>

                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">TCET HOC</span>
                    <p>HOC Cell is Committed to Guide Students for Higher Studies ,Online Course and Certifications </p>
                    <p>HOC Cell conducts Seminars ,Workshops in association with International Universities</p>
                                 
                    <p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i>Prof. Anil Vasoya</p>
                    <p><i class="mdi-communication-business cyan-text text-darken-2"></i> 1st Floor,HOC Cell,TCET </p>
                    <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> +91 9876543210</p>
                    <p><i class="mdi-communication-email cyan-text text-darken-2"></i> support@tcethoc.com</p>                    
                </div>
            </div>            
          </div>
        </div>
        <!--end container-->
      </section>
      <!-- END CONTENT -->




  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Login</h4>
 <form class="col s12"> 
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="Email">
          <label for="icon_prefix" data-error="wrong" data-success="right">Email Id</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">lock</i>
          <input id="icon_telephone" type="password" class="validate" name="Password">
          <label for="icon_telephone" data-error="wrong" data-success="right">Password</label>
        </div>
    </form>
    </div>
    <div class="modal-footer">


    <input type="submit" class=" modal-action modal-close waves-effect waves-green btn-flat" value="Login" name="login">
      <a href="register.php" class=" modal-action modal-close waves-effect waves-green btn-flat">Sign Up</a>
      <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat">Forgot Password</a>
    </div>
   
  </div>

  <script type="text/javascript">
     $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
  </script>
  <!-- End of Modal Structure -->
<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">TCET-HOC Cell</h5>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="higher_education.php">Higher Education</a></li>
                  <li><a class="grey-text text-lighten-3" href="online_courses.php">Online Courses</a></li>
                  <li><a class="grey-text text-lighten-3" href="professional_certifications.php">Professional Certifications</a></li>
            
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2017 Copyright Mukesh Joshi , Siddhesh Kadam
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
</form>
  </body>
</html>