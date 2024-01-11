<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./ProfilePremium.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Open Sans Condensed:wght@300;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Open Sans:wght@600&display=swap"
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
    <div class="profile-premium">
      <div class="box5">
        <img class="box-child4" alt="" src="./public/rectangle-64.svg" />

        <img class="box-child4" alt="" src="./public/rectangle-7.svg" />

        <img class="box-child6" alt="" src="./public/polygon-1.svg" />

        <div class="connect23">
          <img
            class="bookmark-tag-1-icon3"
            alt=""
            src="./public/bookmarktag-11@2x.png"
          />

          <div class="connect-with-expert-container7">
            <span class="connect-with-expert-container8">
              <p class="connect-with6">Connect with</p>
              <p class="connect-with6">Expert Freelancers!</p>
            </span>
          </div>
        </div>
        <div class="search-bar7">
          <div class="search-bar-child5"></div>
          <div class="what-skill-are7">What skill are you looking for?</div>
          <img
            class="searchputih-1-icon3"
            alt=""
            src="./public/searchputih-11@2x.png"
          />
        </div>
        <div class="username2">
          <div class="username-inner"></div>
          <div class="username-child1"></div>
          <img
            class="padlock-1-icon1"
            alt=""
            src="./public/padlock-11@2x.png"
          />
        </div>
      </div>
      <div class="kotak13">
        <div class="kotak1-child14"></div>
        <div class="kotak1-child15"></div>
        <div class="kotak1-child16"></div>
        <div class="kotak1-child17"></div>
        <div class="kotak1-child18"></div>
        <img class="kotak1-child19" alt="" src="./public/ellipse-5.svg" />

        <div class="description9">
          <div class="description-child4"></div>
          <div class="description10">Description</div>
          <div class="jadi-ini-isinya3">
            Jadi ini isinya deskripsi sang freelancer kaya misal Hi! I am
            passionate in UI/UX Design and bla bla bla.
          </div>
        </div>
        <div class="focus6">
          <div class="description11">
            <div class="description-child5"></div>
          </div>
          <div class="focus7">Focus</div>
          <div class="interest19">
            <div class="interest1-child7"></div>
            <img
              class="paint-palette-1-icon9"
              alt=""
              src="./public/paintpalette-1@2x.png"
            />

            <div class="design3">Design</div>
          </div>
          <div class="interest110">
            <div class="interest1-child8"></div>
            <img
              class="paint-palette-1-icon10"
              alt=""
              src="./public/paintpalette-1@2x.png"
            />

            <img
              class="paint-palette-1-icon10"
              alt=""
              src="./public/webdesign-1@2x.png"
            />

            <img
              class="ux-design-1-icon3"
              alt=""
              src="./public/uxdesign-1@2x.png"
            />

            <div class="design3">Web Design</div>
          </div>
          <div class="interest111">
            <div class="interest1-child9"></div>
            <img
              class="paint-palette-1-icon10"
              alt=""
              src="./public/paintpalette-1@2x.png"
            />

            <img
              class="web-design-1-icon7"
              alt=""
              src="./public/webdesign-11@2x.png"
            />

            <div class="design3">FrontEnd Developer</div>
          </div>
        </div>
      </div>
      <div class="ellipse-parent">
        <div class="group-child70"></div>
        <img class="user-1-11" alt="" src="./public/user-1-1@2x.png" />
      </div>
      <div class="username3">
        <img class="padlock-1-icon2" alt="" src="./public/padlock-12@2x.png" />

        <div class="jessica-wang">
        <?php 
          $firstName = $_SESSION['firstName'];
          $lastName = $_SESSION['lastName'];
          echo "$firstName $lastName";
          ?>
        </div>
      </div>
      <div class="login3">
        <div class="login-item"></div>
        <div class="previous-jobs">Previous Jobs</div>
      </div>
      <div class="login4">
        <div class="login-item"></div>
        <div class="applied">Applied</div>
      </div>
      <div class="login5">
        <div class="login-item"></div>
        <div class="applied">My Wallet</div>
      </div>
      <div class="login6" id="loginContainer3">
        <div class="login-item"></div>
        <div class="applied">My Expert</div>
      </div>
      <div class="login7">
        <div class="login-child3"></div>
        <div class="premium">Premium</div>
      </div>
      <div class="footer6">
        <div class="footer-inner3">
          <div class="group-child71"></div>
        </div>
        <div class="logo7">
          <b class="gig-connect7">Gig Connect</b>
          <img class="link-1-icon7" alt="" src="./public/link-1@2x.png" />
        </div>
        <div class="headers5">
          <b class="home5" id="home">Home</b>
          <div class="find-jobs6" id="findjobs">Find Jobs</div>
          <div class="find-freelancers5" id="findfreelance">Find Freelancers</div>
          <div class="account5" id="accountText">Account</div>
        </div>
        <div class="profile-perusahaan-card-parent3">
          <div class="profile-perusahaan-card18">
            <div class="div41">
              <div class="child70"></div>
              <img class="child71" alt="" src="./public/rectangle-25.svg" />

              <div class="requirements54">Requirements:</div>
              <div class="requirements55">
                <ul class="male-female-maximum-25-years2">
                  <li class="male-female2">Male / Female</li>
                  <li class="male-female2">Maximum 25 years old</li>
                  <li class="male-female2">
                    Bachelor degree in Accounting with GPA &gt; 3.0
                  </li>
                  <li class="male-female2">Good commanf of English</li>
                  <li class="male-female2">
                    1-2 years working experience in accounting field
                  </li>
                  <li>Proficient user of Microsoft office</li>
                </ul>
              </div>
              <div class="requirements56">CLICK HERE FOR MORE INFO</div>
              <img class="child72" alt="" src="./public/ellipse-8@2x.png" />

              <img
                class="ruler-and-pencil-1-icon16"
                alt=""
                src="./public/rulerandpencil-1@2x.png"
              />

              <img class="child73" alt="" src="./public/ellipse-4@2x.png" />

              <b class="pt-freeport-indonesia18">PT Pertamina</b>
              <div class="location-n-status33">
                <div class="star33">
                  <img
                    class="star-1-icon33"
                    alt=""
                    src="./public/star-1@2x.png"
                  />

                  <img
                    class="star-2-icon33"
                    alt=""
                    src="./public/star-2@2x.png"
                  />

                  <img
                    class="star-3-icon33"
                    alt=""
                    src="./public/star-31@2x.png"
                  />

                  <img
                    class="star-4-icon33"
                    alt=""
                    src="./public/star-4@2x.png"
                  />

                  <img
                    class="star-5-icon33"
                    alt=""
                    src="./public/star-5@2x.png"
                  />
                </div>
                <img
                  class="location-hitam-133"
                  alt=""
                  src="./public/location-hitam-1@2x.png"
                />

                <div class="dki-jakarta-indonesia32">
                  DKI Jakarta, Indonesia
                </div>
                <div class="karakurylenkogmailcom33">
                  Kara.Kurylenko@gmail.com
                </div>
                <img
                  class="email-1-icon33"
                  alt=""
                  src="./public/email-1@2x.png"
                />
              </div>
              <div class="availability18">
                <img
                  class="available-1-icon33"
                  alt=""
                  src="./public/available-1@2x.png"
                />

                <div class="available33">Available</div>
              </div>
              <div class="rectangle-parent69">
                <div class="group-child72"></div>
                <div class="ux-designer38">Accounting Staff</div>
              </div>
              <div class="rectangle-parent70">
                <div class="group-child72"></div>
                <div class="graphic-designer33">Finance Staff</div>
              </div>
              <div class="wa99">
                <div class="wa-child97"></div>
                <div class="contact33">Contact</div>
                <img
                  class="whatsapp-1-icon99"
                  alt=""
                  src="./public/whatsapp-1@2x.png"
                />
              </div>
              <div class="wa100">
                <div class="wa-child98"></div>
                <img
                  class="cloud-computing-1-166"
                  alt=""
                  src="./public/cloudcomputing-1-1@2x.png"
                />

                <div class="access-portfolio33">Access Portfolio</div>
                <img
                  class="whatsapp-1-icon100"
                  alt=""
                  src="./public/whatsapp-11@2x.png"
                />
              </div>
              <div class="wa101">
                <div class="wa-child98"></div>
                <img
                  class="cloud-computing-1-166"
                  alt=""
                  src="./public/cloudcomputing-1-1@2x.png"
                />

                <div class="reviews33">Reviews</div>
                <img
                  class="whatsapp-1-icon100"
                  alt=""
                  src="./public/whatsapp-11@2x.png"
                />
              </div>
              <img
                class="bookmark-1-icon33"
                alt=""
                src="./public/bookmark-1@2x.png"
              />

              <div class="salary18">
                <div class="group-child72"></div>
                <div class="div42">$500-$1200</div>
              </div>
              <div class="registration-1818">
                Registration : 18 March 2023 - 30 June 2023
              </div>
            </div>
          </div>
          <div class="profile-perusahaan-card18">
            <div class="div41">
              <div class="child70"></div>
              <img class="child71" alt="" src="./public/rectangle-25.svg" />

              <div class="requirements54">Requirements:</div>
              <div class="requirements58">
                <ul class="male-female-maximum-25-years2">
                  <li class="male-female2">
                    Minimum 1-2 Years working experience as Graphic Designer
                  </li>
                  <li class="male-female2">
                    Very good Knowledge in Photoshop, Illustrator, Corel Draw
                  </li>
                  <li class="male-female2">Age below 35 years old</li>
                  <li>Team player with positive attitudes</li>
                </ul>
              </div>
              <div class="requirements56">CLICK HERE FOR MORE INFO</div>
              <img class="child72" alt="" src="./public/ellipse-81@2x.png" />

              <div class="ruler-and-pencil-12"></div>
              <img class="child73" alt="" src="./public/ellipse-4@2x.png" />

              <b class="pt-freeport-indonesia19">PT PLN</b>
              <div class="location-n-status33">
                <div class="star33">
                  <img
                    class="star-1-icon33"
                    alt=""
                    src="./public/star-1@2x.png"
                  />

                  <img
                    class="star-2-icon33"
                    alt=""
                    src="./public/star-2@2x.png"
                  />

                  <img
                    class="star-3-icon33"
                    alt=""
                    src="./public/star-31@2x.png"
                  />

                  <img
                    class="star-4-icon33"
                    alt=""
                    src="./public/star-4@2x.png"
                  />

                  <img
                    class="star-5-icon33"
                    alt=""
                    src="./public/star-5@2x.png"
                  />
                </div>
                <img
                  class="location-hitam-133"
                  alt=""
                  src="./public/location-hitam-1@2x.png"
                />

                <div class="dki-jakarta-indonesia32">
                  DKI Jakarta, Indonesia
                </div>
                <div class="karakurylenkogmailcom33">
                  Kara.Kurylenko@gmail.com
                </div>
                <img
                  class="email-1-icon33"
                  alt=""
                  src="./public/email-1@2x.png"
                />
              </div>
              <div class="availability18">
                <img
                  class="available-1-icon33"
                  alt=""
                  src="./public/available-1@2x.png"
                />

                <div class="available33">Available</div>
              </div>
              <div class="rectangle-parent71">
                <div class="group-child72"></div>
                <div class="ux-designer39">UX Designer</div>
              </div>
              <div class="rectangle-parent72">
                <div class="group-child72"></div>
                <div class="graphic-designer34">Graphic Designer</div>
              </div>
              <div class="wa99">
                <div class="wa-child97"></div>
                <div class="contact33">Contact</div>
                <img
                  class="whatsapp-1-icon99"
                  alt=""
                  src="./public/whatsapp-1@2x.png"
                />
              </div>
              <div class="wa100">
                <div class="wa-child98"></div>
                <img
                  class="cloud-computing-1-166"
                  alt=""
                  src="./public/cloudcomputing-1-1@2x.png"
                />

                <div class="access-portfolio33">Access Portfolio</div>
                <img
                  class="whatsapp-1-icon100"
                  alt=""
                  src="./public/whatsapp-11@2x.png"
                />
              </div>
              <div class="wa101">
                <div class="wa-child98"></div>
                <img
                  class="cloud-computing-1-166"
                  alt=""
                  src="./public/cloudcomputing-1-1@2x.png"
                />

                <div class="reviews33">Reviews</div>
                <img
                  class="whatsapp-1-icon100"
                  alt=""
                  src="./public/whatsapp-11@2x.png"
                />
              </div>
              <img
                class="bookmark-1-icon33"
                alt=""
                src="./public/bookmark-1@2x.png"
              />

              <div class="salary18">
                <div class="group-child72"></div>
                <div class="div42">$400-$600</div>
              </div>
              <div class="registration-1818">
                Registration : 12 April 2023 - 23 July 2023
              </div>
            </div>
          </div>
          <div class="profile-perusahaan-card18">
            <div class="div41">
              <div class="child70"></div>
              <img class="child71" alt="" src="./public/rectangle-25.svg" />

              <div class="requirements54">Requirements:</div>
              <div class="requirements55">
                <ul class="male-female-maximum-25-years2">
                  <li class="male-female2">
                    Minimum S1 graduate according to major
                  </li>
                  <li class="male-female2">
                    Have advanced knowledge of building management/engineering
                  </li>
                  <li class="male-female2">
                    Have general knowledge of budgeting and basic accounting
                  </li>
                  <li class="male-female2">
                    Flexible to respond to different work situations
                  </li>
                  <li>Have the ability to work under pressure</li>
                </ul>
              </div>
              <div class="requirements56">CLICK HERE FOR MORE INFO</div>
              <img class="child72" alt="" src="./public/ellipse-89@2x.png" />

              <img
                class="ruler-and-pencil-1-icon16"
                alt=""
                src="./public/rulerandpencil-11@2x.png"
              />

              <img class="child73" alt="" src="./public/ellipse-4@2x.png" />

              <b class="pt-freeport-indonesia20">PT Astra Internasional</b>
              <div class="location-n-status33">
                <div class="star33">
                  <img
                    class="star-1-icon33"
                    alt=""
                    src="./public/star-1@2x.png"
                  />

                  <img
                    class="star-2-icon33"
                    alt=""
                    src="./public/star-2@2x.png"
                  />

                  <img
                    class="star-3-icon33"
                    alt=""
                    src="./public/star-31@2x.png"
                  />

                  <img
                    class="star-4-icon33"
                    alt=""
                    src="./public/star-4@2x.png"
                  />

                  <img
                    class="star-5-icon33"
                    alt=""
                    src="./public/star-5@2x.png"
                  />
                </div>
                <img
                  class="location-hitam-133"
                  alt=""
                  src="./public/location-hitam-1@2x.png"
                />

                <div class="dki-jakarta-indonesia32">
                  DKI Jakarta, Indonesia
                </div>
                <div class="karakurylenkogmailcom33">
                  Kara.Kurylenko@gmail.com
                </div>
                <img
                  class="email-1-icon33"
                  alt=""
                  src="./public/email-1@2x.png"
                />
              </div>
              <div class="availability18">
                <img
                  class="available-1-icon33"
                  alt=""
                  src="./public/available-1@2x.png"
                />

                <div class="available33">Available</div>
              </div>
              <div class="rectangle-parent69">
                <div class="group-child72"></div>
                <div class="ux-designer40">Chief Engineering</div>
              </div>
              <div class="rectangle-parent72">
                <div class="group-child72"></div>
                <div class="graphic-designer34">Staff Engineering</div>
              </div>
              <div class="wa99">
                <div class="wa-child97"></div>
                <div class="contact33">Contact</div>
                <img
                  class="whatsapp-1-icon99"
                  alt=""
                  src="./public/whatsapp-1@2x.png"
                />
              </div>
              <div class="wa100">
                <div class="wa-child98"></div>
                <img
                  class="cloud-computing-1-166"
                  alt=""
                  src="./public/cloudcomputing-1-1@2x.png"
                />

                <div class="access-portfolio33">Access Portfolio</div>
                <img
                  class="whatsapp-1-icon100"
                  alt=""
                  src="./public/whatsapp-11@2x.png"
                />
              </div>
              <div class="wa101">
                <div class="wa-child98"></div>
                <img
                  class="cloud-computing-1-166"
                  alt=""
                  src="./public/cloudcomputing-1-1@2x.png"
                />

                <div class="reviews33">Reviews</div>
                <img
                  class="whatsapp-1-icon100"
                  alt=""
                  src="./public/whatsapp-11@2x.png"
                />
              </div>
              <img
                class="bookmark-1-icon33"
                alt=""
                src="./public/bookmark-1@2x.png"
              />

              <div class="salary18">
                <div class="group-child72"></div>
                <div class="div42">$150-$300</div>
              </div>
              <div class="registration-1818">
                Registration : 02 February 2023 - 11 March 2023
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      var loginContainer3 = document.getElementById("loginContainer3");
      if (loginContainer3) {
        loginContainer3.addEventListener("click", function (e) {
          window.location.href = "./PremiumFeature(2).php";
        });
      }
      
      var accountText = document.getElementById("accountText");
      if (accountText) {
        accountText.addEventListener("click", function (e) {
          window.location.href = "./ProfilePremium2.php";
        });
      }

      var jessicaText = document.getElementById("jessicaText");
      if (jessicaText) {
        jessicaText.addEventListener("click", function (e) {
          window.location.href = "./ProfilePremium.php";
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
