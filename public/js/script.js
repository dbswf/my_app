var m_sholder = document.getElementById('f_sholder');
var u_sholder = document.getElementById('b_sholder');
var chest = document.getElementById('e_chest');
var arm = document.getElementById('e_arm');
var u_arm = document.getElementById('b_arm');
var back = document.getElementById('e_back');
var m_back = document.getElementById('c_back');
var m_arm = document.getElementById('f_arm');
var m_leg = document.getElementById('f_leg');
var u_leg = document.getElementById('b_leg');
var part = document.getElementById('part');
var title = document.getElementById('title');
var movie = document.getElementById('movie');
var event = document.querySelectorAll(".event");
var modal = document.getElementById("modal");
var close = document.getElementById("close");

for (let i = 0; i < event.length; i++) {
  event[i].addEventListener('click', function() {
    modal.classList.add('open');
  });
}

close.addEventListener('click' , function() {
    modal.classList.remove('open');
});

m_sholder.addEventListener('click', function() {
    part.innerHTML = "肩(前部）";
    title.innerHTML = "ショルダープレス";
    movie.innerHTML = `<iframe width="500" height="281" src="https://www.youtube.com/embed/gHxKJ2P6YiM" title="【筋トレ】肩を鍛えるバーベルショルダープレスの方法" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>`;
});

u_sholder.addEventListener('click', function() {
    part.innerHTML = "肩（後部）";
    title.innerHTML = "リアレイズ";
});

chest.addEventListener('click', function() {
    part.innerHTML = "胸";
    title.innerHTML = "ベンチプレス";
});

arm.addEventListener('click', function() {
    part.innerHTML = "上腕二頭筋";
    title.innerHTML = "アームカール";
});

u_arm.addEventListener('click', function() {
    part.innerHTML = "上腕二頭筋";
    title.innerHTML = "アームカール";
});

back.addEventListener('click', function() {
    part.innerHTML = "背中";
    title.innerHTML = "チンニング";
});

m_back.addEventListener('click', function() {
    part.innerHTML = "背中";
    title.innerHTML = "デットリフト";
});

m_arm.addEventListener('click', function() {
    part.innerHTML = "前腕";
    title.innerHTML = "ハンマーカール";
});

m_leg.addEventListener('click', function() {
    part.innerHTML = "大腿四頭筋";
    title.innerHTML = "ダンベルランジ";
});

u_leg.addEventListener('click', function() {
    part.innerHTML = "ハムストリングス";
    title.innerHTML = "ワイドスクワット";
});


