<!DOCTYPE html>
<html>
<head>
<title>Contact Us - Flow Werk</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<header>

<div class="logo">
FLOW WERK
</div>

<nav>
<a href="index.php">Home</a>
<a href="products.php">Products</a>
<a href="about.php">About</a>
<a href="contact.php">Contact</a>
</nav>

</header>

<section class="hero">

<h1>Contact Us</h1>

<p>
Get in touch for quotations and product inquiries
</p>

</section>

<div style="max-width:700px;margin:40px auto;padding:20px;background:#fff;">

<form action="save_inquiry.php" method="post">

<label>Name</label><br>
<input type="text" name="name" required
style="width:100%;padding:10px;"><br><br>

<label>Email</label><br>
<input type="email" name="email" required
style="width:100%;padding:10px;"><br><br>

<label>Phone</label><br>
<input type="text" name="phone"
style="width:100%;padding:10px;"><br><br>

<label>Product Required</label><br>
<input type="text" name="product"
style="width:100%;padding:10px;"><br><br>

<label>Message</label><br>
<textarea name="message"
style="width:100%;height:120px;padding:10px;"></textarea><br><br>

<button type="submit" class="btn">
Send Inquiry
</button>

</form>

</div>

<footer>

<p>
© 2026 Flow Werk Industrial Solutions
</p>

</footer>

</body>
</html>