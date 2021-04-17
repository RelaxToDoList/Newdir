<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include "backend/mvc.php";
    ?> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RelaxNews</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/cs2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css_news/css_news.css">
  </head>
<body style="background-color:rgb(40, 38, 38)">  
    <div class="wrapper">
        <div class="section">
                <header>
                    <span class="header_phrase_right" >Мирные новости на RelaxNews</span>
                    <a href="index.php"><div class="header_phrase_one">Relax</div><a>
                    <a href="index.php"><div class="header_phrase_two">News</div></a>
                    <div class="header_phrase_news">Новости</div>
                    <div class="header_phrase_todolist"><a href="https://github.com/RelaxToDoList/ToDo/releases/tag/v1.0"><p class="mycolor">Relax Todo list</p></a></div>
                </header>
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="auto" height="740px" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
        <div class="carousel-caption">
            <h1>Новость №1</h1>
            <p>Текст новости №1</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="auto" height="740px" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>Новость №2</h1>
            <p>Текст новости №2</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="auto" height="740px" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
        <div class="carousel-caption">
            <h1>Новость №3</h1>
            <p>Текст новости №3</p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
        </div>
        </div>

        <!--- News line -->

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <ul>
        
</ul>
    <div id="news">
      <template id="news_block1">
      <div class="wp-block property list">
        <div class="wp-block-body">
          <div class="wp-block-img">
            <a href="news_page.php">
              <img src="https://i.artfile.ru/2048x1365_909032_[www.ArtFile.ru].jpg" alt="">
            </a>
          </div>
          <div class="wp-block-content">
            <small>
          <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>16.04.2021</small>
            <h4 class="content-title">Lorem ipsum</h4>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisg elitm Ut tincidunt purus iaculis ipsum dctum non dtum quam.</p>
            <span class="pull-left">
              <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
            </span>
            <span class="pull-right">
              <span class="capacity">
                <i class="fa fa-user"></i> <span class="nick-name">Имя Фамилия</span>
              </span>
            </span>
          </div>
        </div>
      </div>
      </template>
  </div> 
  </div>
</div>


<script src="/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<!-- <script src="/js/news_block.js">
 -->

 <script>
    const ul = document.querySelector('ul');

    const template = document.querySelector("#news_block1");

    const span = template.content.querySelector("#nick-name");

    let li = template.content.cloneNode(true);

    ul.append(li);
    const ul2 = document.querySelector('ul');

    const template2 = document.querySelector("#news_block1");

    const span2 = template.content.querySelector("#nick-name");

    let li2 = template.content.cloneNode(true);
    ul.append(li2);

</script>
</body>
</html>