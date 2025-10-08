<?php
$page_title = $page_title ?? "My Website";
$page_description = $page_description ?? "Default website description";
$page_keywords = $page_keywords ?? "default, keywords";
$page_css = $page_css ?? "";
$page_js = $page_js ?? "";
?>
<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/inc/head.php'; ?>
<body>
    <?php include __DIR__ . '/inc/header.php'; ?>
    <main>
        <?php echo $content ?? ''; ?>
    </main>
    <!-- Modal -->
    <div class="modal fade" id="brochureModal" tabindex="-1" aria-labelledby="brochureModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg px-lg-5">
            <div class="modal-content animate-modal">
                <button type="button" class="btn-close modal-closer text-dark" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                <div class="modal-body ">
                    <div class="d-flex">
                        <div class="col-lg-6 col-md-6 col-sm-12 modal-imgs"></div>
                        <div class="col-lg-6 col-md-6 col-sm-12 text-center ">
                            <h5 class="modal-heading">Astech Group</h5>
                            <span class="modal-subheading">Sector 12, Greater Noida West</span><br />
                            <span class="modal-subheading my-5">Get Your Copy Of Our Brochure In 1 Minute!</span>
                            <?php $btn_text = 'Get Brochure  <i class="fa-solid fa-download"></i>'; include 'templates/contact-form.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="https://wa.me/+918447970469?text=Hi%20I%20want%20to%20know%20more%20about%20ashtech%20upcoming%20projects" class="wa-float"
        target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
        <i class="fa-brands fa-whatsapp"></i>
    </a>
    <?php include __DIR__ . '/inc/footer.php'; ?>
</body>

</html>