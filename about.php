<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Us | FLOW WERK</title>

<style>
body{
    margin:0;
    font-family:Segoe UI, sans-serif;
    background:#f5f7fa;
    color:#333;
}

.hero{
    background:linear-gradient(135deg,#0d3b66,#145ea8);
    color:white;
    text-align:center;
    padding:80px 20px;
}

.hero h1{
    font-size:48px;
    margin-bottom:10px;
}

.container{
    width:90%;
    max-width:1200px;
    margin:auto;
    padding:60px 0;
}

.section{
    background:#fff;
    padding:40px;
    border-radius:15px;
    margin-bottom:30px;
    box-shadow:0 5px 20px rgba(0,0,0,.08);
}

.section h2{
    color:#0d3b66;
    margin-bottom:20px;
}

.features{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:20px;
}

.feature-box{
    background:#fff;
    padding:25px;
    border-radius:12px;
    text-align:center;
    box-shadow:0 5px 15px rgba(0,0,0,.08);
}

.feature-box h3{
    color:#ff7a00;
}

.cta{
    background:#0d3b66;
    color:white;
    text-align:center;
    padding:50px 20px;
    border-radius:15px;
}

.cta a{
    display:inline-block;
    margin-top:15px;
    padding:12px 25px;
    background:#ff7a00;
    color:white;
    text-decoration:none;
    border-radius:30px;
    font-weight:bold;
}

footer{
    background:#0d3b66;
    color:white;
    text-align:center;
    padding:20px;
}
</style>
</head>

<body>

<section class="hero">
    <h1>About FLOW WERK</h1>
    <p>Your Trusted Industrial Solutions Partner</p>
</section>

<div class="container">

    <div class="section">
        <h2>Who We Are</h2>

        <p>
            FLOW WERK is a trusted supplier of industrial products,
            specializing in Hydraulics, Pneumatics, Fasteners,
            Pipe Supports, Gaskets, and Industrial Components.
        </p>

        <p>
            We serve manufacturing industries, infrastructure projects,
            engineering contractors, and maintenance teams by providing
            high-quality products that deliver reliability, durability,
            and performance.
        </p>

        <p>
            Our goal is simple: provide the right product, at the right
            quality, delivered on time, every time.
        </p>
    </div>

    <div class="section">
        <h2>Our Mission</h2>

        <p>
            To become a preferred industrial solutions provider by
            delivering superior products, dependable service, and
            long-term value to our customers.
        </p>
    </div>

    <div class="section">
        <h2>Why Customers Choose FLOW WERK</h2>

        <div class="features">

            <div class="feature-box">
                <h3>Premium Quality</h3>
                <p>
                    Carefully sourced products that meet industry
                    standards and customer expectations.
                </p>
            </div>

            <div class="feature-box">
                <h3>Reliable Supply</h3>
                <p>
                    Consistent inventory and dependable delivery
                    schedules.
                </p>
            </div>

            <div class="feature-box">
                <h3>Technical Support</h3>
                <p>
                    Expert assistance in selecting the right industrial
                    products for your applications.
                </p>
            </div>

            <div class="feature-box">
                <h3>Customer Focused</h3>
                <p>
                    Building lasting relationships through service,
                    transparency, and trust.
                </p>
            </div>

        </div>
    </div>

    <div class="section">
        <h2>Our Product Range</h2>

        <ul>
            <li>Hydraulic Components</li>
            <li>Pneumatic Components</li>
            <li>Industrial Fasteners</li>
            <li>Pipe Supports & Clamps</li>
            <li>U-Bolts & Clevis Hangers</li>
            <li>Beam Clamps</li>
            <li>PTFE Gaskets</li>
            <li>EPDM Gaskets</li>
            <li>Industrial Supplies</li>
        </ul>
    </div>

    <div class="cta">
        <h2>Looking for Industrial Solutions?</h2>

        <p>
            Our team is ready to help you find the right products
            for your project requirements.
        </p>

        <a href="contact.php">Request a Quote</a>
    </div>

</div>

<footer>
    © <?php echo date('Y'); ?> FLOW WERK. All Rights Reserved.
</footer>

<script>
document.querySelectorAll('a[href="#about"]').forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();

        document.getElementById('about').scrollIntoView({
            behavior: 'smooth'
        });
    });
});
</script>
</body>
</html>