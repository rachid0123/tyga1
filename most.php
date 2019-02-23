<html>
    <head>
        <title>film making</title>
       
        <style>
        .products-container {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-gap: 1em;

}

.products-container div.items {
  background: fff;
  padding: 20px;
  height: 234px;
  width: 195px;
  box-shadow: 0px 4px 18px 1px #9d7775;
  text-align: center;
  overflow: hidden;
}

.products-container div.items img {
  width: 100%;
}
.products-container div.items video {
  width: 100%;
}


.products-container div.items b {
  /* color: #fff; */
  font-size: 20px;
  font-weight: 100;
}

.products-container div.items .img {
  height: 200px;
}



.products-container div.items .details {
  position: relative;
  top: -2px;
  width: 100%;
  padding: 15px;
  left: -14px;
  height: 247px;
  color: #000;
  -webkit-transition: all 0.5s ease-out;
  -O-transition: all 0.5s ease-out;
  transition: all 0.5s ease-out;
}

.products-container .items:hover .details {
  top: -220px;
  background: #5a4543d1;
  color: #fff;
  text-shadow: 0px 0px 7px #000;
}
.button{
  border-radius: 6px;
  background-color: blue;
  text-align: center;
  width: 100px;
  height: 40px;
  left: 45%;
  margin-left: 50%;
}


        </style>
    </head>
    <body>
        <div class="products-container">

            <div class="items">
              <section class="img">
              <video controls>
                <source src="APOLLINAIRE H-NEGEREYI INTEBE YAWE-_cNw7EhjdjU.mp4" type="video/mp4">
              </video>
              </section>
    
              <section class="details">
                <b>Samsung galaxy Er</b>
                <br>
                <br>
                <p>Lorem im id est laborumid est laborumid est laborum.</p>
                <a href="#">View More</a>
              </section>
            </div>
    
            <div class="items">
              <section class="img">
                <img src="samsung-galaxy-s6-1.jpg" alt="">
              </section>
    
                        <section class="details">
                          <b>Samsung galaxy Er</b>
                          <br>
                          <br>
                          <p>Lorem im id est laborumid est laborumid est laborum.</p>
                          <a href="#">View More</a>
                        </section>
            </div>
    
            <div class="items">
              <section class="img">
    
                <img src="samsung-galaxy-s7-usa1.jpg" alt="">
              </section>
    
    
                        <section class="details">
                          <b>Samsung galaxy Er</b>
                          <br>
                          <br>
                          <p>Lorem im id est laborumid est laborumid est laborum.</p>
                          <a href="#">View More</a>
                        </section>
    
            </div>
    
            <div class="items">
              <section class="img">
    
                <img src="samsung-galaxy-tab-s2-9-7-bluetooth-book-cover-key-board-black-sku-299262-full.jpg" alt="">
              </section>
    
    
                        <section class="details">
                          <b>Samsung galaxy Er</b>
                          <br>
                          <br>
                          <p>Lorem im id est laborumid est laborumid est laborum.</p>
                          <a href="#">View More</a>
                        </section>
    
            </div>
    
            <div class="items">
              <section class="img">
    
                <img src="w4.png" alt="">
              </section>
              
    
                        <section class="details">
                          <b>Samsung galaxy Er</b>
                          <br>
                          <br>
                          <p>Lorem im id est laborumid est laborumid est laborum.</p>
                          <a href="#">View More</a>
                        </section>
                        
            </div>
    
            <div class="items">
              <section class="img">
                <img src="samsung-galaxy-s6-1.jpg" alt="">
              </section>
    
                        <section class="details">
                          <b>Samsung galaxy Er</b>
                          <br>
                          <br>
                          <p>Lorem im id est laborumid est laborumid est laborum.</p>
                          <a href="#">View More</a>
                        </section>
            </div>
    
    
         </div>
    </div><br><br>
    
    <div class="button">
      <a href="www.google.com">
      <button>view more video</button></a>
    </div>
    <?php include_once 'footer.php'; ?>
    
    </body>
</html>