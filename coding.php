<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grow</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
   
    <!-- <script src="js/quizz.js"></script> -->
    <link rel="stylesheet" type="text/css" href="css/quizz.css">
    <link rel="stylesheet" type="text/css" href="css/animation.css">
    
    <style>
    .resultatapoint{
        color: #FF4080; font-size:40px;
    }
    link ul li a{
            margin-right: 50%;
            text-decoration: none;
        }

        button{
            background-color: #FF4080;

        }

        .header{
            width:100%;
            position :absolute;
            /* background-color: #FF4080; */
        }
    </style>
</head>


<body>
    <style>
        .navbar{
            position: absolute;
    top: 0;
    right: 0;
    width: 100% !important;
    left: 0;
    background-color: #FF4080;

        }
    </style>
    <div class="container">
            <nav class="navbar nav-color">
                    <a class="navbar-brand" href=""> <img src="images/grow-logo (2).png" alt=""></a>
                    <form class="form-inline">
                    
                    <a href="#">growstrategyzer.com</a> 
                </form>
                  </nav>
    </div>

    <br> <br> <br> <br> <br>
    <h1 style="color: grey; text-align:center"> FORMATION CODING </h1>
    <div class="container" id="titrepage">
<div class="row">
   
<ul class="cards">

<div class="col-md-3">
<li class="cards__item">
  <div class="card">
    <div class="card__image card__image--fence"></div>
    <div class="card__content">
      <div style="color:#FF4080" class="card__title">SECTION 1</div>
      <p > <strong>Session 1:</strong> Navigateurs et sites web </p>
      <a href="csession1.php"> <button class="btn btn--block card__btn">COMMENCEZ</button></a>
    </div>
  </div>
</li>
</div>
<div class="col-md-3">
<li class="cards__item">
  <div class="card">
    <div class="card__image card__image--fence"></div>
    <div class="card__content">
      <div style="color:#FF4080" class="card__title">SECTION 1</div>
      <p > <strong>Session 2:</strong> Installation des logiciels d’édition de texte (vscode ou sublime text)
</p>

      <a href="csession1.php"> <button  class="btn btn--block card__btn">COMMENCEZ</button></a>
    </div>
  </div>
</li>
</div>
<div class="col-md-3">
<li class="cards__item">
  <div class="card">
    <div class="card__image card__image--fence"></div>
    <div class="card__content">
      <div style="color:#FF4080" class="card__title"> SECTION 1</div>
      <p > <strong>Session 3:</strong> Les Balises  texte en html </p>
      <a href="csession1.php"> <button  class="btn btn--block card__btn">COMMENCEZ</button></a>
    </div>
  </div>
</li>
</div>
<div class="col-md-3">
<li class="cards__item">
  <div class="card">
    <div class="card__image card__image--fence"></div>

<div class="card__content">
      <div style="color:#FF4080" class="card__title">SECTION 1</div>
      <p > <strong>Session 4:</strong> Les Balises  media (image, sons , vidéo)  en html   </p>
      <a href="csession1.php"> <button  class="btn btn--block card__btn">COMMENCEZ</button></a>
    </div>
  </div>
</li>
</div>
<div class="col-md-3">
<li class="cards__item">
  <div class="card">
    <div class="card__image card__image--fence"></div>

<div class="card__content">
      <div style="color:#FF4080" class="card__title">SECTION 1 </div>
      <p > <strong>Session 5:</strong> Structure d’une page html   </p>
      <a href="csession1.php"> <button  class="btn btn--block card__btn">COMMENCEZ</button></a>
    </div>
  </div>
</li>
</div>
<div class="col-md-3">
<li class="cards__item">
  <div class="card">
    <div class="card__image card__image--fence"></div>

<div class="card__content">
      <div style="color:#FF4080" class="card__title">SECTION 1 </div>
      <p > <strong>Session 6:</strong> Initiation aux css  </p>

      <a href="csession1.php"> <button  class="btn btn--block card__btn">COMMENCEZ</button></a>
    </div>
  </div>
</li>
</div>


</ul>


</div>
  
    </div>

<style>
        body {
  color: @gray;
  font-family: 'Roboto','Helvetica Neue', Helvetica, Arial, sans-serif;
  font-style: normal;
  font-weight: 400;
  letter-spacing: 0;
  padding: 1rem;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  -moz-font-feature-settings: "liga" on;
}

img {
  height: auto;
  max-width: 100%;
  vertical-align: middle;
}

.btn {
  background-color: white;
  border: 1px solid grey;
  //border-radius: 1rem;
  color: @gray-dark;
  padding: 0.5rem;
  text-transform: lowercase;
}

.btn--block {
  display: block;
  width: 100%;
}
 
.cards {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin: 0;
  padding: 0;
}

.cards__item {
  display: flex;
  padding: 1rem;
  @media(min-width: 40rem) {
    width: 50%;
  }
  @media(min-width: 56rem) {
    width: 33.3333%;
  }
}

.card {
  background-color: white;
  border-radius: 0.25rem;
  box-shadow: 0 20px 40px -14px rgba(0,0,0,0.25);
  display: flex;
  flex-direction: column;
  overflow: hidden;
  &:hover {
    .card__image {
      filter: contrast(100%);
    }
  }
}

.card__content {
  display: flex;
  flex: 1 1 auto;
  flex-direction: column;
  padding: 1rem;
}

.card__image {
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
  filter: contrast(70%);
  overflow: hidden;
  position: relative;
  transition: filter 0.5s cubic-bezier(.43,.41,.22,.91);;
  &::before {
    content: "";
    display: block;
    padding-top: 56.25%; 
  }
  @media(min-width: 40rem) {
    &::before {
      padding-top: 66.6%; /
    }
  }
}

.card__image--flowers {
  background-image: url(https://unsplash.it/800/600?image=82);
}

.card__image--river {
  background-image: url(https://unsplash.it/800/600?image=11);
}

.card__image--record {
  background-image: url(https://unsplash.it/800/600?image=39);
}

.card__image--fence {
  background-image: url(https://unsplash.it/800/600?image=59);
}

.card__title {
  color:grey;
  font-size: 1.25rem;
  font-weight: 300;
  letter-spacing: 2px;
  text-transform: uppercase;
}

.card__text {
  flex: 1 1 auto;
  font-size: 0.875rem;
  line-height: 1.5;
  margin-bottom: 1.25rem;
}



</style>
</body>
</html>
