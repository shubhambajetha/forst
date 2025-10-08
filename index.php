<?php
$page_title = "";
$page_description = "";
$page_keywords = "";
$page_css = "home";
$page_js  = "home";
ob_start();
?>
<!-- OVERVIEW -SECTION -->
<section id="overview">

    <div class="section-header">
        <div class="section-subtitle">
            Project Overview
        </div>
        <h2 class="section-title">Ashtech</h2>
        <p class="section-description">
            Landmark Luxury Residences in Sector 12, Greater Noida West.
        </p>
    </div>

    <div class="row">
        <!-- first part overview -->
        <div class="col-md-6">

        </div>
        <!-- second part overview -->
         <div class="col-md-6 col-sm-12 pt-3">
                <div class="row p-0 g-3">
                    <div class="col-6 col-sm-6">
                        <div class="image-hover-wrapper">
                            <img src="assets/img/3.jpg" class="img-fluid rounded w-100 image-hover-effect" alt="img1" />

                        </div>
                    </div>
                    <div class="col-6 col-sm-6">
                        <div class="image-hover-wrapper">
                            <img src="assets/img/8.jpg" class="img-fluid rounded w-100 image-hover-effect" alt="img2" />
                        </div>
                    </div>
                    <!-- Bottom full-width image -->
                    <div class="col-12">
                        <div class="image-hover-wrapper">
                            <img src="assets/img/9.jpg" class="img-fluid rounded w-100 image-hover-effect" alt="img3" />
                        </div>
                    </div>
                </div>
            
         </div>
    </div>
</section>

<?php
$content = ob_get_clean();
include __DIR__ . '/master.php';
    
    ?>