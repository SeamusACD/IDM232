<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

<header>
  <div class="logo">
    <img src="images/logo.png" alt="">
  </div>
  <nav class="nav">
    <li>HOME</li>
    <li>ABOUT</li>
    <li>CONTACT</li>
    <li class="selected">SHOP</li>
  </nav>

  <picture>
      <source media="(min-width: 768px)" srcset="images/gg-b.jpg">
      <source media="(min-width: 500px)" srcset="images/gg-m.jpg">
          <img class="banner-img" src="images/gg.jpg" alt="Models on green background">
  </picture>

</header>

  <div class="categories">
    <ul>
      <li class="selected">All</li>
      <li>Denim</li>
      <li>Raincoats</li>
      <li>Jackets</li>
    </ul>
  </div>



  <?php
  				$query = 'SELECT * ';
  				$query .= 'FROM items ';
  				$query .= 'ORDER BY id ASC';

  				$result = mysqli_query($connection, $query);

  				if (!$result) {
  					die('Database query fail.');
  				}

  				while ($items = mysqli_fetch_assoc($result)) {
  					if ($items['courseVisible'] == 1) {
  				?>

        <div id="items">
              <figure>
                <img src="<?php echo $items['itemImg'];?>" alt="<?php echo $items ['imageTitle'];?>">
                <ul>
                  <li class="name">Denim Washed<?php echo $items['itemTitle']; ?></li>
                  <li class="cost">$40.00<?php echo $items['itemCost']; ?></li>
                  <li class="cart">Add to Cart</li>
                </ul>
              </figure>
        </div>
  				<div>

  				<?php
          		  } // end if
         			 } // end while
               mysqli_free_result($result);?>
  			  </div>


<footer>
  <ul>
    <li><a href="https://www.facebook.com/nufro/?fref=mentions&pnref=story"><img class="icon" src="images/fb.png" alt="facebook icon"></a></li>
    <li><img src="images/line.png" alt="line"></li>
    <li><a href="https://www.instagram.com/nufro/"><img class="icon" src="images/ig.png" alt="instagram icon"></a></li>
  </ul>
</footer>

  </body>
</html>
