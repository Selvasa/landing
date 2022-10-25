<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Addsing bootstrap CDN link ... -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <!-- adding custome styling-->
        <link rel='stylesheet' href='<?php echo base_url('landing/assets/css/landing.css')?>'/>
         <title>Document</title>
    
    </head>
    <body class='bg-dark'>
      <div class='container'>
        <!-- Navbar section start-->
        <nav class='navbar navbar-expand-sm  navbar-dark bg-dark sticky-top'>
          <div class='container'>
            <a class='navbar-brand '>Header Logo</a>
              
                <ul class='navbar-nav navbar-dark '>
                  <li class='nav-item  pe-5'>
                    <a class='nav-link '>Home</a>
                  </li>
                  <li class='nav-item pe-5'>
                      <a class='nav-link'>About</a>
                  </li>
                  <li class='nav-item pe-5'>
                      <a class='nav-link'>Help</a>
                  </li>
                </ul>
              
          </div>
        </nav>
        <!-- Navbar section end-->

        <!-- body section start-->
        <div class='container'>
          <!-- first row section start-->
          <div class='row pt-4'>
            <!-- first column  start-->
            <div class='col-sm-6 pt-3 text-white'>
              <h2 class='h2'>This website is awesome</h2>
                  <p class='lead'>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Eos, eaque praesentium! Placeat asperiores, 
                    nulla quae in earum cumque dolorem ipsa fugit qui tempora nostrum?
                    Dolorum tenetur in perferendis rerum beatae.
                  </p>
                <button class='btn btn-primary col-md-3 mb-5'>Sign up</button>
            </div>
            <!--1 first column end ....
            ....second column section start-->
            <div class='col-sm-5 ms-auto me-3'>
                  <img src='<?php echo base_url('assets/image/img.jpg')?>' 
                  alt='best-screenshot.jpeg'class='w-100 h-75' />
                
            </div>
          </div>
          <!-- 1 row end second column end ....
          .... 2 Second row section start-->
          <div class='row d-flex justify-content-around bg-white pt-4 pb-5'>
            <div class='text-center pb-4 h2'>This is Some Randome Information</div>
                  <img class="col-md-2" style='height:150px'src='<?php echo base_url('assets/image/img1.jpg')?>' 
                  alt='best-screenshot.jpeg'class='w-100 h-100 '/>
                  <img class="col-md-2" style='height:150px'src='<?php echo base_url('assets/image/img2.jpg')?>' 
                  alt='best-screenshot.jpeg'class='w-100 h-100'/>
                  <img class="col-md-2" style='height:150px'src='<?php echo base_url('assets/image/img3.jpg')?>' 
                  alt='best-screenshot.jpeg'class='w-100 h-100'/>
                  <img class="col-md-2" style='height:150px'src='<?php echo base_url('assets/image/img4.jpg')?>' 
                  alt='best-screenshot.jpeg'class='w-100 h-100'/>
            </div>
            <!--second row section end-->
            <!-- third row section start-->
          <!-- <div class='row d-flex'>
            <div class="col-2 rounded">box-1</div>
            <div class="col-2 ">box-2</div>
            <div class="col-2 ">box-3</div>
            <div class="col-2 " >box-4</div>
          </div> -->
            <!--third row section end-->
            <!-- 4 Fourth row section start-->
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
          
        <!-- body section end-->
        <!-- 5 fifth row-->
        <div class='row bg-white pt-5 pb-5  d-flex justify-content-center'>
          <div class='col-8 bg-primary text-white row d-flex justify-content-center pt-4 pb-4 rounded'> 
            <div class='col-8 text-start pt-2'>
              <span class='h4'>Call to Action! it's time<br></span>
              Sign up for our product by clicking the button right over there!
             </div>
             
            <button class='col-sm-2  text-center  btn btn-outline-light btn-sm text-white '>Sign up</button>
            
          </div>
        </div>
        <!--This is footer section-->
        <div class='text-center text-white pt-4 pb-4'>Copyright @ The OdinProjects 2022</div>
      </div>
  </body>
</html>