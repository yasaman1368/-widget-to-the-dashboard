<?php

/**
 * Add a widget to the dashboard.
 *
 * This function is hooked into the 'wp_dashboard_setup' action below.
 */
function wporg_add_dashboard_widgets()
{
    wp_add_dashboard_widget('$widget_id', 'اطلاعات عمومی', 'callback', '$control_callback', ' callback_args', 'normal');
}
function  callback()
{
    $user = count_users();
    $count_posts = wp_count_posts();

    if ($count_posts) {
        $published_posts = $count_posts->publish;
    }
?>
    <div style="text-align: right;">تعداد کابران سایت: <?php echo $user['total_users'] ?></div>
    <div style="text-align: right;">تعداد پست های سایت: <?php echo $published_posts ?></div>

<?php
}
function wp_welcome_pa()
{ ?>
    <div style="color: white;background-color:blue;height:100px;">hellooooooooooooooooo</div>
<?php
}
//Function "remove_welcome_panel" with instruction to remove welcome panel
function remove_welcome_panel()
{
    remove_action('welcome_panel', 'wp_welcome_panel');
}

//Run above function on admin_init
add_action('admin_init', 'remove_welcome_panel');
add_action('wp_dashboard_setup', 'wporg_add_dashboard_widgets');
// remove_action('welcome_panel', 'wp_welcome_panel');
add_action('welcome_panel', 'wp_welcome_pa');
