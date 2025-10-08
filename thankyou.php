<?php session_start(); // Start the session
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

// Check if the form has been submitted
if (!isset($_SESSION['form_submitted']) && $_SESSION['form_submitted'] !== true) {
    header("Location:index.php");
    exit(); 
}


?>

<?php

$page_title = "Thank You | Ashtech Projects in Greater Noida";
$page_description = "Welcome to our thabnkyou page";
$page_keywords = "home, landing page, business";
$page_css = "thankyou";

ob_start();

?>

<body>
    <main>
        <div class="container">
            <div class="thankyou-card">
                <h1>Thank You, <span class="highlight"><?php echo ucfirst($_SESSION['name']); ?></span>!</h1>
                <p>
                    Your query has been received. Our real estate team will get back to
                    you shortly with the best assistance.
                </p>
                <a href="/" class="back-btn"><i class="fa-solid fa-arrow-left"></i> Back to Home</a>
            </div>
        </div>



    </main>

</body>

</html>
<?php

$content = ob_get_clean();
include __DIR__ . '/master.php';
unset($_SESSION['form_submitted']);
?>
<script>
    function goHome(event) {
        event.preventDefault(); // Prevent default anchor behavior
        window.location.replace("index.php"); // Replace history entry
    }


    history.pushState(null, null, window.location.href);
    window.onpopstate = function() {
        window.location.replace("index.php");
    };
</script>

<script>
    function goHome(event) {
        event.preventDefault(); // Prevent default anchor behavior
        window.location.replace("index.php"); // Replace history entry
    }


    history.pushState(null, null, window.location.href);
    window.onpopstate = function() {
        window.location.replace("index.php");
    };
</script>
