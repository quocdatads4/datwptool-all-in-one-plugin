<div class="container datwp-mail-app">
    <div class="datwp-mail-main-menu-items">
        <ul class="nav nav-pills datwp-tab-menu">
            <li class="nav-item">
                <span class="nav-link disabled"><div class="logo">DATMarketing™</div></span>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#tab-contact-settings">Contact Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#tab-google-manager">Google Manager</a>
            </li>
			<li class="nav-item">
                <a class="nav-link active" href="#tab-settings">Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#tab-about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#tab-documentation">Documentation</a>
            </li>
        </ul>
    </div>

    <div class="datwp-tab-content">
        <div id="tab-contact-settings" class="tab-content-item">
            <?php include dirname(__FILE__) . '/contact-button.php'; ?>
        </div>
        <div id="tab-google-manager" class="tab-content-item" style="display: none;">
            <h1>Google Manager Settings</h1>
            <p>Placeholder for Google Manager Settings content.</p>
        </div>
        <div id="tab-settings" class="tab-content-item" style="display: none;">
            <h1>General Settings</h1>
            <p>Placeholder for General Settings content.</p>
        </div>
        <div id="tab-about" class="tab-content-item" style="display: none;">
            <h1>About</h1>
            <p>Information about the DATMarketing™ plugin.</p>
        </div>
        <div id="tab-documentation" class="tab-content-item" style="display: none;">
            <h1>Documentation</h1>
            <p>Documentation and guides for the DATMarketing™ plugin.</p>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabs = document.querySelectorAll('.nav-item a');
        const contentItems = document.querySelectorAll('.tab-content-item');

        tabs.forEach(tab => {
            tab.addEventListener('click', function (e) {
                e.preventDefault();
                
                // Remove active class from all tabs
                tabs.forEach(item => item.classList.remove('active'));

                // Hide all content items
                contentItems.forEach(item => item.style.display = 'none');

                // Add active class to clicked tab
                this.classList.add('active');

                // Show related content
                const activeTabContent = document.querySelector(this.getAttribute('href'));
                activeTabContent.style.display = 'block';
            });
        });

        // Trigger click on the first tab to show content by default
        if (tabs.length > 0) {
            tabs[0].click();
        }
    });
</script>