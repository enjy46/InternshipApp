<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scientific Articles Hub</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('bg1.jpg');
            background-size: cover;
            background-color: #a59289;
            margin: 0;
            padding: 0;
        }
        .Logo {
            padding-left: 30px;
        }
        .header {
            text-align: center;
            color: white;
            margin-top: 50px;
        }
        .content {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            margin: 20px auto;
            max-width: 800px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .description {
            text-align: left;
        }
        .description h2 {
            text-align: center;
            color: #333;
            margin-bottom: 15px;
        }
        .description p {
            line-height: 1.6;
            color: #555;
        }
        .Body2 {
            margin-top: 40px;
        }
        .FontSize2 {
            font-size: 30px;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        .article-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .article {
            text-align: center;
            width: 200px;
            height: 250px; 
        }
        .article img {
            width: 100%;
            height: 150px; 
            border: 3px solid #ad8c5e;
            border-radius: 10px;
            object-fit: cover; 
        }
        .articles-button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            background-color: #0f0f0e;
            color: white;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
        }
        .articles-button:hover {
            background-color: #ad8c5e;
        }
        footer {
            background-color: #0f0f0e;
            color: white;
            text-align: center;
            padding: 10px 0;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<div class="Logo">
    <img src="{{url('Logo2.png')}}"  width="60px" height="60px">
</div>

<div class="header">
    <h1>Welcome to the Scientific Articles Hub</h1>
    <p>Your one-stop destination for exploring the latest and most fascinating scientific articles across various disciplines. Dive into the world of knowledge!</p>
</div>

<div class="content">
    <div class="description">
        <h2>About Us</h2>
        <p>At the Scientific Articles Hub, we take pride in curating a diverse selection of high-quality articles covering a multitude of scientific fields. Whether you are interested in biology, physics, astronomy, or social sciences, our platform offers insightful and current content designed for both casual enthusiasts and seasoned professionals.</p>
        <p>Join us as we delve into groundbreaking research, explore thought-provoking ideas, and celebrate the marvels of the scientific realm!</p>
    </div>
<form action="" method="POST">
    @csrf

    <div class="Body2">
        <div class="FontSize2"><b>Top Articles</b></div>
        <div class="article-container">
            <div class="article">
                <img src="{{url('Im1.png')}}" alt="Scientific research">
                <div class="Font"><b>Scientific research</b></div>
            </div>
            <div class="article">
                <img src="{{url('Im4.jpg')}}" alt="Artificial Intelligence (AI)">
                <div class="Font"><b>Artificial Intelligence (AI)</b></div>
            </div>
            <div class="article">
                <img src="{{url('Im2.jpg')}}" alt="Black Holes">
                <div class="Font"><b>Black Holes</b></div>
            </div>
            <div class="article">
                <img src="{{url('Im3.jpg')}}"  alt="Virtual Reality (VR)">
                <div class="Font"><b>Virtual Reality (VR)</b></div>
            </div>
            <div class="article">
                <img src="{{url('Im5.jpg')}}" alt="DNA">
                <div class="Font"><b>DNA</b></div>
            </div>
            <div class="article">
                <img src="{{url('Im6.jpg')}}" alt="Lightning Flowers">
                <div class="Font"><b>Lightning Flowers</b></div>
            </div>
        </div>
        <a href="{{url('article')}}" class="articles-button">View All Articles</a>
    </div>
</form>
</div>

<footer>
    <p>© 2024 Scientific Articles Hub. All rights reserved.</p>
</footer>

</body>
</html>
