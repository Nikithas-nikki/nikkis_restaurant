<!DOCTYPE html>
<html>
<head>
<title>Restaurant</title>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles.css" media="screen" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma" />
<style>
  body, html {height: 100%}
  body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
  .menu {display: none}
  .bgimg {
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url("/ourresimages/pizza.jpg");
    min-height: 90%;
  }
  </style>
  <style>
    
    form {
        background-color: #fff;
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    label {
        display: block;
        margin-bottom: 8px;
        color: #333;
    }
    
    input[type="email"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }
    
    input[type="submit"] {
        background-color: #ff6600;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
    
    input[type="submit"]:hover {
        background-color: #ff5500;
    }
</style>
  </head>
  <body>
  
  <!-- Navbar (sit on top) -->
  <div class="ourres-top ourres-hide-small">
    <div class="ourres-bar ourres-xlarge ourres-black ourres-opacity ourres-hover-opacity-off" id="myNavbar">
      <a href="#home" class="ourres-bar-item ourres-button" >HOME</a>
      <a href="#menu" class="ourres-bar-item ourres-button">MENU</a>
      <a href="#about" class="ourres-bar-item ourres-button">ABOUT</a>
      <a href="#chef" class="ourres-bar-item ourres-button">CHEFS</a>
      <a href="#myMap" class="ourres-bar-item ourres-button">CONTACT</a>
    </div>
  </div>
    
  <!-- Header with image -->
  <header class="bgimg ourres-display-container ourres-grayscale-min" id="home">
    <img src="dishes/background-image.jpg" style:height=70%; width="100% ; ">
    <div class="ourres-display-bottomleft ourres-padding">
      <span style="border-color:darkkhaki;" class="ourres-tag ourres-xlarge">Open from 7am to 12pm</span>
    </div>
      </header>
  
  <!-- Menu Container -->
  <div class="ourres-container ourres-black ourres-padding-60 ourres-xxlarge" id="menu" >
    <!--to add background image around the menu --> 
    <div class="ourres-content">
    
      <h1 class="ourres-center ourres-jumbo" style="margin-bottom:64px">Embark on an epicurean odyssey through our menu, where the extraordinary interweaves with the exotic, crafting an unparalleled dining experience</h1>
      <div class="ourres-row ourres-center ourres-border ourres-border-dark-grey">
        <a href="javascript:void(0)" onclick="openMenu(event, 'south_Indian');" id="myLink">
          <div class="ourres-col s4 tablink ourres-padding-large ourres-hover-purple">South Indian</div>
        </a>

        <a href="javascript:void(0)" onclick="openMenu(event, 'North_Indian');">
          <div class="ourres-col s4 tablink ourres-padding-large ourres-hover-yellow">North Indian</div>
        </a>

        <a href="javascript:void(0)" onclick="openMenu(event, 'Mexican');">
          <div class="ourres-col s4 tablink ourres-padding-large ourres-hover-pink">Mexican</div>
        </a>

        <a href="javascript:void(0)" onclick="openMenu(event, 'Italian');">
          <div class="ourres-col s4 tablink ourres-padding-large ourres-hover-green">Italian</div>
        </a>

        <a href="javascript:void(0)" onclick="openMenu(event, 'Chinese');">
          <div class="ourres-col s4 tablink ourres-padding-large ourres-hover-blue">Chinese</div>
        </a>
      </div>
  
      <div id="south_Indian" class="ourres-container menu ourres-padding-32 ourres-white">

        <h1><b>Idli</b> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.15</span></h1>
        <img src="dishes/idli.jpg" style="height:30%; width:400px;">
        <hr>
     
        <h1><b>Vada</b> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.25</span></h1>
        <img src="dishes/vada-1.jpg" style="height:30%; width:400px;"> 
        <hr>

        <h1><b>Poori</b> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.25</span></h1>
        <img src="dishes/poori.jpg" style="height:30%; width:400px;"> 
        <hr>

        <h1><b>Upma</b> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.45</span></h1>
        <img src="dishes/upma.jpg" style="height:30%; width:400px;">
        <hr>
  
        <h1><b>Avalakki Bath or poha</b> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.50</span></h1>
        <img src="dishes/avalakki bath.jpg" style="height:30%; width:400px;" >
        <hr>

        <h1><b>Rava Idli</b> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.35</span></h1>
        <img src="dishes/Rava Idli.jpg" style="height:30%; width:400px;" >
        <hr>

        <h1><b>Masala Dosa</b> <span class="ourres-tag ourres-grey ourres-round"></span><span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.100</span></h1>
        <img src="dishes/masala-dosa.jpeg" style="height: 20%;width: 400px; ">
        <hr>

        <h1><b>Set Dosa</b> <span class="ourres-tag ourres-grey ourres-round"></span><span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.100</span></h1>
        <img src="dishes/set-dosa.jpeg" style="height: 20%; width: 400px; " >
        <hr>
      </div>

  
      <div id="North_Indian" class="ourres-container menu ourres-padding-32 ourres-white">

        <h1><b>North Indian Meals</b> <span class="ourres-tag ourres-grey ourres-round">Popular</span> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round"></span></h1>
        <img src="dishes/meals.jpg" style="height: 20%;width: 400px; " >
        <hr>
     
        <h1><b>Butter Kulcha</b> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.45</span></h1>
        <img src="dishes/butter-kulcha.jpg" style="height: 20%;width: 400px; " >
        <hr>
        
        <h1><b>Kulcha</b> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.40</span></h1>
        <img src="dishes/kulcha.jpeg" style="height: 20%;width: 400px; " >
        <hr>
  
        <h1><b>Naan</b> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.45</span></h1>
        <img src="dishes/naan.jpg" style="height: 20%;width: 400px; " >
        <hr>

        <h1><b>Butter Naan</b> <span class="ourres-tag ourres-grey ourres-round">Popular</span> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.40</span></h1>
        <img src="dishes/butter-naan.jpeg" style="height: 20%;width: 400px; " >
        <hr>

        <h1><b>Phulka</b> <span class="ourres-tag ourres-grey ourres-round">Popular</span> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.20</span></h1>
        <img src="dishes/roti.jpg" style="height: 20%;width: 400px; " >
        <hr>

        <h1><b>Veg Curries:</b> <span class="ourres-tag ourres-grey ourres-round">Popular</span> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round"></span></h1>
        <hr>

        <h1><b></b>Panner Butter Masala<span class="ourres-tag ourres-grey ourres-round"></span> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.200</span></h1>
        <img src="dishes/panner-butter-masala.jpg" style="height: 20%;width: 400px; " >
        <hr>

        <h1><b>Vegetable kofta</b> <span class="ourres-tag ourres-grey ourres-round"></span> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.185</span></h1>
        <img src="dishes/kofta.jpeg" style="height: 20%;width: 400px; " >
        <hr>

        <h1><b>Vegetable Kadai</b> <span class="ourres-tag ourres-grey ourres-round"></span> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.150</span></h1>
        <img src="dishes/kadai.jpeg" style="height: 20%;width: 400px; " >
        <hr>

        <h1><b>Panjabi Rasoi Ka Phool Curry</b> <span class="ourres-tag ourres-grey ourres-round">Popular</span> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.210</span></h1>
        <img src="dishes/gravy.jpeg" style="height: 20%;width: 400px; " >
        <hr>

        <h1><b>Veg. Kolhapuri</b> <span class="ourres-tag ourres-grey ourres-round"></span> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.150</span></h1>
        <img src="dishes/kolhapuri.jpeg" style="height: 20%;width: 400px; " >

        <hr>

        <h1><b>Veg. Hyderabadi</b> <span class="ourres-tag ourres-grey ourres-round"></span> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.140</span></h1>
        <img src="dishes/hyderabadi.jpeg" style="height: 20%;width: 400px; " >
        <hr>

        <h1><b>Dry Items:</b> <span class="ourres-tag ourres-grey ourres-round"></span> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round"></span></h1>
        <hr>

        <h1><b>Dhamekedar Alu Gobi</b> <span class="ourres-tag ourres-grey ourres-round"</span> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.185</span></h1>
        <img src="dishes/alu-gobi.jpeg" style="height: 20%;width: 400px; " >
        <hr>
      
        <h1><b>Behad Swadisht Panner</b> <span class="ourres-tag ourres-grey ourres-round"></span> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.210</span></h1>
        <img src="dishes/lajawb-panner.jpeg" style="height: 20%;width: 400px; " >
        <hr>

        <h1><b>Rice:</b> <span class="ourres-tag ourres-grey ourres-round">Popular</span> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round"></span></h1>
        <hr>

        <h1><b>Jeera Rice</b> <span class="ourres-tag ourres-grey ourres-round"></span> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.95</span></h1>
        <img src="dishes/jeera-rice.jpeg" style="height: 20%;width: 400px; " >
        <hr>

        <h1><b>Cheese Tawa Pulao</b> <span class="ourres-tag ourres-grey ourres-round"></span> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.95</span></h1>
        <img src="dishes/cheese-tawa-pulao.jpeg" style="height: 20%;width: 400px; " >
        <hr>


        <h1><b>Pulao</b> <span class="ourres-tag ourres-grey ourres-round"></span> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.95</span></h1>
        <img src="dishes/pulao.jpg" style="height: 20%;width: 400px; " >
        <hr>

        <h1><b>Peas Pulao</b> <span class="ourres-tag ourres-grey ourres-round"></span> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.95</span></h1>
        <img src="dishes/peas-pulao.jpg" style="height: 20%;width: 400px; " >
        <hr>

        <h1><b>Veg. Biriyani</b> <span class="ourres-tag ourres-grey ourres-round">Popular</span> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.95</span></h1>
        <img src="dishes/veg-biriyani.jpeg" style="height: 20%;width: 400px; " >
        <hr>

        <h1><b>Sweet Lassi</b> <span class="ourres-tag ourres-grey ourres-round"></span> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.40</span></h1>
        <img src="dishes/lassi.jpeg" style="height: 20%;width: 400px; " >
        <hr>

        <h1><b>Buttermilk</b> <span class="ourres-tag ourres-grey ourres-round"></span> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.40</span></h1>
        <img src="dishes/buttermilk.jpeg" style="height: 20%;width: 400px; " >
        <hr>

        <h1><b>For 1 cup of Extra dal </b> <span class="ourres-tag ourres-grey ourres-round">Popular</span> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.20</span></h1>
        <img src="dishes/dal.jpg" style="height: 20%;width: 400px; " >
        <hr>

      </div>
  
      <div id="Mexican" class="ourres-container menu ourres-padding-32 ourres-white">

        <h1><b>Cheesy Mexican Fries</b> <span class="ourres-tag ourres-grey ourres-round"></span><span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.130</span></h1>
        <img src="dishes/mexican-fries.jpeg" style="height: 20%;width: 400px; " >
        <hr>

        <h1><b>Guacamole</b> <span class="ourres-tag ourres-grey ourres-round">Seasonal</span><span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.130</span></h1
        <img src="dishes/guacamole.jpg" style="height: 20%;width: 400px; " >
        <hr>

        <h1><b>Exotic Mexican Pizza</b> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.149</span></h1>
        <img src="dishes/mexican-pizza.jpeg" style="height: 20%;width: 400px; " >
        <hr>
        
        <h1><b>Tacos de Verduras</b> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round"Rs.140</span></h1>
        <img src="dishes/tacos.jpeg" style="height: 20%;width: 400px; " >
        <hr>

        <h1><b>Nachos con Salsa Fresca</b> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.140</span></h1>
        <img src="dishes/nachos.jpeg" style="height: 20%;width: 400px; " >
        <hr>

        <h1><b>Burrito de Verduras</b> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.140</span></h1>
        <img src="dishes/burrito.jpg" style="height: 20%;width: 400px; " >
        <hr>        
      </div>

      <div id="Italian" class="ourres-container menu ourres-padding-32 ourres-white">
        <h1><b>Margherita Pizza</b> <span class="ourres-tag ourres-grey ourres-round">Seasonal</span><span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.150</span></h1>
        <img src="dishes/margherita-pizza.jpg" style="height: 20%;width: 400px; " >
        <hr>
     
        <h1><b>Caprese Salad</b> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.150</span></h1>
        <img src="dishes/caprese-salad.jpg" style="height: 20%;width: 400px; " >
        <hr>
        
        <h1><b>Eggplant Paramesan</b> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.150</span></h1>
        <img src="dishes/eggplant.jpg" style="height: 20%;width: 400px; " >
        <hr>
        
        
        <h1><b>Risotto alla Milanese</b> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.150</span></h1>
        <img src="dishes/risotto.jpg" style="height: 20%;width: 400px; " >
        <hr>

        <h1><b>Bruschetta</b> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.150</span></h1>
        <img src="dishes/bruschetta.jpg" style="height: 20%;width: 400px; " >
        <hr>

        <h1><b>Minestrone Soup</b> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.150</span></h1>
        <img src="dishes/minestrone.jpg" style="height: 20%;width: 400px; " >
        <hr>
      </div>

      <div id="Chinese" class="ourres-container menu ourres-padding-32 ourres-white">
        <h1><b>Vegetable Stir Fry</b> <span class="ourres-tag ourres-grey ourres-round">Seasonal</span><span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.150</span></h1>
        <img src="dishes/stir-fry.jpg" style="height: 20%;width: 400px; " >
        <hr>
     
        <h1><b>Niango</b> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.160</span></h1>
        <img src="dishes/rice-cake.jpg" style="height: 20%;width: 400px; " >
        <hr>
        
        <h1><b>Chun Juan</b> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.160</span></h1>
        <img src="dishes/spring-roll.jpg" style="height: 20%;width: 400px; " >
        <hr>
        
        <h1><b>Yuxiang quiezi</b> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.159</span></h1>
        <img src="dishes/eggplant-in-garlic-sauce.jpg" style="height: 20%;width: 400px; " >
        <hr>

        <h1><b>Liang Mian</b> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round">Rs.160</span></h1>
        <img src="dishes/noodles.jpg" style="height: 20%;width: 400px; " >
        <hr>
      </div>
    
  <!-- About Container -->
  <div class="ourres-container ourres-padding-64 ourres-red ourres-grayscale ourres-xlarge" id="about">
    <div class="ourres-content">
      <h1 class="ourres-center ourres-jumbo" style="margin-bottom:64px">About</h1>
      <p>Welcome to Culinary Kaleidoscope, Your Culinary Oasis in the Heart of Bangalore

         Nestled amidst the vibrant cityscape of Bangalore,# 213,18 M G Road, Ulsoor, Bangalore-560001

         Culinary Kaleidoscope offers an unforgettable dining experience that transcends the ordinary. With a passion for flavor, an eye for detail, and a commitment to excellence, we have become a cherished destination for food enthusiasts and discerning diners alike.

         <h1>A Symphony of Flavors</h1>
         <p>Indulge your senses in a symphony of flavors meticulously crafted by our talented culinary team. Our menu is a fusion of global inspirations and local influences, resulting in a delectable array of dishes that cater to all palates. From traditional Indian delicacies to international favorites, we offer a culinary journey that delights even the most discerning taste buds.</p>
         <br>

        <h1> Aesthetic Ambiance</h1>
        <p>Step into an inviting ambiance that seamlessly combines contemporary elegance with warm, welcoming vibes. Whether you're dining with friends, family, or colleagues, our stylish and comfortable setting provides the perfect backdrop for your dining experience.</p>
        <br>

        <h1> Impeccable Service</h1>
        <p>At Culinary Kaleidoscope, our commitment to your satisfaction goes beyond just the cuisine. Our attentive and knowledgeable staff is dedicated to ensuring every moment you spend with us is a memorable one. From the moment you walk in, you'll be treated to impeccable service that complements our exceptional cuisine.</p>
        <br>  

        <h1>Special Events and Catering</h1>
        <p> Looking to host a special event or celebrate a milestone? Our restaurant is well-equipped to host private gatherings, celebrations, and corporate events. We also offer catering services, bringing the flavors of [Your Restaurant Name] to your chosen location.</p>
        <br>
        
        <h1>Visit Us Today</h1>
        <p>Discover the culinary gem that is Culinary Kaleidoscope and embark on a gastronomic adventure like no other. Whether you're a Bangalore resident or a visitor to our city, we invite you to savor the exceptional flavors and warm hospitality that define our establishment.
            Thank you for considering Culinary Kaleidoscope for your dining experience. We look forward to welcoming you soon.
            Feel free to customize these sentences to better reflect the unique aspects and offerings of your restaurant in Bangalore.</p>
      <p>We are proud of our interiors.</p>
      <br>
      <h1><b>Opening Hours</b></h1>
      
      <div class="ourres-row">
        <div class="ourres-col s6">
          <p>We are oprn on all days</p>
          <p>Sunday-Monday : 7:00 - 12:30.00</p>
        </div>
      </div>
      
    </div>
  </div>
  
  <div class="ourres-container ourres-padding-64 ourres-red ourres-red ourres-xlarge" id="chef">
    <div class="ourres-content">
      <h1 class="ourres-center ourres-jumbo" style="margin-bottom:64px">Chef</h1>
      <div class="ourres-container ourres-padding-32 ourres-white">

        <h1><b>Mary</b> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round"></span></h1>
        <img src="chefs/chef1.jpg" style="height:30%; width:400px;">
        <p>Meet Chef Mary, a culinary virtuoso who turns every meal into a masterpiece. With a deft touch and an artist's eye, she crafts dishes that not only tantalize your taste buds but also delight your senses. Her commitment to using locally-sourced, sustainable ingredients shines through in every plate she presents. Chef Mary is dedicated to creating edible art that leaves a lasting impression.</p>
        <hr>
     
        <h1><b>Rahul</b> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round"></span></h1>
        <img src="chefs/chef2.jpg" style="height:30%; width:400px;"> 
        <p>Chef Rahul is a culinary genius who orchestrates flavors like a maestro conducting a symphony. His dedication to the craft and relentless pursuit of perfection have earned him acclaim in the culinary world. With a passion for using seasonal ingredients, Chef Rahul creates dishes that harmonize tradition and innovation, leaving diners with an unforgettable gastronomic experience. His commitment to his craft is as unwavering as his love for food, making him a celebrated figure in the culinary realm.</p>
        <hr>

        <h1><b>Pia</b> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round"></span></h1>
        <img src="chefs/chef3.jpg" style="height:30%; width:400px;">
        <p>Chef Pia is a culinary wizard, weaving magic through her culinary creations. She effortlessly combines diverse flavors, textures, and ingredients to create unforgettable dining experiences. Her passion for experimentation and her deep knowledge of international cuisines make her a standout in the culinary world. When you taste her dishes, you embark on a culinary journey like no other.</p> 
        <hr>

        <h1><b>Nikki</b> <span class="ourres-right ourres-tag ourres-dark-grey ourres-round"></span></h1>
        <img src="chefs/chef4.jpg" style="height:30%; width:400px;">
        <p>Chef Nikki takes classic recipes to new heights with her innovative approach to cooking. She respects tradition but isn't afraid to infuse modern flair into her dishes. Her culinary expertise transcends generations, and she's a master at bringing comfort food to a whole new level. Every bite from Chef Nikki is a nostalgic trip with a contemporary twist.</p>
        <hr>
  
        
      </div>

    </div>
  </div>
  <!-- Image of location/map -->
  <img src="ourresimages/map.jpg" class="ourres-image ourres-greyscale" style="width:100%;" id="myMap">
  
  <!-- Contact -->
  <div class="ourres-container ourres-padding-64 ourres-blue-grey ourres-grayscale-min ourres-xlarge">
    <div class="ourres-content">
      <h1 class="ourres-center ourres-jumbo" style="margin-bottom:64px">Contact</h1>
      <p>Find us at some address at some place or call us at 05050515-122330</p>
      <p><span class="ourres-tag"></span> We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste.</p>
      <p class="ourres-xxlarge"><strong>Reserve</strong> a table, ask for today's special or just send us a message:</p>
      <form action="reservation.php" method="post">
        <p><input class="ourres-input ourres-padding-16 ourres-border" type="text" placeholder="Name" required name="Name" id="Name"></p>
        <p><input class="ourres-input ourres-padding-16 ourres-border" type="number" placeholder="How many people" required name="People" id="People"></p>
        <p><input class="ourres-input ourres-padding-16 ourres-border" type="datetime-local" placeholder="Date and time" required name="Date" value="2020-11-16 T20:00" id="Date"></p>
        <p><button class="ourres-button ourres-light-grey ourres-block" type="submit">Reserve</button></p>
      </form>
    </div>
  </div>

  <div class="ourres-container ourres-padding-64 ourres-blue-grey ourres-grayscale-min ourres-xlarge">
    <div class="ourres-content">
      <h2>Subscribe to Our Restaurant</h2>
    <p>Stay updated to our exiciting dishes</p>
    
    <form action="insert.php" method="post">
        <label for="Email">Email:</label>
        <input type="Email" id="Email" name="Email" required>
        
        <input type="submit" value="Subscribe">
    </form>
    </div>
  </div>

  <!--embdding a map-->

  
  <!-- Footer -->
  <footer class="ourres-center ourres-black ourres-padding-48 ourres-xxlarge">
      </footer>
  
  <script>
  // Tabbed Menu
  function openMenu(evt, menuName) {
    var i, x, tablinks;
    x = document.getElementsByClassName("menu");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
       tablinks[i].className = tablinks[i].className.replace(" ourres-red", "");
    }
    document.getElementById(menuName).style.display = "block";
    evt.currentTarget.firstElementChild.className += " ourres-red";
  }
  document.getElementById("myLink").click();
  </script>
  
  </body>
  </html>
