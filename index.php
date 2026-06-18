<?php

include("includes/data.php");

include("includes/header.php");

?>


<!-- Hero Section -->

<section class="hero" id="home">

<div class="container hero-content">


<div class="hero-text">

<h1>
Sustainable Tableware For A Better Tomorrow
</h1>


<p>
EcoWare Solutions provides premium biodegradable tableware
solutions for restaurants, wholesalers and eco-conscious brands.
</p>


<a href="#quote" class="btn">
Get Quote
</a>


</div>



<div class="hero-img">

<img src="assets/images/hero.jpg" alt="Eco Products">

</div>


</div>

</section>







<!-- Stats Section -->


<section class="stats">


<div class="container stats-box">


<div>

<h2>500+</h2>

<p>Business Clients</p>

</div>



<div>

<h2>10K+</h2>

<p>Orders Delivered</p>

</div>




<div>

<h2>20+</h2>

<p>Countries Served</p>

</div>




<div>

<h2>100%</h2>

<p>Eco Materials</p>

</div>



</div>


</section>









<!-- Features Section -->


<section class="features">


<div class="container">


<h2 class="section-title">
Why Choose EcoWare?
</h2>



<div class="feature-grid">



<div class="feature-card">

<i class="fa-solid fa-leaf"></i>

<h3>Eco Friendly</h3>

<p>
Made from natural biodegradable materials.
</p>

</div>




<div class="feature-card">

<i class="fa-solid fa-box"></i>

<h3>Bulk Supply</h3>

<p>
Large scale manufacturing support for businesses.
</p>

</div>





<div class="feature-card">

<i class="fa-solid fa-palette"></i>

<h3>Custom Branding</h3>

<p>
Personalized packaging and branding solutions.
</p>

</div>





<div class="feature-card">

<i class="fa-solid fa-earth"></i>

<h3>Global Export</h3>

<p>
Supplying sustainable products worldwide.
</p>

</div>



</div>


</div>


</section>









<!-- About Section -->


<section class="about" id="about">


<div class="container about-content">



<div>

<img src="assets/images/about.jpg" alt="About EcoWare">

</div>




<div>


<h2>
About EcoWare Solutions
</h2>


<p>

EcoWare Solutions focuses on replacing plastic tableware with
sustainable and biodegradable alternatives.

We help restaurants, wholesalers and brands move towards
environment friendly packaging.

</p>



<h3>
Our Mission
</h3>


<p>

Our mission is to provide reliable eco-friendly solutions
while supporting a cleaner planet.

</p>



</div>



</div>


</section>









<!-- Products Section -->


<section class="products" id="products">


<div class="container">


<h2 class="section-title">
Our Products
</h2>



<div class="product-grid">


<?php foreach($products as $product){ ?>


<div class="product-card">


<img 
src="assets/images/<?php echo $product['image']; ?>"
alt="<?php echo $product['name']; ?>">



<h3>

<?php echo $product['name']; ?>

</h3>



<p>

<?php echo $product['description']; ?>

</p>



</div>


<?php } ?>


</div>


</div>


</section>










<!-- Industries Section -->


<section class="industries">


<div class="container">


<h2 class="section-title">

Industries We Serve

</h2>



<div class="feature-grid">




<div class="feature-card">

<i class="fa-solid fa-utensils"></i>

<h3>Restaurants</h3>

<p>
Eco packaging solutions for restaurants.
</p>

</div>




<div class="feature-card">

<i class="fa-solid fa-hotel"></i>

<h3>Hotels</h3>

<p>
Sustainable solutions for hospitality brands.
</p>

</div>





<div class="feature-card">

<i class="fa-solid fa-store"></i>

<h3>Retail Brands</h3>

<p>
Custom products for retail businesses.
</p>

</div>





<div class="feature-card">

<i class="fa-solid fa-truck"></i>

<h3>Food Delivery</h3>

<p>
Durable packaging for delivery companies.
</p>

</div>



</div>


</div>


</section>









<!-- Work Process -->


<section class="process" id="process">


<div class="container">


<h2 class="section-title">

Our Work Process

</h2>



<div class="steps">


<div>
<span>1</span>
<p>Requirement Analysis</p>
</div>


<div>
<span>2</span>
<p>Customization</p>
</div>


<div>
<span>3</span>
<p>Manufacturing</p>
</div>


<div>
<span>4</span>
<p>Quality Check</p>
</div>


<div>
<span>5</span>
<p>Delivery</p>
</div>


</div>


</div>


</section>










<!-- Quality Standards -->


<section class="certificates">


<div class="container">


<h2 class="section-title">

Quality Standards

</h2>




<div class="certificate-box">




<div class="certificate-card">

<i class="fa-solid fa-seedling"></i>

<h3>
Biodegradable Certified
</h3>

<p>
Manufactured using compostable materials.
</p>

</div>





<div class="certificate-card">

<i class="fa-solid fa-utensils"></i>

<h3>
Food Safe Materials
</h3>

<p>
Safe materials suitable for food packaging.
</p>

</div>






<div class="certificate-card">

<i class="fa-solid fa-recycle"></i>

<h3>
Plastic Free Products
</h3>

<p>
Reducing plastic usage through sustainable solutions.
</p>

</div>






<div class="certificate-card">

<i class="fa-solid fa-circle-check"></i>

<h3>
Quality Tested
</h3>

<p>
Products pass quality checks before delivery.
</p>

</div>




</div>


</div>


</section>










<!-- Reviews -->


<section class="reviews">


<div class="container">


<h2 class="section-title">

Customer Reviews

</h2>



<div class="review-grid">


<?php foreach($reviews as $review){ ?>


<div class="review-card">


<p>

"<?php echo $review['text']; ?>"

</p>


<h4>

- <?php echo $review['name']; ?>

</h4>


</div>


<?php } ?>



</div>


</div>


</section>









<!-- Contact Form -->


<section class="contact-form" id="quote">


<div class="container">


<h2 class="section-title">

Request A Quote

</h2>




<form>


<input 
type="text"
placeholder="Your Name">


<input 
type="email"
placeholder="Email Address">


<textarea placeholder="Enter your business requirement"></textarea>


<button>

Submit Inquiry

</button>



</form>


</div>


</section>







<?php

include("includes/footer.php");

?>