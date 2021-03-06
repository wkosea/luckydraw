<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="NES.css is a NES-style CSS Framework." />
    <meta name="keywords" content="html5,css,framework,sass,NES,8bit" />
    <meta name="author" content="© 2018 B.C.Rikko" />
    <link rel="shortcut icon" type="image/png" href="favicon.png">
    <link rel="shortcut icon" sizes="196x196" href="favicon.png">
    <link rel="apple-touch-icon" href="favicon.png">

    <title>NES.css - NES-style CSS Framework</title>

    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
    <link href="https://unpkg.com/nes.css/css/nes.min.css" rel="stylesheet" />
    <link href="/css/style.css" rel="stylesheet" />

    <meta property="og:type" content="website" />
    <meta property="og:title" content="NES.css" />
    <meta property="og:url" content="https://nostalgic-css.github.io/NES.css/" />
    <meta property="og:description" content="NES-style CSS Framework | ファミコン風CSSフレームワーク" />
    <meta property="og:image" content="https://user-images.githubusercontent.com/5305599/49061716-da649680-f254-11e8-9a89-d95a7407ec6a.png" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@bc_rikko" />
    <meta name="twitter:creator" content="@bc_rikko" />
    <meta name="twitter:image" content="https://user-images.githubusercontent.com/5305599/49061716-da649680-f254-11e8-9a89-d95a7407ec6a.png" />

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-41640153-4"></script>
    <script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag("js", new Date());gtag("config", "UA-41640153-4");</script>
  </head>

  <body>
    <header>
      <h1><i class="snes-jp-logo brand"></i>NES.css</h1>
      <p>NES-style CSS Framework.</p>
    </header>

    <a class="github-link" href="https://github.com/nostalgic-css/NES.css" target="_blank">
      <p class="nes-balloon from-right">Fork me<br />on GitHub</p>
      <i class="nes-octocat"></i>
    </a>

    <section class="nes-container with-title">
      <h2 class="title">Buttons</h2>
      <div>
        <button type="button" class="nes-btn">Normal</button>
        <button type="button" class="nes-btn is-primary">Primary</button>
        <button type="button" class="nes-btn is-success">Success</button>
        <button type="button" class="nes-btn is-warning">Warning</button>
        <button type="button" class="nes-btn is-error">Error</button>
        <button type="button" class="nes-btn is-disabled">Disabled</button>
      </div>
    </section>

    <section class="nes-container with-title">
      <h2 class="title">Containers</h2>
      <div class="containers">
        <div class="nes-container with-title is-centered">
          <p class="title">Container.is-centered</p>
          <p>Good morning. Thou hast had a good night's sleep, I hope.</p>
        </div>
        <div class="nes-container is-dark with-title">
          <p class="title">Container.is-dark</p>
          <p>Good morning. Thou hast had a good night's sleep, I hope.</p>
        </div>
        <div class="nes-container is-rounded">
          <p>Good morning. Thou hast had a good night's sleep, I hope.</p>
        </div>
        <div class="nes-container is-rounded is-dark">
          <p>Good morning. Thou hast had a good night's sleep, I hope.</p>
        </div>
      </div>
    </section>

    <section class="nes-container with-title">
      <h2 class="title">Radios</h2>
      <div>
        <label>
          <input type="radio" class="nes-radio" name="answer" checked />
          <span>Yes</span>
        </label>
        <label>
          <input type="radio" class="nes-radio" name="answer" />
          <span>No</span>
        </label>
      </div>
    </section>

    <section class="nes-container with-title">
      <h2 class="title">Checkboxes</h2>
      <label>
        <input type="checkbox" class="nes-checkbox" checked />
        <span>Enable</span>
      </label>
    </section>

    <section class="nes-container with-title">
      <h2 class="title">Avatars</h2>
      <div>
        <img src="https://www.gravatar.com/avatar" class="nes-avatar is-small">
        <img src="https://www.gravatar.com/avatar" class="nes-avatar">
        <img src="https://www.gravatar.com/avatar" class="nes-avatar is-medium">
        <img src="https://www.gravatar.com/avatar" class="nes-avatar is-large">
        <img src="https://www.gravatar.com/avatar" class="nes-avatar is-small is-rounded">
        <img src="https://www.gravatar.com/avatar" class="nes-avatar is-rounded">
        <img src="https://www.gravatar.com/avatar" class="nes-avatar is-medium is-rounded">
        <img src="https://www.gravatar.com/avatar" class="nes-avatar is-large is-rounded">
      </div>
    </section>

    <section class="form nes-container with-title">
      <h2 class="title">Form</h2>
      <div class="nes-field">
        <label for="name_field">Your name</label>
        <input type="text" id="name_field" class="nes-input">
      </div>
      <div class="nes-field is-inline">
        <label for="inline_field">.input.is-success</label>
        <input type="text" id="inline_field" class="nes-input is-success" placeholder="NES.css">
      </div>
      <div class="nes-field is-inline">
        <label for="warning_field">.input.is-warning</label>
        <input type="text" id="warning_field" class="nes-input is-warning" placeholder="8bit.css">
      </div>
      <div class="nes-field is-inline">
        <label for="error_field">.input.is-error</label>
        <input type="text" id="error_field" class="nes-input is-error" placeholder="awesome.css">
      </div>
      <div class="field">
        <label for="textarea_field">Textarea</label>
        <textarea id="textarea_field" class="nes-textarea"></textarea>
      </div>
    </section>

    <section class="balloon nes-container with-title">
      <h2 class="title">Balloons</h2>
      <div class="messages">
        <div class="message -left">
          <i class="nes-bcrikko"></i>
          <div class="nes-balloon from-left">
            <p>Hello NES.css</p>
          </div>
        </div>
        <div class="message -right">
          <div class="nes-balloon from-right">
            <p>Good morning. Thou hast had a good night's sleep, I hope.</p>
          </div>
          <i class="nes-bcrikko"></i>
        </div>
      </div>
    </section>

    <section class="nes-container with-title">
      <h2 class="title">Lists</h2>
      <div class="lists">
        <ul class="nes-list is-disc">
          <li>Good morning.</li>
          <li>Thou hast had a good night's sleep, I hope.</li>
          <li>Thou hast had a good afternoon</li>
          <li>Good night.</li>
        </ul>
      </div>

      <div class="lists">
        <ul class="nes-list is-circle">
          <li>Good morning.</li>
          <li>Thou hast had a good night's sleep, I hope.</li>
          <li>Thou hast had a good afternoon</li>
          <li>Good night.</li>
        </ul>
      </div>
    </section>

    <section class="nes-container with-title">
      <h2 class="title">Table</h2>
      <div class="nes-table-responsive">
        <table class="nes-table is-bordered is-centered">
          <thead>
            <tr>
              <th>Table.is-bordered</th>
              <th>Table.is-centered</th>
              <th>Table.is-centered</th>
              <th>Table.is-centered</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Thou hast had a good morning</td>
              <td>Thou hast had a good afternoon</td>
              <td>Thou hast had a good evening</td>
              <td>Thou hast had a good night</td>
            </tr>
            <tr>
              <td>Thou hast had a good morning</td>
              <td>Thou hast had a good afternoon</td>
              <td>Thou hast had a good evening</td>
              <td>Thou hast had a good night</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="nes-table-responsive">
        <table class="nes-table is-bordered is-dark">
          <thead>
            <tr>
              <th>Table.is-dark</th>
              <th>Table.is-bordered</th>
              <th>Table.is-bordered</th>
              <th>Table.is-bordered</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Thou hast had a good morning</td>
              <td>Thou hast had a good afternon</td>
              <td>Thou hast had a good evening</td>
              <td>Thou hast had a good night</td>
            </tr>
            <tr>
              <td>Thou hast had a good morning</td>
              <td>Thou hast had a good afternoon</td>
              <td>Thou hast had a good afternoon</td>
              <td>Thou hast had a good afternoon</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <section class="nes-container with-title">
      <h2 class="title">Progress</h2>
      <progress class="nes-progress" value="90" max="100"></progress>
      <progress class="nes-progress is-primary" value="80" max="100"></progress>
      <progress class="nes-progress is-success" value="50" max="100"></progress>
      <progress class="nes-progress is-warning" value="30" max="100"></progress>
      <progress class="nes-progress is-error" value="10" max="100"></progress>
      <progress class="nes-progress is-pattern" value="50" max="100"></progress>
    </section>

    <section class="nes-container with-title">
      <h2 class="title">Icons</h2>
      <section class="nes-container with-title">
        <h3 class="title">Reaction</h3>
        <div>
          <i class="nes-icon heart is-small"></i>
          <i class="nes-icon heart"></i>
          <i class="nes-icon heart is-medium"></i>
          <i class="nes-icon heart is-large"></i>
          <i class="nes-icon heart is-empty"></i>

          <i class="nes-icon star is-small"></i>
          <i class="nes-icon star"></i>
          <i class="nes-icon star is-medium"></i>
          <i class="nes-icon star is-large"></i>

          <i class="nes-icon star is-half"></i>
          <i class="nes-icon star is-half is-medium"></i>
          <i class="nes-icon star is-half is-large"></i>

          <i class="nes-icon star is-transparent"></i>
          <i class="nes-icon star is-transparent is-medium"></i>
          <i class="nes-icon star is-transparent is-large"></i>

          <i class="nes-icon star is-empty"></i>

          <i class="nes-icon like is-small"></i>
          <i class="nes-icon like"></i>
          <i class="nes-icon like is-medium"></i>
          <i class="nes-icon like is-large"></i>
          <i class="nes-icon like is-empty"></i>
        </div>
      </section>
      <section class="nes-container with-title">
        <h3 class="title">SNS</h3>
        <div>
          <i class="nes-icon twitter is-small"></i>
          <i class="nes-icon twitter"></i>
          <i class="nes-icon twitter is-medium"></i>
          <i class="nes-icon twitter is-large"></i>

          <i class="nes-icon facebook is-small"></i>
          <i class="nes-icon facebook"></i>
          <i class="nes-icon facebook is-medium"></i>
          <i class="nes-icon facebook is-large"></i>

          <i class="nes-icon github is-small"></i>
          <i class="nes-icon github"></i>
          <i class="nes-icon github is-medium"></i>
          <i class="nes-icon github is-large"></i>

          <i class="nes-icon youtube is-small"></i>
          <i class="nes-icon youtube"></i>
          <i class="nes-icon youtube is-medium"></i>
          <i class="nes-icon youtube is-large"></i>

          <i class="nes-icon google is-small"></i>
          <i class="nes-icon google"></i>
          <i class="nes-icon google is-medium"></i>
          <i class="nes-icon google is-large"></i>

          <i class="nes-icon medium is-small"></i>
          <i class="nes-icon medium"></i>
          <i class="nes-icon medium is-medium"></i>
          <i class="nes-icon medium is-large"></i>

          <i class="nes-icon twitch is-small"></i>
          <i class="nes-icon twitch"></i>
          <i class="nes-icon twitch is-medium"></i>
          <i class="nes-icon twitch is-large"></i>

          <i class="nes-icon reddit"></i>
          <i class="nes-icon reddit is-medium"></i>
          <i class="nes-icon reddit is-large"></i>

          <i class="nes-icon whatsapp"></i>
          <i class="nes-icon whatsapp is-medium"></i>
          <i class="nes-icon whatsapp is-large"></i>

          <i class="nes-icon gmail"></i>
          <i class="nes-icon gmail is-medium"></i>
          <i class="nes-icon gmail is-large"></i>

          <i class="nes-icon linkedin"></i>
          <i class="nes-icon linkedin is-medium"></i>
          <i class="nes-icon linkedin is-large"></i>
        </div>
      </section>

      <section class="nes-container with-title">
        <h3 class="title">Others</h3>
        <div>
            <i class="nes-icon close is-small"></i>
          <i class="nes-icon close"></i>
          <i class="nes-icon close is-medium"></i>
          <i class="nes-icon close is-large"></i>

          <i class="nes-octocat animate"></i>

          <i class="nes-icon trophy is-small"></i>
          <i class="nes-icon trophy"></i>
          <i class="nes-icon trophy is-medium"></i>
          <i class="nes-icon trophy is-large"></i>

          <i class="nes-mario"></i>
          <i class="nes-ash"></i>
          <i class="nes-pokeball"></i>

          <i class="nes-bulbasaur"></i>
          <i class="nes-charmander"></i>
          <i class="nes-squirtle"></i>

          <i class="nes-smartphone"></i>
          <i class="nes-phone"></i>
          <i class="nes-kirby"></i>
        </div>
      </section>

      <section class="nes-container with-title">
        <h3 class="title">Controllers</h3>
        <div>
          <i class="nes-logo"></i>
          <i class="nes-jp-logo"></i>
          <i class="snes-logo"></i>
          <i class="snes-jp-logo"></i>
        </div>
      </section>
    </section>


    <footer class="footer">
      <p>
        <a href="https://kuroeveryday.blogspot.com/" target="_blank">Black Everyday Company</a>
        <span>-</span>
        <a href="https://twitter.com/bc_rikko" target="_blank">@bc_rikko</a>
      </p>
    </footer>
  </body>
  <script>
    var link = document.querySelector("a.github-link");
    var octocat = document.querySelector("a.github-link > i.nes-octocat");
    link.addEventListener("mouseover", function() {
      octocat.classList.add("animate");
    });
    link.addEventListener("mouseout", function() {
      octocat.classList.remove("animate");
    });
  </script>
</html>
