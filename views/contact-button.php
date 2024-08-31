<div class="wrap">
    <h1>Contact Settings</h1>
    <p>Placeholder for Contact Settings content.</p>
    <form method="post" action="options.php">
        <?php settings_fields('datcontact-settings-group'); ?>
        <?php do_settings_sections('datcontact-settings-group'); ?>

        <div class="mb-3">
            <label class="toggle-button">
                <input type="checkbox" name="toggle" onchange="this.form.submit()" <?= isset($_POST['toggle']) ? 'checked' : '' ?>>
                <span class="slider"></span>
            </label>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="link_order" class="control-label">Link đặt hàng</label>
                    <input type="text" id="link_order" class="form-control" name="datwptool_link_order" value="<?php echo esc_attr(get_option('datwptool_link_order')); ?>">
                </div>
                <div class="form-group">
                    <label for="link_zalo" class="control-label">Link chat Zalo</label>
                    <input type="text" id="link_zalo" class="form-control" name="datwptool_link_zalo" value="<?php echo esc_attr(get_option('datwptool_link_zalo')); ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="link_messenger" class="control-label">Link Messenger</label>
                    <input type="text" id="link_messenger" class="form-control" name="datwptool_link_messenger" value="<?php echo esc_attr(get_option('datwptool_link_messenger')); ?>">
                </div>
                <div class="form-group">
                    <label for="link_phone" class="control-label">Gọi điện</label>
                    <input type="text" id="link_phone" class="form-control" name="datwptool_link_phone" value="<?php echo esc_attr(get_option('datwptool_link_phone')); ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="link_sms" class="control-label">Nhắn tin SMS</label>
                    <input type="text" id="link_sms" class="form-control" name="datwptool_link_sms" value="<?php echo esc_attr(get_option('datwptool_link_sms')); ?>">
                </div>
            </div>
        </div>
        
        <?php submit_button(); ?>
    </form>
</div>