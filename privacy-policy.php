<?php
// Page meta
$page_title = "Privacy Policy | Ashtech Sector 12";
$page_description = "Privacy Policy for Ashtech Sector 12, outlining data collection, usage, cookies, data sharing, security, and user rights as per Indian laws.";
$page_keywords = "Ashtech Sector 12 privacy policy, data protection, cookies, user rights, India IT Act";
$page_css = "privacy-policy";
// Page content
ob_start();
?>
    <section class="breadcrumb py-3">
        <div class="container">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/privacy-policy">Privac-policy</a></li>
            </ul>
        </div>
    </section>
	<section class="py-5 privacy-page">
        <div class="container privacy-container">
            <h1 class="mb-3 privacy-title">Privacy Policy</h1>
            <p class="text-muted mb-4 privacy-subtitle">Last Updated: <?php echo date('F j, Y'); ?></p>
            <p class="privacy-text">Welcome to <span class="privacy-highlight">Ashtech Sector 12</span>. Your privacy is important to us. This Privacy Policy outlines how we collect, use, share, and protect your personal information when you interact with our website <a href="https://ashtechprojects.in" class="privacy-link" rel="noopener" target="_blank">ashtechprojects.in</a>, in compliance with applicable Indian laws, including the Information Technology Act, 2000, and associated rules.</p>

            <hr class="privacy-divider">
            
            <h3 class="mt-4 privacy-section-heading">Information We Collect</h3>
            <p class="privacy-text">When you browse or engage with our website, we may collect the following information:</p>
            <ul class="privacy-list">
                <li class="privacy-list-item">Name</li>
                <li class="privacy-list-item">Phone number</li>
                <li class="privacy-list-item">Email address</li>
                <li class="privacy-list-item">Location/City</li>
                <li class="privacy-list-item">Property preferences (BHK, budget, location)</li>
                <li class="privacy-list-item">IP address, browser, and device information</li>
                <li class="privacy-list-item">Communication history (inquiries, forms, feedback)</li>
            </ul>
            <p class="privacy-text">You may provide this information voluntarily when you:</p>
            <ul class="privacy-list">
                <li class="privacy-list-item">Fill out inquiry or contact forms</li>
                <li class="privacy-list-item">Register interest in a project or request a callback</li>
                <li class="privacy-list-item">Subscribe to newsletters or updates</li>
                <li class="privacy-list-item">Download brochures, price lists, or floor plans</li>
                <li class="privacy-list-item">Book a site visit or event</li>
            </ul>

            <h3 class="mt-4 privacy-section-heading">How We Use Your Information</h3>
            <p class="privacy-text">Your personal information may be used for the following purposes:</p>
            <ul class="privacy-list">
                <li class="privacy-list-item">Responding to your inquiries or requests</li>
                <li class="privacy-list-item">Sharing project details, brochures, or price updates</li>
                <li class="privacy-list-item">Sending alerts about launches, offers, or events</li>
                <li class="privacy-list-item">Enhancing website functionality and user experience</li>
                <li class="privacy-list-item">Fulfilling legal and regulatory obligations</li>
            </ul>
            <p class="privacy-text mb-0"><span class="privacy-highlight">We do not sell or rent</span> your personal information to third parties for marketing purposes.</p>

            <h3 class="mt-4 privacy-section-heading">Cookies &amp; Tracking Technologies</h3>
            <p class="privacy-text">Our website uses cookies and tracking tools to improve performance and user experience. These may capture:</p>
            <ul class="privacy-list">
                <li class="privacy-list-item">Browser type and version</li>
                <li class="privacy-list-item">Pages visited and time spent</li>
                <li class="privacy-list-item">Clicks, navigation, and user behavior patterns</li>
            </ul>
            <p class="privacy-text">You may disable cookies via your browser settings; however, certain features may not function optimally.</p>

            <h3 class="mt-4 privacy-section-heading">Data Sharing &amp; Disclosure</h3>
            <p class="privacy-text">We may share your personal data only with:</p>
            <ul class="privacy-list">
                <li class="privacy-list-item">Authorized channel partners, sales teams, or affiliates assisting with your query</li>
                <li class="privacy-list-item">Service providers, technology partners, or consultants supporting our operations</li>
                <li class="privacy-list-item">Legal or regulatory authorities, if mandated by law</li>
            </ul>
            <p class="privacy-text">All shared data is handled with confidentiality and care.</p>

            <h3 class="mt-4 privacy-section-heading">Data Security</h3>
            <p class="privacy-text">We adopt reasonable industry-standard practices to secure your personal information from unauthorized access, misuse, or loss. However, no online transmission can be guaranteed 100% secure.</p>

            <h3 class="mt-4 privacy-section-heading">Your Rights</h3>
            <p class="privacy-text">As a user, you have the right to:</p>
            <ul class="privacy-list">
                <li class="privacy-list-item">Request access to the data we hold about you</li>
                <li class="privacy-list-item">Ask us to update, correct, or delete your information</li>
                <li class="privacy-list-item">Withdraw consent or unsubscribe from communications at any time</li>
            </ul>
            <p class="privacy-text">To exercise these rights, please contact us at the details below.</p>

            <h3 class="mt-4 privacy-section-heading">Third-Party Links</h3>
            <p class="privacy-text">Our website may contain links to third-party sites. We are not responsible for their privacy policies, practices, or content. We encourage you to review their policies before sharing personal data.</p>

            <h3 class="mt-4 privacy-section-heading">Updates to This Policy</h3>
            <p class="privacy-text">We may update this Privacy Policy from time to time. The revised version will be posted here with a "Last Updated" date. Continued use of our website indicates your acceptance of the changes.</p>

            <h3 class="mt-4 privacy-section-heading">Contact Us</h3>
            <p class="privacy-text">If you have any questions, concerns, or requests regarding your privacy, please contact us:</p>
            <ul class="list-unstyled">
                <li class="privacy-contact-item">
                    📧 Email: <a href="mailto:Tanmaywhr@gmail.com" class="privacy-contact-link">Tanmaywhr@gmail.com</a>
                </li>
                <li class="privacy-contact-item">
                    📞 Phone: <a href="tel:+919958555128" class="privacy-contact-link">+91 9958555128</a>
                </li>
                <li class="privacy-contact-item">
                    🏢 Address: Ashtech Sector 12, Greater Noida West, Uttar Pradesh
                </li>
            </ul>

            <p class="small text-muted p-3 privacy-footer-note">If you are contacting us on behalf of another person, please ensure you have the authority to do so.</p>
        </div>
    </section>
<?php
$content = ob_get_clean();
include __DIR__ . '/master.php';