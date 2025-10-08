<?php
// Page meta
$page_title = "Terms of Use | Ashtech Sector 12";
$page_description = "Terms of Use for Ashtech Sector 12 website, covering acceptable use, IP rights, liability, governing law, and contact.";
$page_keywords = "Ashtech Sector 12 terms, terms of use, website terms, disclaimer";

// Page content
ob_start();
?>
<section class="breadcrumb py-3">
    <div class="container">
        <ul class="breadcrumb-list">
            <li><a href="/">Home</a></li>
            <li><a href="/terms-of-use">Terms of Use</a></li>
        </ul>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <h1 class="mb-3">Terms of Use – Ashtech Sector 12</h1>
        <p class="text-muted mb-4">Last Updated: <?php echo date('F j, Y'); ?></p>

        <p>
            Welcome to <strong>Ashtech Sector 12</strong>. By accessing and using our website 
            <a href="https://ashtechprojects.in" rel="noopener" target="_blank">ashtechprojects.in</a>, 
            you agree to comply with and be bound by these Terms of Use. Please read them carefully before using this site.
        </p>

        <hr>

        <h3 class="mt-4">1. Acceptance of Terms</h3>
        <p>
            By visiting or using this website, you agree to these Terms of Use, our 
            <a href="">Privacy Policy</a>, and any other applicable policies. 
            If you do not agree, please refrain from using this website.
        </p>

        <h3 class="mt-4">2. Use of Website</h3>
        <p>This website is intended for informational purposes regarding our real estate projects, services, and updates. You agree not to misuse the website for unlawful purposes, including but not limited to:</p>
        <ul>
            <li>Uploading harmful content (viruses, malware, etc.)</li>
            <li>Misrepresenting your identity or providing false information</li>
            <li>Attempting to gain unauthorized access to our systems or data</li>
        </ul>

        <h3 class="mt-4">3. Intellectual Property Rights</h3>
        <p>All content on this website, including text, images, designs, graphics, videos, logos, trademarks, and other materials, is the property of Ashtech Sector 12 or its licensors. You may not reproduce, distribute, or modify any content without prior written consent.</p>

        <h3 class="mt-4">4. Information Accuracy</h3>
        <p>While we make every effort to provide accurate and updated information, project details, pricing, specifications, and availability on this website are subject to change without prior notice. The content does not constitute legal, financial, or professional advice. Users are encouraged to verify details before making decisions.</p>

        <h3 class="mt-4">5. Third-Party Links</h3>
        <p>Our website may contain links to third-party websites. These links are provided for convenience, and we are not responsible for the content, accuracy, or practices of such sites.</p>

        <h3 class="mt-4">6. Limitation of Liability</h3>
        <p>Ashtech Sector 12 is not liable for any direct, indirect, incidental, or consequential damages arising from your use of this website. We do not guarantee that the website will be free from errors, interruptions, or viruses.</p>

        <h3 class="mt-4">7. User Submissions</h3>
        <p>By submitting inquiries, feedback, or personal details, you grant us the right to use the information for responding to requests and improving services. You are responsible for ensuring that the information you provide is accurate and lawful.</p>

        <h3 class="mt-4">8. Governing Law & Jurisdiction</h3>
        <p>These Terms of Use are governed by the laws of India. Any disputes shall fall under the exclusive jurisdiction of courts in <strong>Noida, Uttar Pradesh</strong>.</p>

        <h3 class="mt-4">9. Changes to Terms</h3>
        <p>We may update these Terms of Use at any time without prior notice. Continued use of the website after updates signifies your acceptance of the revised terms.</p>

        <h3 class="mt-4">10. Contact Us</h3>
        <p>For any questions or concerns about these Terms of Use, please contact us:</p>
        <ul class="list-unstyled">
            <li>📧 Email: <a href="mailto:Tanmaywhr@gmail.com">Tanmaywhr@gmail.com</a></li>
            <li>📞 Phone: <a href="tel:+91 9958555128">+91  9958555128</a></li>
            <li>🏢 Address: Ashtech Sector 12, Greater Noida West, Uttar Pradesh</li>
        </ul>

        <p class="small text-muted">If you are contacting us on behalf of another person, please ensure you have the authority to do so.</p>
    </div>
</section>

<?php
$content = ob_get_clean();
include __DIR__.'/master.php';