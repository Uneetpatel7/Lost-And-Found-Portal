<?php 

/* Main page with two forms: sign up and log in */

$host = 'localhost';

$user = 'user0';

$pass = 'csl203lab';

$db = 'lab';

$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);



session_start();

?>



<html>

<head>

   <title> Lost Item Form </title>

   <link rel="stylesheet" type="text/css" href="style_lost.css" />



   <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">

    

   <script   src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>

   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/css/bootstrap-datepicker3.min.css">

    <script>

    $( document ).ready(function() {

        $("#from-datepicker").datepicker({ 

            format: 'yyyy-mm-dd'

        });

        $("#from-datepicker").on("change", function () {

            var fromdate = $(this).val();

            alert(fromdate);

        });

    });  



      function populate1(s1,s2) {

        var s1 = document.getElementById(s1);

        var s2 = document.getElementById(s2);

        s2.innerHTML = "";

        if(s1.value == "Electronics") {

          var optionArray = ["|", "Camera|Camera", "Cellular Phone|Cellular Phone","Laptop Adapters|Laptop Adapters","Computers/Tablets|Computers/Tablets","Video Game Systems|Video Game Systems","Pendrive|Pendrive","External Hard Drive|External Hard Drive","Mobile Adapters|Mobile Adapters","Calculator|Calculator","Wrist Watch|Wrist Watch","Powerbank|Powerbank","Earphones/Headphones|Earphones/Headphones"];

        }

        else if(s1.value == "Clothing") {

          var optionArray = ["|", "Shirt/T-shirt|Shirt/T-shirt", "Undergarment|Undergarment","Jeans/Pants|Jeans/Pants","Hat|Hat","Shoes|Shoes","Assorted Cloth|Assorted Cloth","Socks|Socks","Sweater/Sweatshirt|Sweater/Sweatshirt","Blazzer/Suit|Blazzer/Suit"]; 

        }

	else if(s1.value == "Literature") {

	  var optionArray = ["|", "Library Books|Library Books", "Notebooks|Notebooks", "Correspondence|Correspondence", "Diaries|Diaries", "Letters|Letters", "Yearbooks|Yearbooks", "Magazines|Magazines"];

	}

	else if(s1.value == "Musical Instrument") {

	  var optionArray = ["|", "Guitar|Guitar", "Flute|Flute", "Drums|Drums"];

	}

	else if(s1.value == "Personal Accessories") {

	  var optionArray = ["|", "Credit/Debit Cards|Credit/Debit Cards", "Money|Money", "ID Cards/Licenses/Passports|ID cards/Licenses/Passports", "Wallet|Wallet", "Spectacles/Sunglasses|Spectacles/Sunglasses", "Bracelet|Bracelet", "Chains/Necklaces|Chains/Necklaces"];

	}

	else if(s1.value == "Sporting Goods") {

	  var optionArray = ["|", "Shoes|Shoes", "Socks|Socks", "Balls|Balls", "Bat|Bat", "Jersey|Jersey", "Racket|Racket"];

	}

        for(var option in optionArray) {

          var pair = optionArray[option].split("|");

          var newOption = document.createElement("option");

          newOption.value = pair[0];

          newOption.innerHTML = pair[1];

          s2.options.add(newOption);

        }

      }



      function populate2(s1,s2,s3) {

        var s1 = document.getElementById(s1);

        var s2 = document.getElementById(s2);

        var s3 = document.getElementById(s3);

        s3.innerHTML = "";

        if(s1.value == "Electronics") {

          if(s2.value == "Camera") {

            var optionArray = ["|", "Nikon|Nikon","Canon|Canon","Sony|Sony","Samsung|Samsung","Panasonic|Panasonic","Kodak|Kodak","JVC|JVC","Hitachi|Hitachi","Olympus|Olympus","Others|Others"];

          }

        }

	if(s1.value == "Electronics") {

          if(s2.value == "Cellular Phone") {

            var optionArray = ["|", "Nokia|Nokia","Microsoft|Microsoft","Sony|Sony","Samsung|Samsung","iPhone|iPhone","HTC|HTC","Mi|Mi","Lenovo|Lenovo","Micromax|Micromax","Others|Others"];

          }

        }

	if(s1.value == "Electronics") {

          if(s2.value == "Laptop Adapters") {

            var optionArray = ["|", "HP|HP","Lenovo|Lenovo","MAC|MAC","Dell|Dell","Asus|Asus","Others|Others"];

          }

        }

	if(s1.value == "Electronics") {

          if(s2.value == "Computers/Tablets") {

            var optionArray = ["|", "HP|HP","Lenovo|Lenovo","MAC|MAC","Dell|Dell","Asus|Asus","Sony|Sony","Samsung|Samsung","Others|Others"];

          }

        }

	if(s1.value == "Electronics") {

          if(s2.value == "Video Game Systems") {

            var optionArray = ["|", "Xbox|Xbox","Playstation|Playstation","Sega|Sega","Nintendo|Nintendo","Mitashi|Mitashi","Others|Others"];

          }

        }

	if(s1.value == "Electronics") {

          if(s2.value == "Pendrive") {

            var optionArray = ["|", "Transcend|Transcend","San Disk|San Disk","Sony|Sony","HP|HP","Kingston|Kingston","Others|Others"];

          }

        }

	if(s1.value == "Electronics") {

          if(s2.value == "External Hard Drive") {

            var optionArray = ["|", "Seagate|Seagate","Lenovo|Lenovo","Transcend|Transcend","WP|WP","Samsung|Samsung","Others|Others"];

          }

        }

	if(s1.value == "Electronics") {

          if(s2.value == "Mobile Adapters") {

            var optionArray = ["|", "Nokia|Nokia","Microsoft|Microsoft","Sony|Sony","Samsung|Samsung","iPhone|iPhone","HTC|HTC","Mi|Mi","Lenovo|Lenovo","Micromax|Micromax","Others|Others"];

          }

        }

	if(s1.value == "Electronics") {

          if(s2.value == "Calculator") {

            var optionArray = ["|", "Casio|Casio","Texas Instruments|Texas Instruments","Others|Others"];

          }

        }

	if(s1.value == "Electronics") {

          if(s2.value == "Wrist Watch") {

            var optionArray = ["|", "Titan|Titan","Fasttrack|Fasttrack","Omega|Omega","Rolex|Rolex","Timex|Timex","Tommy Hilfiger|Tommy Hilfiger","Casio|Casio","Others|Others"];

          }

        }

	if(s1.value == "Electronics") {

          if(s2.value == "Powerbank") {

            var optionArray = ["|", "Ambrane|Ambrane","Sony|Sony","Samsung|Samsung","Adata|Adata","Intex|Intex","Mi|Mi","Lenovo|Lenovo","Asus|Asus","Others|Others"];

          }

        }

	if(s1.value == "Electronics") {

          if(s2.value == "Earphones/Headphones") {

            var optionArray = ["|", "Motorola|Motorola","JBL|JBL","Sony|Sony","Samsung|Samsung","iPhone|iPhone","Sennheiser|Sennheiser","Bose|Bose","Skull Candy|Skull candy","iBall|iBall","Zebronics|Zebronics","Panasonic|Panasonic","Philips|Philips","beats|beats"];

          }

        }

	if(s1.value == "Clothing") {

          if(s2.value == "Shirt/T-shirt") {

            var optionArray = ["|", "Adidas|Adidas","Nike|Nike","Puma|Puma","Reebok|Reebok","Tommy Hilfiger|Tommy Hilfiger","Louis Philippe|Louis Philippe","Calvin Klein|Calvin Klein","Allen Solly|Allen Solly","John Players|John Players","Peter England|Peter England","Others|Others"];

          }

        }

	if(s1.value == "Clothing") {

          if(s2.value == "Undergarment") {

            var optionArray = ["|", "Jockey|Jockey","Lux|Lux","Dollar Club|Dollar Club","Rupa|Rupa","Tommy Hilfiger|Tommy Hilfiger","Calvin Klein|Calvin Klein","Chromosome|Chromosome","John Players|John Players","Others|Others"];

          }

        }

	if(s1.value == "Clothing") {

          if(s2.value == "Jeans/Pants") {

            var optionArray = ["|", "Levi's|Levi's","Lee|Lee","Spyker|Spyker","Pepe Jeans|Pepe Jeans","Wrangler|Wrangler","Armani|Armani","Denizen|Denizen","Flying Machine|Flying Machine","Diesel|Diesel","Turtle|Turtle","Park Avenue|Park Avenue","Allen Solly|Allen Solly","Raymonds|Raymonds","Others|Others"];

          }

        }

	if(s1.value == "Clothing") {

          if(s2.value == "Shoes") {

            var optionArray = ["|", "Adidas|Adidas","Nike|Nike","Puma|Puma","Reebok|Reebok","Woodlands|Woodlands","Bata|Bata","Power|Power","Action|Action","Pro|Pro","Converse|Converse","Others|Others"];

          }

        }

	if(s1.value == "Clothing") {

          if(s2.value == "Assorted Cloth") {

            var optionArray = ["|", "Raymonds|Raymonds","Grasim|Grasim","Bombey Textiles|Bombey Textiles","Alok|Alok","Wellspun India|Wellspun India","Garden Silk|Garden Silk","Others|Others"];

          }

        }

	if(s1.value == "Clothing") {

          if(s2.value == "Socks") {

            var optionArray = ["|", "Nike|Nike","Adidas|Adidas","Puma|Puma","Reebok|Reebok","Others|Others"];

          }

        }

	if(s1.value == "Clothing") {

          if(s2.value == "Sweater/Sweatshirt") {

            var optionArray = ["|", "Adidas|Adidas","Nike|Nike","Puma|Puma","Reebok|Reebok","Tommy Hilfiger|Tommy Hilfiger","Monte carlo|Monte Carlo","Calvin Klein|Calvin Klein","Allen Solly|Allen Solly","Peter England|Peter England","Others|Others"];

          }

        }

	if(s1.value == "Clothing") {

          if(s2.value == "Blazzer/Suit") {

            var optionArray = ["|", "MR Button|MR Button","Blackberry|Blackberry","SUITLTD|SUITLTD","Jack & Jones|Jack & Jones","Even|Even","Arrow|Arrow","Invictus|Invictus","Others|Others"];

          }

        }

	if(s1.value == "Clothing") {

          if(s2.value == "Hat") {

            var optionArray = ["|", "Bailey|Bailey","Goorin|Goorin","Others|Others"];

          }

        }


	if(s1.value == "Musical Instrument") {

          if(s2.value == "Guitar") {

            var optionArray = ["|", "Givson|Givson","Juarez|Juarez","Yamaha|Yamaha","Cort|Cort","Pluto|Pluto","Others|Others"];

          }

        }

	if(s1.value == "Musical Instrument") {

          if(s2.value == "Flute") {

            var optionArray = ["|", "Ponam|Ponam","Shalin|Shalin","Others|Others"];

          }

        }

	if(s1.value == "Musical Instrument") {

          if(s2.value == "Drums") {

            var optionArray = ["|", "Mapex|Mapex","Pearl|Pearl","Tama|Tama","KAT|KAT","Roland|Roland","Others|Others"];

          }

        }

	if(s1.value == "Personal Accessories") {

          if(s2.value == "Spectacles/Sunglasses") {

            var optionArray = ["|", "Ray-Ban|Ray-Ban","Oakley|Oakley","Giorgio Armani|Giorgio Armani","Vogue|Vogue","Tommy Hilfiger|Tommy Hilfiger","Prada|Prada","Burberry|Burberry","Gucci|Gucci","Others|Others"];

          }

        }

	if(s1.value == "Sporting Goods") {

          if(s2.value == "Shoes") {

            var optionArray = ["|", "Adidas|Adidas","Nike|Nike","Puma|Puma","Reebok|Reebok","Lotto|Lotto","Nivea|Nivea","Others|Others"];

          }

        }

	if(s1.value == "Sporting Goods") {

          if(s2.value == "Socks") {

            var optionArray = ["|", "Adidas|Adidas","Nike|Nike","Puma|Puma","Reebok|Reebok","Lotto|Lotto","Nivea|Nivea","Others|Others"];

          }

        }

	if(s1.value == "Sporting Goods") {

          if(s2.value == "Balls") {

            var optionArray = ["|", "Adidas|Adidas","Nike|Nike","Puma|Puma","Reebok|Reebok","Lotto|Lotto","Nivia|Nivia","SG|SG","Kookaburra|Kookaburra","Spalding|Spalding","Cosco|Cosco","Stiga|Stiga","Donic|Donic","Stag|Stag","Others|Others"];

          }

        }

	if(s1.value == "Sporting Goods") {

          if(s2.value == "Bat") {

            var optionArray = ["|", "SG|SG","Adidas|Adidas","Nike|Nike","Puma|Puma","Reebok|Reebok","Kookaburra|Kookaburra","Gray Nicholls|Gray Nicholls","GM|GM","Others|Others"];

          }

        }

	if(s1.value == "Sporting Goods") {

          if(s2.value == "Jersey") {

            var optionArray = ["|", "Adidas|Adidas","Nike|Nike","Puma|Puma","Reebok|Reebok","Lotto|Lotto","Shivnaresh|Shivnaresh","Others|Others"];

          }

        }

	if(s1.value == "Sporting Goods") {

          if(s2.value == "Racket") {

            var optionArray = ["|", "Yonex|Yonex","Ashaway|Ashaway","Li Ning|Li Ning","Wilson|Wilson","Cosco|Cosco","Others|Others"];

          }

        }

        for(var option in optionArray) {

          var pair = optionArray[option].split("|");

          var newOption = document.createElement("option");

          newOption.value = pair[0];

          newOption.innerHTML = pair[1];

          s3.options.add(newOption);

        }

      }



    </script>



</head>



<?php 



if ($_SERVER['REQUEST_METHOD'] == 'POST') 

{

     require 'mail_lost.php';        

}



?>



<body>  

  <form action="mail_lost.php" method="post">

  <h1 id="lost">Report a Lost Item

        <span id="lost_span">All the fields marked with * are mandatory.</span>

  </h1>

  <label>

     <span>Name* :</span>

     <input type="text" name="name" required><br>

  </label>

  <label>

     <span>Entry Number* :</span>

     <input type="text" name="entnum" required><br>

  </label>

  <label>

     <span>E-mail* (Same as Login E-mail) :</span>

     <input type="email" name="email" required><br>

  </label>

  <label>

     <span>Date Item was Lost* : &nbsp; </span>

     <br>

     <input type ="text" id="from-datepicker" name="date" required><br>

  </label>



  <label>

     <span>Last Seen Location* : &nbsp; </span>

     <br>

     <select id="loc" name="loc" required>

      <option value=""> </option>

      <option value="Main Cafeteria">Main Cafeteria </option>

      <option value="Mercury Hostel Cafeteria">Mercury Hostel Cafeteria </option>

      <option value="Neptune Hostel">Neptune Hostel </option>

      <option value="Jupiter Hostel">Jupiter Hostel </option>

      <option value="Venus Hostel">Venus Hostel</option>

      <option value="Mecury Hostel">Mercury Hostel </option>

      <option value="Research and Computer Labs">Research and Computer Labs </option>

      <option value="Lecture or Conference Halls">Lecture or Conference Halls </option>

      <option value="Playground or SAC Area">Playground or SAC Area </option>

      <option value="Administrative Block">Administrative Block </option>

      <option value="Library">Library </option>

      <option value="Others">Others</option>

    </select>

  </label>

  <label> 

  <label>

     <span>Specific Location Description :</span>

     <textarea class="input" rows="10" cols="10" name="loc_descp"></textarea>

  </label>

  <label>

     <span>Category* : &nbsp; </span>

     <br>

     <select id="cat" name="cat" onchange="populate1(this.id,'sub_cat')" required>

      <option value=""> </option>

      <option value="Clothing">Clothing </option>

      <option value="Literature">Literature</option>

      <option value="Electronics">Electronics </option>

      <option value="Musical Instrument">Musical Instrument</option>

      <option value="Personal Accessories">Personal Accessories</option>

      <option value="Sporting Goods">Sporting Goods</option>

    </select>

  </label>

  <label> 

     <span>Sub-Cateogry* : &nbsp; </span>

     <br>

     <select id="sub_cat" name="sub_cat" onchange="populate2('cat',this.id,'brand')" required>

     </select>

  </label>

  <label> 

     <span>Brand : &nbsp; </span>

     <br>

     <select id="brand" name="brand">

     </select>

  </label>

  <label>

     <span>Model :</span>

     <input type="text" name="model"><br>

  </label>

  <label>

     <span>Brief Description :</span>

     <textarea class="input" rows="10" cols="10" name="item_descp"></textarea>

  </label>

  <label>

     <span>Color* : &nbsp; </span>

     <br>

     <select id="color" name="color" required>

      <option value=""> </option>

      <option value="Red">Red </option>

      <option value="Yellow">Yellow </option>

      <option value="Green">Green </option>

      <option value="Blue">Blue </option>

      <option value="Orange">Orange </option>

      <option value="Brown">Brown </option>

      <option value="Violet">Violet </option>

      <option value="Pink">Pink </option>

      <option value="Black">Black </option>

      <option value="Grey">Grey </option>

      <option value="White">White </option>

      <option value="Others">Others </option>

    </select>

  </label>

    

  <br>

  <input type="submit" name = "submit" value="SUBMIT">

  </form> 



</body>

</html>
