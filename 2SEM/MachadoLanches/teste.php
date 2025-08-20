<?php
// SITE ZOADO DO TRALALELO TRALALA
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tralalelo Tralala</title>
    <style>
        body {
            background: linear-gradient(45deg, red, yellow, lime, cyan, magenta, orange);
            background-size: 400% 400%;
            animation: fundo 5s infinite alternate;
            font-family: "Comic Sans MS", cursive, sans-serif;
            text-align: center;
            color: #fff;
            overflow-x: hidden;
        }
        @keyframes fundo {
            0% {background-position: 0% 50%;}
            100% {background-position: 100% 50%;}
        }
        h1 {
            font-size: 70px;
            text-shadow: 5px 5px 0px black, -5px -5px 0px lime;
            animation: pisca 0.5s infinite;
        }
        @keyframes pisca {
            0% {color: red;}
            50% {color: yellow;}
            100% {color: cyan;}
        }
        .marquee {
            font-size: 30px;
            background: black;
            color: lime;
            padding: 10px;
            margin: 20px 0;
        }
        .gif {
            width: 200px;
            height: 200px;
            animation: gira 3s linear infinite;
        }
        @keyframes gira {
            0% {transform: rotate(0deg);}
            100% {transform: rotate(360deg);}
        }
        button {
            font-size: 25px;
            padding: 15px;
            margin: 20px;
            border: 5px dashed pink;
            background: yellow;
            cursor: pointer;
            animation: treme 0.1s infinite;
        }
        @keyframes treme {
            0% {transform: translate(2px, 2px);}
            25% {transform: translate(-2px, 2px);}
            50% {transform: translate(2px, -2px);}
            75% {transform: translate(-2px, -2px);}
            100% {transform: translate(0px, 0px);}
        }
    </style>
</head>
<body>
    <h1>🌈 BEM-VINDO AO TRALALELO TRALALA 🌈</h1>

    <marquee class="marquee" scrollamount="15">🔥🔥🔥 SITE MAIS ZOADO DA INTERNET 🔥🔥🔥</marquee>

    <img src="https://media.tenor.com/zzf3rKve2rAAAAAi/cat-jam.gif" class="gif">
    <img src="https://media.tenor.com/4bK8dPbz8LoAAAAi/rainbow-vomit.gif" class="gif">
    <img src="https://media.tenor.com/vmHyYgFe_gEAAAAi/party-party-parrot.gif" class="gif">

    <p style="font-size:40px; color: black; background: white; display:inline-block; padding:10px;">
        🚀 TRALALALALALALALALA 🚀
    </p>

    <button onclick="alert('VOCÊ ENTROU NO TRALALÁÁÁÁÁÁÁÁÁÁÁÁ!!! 😂😂😂')">
        Clica AQUI se tu é do TRALALA
    </button>

    <marquee class="marquee" direction="right" scrollamount="20">✨✨✨ EU SOU O TRALALÉLO ✨✨✨</marquee>
</body>
</html>
