<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to meta - Facebook</title>
    <link rel="stylesheet" href="styles.css">
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
              <div class="tm__content tmc1" onclick="location.href='metaverse/fantasy.php'">
                <h1>Fantasy</h1>
              </div>
            </div>
            <div class="tmc__container">
              <div class="tm__content tmc2" onclick="location.href='/metaverse/blockman.php'">
                <h1>Blockman</h1>
              </div>
            </div>
            <div class="tmc__container">
              <div class="tm__content tmc3" onclick="location.href='/metaverse/party.php'">
                <h1>Party</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

  </body>
</html>
