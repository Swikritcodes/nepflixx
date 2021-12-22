


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NEPFLIX</title>
    <link rel="stylesheet" href="nepflix.css">
    <link rel="shortcut icon" href="assets/favicon.svg" type="image/x-icon" />

    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>

  <body>
    <div class="container">
      <nav class="navbar">
        <div class="logo flex">
          <a href="./index.html">
            <img
              src="images/netflixlogo.png"
              alt="netflix-logo"
          /></a>
        </div>
        <div class="signin flex">
            <select class="lang-select" name="lang" id="lang">
              <option value="english">English</option>
              <option value="nepali">नेपाली</option>
            </select>
          <a href="login.php" id="sign-in-btn" class="btn">Sign In</a>
        </div>
      </nav>
      <div class="arrow-btn" id="myDIV">
        <a href="#"><span class="fas fa-angle-up"></span></a>
      </div>
      <div class="main-text flex">
        <div class="sec-1">
          <h1 id="main-text-h1">Unlimited movies, TV</h1>
          <h2 id="main-text-h2">shows and more.</h2>
          <h4 id="main-text-h4">Watch anywhere. Cancel anytime.</h4>
          <h5 id="main-text-h5">
            Ready to watch? Enter your email to create or restart your
            membership.
          </h5>
        </div>
        <div class="email-input flex">
          <input type="email" placeholder="Email address" /><a
            href=""
            class="btn"
            id="email-btn"
            >Get started</a
          >
        </div>
      </div>
    </div>
    <section class="sec-2 flex">
      <div class="enjoy-text flex">
        <h1 id="sec-2-h1">Enjoy on your TV.</h1>
        <h4 id="sec-2-h4">
          Watch on smart TVs, PlayStation, Xbox, Chromecast, Apple TV, Blu-ray
          players and more.
        </h4>
      </div>
      <div class="img" style="width: 40%">
        <img src="images/tv.png" alt="" />
      </div>
     
    </section>
    <section class="sec-3 flex">
      <div class="download-text flex">
        <h1 id="sec-3-h1">Download your shows to watch offline.</h1>
        <h4 id="sec-3-h4"">Save your favourites easily and always have something to watch.</h4>
      </div>
      <div class="img flex">
        <img src="images/Capture123.PNG" alt="" />
      </div>
    </section>

    <section class="sec-3 flex sec-4">
      <div class="download-text flex">
        <h1 id="sec-4-h1">Watch everywhere.</h1>
        <h4 id="sec-4-h4">
          Stream unlimited movies and TV shows on your phone, tablet, laptop,
          and TV.
        </h4>
      </div>
      <div class="img flex">
        <img src="images/device-pile-in.png" alt="" />
      </div>
      
    </section>
    <section class="sec-3 flex">
      <div class="download-text flex">
        <h1 id="download-text-h1">Create profiles for childern.</h1>
        <h4 id="download-text-h4"> 
          Send children on adventures with their favourite characters in a space
          made just for them—free with your membership.
        </h4>
      </div>
      <div class="img flex">
        <img src="images/children.png" alt="" />
      </div>
    </section>

    <section class="sec-5">
      <div class="container1">
        <h1 id="sec-5-h1">Frequently Asked Questions</h1>
        <div class="accordion">
          <div class="accordion-item">
            <button id="accordion-button-1" aria-expanded="false">
              <span id="sec-5-span-1" class="accordion-title">What is Netflix?</span>
              <span class="icon" aria-hidden="true"></span>
            </button>
            <div class="accordion-content">
              <p id="sec-5-p-1">
                Netflix is a streaming service that offers a wide variety of
                award-winning TV shows, movies, anime, documentaries and more –
                on thousands of internet-connected devices.<br />

                You can watch as much as you want, whenever you want, without a
                single ad – all for one low monthly price. There's always
                something new to discover, and new TV shows and movies are added
                every week!
              </p>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-2" aria-expanded="false">
              <span id="sec-5-span-2"class="accordion-title">How much does Netflix cost?</span>
              <span class="icon" aria-hidden="true"></span>
            </button>
            <div class="accordion-content">
              <p id="sec-5-p-2"> 
                Watch Netflix on your smartphone, tablet, Smart TV, laptop, or
                streaming device, all for one fixed monthly fee. Plans range
                from $ 4 to ₹ 12 a month. No extra costs, no contracts.
              </p>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-3" aria-expanded="false">
              <span id="sec-5-span-3" class="accordion-title">What can I Watch on Netflix?</span>
              <span class="icon" aria-hidden="true"></span>
            </button>
            <div class="accordion-content">
              <p id="sec-5-p-3">
                Netflix has an extensive library of feature films,
                documentaries,TV, shows, anime, award-winning Netflix originals,
                and more. Watch as much as you want, anytime you want.
              </p>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-4" aria-expanded="false">
              <span id="sec-5-span-4" class="accordion-title">Where can I watch?</span>
              <span class="icon" aria-hidden="true"></span>
            </button>
            <div class="accordion-content">
              <p id="sec-5-p-4">
                Watch anywhere, anytime, on an unlimited number of devices. Sign
                in with your Netflix account to watch instantly on the web at
                netflix.com from your personal computer or on any
                internet-connected device that offers the Netflix app, including
                smart TVs, smartphones, tablets, streaming media players and
                game consoles. You can also download your favourite shows with
                the iOS, Android, or Windows 10 app. Use downloads to watch
                while you're on the go and without an internet connection. Take
                Netflix with you anywhere.
              </p>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-5" aria-expanded="false">
              <span id="sec-5-span-5" class="accordion-title">How do I cancel?</span>
              <span class="icon" aria-hidden="true"></span>
            </button>
            <div class="accordion-content">
              <p id="sec-5-p-5">
                Netflix is flexible. There are no annoying contracts and no
                commitments. You can easily cancel your account online in two
                clicks. There are no cancellation fees – start or stop your
                account anytime.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="text flex">
        <p id="text-p1" style="font-size: 20px">
          Ready to watch? Enter your email to create or restart your membership.
        </p>
        <div class="email-input flex">
          <input type="email" placeholder="Email address" /><a
            href=""
            class="btn"
            id="email-btn-2"
            >Get started</a
          >
        </div>
      </div>
    </section>

    <footer class="flex">
      <div class="div flex">
        <p id="footer-p">Questions? Call <a href="tel:tel:000-8">000-800-040-1843</a></p>
      </div>
      <div class="all-items flex">
        <div class="ul-1 flex">
          <ul>
            <li><a id="ul-1-a1" href="#faqs">FAQ</a></li>
            <li><a id="ul-1-a2" href="">Investor Relation</a></li>
            <li><a id="ul-1-a3" href="">Privacy</a></li>
            <li><a id="ul-1-a4" href="">Spedd Test</a></li>
          </ul>
          <ul>
            <li><a id="ul-1-a5" href="">Helps</a></li>
            <li><a id="ul-1-a6" href="">Jobs</a></li>
            <li><a id="ul-1-a7" href="">Cookies Prefernace</a></li>
            <li><a id="ul-1-a8"">Legal Notice</a></li>
          </ul>
        </div>
        <div class="ul-2 flex">
          <ul>
            <li><a id="ul-2-a1" href="">Account</a></li>
            <li><a id="ul-2-a2" href="">Ways to Watch</a></li>
            <li><a id="ul-2-a3" href="">Corporate Information</a></li>
            <li><a id="ul-2-a4" href="">Netflix Originals</a></li>
          </ul>
          <ul>
            <li><a id="ul-2-a5" href="">Media Centers</a></li>
            <li><a id="ul-2-a6" href="">Terms of Uses</a></li>
            <li><a id="ul-2-a7" href="">Contact Us</a></li>
          </ul>
        </div>
      </div>
      <div class="nepal flix">
        <p id="nepal">Netflix Nepal</p>
      </div>
    </footer>
    <script src="script.js"></script>
    <script src="localization.js"></script>
  </body>
</html>
