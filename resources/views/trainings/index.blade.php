<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ secure_asset('/css/style.css') }}">
</head>
<body>
    <header class="header">
      <div class="header-list">
          <!--検索機能と部位名（プルダウンメニュー）-->
      </div>
    </header>
    <h1>
    <a href="/trainings/create">管理者画面１</a></a>
        
    </h1>
    <div class="body-image">
        <img src="{{ asset('images/body.jpg') }}">
        <div id="f_sholder" class="m_sholder event"></div>
        <div id="b_sholder" class="u_sholder event"></div>
        <div id="e_chest" class="chest event"></div>
        <div id="e_arm" class="arm event"></div>
        <div id="b_arm" class="u_arm event"></div>
        <div id="e_back" class="back event"></div>
        <div id="c_back" class="m_back event"></div>
        <div id="f_arm" class="m_arm event"></div>
        <div id="f_leg" class="m_leg event"></div>
        <div id="b_leg" class="u_leg event"></div>
    </div>
    <div id="modal" class="modal">
        <span id="close">×</span>
        <h4 id="part"></h4>
        <h2 id="title"></h2>
        <div id="movie"></div>
    </div>
    <script src="{{ secure_asset('/js/script.js') }}"></script>
</body>
</html>