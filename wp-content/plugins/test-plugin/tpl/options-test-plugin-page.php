<form method="post" action="options.php">
    <h1>Option Test Plugin</h1>
    <?php setting_errors(); ?>
    <?php settings_fields('plugin-settings-group'); ?>
    <?php do_settings_sections('exemple_options'); ?>

    <?php submit_button(); ?>
</form>
