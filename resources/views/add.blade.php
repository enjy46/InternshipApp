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

    /* Form to Add New Article */
    .add-article-form {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin-bottom: 40px;
    }

    .add-article-form h2 {
      color: #ad8c5e;
      font-size: 24px;
      margin-bottom: 20px;
    }

    .add-article-form input[type="text"],
    .add-article-form textarea,
    .add-article-form select {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 2px solid #ad8c5e;
      border-radius: 5px;
    }

    .add-article-form textarea {
      resize: vertical;
      height: 150px;
    }

    .add-article-form button {
      padding: 12px 18px;
      border: none;
      border-radius: 5px;
      background-color: #ad8c5e;
      color: white;
      font-weight: bold;
      cursor: pointer;
    }

    .add-article-form button:hover {
      background-color: #c79e76;
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
    <a href="{{url('Home')}}"><button class="home-button">Return to Home</button></a>
    <a href="#add-article"><button class="home-button">Add new Article</button></a>
  </div>

  <!-- Main Container -->
  <div class="container">

    <!-- Form to Add New Article -->
  
    <div class="add-article-form" id="add-article">
  
      <h2>Add a New Article</h2>
      <form action="{{url('store')}}" method="POST">
        @csrf

        <label for="title">Article Title</label>
        <input type="text" id="title" name="name" placeholder="Enter the article title" required>

        <label for="title">Article Category</label>
        <input type="text" id="title" name="category" placeholder="Enter the article category" required>


        <label for="content">Article Content</label>
        <textarea id="content" name="description" placeholder="Write your article content here..." required></textarea>

        <button type="submit">Submit Article</button>
      </form>
    </div>
</form>

    <!-- Featured Articles Section -->
    <div class="featured-articles">

    

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
