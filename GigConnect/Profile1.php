<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./Profile1.css" />
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
    <div class="profile1">
      <div class="box19">
        <img class="box-child21" alt="" src="./public/rectangle-65.svg" />

        <img class="box-child21" alt="" src="./public/rectangle-71.svg" />

        <img class="box-child23" alt="" src="./public/polygon-1.svg" />

        <div class="connect210">
          <img
            class="bookmark-tag-1-icon10"
            alt=""
            src="./public/bookmarktag-11@2x.png"
          />

          <div class="connect-with-expert-container20">
            <span class="connect-with-expert-container21">
              <p class="connect-with16">Connect with</p>
              <p class="connect-with16">Expert Freelancers!</p>
            </span>
          </div>
        </div>
        <div class="search-bar18">
          <div class="search-bar-child16"></div>
          <div class="what-skill-are18">What skill are you looking for?</div>
          <img
            class="searchputih-1-icon10"
            alt=""
            src="./public/searchputih-11@2x.png"
          />
        </div>
        <div class="username17">
          <div class="username-child15"></div>
          <div class="username-child16"></div>
          <img
            class="padlock-1-icon9"
            alt=""
            src="./public/padlock-11@2x.png"
          />
        </div>
      </div>
      <div class="kotak110">
        <div class="kotak1-child56"></div>
        <div class="kotak1-child57"></div>
        <div class="kotak1-child58"></div>
        <div class="kotak1-child59"></div>
        <div class="kotak1-child60"></div>
        <img class="kotak1-child61" alt="" src="./public/ellipse-5.svg" />

        <div class="description31">
          <div class="description-child18"></div>
          <div class="description32">Description</div>
          <div class="jadi-ini-isinya10">
            Jadi ini isinya deskripsi sang freelancer kaya misal Hi! I am
            passionate in UI/UX Design and bla bla bla.
          </div>
        </div>
        <div class="focus20">
          <div class="description33">
            <div class="description-child19"></div>
          </div>
          <div class="focus21">Focus</div>
          <div class="interest130">
            <div class="interest1-child28"></div>
            <img
              class="paint-palette-1-icon30"
              alt=""
              src="./public/paintpalette-1@2x.png"
            />

            <div class="design10">Design</div>
          </div>
          <div class="interest131">
            <div class="interest1-child29"></div>
            <img
              class="paint-palette-1-icon31"
              alt=""
              src="./public/paintpalette-1@2x.png"
            />

            <img
              class="paint-palette-1-icon31"
              alt=""
              src="./public/webdesign-1@2x.png"
            />

            <img
              class="ux-design-1-icon10"
              alt=""
              src="./public/uxdesign-1@2x.png"
            />

            <div class="design10">Web Design</div>
          </div>
          <div class="interest132">
            <div class="interest1-child30"></div>
            <img
              class="paint-palette-1-icon31"
              alt=""
              src="./public/paintpalette-1@2x.png"
            />

            <img
              class="web-design-1-icon21"
              alt=""
              src="./public/webdesign-11@2x.png"
            />

            <div class="design10">FrontEnd Developer</div>
          </div>
        </div>
      </div>
      <div class="ellipse-container">
        <div class="group-child209"></div>
        <img class="user-1-16" alt="" src="./public/user-1-1@2x.png" />
      </div>
      <div class="username18">
        <img class="padlock-1-icon10" alt="" src="./public/padlock-12@2x.png" />

        <div class="jessica-wang2">
        <?php 
          $firstName = $_SESSION['firstName'];
          $lastName = $_SESSION['lastName'];
          echo "$firstName $lastName";
          ?>
        </div>
        
      </div>
      <div class="login27">
        <div class="login-child12"></div>
        <div class="previous-jobs2">Previous Jobs</div>
      </div>
      <div class="login28">
        <div class="login-child12"></div>
        <div class="applied2">Applied</div>
      </div>
      <div class="login29">
        <div class="login-child12"></div>
        <div class="applied2">My Wallet</div>
      </div>
      <div class="login30">
        <div class="login-child15"></div>
        <div class="get-premium1" id="getpremium">Get Premium</div>
      </div>
      <div class="footer26">
        <div class="footer-inner16">
          <div class="group-child210"></div>
        </div>
        <div class="logo22">
          <b class="gig-connect22">Gig Connect</b>
          <img class="link-1-icon22" alt="" src="./public/link-1@2x.png" />
        </div>
        <div class="headers18">
          <b class="home18" id="home">Home</b>
          <div class="find-jobs19" id="findjobs">Find Jobs</div>
          <div class="find-freelancers18" id="findfreelancer">Find Freelancers</div>
          <div class="account18" id="accountText">Account</div>
        </div>
        <div class="profile-perusahaan-card-parent11">
          <div class="profile-perusahaan-card42">
            <div class="div94">
              <div class="child166"></div>
              <img class="child167" alt="" src="./public/rectangle-25.svg" />

              <div class="requirements128">Requirements:</div>
              <div class="requirements129">
                <ul class="male-female-maximum-25-years6">
                  <li class="male-female6">Male / Female</li>
                  <li class="male-female6">Maximum 25 years old</li>
                  <li class="male-female6">
                    Bachelor degree in Accounting with GPA &gt; 3.0
                  </li>
                  <li class="male-female6">Good commanf of English</li>
                  <li class="male-female6">
                    1-2 years working experience in accounting field
                  </li>
                  <li>Proficient user of Microsoft office</li>
                </ul>
              </div>
              <div class="requirements130">CLICK HERE FOR MORE INFO</div>
              <img class="child168" alt="" src="./public/ellipse-8@2x.png" />

              <img
                class="ruler-and-pencil-1-icon36"
                alt=""
                src="./public/rulerandpencil-1@2x.png"
              />

              <img class="child169" alt="" src="./public/ellipse-4@2x.png" />

              <b class="pt-freeport-indonesia42">PT Pertamina</b>
              <div class="location-n-status72">
                <div class="star72">
                  <img
                    class="star-1-icon72"
                    alt=""
                    src="./public/star-1@2x.png"
                  />

                  <img
                    class="star-2-icon72"
                    alt=""
                    src="./public/star-2@2x.png"
                  />

                  <img
                    class="star-3-icon72"
                    alt=""
                    src="./public/star-3@2x.png"
                  />

                  <img
                    class="star-4-icon72"
                    alt=""
                    src="./public/star-4@2x.png"
                  />

                  <img
                    class="star-5-icon72"
                    alt=""
                    src="./public/star-5@2x.png"
                  />
                </div>
                <img
                  class="location-hitam-172"
                  alt=""
                  src="./public/location-hitam-1@2x.png"
                />

                <div class="dki-jakarta-indonesia70">
                  DKI Jakarta, Indonesia
                </div>
                <div class="karakurylenkogmailcom72">
                  Kara.Kurylenko@gmail.com
                </div>
                <img
                  class="email-1-icon72"
                  alt=""
                  src="./public/email-1@2x.png"
                />
              </div>
              <div class="availability42">
                <img
                  class="available-1-icon72"
                  alt=""
                  src="./public/available-1@2x.png"
                />

                <div class="available72">Available</div>
              </div>
              <div class="rectangle-parent159">
                <div class="group-child211"></div>
                <div class="ux-designer82">Accounting Staff</div>
              </div>
              <div class="rectangle-parent160">
                <div class="group-child211"></div>
                <div class="graphic-designer72">Finance Staff</div>
              </div>
              <div class="wa216">
                <div class="wa-child214"></div>
                <div class="contact72">Contact</div>
                <img
                  class="whatsapp-1-icon216"
                  alt=""
                  src="./public/whatsapp-1@2x.png"
                />
              </div>
              <div class="wa217">
                <div class="wa-child215"></div>
                <img
                  class="cloud-computing-1-1144"
                  alt=""
                  src="./public/cloudcomputing-1-1@2x.png"
                />

                <div class="access-portfolio72">Access Portfolio</div>
                <img
                  class="whatsapp-1-icon217"
                  alt=""
                  src="./public/whatsapp-11@2x.png"
                />
              </div>
              <div class="wa218">
                <div class="wa-child215"></div>
                <img
                  class="cloud-computing-1-1144"
                  alt=""
                  src="./public/cloudcomputing-1-1@2x.png"
                />

                <div class="reviews72">Reviews</div>
                <img
                  class="whatsapp-1-icon217"
                  alt=""
                  src="./public/whatsapp-11@2x.png"
                />
              </div>
              <img
                class="bookmark-1-icon72"
                alt=""
                src="./public/bookmark-1@2x.png"
              />

              <div class="salary42">
                <div class="group-child211"></div>
                <div class="div95">$500-$1200</div>
              </div>
              <div class="registration-1842">
                Registration : 18 March 2023 - 30 June 2023
              </div>
            </div>
          </div>
          <div class="profile-perusahaan-card42">
            <div class="div94">
              <div class="child166"></div>
              <img class="child167" alt="" src="./public/rectangle-25.svg" />

              <div class="requirements128">Requirements:</div>
              <div class="requirements132">
                <ul class="male-female-maximum-25-years6">
                  <li class="male-female6">
                    Minimum 1-2 Years working experience as Graphic Designer
                  </li>
                  <li class="male-female6">
                    Very good Knowledge in Photoshop, Illustrator, Corel Draw
                  </li>
                  <li class="male-female6">Age below 35 years old</li>
                  <li>Team player with positive attitudes</li>
                </ul>
              </div>
              <div class="requirements130">CLICK HERE FOR MORE INFO</div>
              <img class="child168" alt="" src="./public/ellipse-81@2x.png" />

              <div class="ruler-and-pencil-16"></div>
              <img class="child169" alt="" src="./public/ellipse-4@2x.png" />

              <b class="pt-freeport-indonesia43">PT PLN</b>
              <div class="location-n-status72">
                <div class="star72">
                  <img
                    class="star-1-icon72"
                    alt=""
                    src="./public/star-1@2x.png"
                  />

                  <img
                    class="star-2-icon72"
                    alt=""
                    src="./public/star-2@2x.png"
                  />

                  <img
                    class="star-3-icon72"
                    alt=""
                    src="./public/star-3@2x.png"
                  />

                  <img
                    class="star-4-icon72"
                    alt=""
                    src="./public/star-4@2x.png"
                  />

                  <img
                    class="star-5-icon72"
                    alt=""
                    src="./public/star-5@2x.png"
                  />
                </div>
                <img
                  class="location-hitam-172"
                  alt=""
                  src="./public/location-hitam-1@2x.png"
                />

                <div class="dki-jakarta-indonesia70">
                  DKI Jakarta, Indonesia
                </div>
                <div class="karakurylenkogmailcom72">
                  Kara.Kurylenko@gmail.com
                </div>
                <img
                  class="email-1-icon72"
                  alt=""
                  src="./public/email-1@2x.png"
                />
              </div>
              <div class="availability42">
                <img
                  class="available-1-icon72"
                  alt=""
                  src="./public/available-1@2x.png"
                />

                <div class="available72">Available</div>
              </div>
              <div class="rectangle-parent161">
                <div class="group-child211"></div>
                <div class="ux-designer83">UX Designer</div>
              </div>
              <div class="rectangle-parent162">
                <div class="group-child211"></div>
                <div class="graphic-designer73">Graphic Designer</div>
              </div>
              <div class="wa216">
                <div class="wa-child214"></div>
                <div class="contact72">Contact</div>
                <img
                  class="whatsapp-1-icon216"
                  alt=""
                  src="./public/whatsapp-1@2x.png"
                />
              </div>
              <div class="wa217">
                <div class="wa-child215"></div>
                <img
                  class="cloud-computing-1-1144"
                  alt=""
                  src="./public/cloudcomputing-1-1@2x.png"
                />

                <div class="access-portfolio72">Access Portfolio</div>
                <img
                  class="whatsapp-1-icon217"
                  alt=""
                  src="./public/whatsapp-11@2x.png"
                />
              </div>
              <div class="wa218">
                <div class="wa-child215"></div>
                <img
                  class="cloud-computing-1-1144"
                  alt=""
                  src="./public/cloudcomputing-1-1@2x.png"
                />

                <div class="reviews72">Reviews</div>
                <img
                  class="whatsapp-1-icon217"
                  alt=""
                  src="./public/whatsapp-11@2x.png"
                />
              </div>
              <img
                class="bookmark-1-icon72"
                alt=""
                src="./public/bookmark-1@2x.png"
              />

              <div class="salary42">
                <div class="group-child211"></div>
                <div class="div95">$400-$600</div>
              </div>
              <div class="registration-1842">
                Registration : 12 April 2023 - 23 July 2023
              </div>
            </div>
          </div>
          <div class="profile-perusahaan-card42">
            <div class="div94">
              <div class="child166"></div>
              <img class="child167" alt="" src="./public/rectangle-25.svg" />

              <div class="requirements128">Requirements:</div>
              <div class="requirements129">
                <ul class="male-female-maximum-25-years6">
                  <li class="male-female6">
                    Minimum S1 graduate according to major
                  </li>
                  <li class="male-female6">
                    Have advanced knowledge of building management/engineering
                  </li>
                  <li class="male-female6">
                    Have general knowledge of budgeting and basic accounting
                  </li>
                  <li class="male-female6">
                    Flexible to respond to different work situations
                  </li>
                  <li>Have the ability to work under pressure</li>
                </ul>
              </div>
              <div class="requirements130">CLICK HERE FOR MORE INFO</div>
              <img class="child168" alt="" src="./public/ellipse-89@2x.png" />

              <img
                class="ruler-and-pencil-1-icon36"
                alt=""
                src="./public/rulerandpencil-11@2x.png"
              />

              <img class="child169" alt="" src="./public/ellipse-4@2x.png" />

              <b class="pt-freeport-indonesia44">PT Astra Internasional</b>
              <div class="location-n-status72">
                <div class="star72">
                  <img
                    class="star-1-icon72"
                    alt=""
                    src="./public/star-1@2x.png"
                  />

                  <img
                    class="star-2-icon72"
                    alt=""
                    src="./public/star-2@2x.png"
                  />

                  <img
                    class="star-3-icon72"
                    alt=""
                    src="./public/star-3@2x.png"
                  />

                  <img
                    class="star-4-icon72"
                    alt=""
                    src="./public/star-4@2x.png"
                  />

                  <img
                    class="star-5-icon72"
                    alt=""
                    src="./public/star-5@2x.png"
                  />
                </div>
                <img
                  class="location-hitam-172"
                  alt=""
                  src="./public/location-hitam-1@2x.png"
                />

                <div class="dki-jakarta-indonesia70">
                  DKI Jakarta, Indonesia
                </div>
                <div class="karakurylenkogmailcom72">
                  Kara.Kurylenko@gmail.com
                </div>
                <img
                  class="email-1-icon72"
                  alt=""
                  src="./public/email-1@2x.png"
                />
              </div>
              <div class="availability42">
                <img
                  class="available-1-icon72"
                  alt=""
                  src="./public/available-1@2x.png"
                />

                <div class="available72">Available</div>
              </div>
              <div class="rectangle-parent159">
                <div class="group-child211"></div>
                <div class="ux-designer84">Chief Engineering</div>
              </div>
              <div class="rectangle-parent162">
                <div class="group-child211"></div>
                <div class="graphic-designer73">Staff Engineering</div>
              </div>
              <div class="wa216">
                <div class="wa-child214"></div>
                <div class="contact72">Contact</div>
                <img
                  class="whatsapp-1-icon216"
                  alt=""
                  src="./public/whatsapp-1@2x.png"
                />
              </div>
              <div class="wa217">
                <div class="wa-child215"></div>
                <img
                  class="cloud-computing-1-1144"
                  alt=""
                  src="./public/cloudcomputing-1-1@2x.png"
                />

                <div class="access-portfolio72">Access Portfolio</div>
                <img
                  class="whatsapp-1-icon217"
                  alt=""
                  src="./public/whatsapp-11@2x.png"
                />
              </div>
              <div class="wa218">
                <div class="wa-child215"></div>
                <img
                  class="cloud-computing-1-1144"
                  alt=""
                  src="./public/cloudcomputing-1-1@2x.png"
                />

                <div class="reviews72">Reviews</div>
                <img
                  class="whatsapp-1-icon217"
                  alt=""
                  src="./public/whatsapp-11@2x.png"
                />
              </div>
              <img
                class="bookmark-1-icon72"
                alt=""
                src="./public/bookmark-1@2x.png"
              />

              <div class="salary42">
                <div class="group-child211"></div>
                <div class="div95">$150-$300</div>
              </div>
              <div class="registration-1842">
                Registration : 02 February 2023 - 11 March 2023
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      var accountText = document.getElementById("accountText");
      if (accountText) {
        accountText.addEventListener("click", function (e) {
          window.location.href = "./Profile.php";
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
      var nama = new XMLHttpRequest();
      nama.onreadystatechange = function(){
        if(nama.readyState === 4 && nama.status === 200){
          document.getElementById("data-placeholder").textContent = nama.responseText;
        }
        nama.open("GET", "login.php", true);
        nama.send();
      }
      </script>
  </body>
</html>
