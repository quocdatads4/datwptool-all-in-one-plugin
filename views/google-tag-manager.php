<div class="wrap">
    <h1>Google Tag Manager Settings</h1>
    <form method="post" action="options.php">
        <?php
        settings_fields('dat4gmt-settings-group');
        do_settings_sections('dat4gmt-settings-group');
        ?>
        <table class="form-table">
            <tr valign="top">
                <th scope="row">Google Tag Manager ID</th>
                <td><input type="text" name="dat4gmt_gtm_id" value="<?php echo esc_attr(get_option('dat4gmt_gtm_id')); ?>" /></td>
            </tr>
        </table>
        <?php submit_button(); ?>
    </form>
</div>
