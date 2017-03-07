<?php
# f2b-wplogin v0.1
# Description: This plugin will return a 401 error on a failed login. This makes it more easier to use f2b to ban bruteforrces.
# 
# !!! the use of this script is on your own risk !!!


function my_login_failed_401() {
    status_header( 401 );
}

add_action( 'wp_login_failed', 'my_login_failed_401' ); 
?>
