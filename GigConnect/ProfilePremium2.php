<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./ProfilePremium2.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Open Sans Condensed:wght@300;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Open Sans:wght@600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap"
    />

    <style>
      @font-face {
        font-family: "SF Pro Display";
        src: url("SFPRODISPLAYREGULAR.OTF");
        font-weight: 400;
      }
      @font-face {
        font-family: "SF Pro Display";
        src: url("SFPRODISPLAYLIGHTITALIC.OTF");
        font-weight: 500;
      }
      @font-face {
        font-family: "SF Pro Display";
        src: url("SFPRODISPLAYBOLD.OTF");
        font-weight: 700;
      }
      @font-face {
        font-family: "font";
        src: url("SFPRODISPLAYSEMIBOLDITALIC.OTF");
        font-weight: 400;
      }
      @font-face {
        font-family: "SeoulNamsan CBL";
        src: url("SFPRODISPLAYMEDIUM.OTF");
        font-weight: 400;
      }
    </style>
  </head>
  <body>
    <div class="profile-premium2">
      <div class="box">
        <img class="box-child" alt="" src="./public/rectangle-641.svg" />

        <img class="box-child" alt="" src="./public/rectangle-7.svg" />

        <img class="box-inner" alt="" src="./public/polygon-1.svg" />

        <div class="connect2">
          <img
            class="bookmark-tag-1-icon"
            alt=""
            src="./public/bookmarktag-11@2x.png"
          />

          <div class="connect-with-expert-container">
            <span class="connect-with-expert-container1">
              <p class="connect-with">Connect with</p>
              <p class="connect-with">Expert Freelancers!</p>
            </span>
          </div>
        </div>
        <div class="search-bar">
          <div class="search-bar-child"></div>
          <div class="what-skill-are">What skill are you looking for?</div>
          <img
            class="searchputih-1-icon"
            alt=""
            src="./public/searchputih-1@2x.png"
          />
        </div>
        <div class="username">
          <div class="username-child"></div>
          <div class="username-item"></div>
          <img class="padlock-1-icon" alt="" src="./public/padlock-11@2x.png" />
        </div>
        <div class="group-parent">
          <div class="vector-parent">
            <img class="group-child" alt="" src="./public/rectangle-3954.svg" />

            <div class="jessica" id="jessicaText">
            <?php 
          $firstName = $_SESSION['firstName'];
          $lastName = $_SESSION['lastName'];
          echo "$firstName $lastName";
          ?>
            </div>
            <div class="log-out" id="logOutText">Log Out</div>
            <img class="group-item" alt="" src="./public/polygon-3.svg" />

            <div class="group-inner"></div>
          </div>
          <div class="ellipse-div"></div>
          <img class="user-2-1" alt="" src="./public/user-2-11@2x.png" />
        </div>
      </div>
      <div class="kotak1">
        <div class="kotak1-child"></div>
        <div class="kotak1-item"></div>
        <div class="kotak1-inner"></div>
        <div class="rectangle-div"></div>
        <div class="kotak1-child1"></div>
        <img class="ellipse-icon" alt="" src="./public/ellipse-5.svg" />

        <div class="description">
          <div class="description-child"></div>
          <div class="description1">Description</div>
          <div class="jadi-ini-isinya">
            Jadi ini isinya deskripsi sang freelancer kaya misal Hi! I am
            passionate in UI/UX Design and bla bla bla.
          </div>
        </div>
        <div class="focus">
          <div class="description2">
            <div class="description-item"></div>
          </div>
          <div class="focus1">Focus</div>
          <div class="interest1">
            <div class="interest1-child"></div>
            <img
              class="paint-palette-1-icon"
              alt=""
              src="./public/paintpalette-1@2x.png"
            />

            <div class="design">Design</div>
          </div>
          <div class="interest11">
            <div class="interest1-item"></div>
            <img
              class="web-design-1-icon"
              alt=""
              src="./public/paintpalette-1@2x.png"
            />

            <img
              class="web-design-1-icon"
              alt=""
              src="./public/webdesign-1@2x.png"
            />

            <img
              class="ux-design-1-icon"
              alt=""
              src="./public/uxdesign-1@2x.png"
            />

            <div class="design">Web Design</div>
          </div>
          <div class="interest12">
            <div class="interest1-inner"></div>
            <img
              class="web-design-1-icon"
              alt=""
              src="./public/paintpalette-1@2x.png"
            />

            <img
              class="web-design-1-icon1"
              alt=""
              src="./public/webdesign-11@2x.png"
            />

            <div class="design">FrontEnd Developer</div>
          </div>
        </div>
      </div>
      <div class="ellipse-parent">
        <div class="group-child1"></div>
        <img class="user-1-1" alt="" src="./public/user-1-1@2x.png" />
      </div>
      <div class="username1">
        <img class="padlock-1-icon1" alt="" src="./public/padlock-12@2x.png" />

        <div class="jessica-wang">
        <?php 
          $firstName = $_SESSION['firstName'];
          $lastName = $_SESSION['lastName'];
          echo "$firstName $lastName";
          ?>
        </div>
      </div>
      <div class="login">
        <div class="login-child"></div>
        <div class="previous-jobs">Previous Jobs</div>
      </div>
      <div class="login1">
        <div class="login-child"></div>
        <div class="applied">Applied</div>
      </div>
      <div class="login2">
        <div class="login-child"></div>
        <div class="applied">My Wallet</div>
      </div>
      <div class="login3">
        <div class="login-child"></div>
        <div class="applied" div="expert">My Expert</div>
      </div>
      <div class="login4">
        <div class="login-child"></div>
        <div class="applied">Portfolios</div>
      </div>
      <div class="login5">
        <div class="login-child3"></div>
        <div class="premium">Premium</div>
      </div>
      <div class="footer">
        <div class="footer-inner">
          <div class="group-child2"></div>
        </div>
        <div class="logo">
          <b class="gig-connect">Gig Connect</b>
          <img class="link-1-icon" alt="" src="./public/link-1@2x.png" />
        </div>
        <div class="headers">
          <b class="home" id="home">Home</b>
          <div class="find-jobs" id="findjobs">Find Jobs</div>
          <div class="find-freelancers" id="findfreelance">Find Freelancers</div>
          <div class="account" id="account">Account</div>
        </div>
        <div class="profile-perusahaan-card-parent">
          <div class="profile-perusahaan-card">
            <div class="div">
              <div class="child"></div>
              <img class="item" alt="" src="./public/rectangle-25.svg" />

              <div class="requirements">Requirements:</div>
              <div class="requirements1">
                <ul class="male-female-maximum-25-years">
                  <li class="male-female">Male / Female</li>
                  <li class="male-female">Maximum 25 years old</li>
                  <li class="male-female">
                    Bachelor degree in Accounting with GPA &gt; 3.0
                  </li>
                  <li class="male-female">Good commanf of English</li>
                  <li class="male-female">
                    1-2 years working experience in accounting field
                  </li>
                  <li>Proficient user of Microsoft office</li>
                </ul>
              </div>
              <div class="requirements2">CLICK HERE FOR MORE INFO</div>
              <img class="inner" alt="" src="./public/ellipse-8@2x.png" />

              <img
                class="ruler-and-pencil-1-icon"
                alt=""
                src="./public/rulerandpencil-1@2x.png"
              />

              <img class="child1" alt="" src="./public/ellipse-4@2x.png" />

              <b class="pt-freeport-indonesia">PT Pertamina</b>
              <div class="location-n-status">
                <div class="star">
                  <img
                    class="star-1-icon"
                    alt=""
                    src="./public/star-1@2x.png"
                  />

                  <img
                    class="star-2-icon"
                    alt=""
                    src="./public/star-2@2x.png"
                  />

                  <img
                    class="star-3-icon"
                    alt=""
                    src="./public/star-3@2x.png"
                  />

                  <img
                    class="star-4-icon"
                    alt=""
                    src="./public/star-4@2x.png"
                  />

                  <img
                    class="star-5-icon"
                    alt=""
                    src="./public/star-5@2x.png"
                  />
                </div>
                <img
                  class="location-hitam-1"
                  alt=""
                  src="./public/location-hitam-1@2x.png"
                />

                <div class="dki-jakarta-indonesia">DKI Jakarta, Indonesia</div>
                <div class="karakurylenkogmailcom">
                  Kara.Kurylenko@gmail.com
                </div>
                <img
                  class="email-1-icon"
                  alt=""
                  src="./public/email-1@2x.png"
                />
              </div>
              <div class="availability">
                <img
                  class="available-1-icon"
                  alt=""
                  src="./public/available-1@2x.png"
                />

                <div class="available">Available</div>
              </div>
              <div class="rectangle-parent">
                <div class="salary-child"></div>
                <div class="ux-designer">Accounting Staff</div>
              </div>
              <div class="rectangle-group">
                <div class="salary-child"></div>
                <div class="graphic-designer">Finance Staff</div>
              </div>
              <div class="wa">
                <div class="wa-child"></div>
                <div class="contact">Contact</div>
                <img
                  class="whatsapp-1-icon"
                  alt=""
                  src="./public/whatsapp-1@2x.png"
                />
              </div>
              <div class="wa1">
                <div class="wa-item"></div>
                <img
                  class="cloud-computing-1-1"
                  alt=""
                  src="./public/cloudcomputing-1-1@2x.png"
                />

                <div class="access-portfolio">Access Portfolio</div>
                <img
                  class="whatsapp-1-icon1"
                  alt=""
                  src="./public/whatsapp-11@2x.png"
                />
              </div>
              <div class="wa2">
                <div class="wa-item"></div>
                <img
                  class="cloud-computing-1-1"
                  alt=""
                  src="./public/cloudcomputing-1-1@2x.png"
                />

                <div class="reviews">Reviews</div>
                <img
                  class="whatsapp-1-icon1"
                  alt=""
                  src="./public/whatsapp-11@2x.png"
                />
              </div>
              <img
                class="bookmark-1-icon"
                alt=""
                src="./public/bookmark-1@2x.png"
              />

              <div class="salary">
                <div class="salary-child"></div>
                <div class="div1">$500-$1200</div>
              </div>
              <div class="registration-18">
                Registration : 18 March 2023 - 30 June 2023
              </div>
            </div>
          </div>
          <div class="profile-perusahaan-card">
            <div class="div">
              <div class="child"></div>
              <img class="item" alt="" src="./public/rectangle-25.svg" />

              <div class="requirements">Requirements:</div>
              <div class="requirements4">
                <ul class="male-female-maximum-25-years">
                  <li class="male-female">
                    Minimum 1-2 Years working experience as Graphic Designer
                  </li>
                  <li class="male-female">
                    Very good Knowledge in Photoshop, Illustrator, Corel Draw
                  </li>
                  <li class="male-female">Age below 35 years old</li>
                  <li>Team player with positive attitudes</li>
                </ul>
              </div>
              <div class="requirements2">CLICK HERE FOR MORE INFO</div>
              <img class="inner" alt="" src="./public/ellipse-81@2x.png" />

              <div class="ruler-and-pencil-1"></div>
              <img class="child1" alt="" src="./public/ellipse-4@2x.png" />

              <b class="pt-freeport-indonesia1">PT PLN</b>
              <div class="location-n-status">
                <div class="star">
                  <img
                    class="star-1-icon"
                    alt=""
                    src="./public/star-1@2x.png"
                  />

                  <img
                    class="star-2-icon"
                    alt=""
                    src="./public/star-2@2x.png"
                  />

                  <img
                    class="star-3-icon"
                    alt=""
                    src="./public/star-3@2x.png"
                  />

                  <img
                    class="star-4-icon"
                    alt=""
                    src="./public/star-4@2x.png"
                  />

                  <img
                    class="star-5-icon"
                    alt=""
                    src="./public/star-5@2x.png"
                  />
                </div>
                <img
                  class="location-hitam-1"
                  alt=""
                  src="./public/location-hitam-1@2x.png"
                />

                <div class="dki-jakarta-indonesia">DKI Jakarta, Indonesia</div>
                <div class="karakurylenkogmailcom">
                  Kara.Kurylenko@gmail.com
                </div>
                <img
                  class="email-1-icon"
                  alt=""
                  src="./public/email-1@2x.png"
                />
              </div>
              <div class="availability">
                <img
                  class="available-1-icon"
                  alt=""
                  src="./public/available-1@2x.png"
                />

                <div class="available">Available</div>
              </div>
              <div class="rectangle-container">
                <div class="salary-child"></div>
                <div class="ux-designer1">UX Designer</div>
              </div>
              <div class="group-div">
                <div class="salary-child"></div>
                <div class="graphic-designer1">Graphic Designer</div>
              </div>
              <div class="wa">
                <div class="wa-child"></div>
                <div class="contact">Contact</div>
                <img
                  class="whatsapp-1-icon"
                  alt=""
                  src="./public/whatsapp-1@2x.png"
                />
              </div>
              <div class="wa1">
                <div class="wa-item"></div>
                <img
                  class="cloud-computing-1-1"
                  alt=""
                  src="./public/cloudcomputing-1-1@2x.png"
                />

                <div class="access-portfolio">Access Portfolio</div>
                <img
                  class="whatsapp-1-icon1"
                  alt=""
                  src="./public/whatsapp-11@2x.png"
                />
              </div>
              <div class="wa2">
                <div class="wa-item"></div>
                <img
                  class="cloud-computing-1-1"
                  alt=""
                  src="./public/cloudcomputing-1-1@2x.png"
                />

                <div class="reviews">Reviews</div>
                <img
                  class="whatsapp-1-icon1"
                  alt=""
                  src="./public/whatsapp-11@2x.png"
                />
              </div>
              <img
                class="bookmark-1-icon"
                alt=""
                src="./public/bookmark-1@2x.png"
              />

              <div class="salary">
                <div class="salary-child"></div>
                <div class="div1">$400-$600</div>
              </div>
              <div class="registration-18">
                Registration : 12 April 2023 - 23 July 2023
              </div>
            </div>
          </div>
          <div class="profile-perusahaan-card">
            <div class="div">
              <div class="child"></div>
              <img class="item" alt="" src="./public/rectangle-25.svg" />

              <div class="requirements">Requirements:</div>
              <div class="requirements1">
                <ul class="male-female-maximum-25-years">
                  <li class="male-female">
                    Minimum S1 graduate according to major
                  </li>
                  <li class="male-female">
                    Have advanced knowledge of building management/engineering
                  </li>
                  <li class="male-female">
                    Have general knowledge of budgeting and basic accounting
                  </li>
                  <li class="male-female">
                    Flexible to respond to different work situations
                  </li>
                  <li>Have the ability to work under pressure</li>
                </ul>
              </div>
              <div class="requirements2">CLICK HERE FOR MORE INFO</div>
              <img class="inner" alt="" src="./public/ellipse-82@2x.png" />

              <img
                class="ruler-and-pencil-1-icon"
                alt=""
                src="./public/rulerandpencil-11@2x.png"
              />

              <img class="child1" alt="" src="./public/ellipse-4@2x.png" />

              <b class="pt-freeport-indonesia2">PT Astra Internasional</b>
              <div class="location-n-status">
                <div class="star">
                  <img
                    class="star-1-icon"
                    alt=""
                    src="./public/star-1@2x.png"
                  />

                  <img
                    class="star-2-icon"
                    alt=""
                    src="./public/star-2@2x.png"
                  />

                  <img
                    class="star-3-icon"
                    alt=""
                    src="./public/star-3@2x.png"
                  />

                  <img
                    class="star-4-icon"
                    alt=""
                    src="./public/star-4@2x.png"
                  />

                  <img
                    class="star-5-icon"
                    alt=""
                    src="./public/star-5@2x.png"
                  />
                </div>
                <img
                  class="location-hitam-1"
                  alt=""
                  src="./public/location-hitam-1@2x.png"
                />

                <div class="dki-jakarta-indonesia">DKI Jakarta, Indonesia</div>
                <div class="karakurylenkogmailcom">
                  Kara.Kurylenko@gmail.com
                </div>
                <img
                  class="email-1-icon"
                  alt=""
                  src="./public/email-1@2x.png"
                />
              </div>
              <div class="availability">
                <img
                  class="available-1-icon"
                  alt=""
                  src="./public/available-1@2x.png"
                />

                <div class="available">Available</div>
              </div>
              <div class="rectangle-parent">
                <div class="salary-child"></div>
                <div class="ux-designer2">Chief Engineering</div>
              </div>
              <div class="group-div">
                <div class="salary-child"></div>
                <div class="graphic-designer1">Staff Engineering</div>
              </div>
              <div class="wa">
                <div class="wa-child"></div>
                <div class="contact">Contact</div>
                <img
                  class="whatsapp-1-icon"
                  alt=""
                  src="./public/whatsapp-1@2x.png"
                />
              </div>
              <div class="wa1">
                <div class="wa-item"></div>
                <img
                  class="cloud-computing-1-1"
                  alt=""
                  src="./public/cloudcomputing-1-1@2x.png"
                />

                <div class="access-portfolio">Access Portfolio</div>
                <img
                  class="whatsapp-1-icon1"
                  alt=""
                  src="./public/whatsapp-11@2x.png"
                />
              </div>
              <div class="wa2">
                <div class="wa-item"></div>
                <img
                  class="cloud-computing-1-1"
                  alt=""
                  src="./public/cloudcomputing-1-1@2x.png"
                />

                <div class="reviews">Reviews</div>
                <img
                  class="whatsapp-1-icon1"
                  alt=""
                  src="./public/whatsapp-11@2x.png"
                />
              </div>
              <img
                class="bookmark-1-icon"
                alt=""
                src="./public/bookmark-1@2x.png"
              />

              <div class="salary">
                <div class="salary-child"></div>
                <div class="div1">$150-$300</div>
              </div>
              <div class="registration-18">
                Registration : 02 February 2023 - 11 March 2023
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>

      var expert = document.getElementById("expert");
      if (expert) {
        loginContainer3.addEventListener("click", function (e) {
          window.location.href = "./PremiumFeature2.html";
        });
      }
      
      var accountText = document.getElementById("account");
      if (accountText) {
        accountText.addEventListener("click", function (e) {
          window.location.href = "./ProfilePremium.html";
        });
      }

      var jessicaText = document.getElementById("jessicaText");
      if (jessicaText) {
        jessicaText.addEventListener("click", function (e) {
          window.location.href = "./ProfilePremium2).html";
        });
      }
      
      var logOutText = document.getElementById("logOutText");
      if (logOutText) {
        logOutText.addEventListener("click", function (e) {
          window.location.href = "./Desktop1.html";
        });
      }

      var home = document.getElementById("home");
      if (home) {
        home.addEventListener("click", function (e) {
          window.location.href = "./Desktop(loginPremium).html";
        });
      }
      var findfreelance = document.getElementById("findfreelance");
      if (findfreelance) {
        findfreelance.addEventListener("click", function (e) {
          window.location.href = "./FindFreelance(loginPremium).html";
        });
      }
      var findjobs = document.getElementById("findjobs");
      if (findjobs) {
        findjobs.addEventListener("click", function (e) {
          window.location.href = "./FindJobs(loginPremium).html";
        });
      }
      </script>
  </body>
</html>
