<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="阴阳师寮会首页：立秋夕烛 - 风の谷" />
    <meta name="keywords" content="阴阳师,风の谷,立秋夕烛,阴阳寮" />
    <meta name="author" content="©ZooJeek" />
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://unpkg.com/nes.css/css/nes.min.css" rel="stylesheet" />
    <link href="/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/main.css"/>
    <title>立秋夕烛 - 风の谷</title>
  </head>

  <body>
    <header>
      <h3>阴阳师 - 風の谷</h3>
      <p>Happy christmas!</p>
    </header>
    <section class="nes-container with-title is-centered is-rounded is_dark" style="margin-top: 50px;">
      <h1 class="title" style="margin-top: -50px;"><img src="/image/logo.png" style="width:55px;"> 喵 了 个 咪 </h1>
      <div>
        <button class="nes-btn is-error col-sm-4 col-md-2" onclick="locate('/')"> 简 介 </button>
        <button class="nes-btn is-warning col-sm-4 col-md-2" onclick="locate('/activity')"> 活 動 </button>
        <button class="nes-btn is-primary col-sm-4 col-md-2" onclick="locate('/login')"> 登 入 </button>
        <button class="nes-btn is-success col-sm-4 col-md-2" onclick="locate('/regis')"> 註 冊 </button>
      </div>
    </section>
    <section class="nes-container with-title" style="text-align: center;margin-top: 30px;">
      <h2 class="title" style="margin-top: -50px;">{{ $active_title ?? "简介" }}</h2>
      <div class="containers" id='active_body'>
        
        @yield('active_body')
        
      </div>
    </section>

    <footer class="footer">
      <p>
        <a>Author: &copy;ZooJeek</a>
        <span>-</span>
        ZooJeek@Outlook.com
      </p>
    </footer>
  </body>
  <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script>
    function locate(url){
      location.href = url;
    }
  </script>
</html>