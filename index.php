<?php
$page_title = "3,4 BHK Apartment in Greater Noida West ! Ashtech Presidential Towers";
$page_description = "Premium 3 & 4 BHK Apartments in Greater Noida West with Rare Lifestyle Features";
$page_keywords = "";
$page_css = "home";
$page_js  = "home";
ob_start();
?>
<section id="carousel-section">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./assets/img/1.jpg" class="d-block w-100" alt="Premium Apartments">
                <div class="carousel-caption">
                    <h1>Premium 3,4 BHK Apartments</h1>
                    <p>Spacious residences from 2,000–3,400 sq.ft with wrap-around balconies.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/img/2.jpg" class="d-block w-100" alt="Luxury Interiors">
                <div class="carousel-caption">
                    <h1>Luxury at Every Level</h1>
                    <p>11 ft ceiling height, Italian marble interiors, and modular kitchens.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/img/4.jpg" class="d-block w-100" alt="Reliable Developer">
                <div class="carousel-caption">
                    <h1>Reliable Developer - Ashtech Infra</h1>
                    <p>Backed by proven expertise, financial discipline, and timely delivery.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!-- <section id="highlight-section">
    <div class="highlight-section">
        <div class="highlight-text">
            ::before
            <h1>HIGHLIGHTS</h1>
            ::after
            <div class="short-text">
                <P>Discover Best facilites by Astech</P>
            </div>
            
        </div>

    </div> -->


</section>
<?php
$content = ob_get_clean();
include __DIR__ . '/master.php';
