<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./Profile.css" />
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
    <div class="profile">
      <div class="box13">
        <img class="box-child8" alt="" src="./public/rectangle-65.svg" />

        <img class="box-child8" alt="" src="./public/rectangle-71.svg" />

        <img class="box-child10" alt="" src="./public/polygon-1.svg" />

        <div class="connect24">
          <img
            class="bookmark-tag-1-icon4"
            alt=""
            src="./public/bookmarktag-11@2x.png"
          />

          <div class="connect-with-expert-container11">
            <span class="connect-with-expert-container12">
              <p class="connect-with8">Connect with</p>
              <p class="connect-with8">Expert Freelancers!</p>
            </span>
          </div>
        </div>
        <div class="search-bar9">
          <div class="search-bar-child7"></div>
          <div class="what-skill-are9">What skill are you looking for?</div>
          <img
            class="searchputih-1-icon4"
            alt=""
            src="./public/searchputih-11@2x.png"
          />
        </div>
        <div class="username4">
          <div class="username-child2"></div>
          <div class="username-child3"></div>
          <img
            class="padlock-1-icon3"
            alt=""
            src="./public/padlock-11@2x.png"
          />
        </div>
      </div>
      <div class="kotak14">
        <div class="kotak1-child20"></div>
        <div class="kotak1-child21"></div>
        <div class="kotak1-child22"></div>
        <div class="kotak1-child23"></div>
        <div class="kotak1-child24"></div>
        <img class="kotak1-child25" alt="" src="./public/ellipse-5.svg" />

        <div class="description12">
          <div class="description-child6"></div>
          <div class="description13">Description</div>
          <div class="jadi-ini-isinya4">
            Jadi ini isinya deskripsi sang freelancer kaya misal Hi! I am
            passionate in UI/UX Design and bla bla bla.
          </div>
        </div>
        <div class="focus8">
          <div class="description14">
            <div class="description-child7"></div>
          </div>
          <div class="focus9">Focus</div>
          <div class="interest112">
            <div class="interest1-child10"></div>
            <img
              class="paint-palette-1-icon12"
              alt=""
              src="./public/paintpalette-1@2x.png"
            />

            <div class="design4">Design</div>
          </div>
          <div class="interest113">
            <div class="interest1-child11"></div>
            <img
              class="paint-palette-1-icon13"
              alt=""
              src="./public/paintpalette-1@2x.png"
            />

            <img
              class="paint-palette-1-icon13"
              alt=""
              src="./public/webdesign-1@2x.png"
            />

            <img
              class="ux-design-1-icon4"
              alt=""
              src="./public/uxdesign-1@2x.png"
            />

            <div class="design4">Web Design</div>
          </div>
          <div class="interest114">
            <div class="interest1-child12"></div>
            <img
              class="paint-palette-1-icon13"
              alt=""
              src="./public/paintpalette-1@2x.png"
            />

            <img
              class="web-design-1-icon9"
              alt=""
              src="./public/webdesign-11@2x.png"
            />

            <div class="design4">FrontEnd Developer</div>
          </div>
        </div>
      </div>
      <div class="ellipse-group">
        <div class="group-child104"></div>
        <img class="user-1-12" alt="" src="./public/user-1-1@2x.png" />
      </div>
      <div class="username5">
        <img class="padlock-1-icon4" alt="" src="./public/padlock-12@2x.png" />

        <div class="jessica-wang1">
        <?php 
          $firstName = $_SESSION['firstName'];
          $lastName = $_SESSION['lastName'];
          echo "$firstName $lastName";
          ?>
        </div>
      </div>
      <div class="login10">
        <div class="login-child4"></div>
        <div class="previous-jobs1">Previous Jobs</div>
      </div>
      <div class="login11">
        <div class="login-child4"></div>
        <div class="applied1">Applied</div>
      </div>
      <div class="login12">
        <div class="login-child4"></div>
        <div class="applied1">My Wallet</div>
      </div>
      <div class="login13">
        <div class="login-child7"></div>
        <div class="get-premium" id="getpremium">Get Premium</div>
      </div>
      <div class="footer19">
        <div class="footer-inner9">
          <div class="group-child105"></div>
        </div>
        <div class="logo15">
          <b class="gig-connect15">Gig Connect</b>
          <img class="link-1-icon15" alt="" src="./public/link-1@2x.png" />
        </div>
        <div class="headers11">
          <b class="home11" id="home">Home</b>
          <div class="find-jobs12" id="findjobs">Find Jobs</div>
          <div class="find-freelancers11" id="findfreelancer">Find Freelancers</div>
          <div class="account11" id="account">Account</div>
        </div>
        <div class="profile-perusahaan-card-parent5">
          <div class="profile-perusahaan-card24">
            <div class="div53">
              <div class="child94"></div>
              <img class="child95" alt="" src="./public/rectangle-25.svg" />

              <div class="requirements74">Requirements:</div>
              <div class="requirements75">
                <ul class="male-female-maximum-25-years3">
                  <li class="male-female3">Male / Female</li>
                  <li class="male-female3">Maximum 25 years old</li>
                  <li class="male-female3">
                    Bachelor degree in Accounting with GPA &gt; 3.0
                  </li>
                  <li class="male-female3">Good commanf of English</li>
                  <li class="male-female3">
                    1-2 years working experience in accounting field
                  </li>
                  <li>Proficient user of Microsoft office</li>
                </ul>
              </div>
              <div class="requirements76">CLICK HERE FOR MORE INFO</div>
              <img class="child96" alt="" src="./public/ellipse-8@2x.png" />

              <img
                class="ruler-and-pencil-1-icon21"
                alt=""
                src="./public/rulerandpencil-1@2x.png"
              />

              <img class="child97" alt="" src="./public/ellipse-4@2x.png" />

              <b class="pt-freeport-indonesia24">PT Pertamina</b>
              <div class="location-n-status39">
                <div class="star39">
                  <img
                    class="star-1-icon39"
                    alt=""
                    src="./public/star-1@2x.png"
                  />

                  <img
                    class="star-2-icon39"
                    alt=""
                    src="./public/star-2@2x.png"
                  />

                  <img
                    class="star-3-icon39"
                    alt=""
                    src="./public/star-31@2x.png"
                  />

                  <img
                    class="star-4-icon39"
                    alt=""
                    src="./public/star-4@2x.png"
                  />

                  <img
                    class="star-5-icon39"
                    alt=""
                    src="./public/star-5@2x.png"
                  />
                </div>
                <img
                  class="location-hitam-139"
                  alt=""
                  src="./public/location-hitam-1@2x.png"
                />

                <div class="dki-jakarta-indonesia38">
                  DKI Jakarta, Indonesia
                </div>
                <div class="karakurylenkogmailcom39">
                  Kara.Kurylenko@gmail.com
                </div>
                <img
                  class="email-1-icon39"
                  alt=""
                  src="./public/email-1@2x.png"
                />
              </div>
              <div class="availability24">
                <img
                  class="available-1-icon39"
                  alt=""
                  src="./public/available-1@2x.png"
                />

                <div class="available39">Available</div>
              </div>
              <div class="rectangle-parent88">
                <div class="group-child106"></div>
                <div class="ux-designer44">Accounting Staff</div>
              </div>
              <div class="rectangle-parent89">
                <div class="group-child106"></div>
                <div class="graphic-designer39">Finance Staff</div>
              </div>
              <div class="wa117">
                <div class="wa-child115"></div>
                <div class="contact39">Contact</div>
                <img
                  class="whatsapp-1-icon117"
                  alt=""
                  src="./public/whatsapp-1@2x.png"
                />
              </div>
              <div class="wa118">
                <div class="wa-child116"></div>
                <img
                  class="cloud-computing-1-178"
                  alt=""
                  src="./public/cloudcomputing-1-1@2x.png"
                />

                <div class="access-portfolio39">Access Portfolio</div>
                <img
                  class="whatsapp-1-icon118"
                  alt=""
                  src="./public/whatsapp-11@2x.png"
                />
              </div>
              <div class="wa119">
                <div class="wa-child116"></div>
                <img
                  class="cloud-computing-1-178"
                  alt=""
                  src="./public/cloudcomputing-1-1@2x.png"
                />

                <div class="reviews39">Reviews</div>
                <img
                  class="whatsapp-1-icon118"
                  alt=""
                  src="./public/whatsapp-11@2x.png"
                />
              </div>
              <img
                class="bookmark-1-icon39"
                alt=""
                src="./public/bookmark-1@2x.png"
              />

              <div class="salary24">
                <div class="group-child106"></div>
                <div class="div54">$500-$1200</div>
              </div>
              <div class="registration-1824">
                Registration : 18 March 2023 - 30 June 2023
              </div>
            </div>
          </div>
          <div class="profile-perusahaan-card24">
            <div class="div53">
              <div class="child94"></div>
              <img class="child95" alt="" src="./public/rectangle-25.svg" />

              <div class="requirements74">Requirements:</div>
              <div class="requirements78">
                <ul class="male-female-maximum-25-years3">
                  <li class="male-female3">
                    Minimum 1-2 Years working experience as Graphic Designer
                  </li>
                  <li class="male-female3">
                    Very good Knowledge in Photoshop, Illustrator, Corel Draw
                  </li>
                  <li class="male-female3">Age below 35 years old</li>
                  <li>Team player with positive attitudes</li>
                </ul>
              </div>
              <div class="requirements76">CLICK HERE FOR MORE INFO</div>
              <img class="child96" alt="" src="./public/ellipse-81@2x.png" />

              <div class="ruler-and-pencil-13"></div>
              <img class="child97" alt="" src="./public/ellipse-4@2x.png" />

              <b class="pt-freeport-indonesia25">PT PLN</b>
              <div class="location-n-status39">
                <div class="star39">
                  <img
                    class="star-1-icon39"
                    alt=""
                    src="./public/star-1@2x.png"
                  />

                  <img
                    class="star-2-icon39"
                    alt=""
                    src="./public/star-2@2x.png"
                  />

                  <img
                    class="star-3-icon39"
                    alt=""
                    src="./public/star-31@2x.png"
                  />

                  <img
                    class="star-4-icon39"
                    alt=""
                    src="./public/star-4@2x.png"
                  />

                  <img
                    class="star-5-icon39"
                    alt=""
                    src="./public/star-5@2x.png"
                  />
                </div>
                <img
                  class="location-hitam-139"
                  alt=""
                  src="./public/location-hitam-1@2x.png"
                />

                <div class="dki-jakarta-indonesia38">
                  DKI Jakarta, Indonesia
                </div>
                <div class="karakurylenkogmailcom39">
                  Kara.Kurylenko@gmail.com
                </div>
                <img
                  class="email-1-icon39"
                  alt=""
                  src="./public/email-1@2x.png"
                />
              </div>
              <div class="availability24">
                <img
                  class="available-1-icon39"
                  alt=""
                  src="./public/available-1@2x.png"
                />

                <div class="available39">Available</div>
              </div>
              <div class="rectangle-parent90">
                <div class="group-child106"></div>
                <div class="ux-designer45">UX Designer</div>
              </div>
              <div class="rectangle-parent91">
                <div class="group-child106"></div>
                <div class="graphic-designer40">Graphic Designer</div>
              </div>
              <div class="wa117">
                <div class="wa-child115"></div>
                <div class="contact39">Contact</div>
                <img
                  class="whatsapp-1-icon117"
                  alt=""
                  src="./public/whatsapp-1@2x.png"
                />
              </div>
              <div class="wa118">
                <div class="wa-child116"></div>
                <img
                  class="cloud-computing-1-178"
                  alt=""
                  src="./public/cloudcomputing-1-1@2x.png"
                />

                <div class="access-portfolio39">Access Portfolio</div>
                <img
                  class="whatsapp-1-icon118"
                  alt=""
                  src="./public/whatsapp-11@2x.png"
                />
              </div>
              <div class="wa119">
                <div class="wa-child116"></div>
                <img
                  class="cloud-computing-1-178"
                  alt=""
                  src="./public/cloudcomputing-1-1@2x.png"
                />

                <div class="reviews39">Reviews</div>
                <img
                  class="whatsapp-1-icon118"
                  alt=""
                  src="./public/whatsapp-11@2x.png"
                />
              </div>
              <img
                class="bookmark-1-icon39"
                alt=""
                src="./public/bookmark-1@2x.png"
              />

              <div class="salary24">
                <div class="group-child106"></div>
                <div class="div54">$400-$600</div>
              </div>
              <div class="registration-1824">
                Registration : 12 April 2023 - 23 July 2023
              </div>
            </div>
          </div>
          <div class="profile-perusahaan-card24">
            <div class="div53">
              <div class="child94"></div>
              <img class="child95" alt="" src="./public/rectangle-25.svg" />

              <div class="requirements74">Requirements:</div>
              <div class="requirements75">
                <ul class="male-female-maximum-25-years3">
                  <li class="male-female3">
                    Minimum S1 graduate according to major
                  </li>
                  <li class="male-female3">
                    Have advanced knowledge of building management/engineering
                  </li>
                  <li class="male-female3">
                    Have general knowledge of budgeting and basic accounting
                  </li>
                  <li class="male-female3">
                    Flexible to respond to different work situations
                  </li>
                  <li>Have the ability to work under pressure</li>
                </ul>
              </div>
              <div class="requirements76">CLICK HERE FOR MORE INFO</div>
              <img class="child96" alt="" src="./public/ellipse-89@2x.png" />

              <img
                class="ruler-and-pencil-1-icon21"
                alt=""
                src="./public/rulerandpencil-11@2x.png"
              />

              <img class="child97" alt="" src="./public/ellipse-4@2x.png" />

              <b class="pt-freeport-indonesia26">PT Astra Internasional</b>
              <div class="location-n-status39">
                <div class="star39">
                  <img
                    class="star-1-icon39"
                    alt=""
                    src="./public/star-1@2x.png"
                  />

                  <img
                    class="star-2-icon39"
                    alt=""
                    src="./public/star-2@2x.png"
                  />

                  <img
                    class="star-3-icon39"
                    alt=""
                    src="./public/star-31@2x.png"
                  />

                  <img
                    class="star-4-icon39"
                    alt=""
                    src="./public/star-4@2x.png"
                  />

                  <img
                    class="star-5-icon39"
                    alt=""
                    src="./public/star-5@2x.png"
                  />
                </div>
                <img
                  class="location-hitam-139"
                  alt=""
                  src="./public/location-hitam-1@2x.png"
                />

                <div class="dki-jakarta-indonesia38">
                  DKI Jakarta, Indonesia
                </div>
                <div class="karakurylenkogmailcom39">
                  Kara.Kurylenko@gmail.com
                </div>
                <img
                  class="email-1-icon39"
                  alt=""
                  src="./public/email-1@2x.png"
                />
              </div>
              <div class="availability24">
                <img
                  class="available-1-icon39"
                  alt=""
                  src="./public/available-1@2x.png"
                />

                <div class="available39">Available</div>
              </div>
              <div class="rectangle-parent88">
                <div class="group-child106"></div>
                <div class="ux-designer46">Chief Engineering</div>
              </div>
              <div class="rectangle-parent91">
                <div class="group-child106"></div>
                <div class="graphic-designer40">Staff Engineering</div>
              </div>
              <div class="wa117">
                <div class="wa-child115"></div>
                <div class="contact39">Contact</div>
                <img
                  class="whatsapp-1-icon117"
                  alt=""
                  src="./public/whatsapp-1@2x.png"
                />
              </div>
              <div class="wa118">
                <div class="wa-child116"></div>
                <img
                  class="cloud-computing-1-178"
                  alt=""
                  src="./public/cloudcomputing-1-1@2x.png"
                />

                <div class="access-portfolio39">Access Portfolio</div>
                <img
                  class="whatsapp-1-icon118"
                  alt=""
                  src="./public/whatsapp-11@2x.png"
                />
              </div>
              <div class="wa119">
                <div class="wa-child116"></div>
                <img
                  class="cloud-computing-1-178"
                  alt=""
                  src="./public/cloudcomputing-1-1@2x.png"
                />

                <div class="reviews39">Reviews</div>
                <img
                  class="whatsapp-1-icon118"
                  alt=""
                  src="./public/whatsapp-11@2x.png"
                />
              </div>
              <img
                class="bookmark-1-icon39"
                alt=""
                src="./public/bookmark-1@2x.png"
              />

              <div class="salary24">
                <div class="group-child106"></div>
                <div class="div54">$150-$300</div>
              </div>
              <div class="registration-1824">
                Registration : 02 February 2023 - 11 March 2023
              </div>
            </div>
          </div>
        </div>
        <div class="group-container">
          <div class="vector-group">
            <img
              class="group-child112"
              alt=""
              src="./public/rectangle-39541.svg"
            />

            <div class="jessica" id="jessicaText">
            <?php 
          $firstName = $_SESSION['firstName'];
          $lastName = $_SESSION['lastName'];
          echo "$firstName $lastName";
          ?>
            </div>
            <div class="log-out" id="logout">Log Out</div>
            <img class="group-child113" alt="" src="./public/polygon-31.svg" />

            <div class="group-child114"></div>
          </div>
          <div class="group-child115"></div>
          <img class="user-2-11" alt="" src="./public/user-2-11@2x.png" />
        </div>
      </div>
    </div>

    <script>
      var jessicaText = document.getElementById("jessicaText");
      if (jessicaText) {
        jessicaText.addEventListener("click", function (e) {
          window.location.href = "./Profile1.html";
        });
      }

      var accountText = document.getElementById("account");
      if (accountText) {
        accountText.addEventListener("click", function (e) {
          window.location.href = "./Profile1.html";
        });
      }

      var home = document.getElementById("home");
      if (home) {
        home.addEventListener("click", function (e) {
          window.location.href = "./Desktop(login).html";
        });
      }

      var findjobs = document.getElementById("findjobs");
      if (findjobs) {
        findjobs.addEventListener("click", function (e) {
          window.location.href = "./FindJobs(login).html";
        });
      }

      var findfreelancer = document.getElementById("findfreelancer");
      if (findfreelancer) {
        findfreelancer.addEventListener("click", function (e) {
          window.location.href = "./FindFreelance(login).html";
        });
      }

      var getpremium = document.getElementById("getpremium");
      if (getpremium) {
        getpremium.addEventListener("click", function (e) {
          window.location.href = "./premium.html";
        });
      }

      var logout = document.getElementById("logout");
      if (logout) {
        logout.addEventListener("click", function (e) {
          window.location.href = "./LogIn.html";
        });
      }

      </script>
  </body>
</html>
