<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to meta - Facebook</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;600;900&display=swap');
      * {
        margin: 0;
        padding: 0;
        font-family: 'Montserrat', sans-serif;
        scroll-behavior: smooth;
      }
      body {
        background-color: #396EB0;
      }
      nav {
        background-color: #DADDFC;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        padding-left: 10px;

        /* box shadow generator*/
        box-shadow: -4px 14px 33px -14px rgba(0,0,0,0.75);
      }
      header {
        background-color: #2E4C6D;
        height: 500px;
        width: 100%;
        overflow: hidden;

        color: #DADDFC;
      }
      main {
        background-color: #DADDFC;
        height: 100%;
      }
      main > .container {
        padding: 50px;
      }
      .container > .choose h1 {
        text-align: center;
        padding-bottom: 15px;
      }
      .top__main {
        display: flex;
        justify-content: space-around;
      }
      .top__main .tm__content {
        background-color: #396EB0;
        
        height: 300px;
        padding: 20px;
        background-repeat: no-repeat;
        background-size: cover;
        transition: transform 1s;
      }
      .top__main .tm__content:hover {
        transform: scale(1.3);
      }
      .top__main .tm__content h1 {
        color: #DADDFC;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        text-shadow: 10px 10px 25px rgba(0, 0, 0, 1);
      }
      .tmc__container {
        width: 30%;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: -4px 14px 33px -14px rgba(0,0,0,0.75);
        cursor: pointer;
      }
      .tmc1 {
        background-image: url("fantasy.jpg");
      }
      .tmc2 {
        background-image: url("block.jpg");
      }
      .tmc3 {
        background-image: url("party.jpg");
      }
      h1 {
        font-weight: 400;
        font-size: 5vh;
        /* text-shadow: 5px 3px 12px rgba(0, 0, 0, 0.75); */
      }
      p {
        color: #daddfca2;
      }
      .header__container {
        display: flex;
        justify-content: space-between;
        padding: 25px;
      }
      .header__container > img {
        padding-left: 50px;
      }
      .header__right {
        width: 100%;
        padding: 60px;
      }
      .header__right > a > button {
        background-color: transparent;
        padding: 15px 25px;
        margin-top: 20px;
        border-radius: 20px;
        cursor: pointer;
        outline: none;
        border: 2px solid #DADDFC;
        color: #DADDFC;
        font-size: medium;
        transition: 0.3s ease-in;
      }
      .header__right > a > button:hover {
        background-color: #DADDFC;
        color: black;
      }

      /* animations */
      
    </style>
  </head>
  <body>
    <nav>
      <img src="./meta-logo.png" alt="logo-meta" width="100" height="20">
    </nav>

    <header>
      <div class="header__container">
        <img src="./ip13pro_mockup.png" alt="mockup" class="left__header__img left__animation" height="900">
        <div class="header__right">
          <h1>Connection is evolving<br> and so are we.</h1>
          <a href="#choose"><button>Learn more</button></a>
          <br><br>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus repudiandae saepe temporibus aut nam aliquid corporis, velit pariatur eveniet atque obcaecati recusandae autem, enim quia cum quos ab dignissimos laboriosam!</p>
        </div>
      </div>
    </header>

    <main id="choose">
      <div class="container">
        <div class="choose">
          <h1>Choose your Metaverse</h1>
          <div class="top__main">
            <div class="tmc__container">
              <div class="tm__content tmc1" onclick="location.href='fantasy.php';">
                <h1>Fantasy</h1>
              </div>
            </div>
            <div class="tmc__container">
              <div class="tm__content tmc2" onclick="location.href='/metaverse/blockman'">
                <h1>Blockman</h1>
              </div>
            </div>
            <div class="tmc__container">
              <div class="tm__content tmc3" onclick="location.href='/metaverse/party'">
                <h1>Party</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

  </body>
</html>
