<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Article Hub - Discover Egypt</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f7f3ef;
      margin: 0;
      padding: 0;
      color: #333;
    }

    /* Navigation Bar */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #2f2e2e;
      padding: 20px 40px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .navbar .logo img {
      height: 60px;
    }

    .navbar .search-box {
      flex-grow: 1;
      margin: 0 30px;
      position: relative;
    }

    .navbar .search-input {
      width: 99%;
      padding: 12px;
      border: 2px solid #ad8c5e;
      border-radius: 20px;
      outline: none;
    }

    .navbar .search-icon {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
    }

    /* Return to Home Button */
    .navbar .home-button {
      padding: 12px 18px;
      border: none;
      border-radius: 20px;
      background-color: #ad8c5e;
      color: white;
      font-weight: bold;
      cursor: pointer;
    }

    .navbar .home-button:hover {
      background-color: #c79e76;
      transform: scale(1.1);
      transition: 0.3s;
    }

    /* Body Content */
    .container {
      max-width: 1200px;
      margin: 40px auto;
      padding: 0 20px;
    }

    .featured-articles {
      display: flex;
      justify-content: space-between;
      gap: 30px;
      flex-wrap: wrap;
    }

    .article {
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      width: 48%;
      transition: transform 0.2s;
      margin-bottom: 20px;
    }

    .article img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .article-content {
      padding: 20px;
    }

    .article-content h3 {
      font-size: 22px;
      margin: 0 0 10px;
      color: #ad8c5e;
    }

    /* Article Type */
    .article-content .article-type {
      font-size: 14px;
      color: #999;
      font-style: italic;
      margin-bottom: 10px;
    }

    .article-content p {
      font-size: 14px;
      color: #666;
      line-height: 1.5;
    }

    .article-content .read-more-btn {
      margin-top: 15px;
      display: inline-block;
      padding: 10px 20px;
      background-color: #ad8c5e;
      color: white;
      border-radius: 5px;
      text-decoration: none;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .article-content .read-more-btn:hover {
      background-color: #c79e76;
    }

    .article:hover {
      transform: scale(1.03);
    }

    /* Footer */
    footer {
      background-color: #2f2e2e;
      color: white;
      text-align: center;
      padding: 20px 0;
      margin-top: 50px;
    }

    /* Contact Us Section in Footer */
    .footer-contact {
      margin-top: 20px;
    }

    .footer-contact h4 {
      margin: 0;
      font-size: 18px;
    }

    .footer-contact p {
      margin: 5px 0;
      font-size: 14px;
      color: #ccc;
    }

    .footer-contact a {
      color: #ad8c5e;
      text-decoration: none;
    }

    .footer-contact a:hover {
      text-decoration: underline;
    }

  </style>
</head>
<body>

  <!-- Navigation Bar -->
  <div class="navbar">
    <div class="logo">
      <img src="{{url('Logo2.png')}}" alt="Website Logo">
    </div>
    <div class="search-box">
      <input type="text" class="search-input" placeholder="Search...">
      <span class="search-icon">
        <img src="{{url('Search5.png')}}" width="20px" height="20px" alt="Search">
      </span>
    </div>
    <a href="{{url('/')}}"><button class="home-button">Return to Home</button></a>
    
    
    @if(Auth::check() && Auth::user()->is_admin == 1)
      <a href="{{url('add')}}"><button class="home-button">Add new Article</button></a>
    @endif
  </div>

  <!-- Main Container -->
  <div class="container">

    <!-- Featured Articles Section -->
    <div class="featured-articles">

      <!-- Article 1 -->
      @foreach ($getRecord as $data )
      <div class="article">
        <img src="{{url('Im1.png')}}" alt="Scientific research">
        <div class="article-content">
          <h3>{{$data->name}}</h3>
          <p class="article-type">{{$data->category}}</p>
          <p>{{$data->description}}</p>
          <a href="{{ route('articles.show', $data->id) }}" class="read-more-btn">Read More</a>
        </div>
      </div>
      @endforeach
     
    </div> <!-- End of Featured Articles -->

  </div>

  <!-- Footer -->
  <footer>
    <p>© 2024 Discover Egypt. All rights reserved.</p>
    <div class="footer-contact">
      <h4>Contact Us</h4>
      <p>Email: <a href="mailto:support@article.com">support@article.com</a></p>
      <p>Phone: +60 122 446 78</p>
    </div>
  </footer>

</body>
</html>
