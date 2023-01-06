<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PrintScan
 */

?>

<footer id="colophon" class="site-footer">
  <div class="footer-container">
    <div class="footer-item copyright">
      <div class="logo-footer" style="background-image:url(<?php echo get_template_directory_uri() . '/images/PrintscanLogo.jpg'; ?>)"></div>
      <p>© 2022 PrintScan</p>
      <p>Privacy | Terms</p>
    </div>
    <div class="footer-item fingerprint-services">
      <h3>Fingerprinting Services</h3>
      <ul>
        <li>Federal Fingerprinting</li>
        <li>State Fingerprinting</li>
        <li>FINRA Fingerprinting</li>
        <li>RCMP Fingerprinting</li>
        <li>Fingerprint Cards</li>
        <li>Ink Fingerprinting</li>
        <li>Live Scan Fingerprinting</li>
        <li>Fingerprint Card Conversion</li>
        <li>Additional Services</li>
      </ul>
    </div>
    <div class="footer-item live-scan-solutions">
      <h3>Live Scan Solutions</h3>
      <ul>
        <li>Live Scan Hardware</li>
        <li>Live Scan Software</li>
        <li>Partners & Accounts</li>
        <li>Financing</li>
      </ul>
    </div>
    <div class="footer-item locations">
      <h3>Locations</h3>
      <h4>Company</h4>
      <ul>
        <li>About Us</li>
        <li>Resources</li>
        <li>Careers</li>
      </ul>
      <h4>Contact</h4>
      <div class="social-icons">
        <a href="https://www.linkedin.com/company/printscan"><img src="linkedin.png" alt="Linkedin" /></a>
        <a href="https://www.facebook.com/printscan/"><img src="facebook.png" alt="Facebook" /></a>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
