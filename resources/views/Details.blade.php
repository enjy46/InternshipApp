<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scientific Research - Discover Egypt</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f7f3ef;
      margin: 0;
      padding: 0;
      color: #333;
    }

    .container {
      max-width: 1200px;
      margin: 40px auto;
      padding: 0 20px;
    }

    .article-header {
      text-align: center;
      margin-bottom: 30px;
    }

    .article-header img {
      width: 100%;
      max-height: 400px;
      object-fit: cover;
      border-radius: 10px;
    }

    .article-title {
      font-size: 36px;
      color: #ad8c5e;
      margin-top: 20px;
    }

    .article-content {
      margin-top: 30px;
      line-height: 1.7;
      font-size: 16px;
      color: #666;
    }

    .back-button {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #ad8c5e;
      color: white;
      border-radius: 5px;
      text-decoration: none;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    .back-button:hover {
      background-color: #c79e76;
    }

  </style>
</head>
<body>

  <div class="container">
    <div class="article-header">
      <img src="{{url('Im1.png')}}" alt="Scientific Research">
      <h1 class="article-title">{{$article->name}}</h1>
    </div>

    <div class="article-content">
      <p>{{$article->description}}</p>
    </div>

    <a href="{{url('article')}}" class="back-button">Return to Articles</a>
  </div>

</body>
</html>
