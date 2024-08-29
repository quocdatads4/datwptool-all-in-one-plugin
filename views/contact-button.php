<div class="wrap">
    <h1>Contact Settings</h1>
    <p>Placeholder for Contact Settings content.</p>
    <form method="post" action="options.php">
        <?php settings_fields('datcontact-settings-group'); ?>
        <?php do_settings_sections('datcontact-settings-group'); ?>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="link_order" class="control-label">Link đặt hàng</label>
                    <input type="text" class="form-control" name="link_order" value="<?php echo esc_attr(get_option('link_order')); ?>" />
                </div>
                <div class="form-group">
                    <label for="link_zalo" class="control-label">Link chat Zalo</label>
                    <input type="text" class="form-control" name="link_zalo" value="<?php echo esc_attr(get_option('link_zalo')); ?>" />
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="link_messenger" class="control-label">Link Messenger</label>
                    <input type="text" class="form-control" name="link_messenger" value="<?php echo esc_attr(get_option('link_messenger')); ?>" />
                </div>
                <div class="form-group">
                    <label for="link_phone" class="control-label">Gọi điện</label>
                    <input type="text" class="form-control" name="link_phone" value="<?php echo esc_attr(get_option('link_phone')); ?>" />
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="link_sms" class="control-label">Nhắn tin SMS</label>
                    <input type="text" class="form-control" name="link_sms" value="<?php echo esc_attr(get_option('link_sms')); ?>" />
                </div>
            </div>

            <div class="col-md-4">
                <div class="datwp-form-check">
                    <div class="lcs_wrap">
                        <div class="lcs_switch lcs_checkbox lcs_off" id="toggleSwitch">
                            <div class="lcs_cursor"></div>
                            <div class="lcs_label lcs_label_on">Yes</div>
                            <div class="lcs_label lcs_label_off">No</div>
                        </div>
                        <input type="checkbox" id="newsletter_0" name="newsletter[]" value="1" data-ontext="Yes" data-offtext="No" data-oncss="bg-success" class="form-check-input" style="display: none;">
                    </div>
                    <label for="newsletter_0" class="form-label">Toggle Switch</label>
                </div>
            </div>
        </div>

        <?php submit_button(); ?>
    </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const toggleSwitch = document.getElementById('toggleSwitch');
    const checkbox = document.getElementById('newsletter_0');

    toggleSwitch.addEventListener('click', function() {
        if (toggleSwitch.classList.contains('lcs_on')) {
            toggleSwitch.classList.remove('lcs_on');
            toggleSwitch.classList.add('lcs_off');
            checkbox.checked = false;
        } else {
            toggleSwitch.classList.remove('lcs_off');
            toggleSwitch.classList.add('lcs_on');
            checkbox.checked = true;
        }
    });
});
</script>