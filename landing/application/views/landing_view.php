<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Addsing bootstrap CDN link ... -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- adding font awesome link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <!-- adding custome styling-->
        <link rel='stylesheet' href='<?php echo base_url('assets/CSS/landing.css')?>'/>
         <title>Document</title>
    
    </head>
    <body class='bg-dark'>
    
      <div class='container'>
        <!-- Navbar section start-->
        <nav class='navbar navbar-expand-sm smsticky-top navcustome navbar-dark'>
          <div class='container '>
            <a class='navbar-brand'><span><i class="fa-brands fa-cloudflare"></i></span> cloudflare</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class='collapse navbar-collapse ' id='navbarSupportedContent'>
                <ul class='navbar-nav ms-auto' >
                  <li class='nav-item me-4'>
                    <a class='nav-link text-white '>Home</a>
                  </li>
                  <li class='nav-item me-4'>
                      <a class='nav-link text-white '>About</a>
                  </li>
                  <li class='nav-item me-4'>
                      <a class='nav-link text-white '>Help</a>
                  </li>
                </ul>
                </div>
              
          </div>
        </nav>
        <!-- Navbar section end-->

        <!-- body section start-->
        <div class='container'>
          <!-- first row section start-->
          <div class='row pt-4'>
            <!-- first column  start-->
            <div class='col-sm-6 text-white pt-2'>
              <h2 class='h2'>This website is awesome</h2>
                  <p class='lead'>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Eos, eaque praesentium! Placeat asperiores, 
                    nulla quae in earum cumque dolorem ipsa fugit qui tempora nostrum?
                    Dolorum tenetur in perferendis rerum beatae.
                  </p>
                <button class='btn btn-primary col-md-3'>Sign up</button>
            </div>
            <!--1 first column end ....
            ....second column section start-->
            <div class='col-sm-6 d-flex justify-content-center'>
                  <img src='<?php echo base_url('assets/image/img.jpg')?>' 
                  alt='best-screenshot'class='img-fluid h-75 mt-2' />
            </div>
          </div>
          <!-- 1 row end second column end ....
          .... 2 Second row section start-->
          <div class='row bg-white pt-4 '>
            <h2 class='text-center pb-4'>This is Some Randome Information</h2>
            <div class="col-md-3">
            <img class="img-fluid" src='<?php echo base_url('assets/image/img1.jpg')?>' 
                alt='best-screenshot.jpeg'/>
                <p class='lead'>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Eos, eaque praesentium! Placeat asperiores, 
                    nulla quae in earum cumque dolorem ipsa fugit qui tempora nostrum?
                    Dolorum tenetur in perferendis rerum beatae.
                  </p>
            </div>
            <div class="col-md-3">
                <img class="img-fluid "src='<?php echo base_url('assets/image/img2.jpg')?>' 
                   alt='best-screenshot.jpeg'/> 
                   <p class='lead'>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Eos, eaque praesentium! Placeat asperiores, 
                    nulla quae in earum cumque dolorem ipsa fugit qui tempora nostrum?
                    Dolorum tenetur in perferendis rerum beatae.
                  </p>
            </div>
            <div class="col-md-3">
              <img class="img-fluid"src='<?php echo base_url('assets/image/img3.jpg')?>' 
                   alt='best-screenshot.jpeg'/>
                   <p class='lead'>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Eos, eaque praesentium! Placeat asperiores, 
                    nulla quae in earum cumque dolorem ipsa fugit qui tempora nostrum?
                    Dolorum tenetur in perferendis rerum beatae.
                  </p>
            </div>
            <div class="col-md-3">
                <img class="img-fluid"src='<?php echo base_url('assets/image/img4.jpg')?>' 
                  alt='best-screenshot.jpeg'/>
                  <p class='lead'>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Eos, eaque praesentium! Placeat asperiores, 
                    nulla quae in earum cumque dolorem ipsa fugit qui tempora nostrum?
                    Dolorum tenetur in perferendis rerum beatae.
                    
                  </p>
</div>
            </div>
            <!--second row section end-->
            <!-- third row section start-->
            <div class=' row text-starts bg-secondary text-white lead pt-5 pb-4 d-flex justify-content-center '> 
              <div  class='col-7 '>
              <blockquote> 
                Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
                  Eos modi delectus voluptatem debitis,<br> 
                  quo atque ratione sed error quam accusamus,iste a repellat laborum at.<br> 
                Porro reiciendis deleniti veritatis dolorum.<br>
              </blockquote>
               <b class='d-flex justify-content-end pe-4'>-Thor,the thunder of god</b>
               </div>
            </div>
             <!--third row section end-->
          
        
        
            <!-- 4 Fourth row section start-->
        
        <div class='row bg-white pt-5 pb-5  d-flex justify-content-center'>
          <div class='col-8 bg-primary text-white row d-flex  pt-4 pb-4 rounded'> 
            <div class='col-9 text-start'>
              <p class='h4'>Call to Action! it's time<br></p>
              Sign up for our product by clicking the button right over there!
             </div>
             <div class='col-sm-3 mt-4'>
            <button class=' btn btn-outline-light text-white '>Sign up</button>
            </div>
          </div>
        </div>
        <!-- 4 Fourth row section end-->
        <!--This is footer section-->
        <div class=' text-center text-white pt-4 pb-4 '> Copyright @ The OdinProjects 2022</div>
      </div>
      <!-- body section end-->
  </body>
</html>