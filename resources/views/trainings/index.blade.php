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
          
      </div>
    </header>
    <h1>
    <a href="/trainings/create">管理者画面１</a></a>
        
    </h1>
    <div class="body-image">
        <img src="{{ asset('images/body.jpg') }}">
        <div onclick="handleEvent(1)" id="f_sholder" class="m_sholder m_event"></div>
        <div onclick="handleEvent(2)" id="b_sholder" class="u_sholder m_event"></div>
        <div onclick="handleEvent(3)" id="e_chest" class="chest m_event"></div>
        <div onclick="handleEvent(4)" id="e_arm" class="arm m_event"></div>
        <div onclick="handleEvent(5)" id="b_arm" class="u_arm m_event"></div>
        <div onclick="handleEvent(6)" id="e_back" class="back m_event"></div>
        <div onclick="handleEvent(7)" id="c_back" class="m_back m_event"></div>
        <div onclick="handleEvent(8)" id="f_arm" class="m_arm m_event"></div>
        <div onclick="handleEvent(9)" id="f_leg" class="m_leg m_event"></div>
        <div onclick="handleEvent(10)" id="b_leg" class="u_leg m_event"></div>
    </div>
    <div id="modal" class="modal">
        <div class="modal-inner">
            <span id="close">×</span>
            <h4 id="part"></h4>
            <h2 id="title"></h2>
            <p id="description"></p>
            <div id="movie"></div>
        </div>
    </div>
    <script>

        var title = document.getElementById('title');
        var description = document.getElementById('description');
        var movie = document.getElementById('movie');
        var modal = document.getElementById("modal");
        var close = document.getElementById("close");

        var m_event = document.querySelectorAll(".m_event");
        for (let i = 0; i < m_event.length; i++) {
            m_event[i].addEventListener('click', function() {
                modal.classList.add('open');
            });
        }

        var trainings = @json($trainings);
        var parts = @json($parts);
        function handleEvent(num) {
            const filteredParts = parts.find(p_item => p_item.id === num);
            const filteredTrainings = trainings.find(t_item => t_item.id === num);
            console.log(filteredTrainings);
            part.innerHTML = filteredParts.name;
            title.innerHTML = filteredTrainings.name;
            description.innerHTML = filteredTrainings.body;
            movie.innerHTML = filteredTrainings.movie_code;
        }
        close.addEventListener('click' , function() {
            modal.classList.remove('open');
        })
    </script>
</body>
</html>