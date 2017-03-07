# f2b-wplogin

Description:
===========
Wordpress modification to make f2b filtering possible on a more reliable way. This WP plugin
will return a 401 https status code on a failed login. And yes it's not a 403 (on purpose).
With this https status code you can filter properly on bruteforce logins with fail2ban.

The fail2ban configuration part is out of this scope.

Ooops
=====
For some people this might a good solution and for some not. The script comes with no 
warranties and we are not liable for any damage caused by this script.

Instructions:
=============
1. goto your WordPress webroot
2. (shell) mkdir -p wp-content/mu-plugins 
3. (shell) copy f2b-wplogin.php to wp-content/mu-plugins
4. (shell) chown --reference=./wp-content ./wp-content/mu-plugins/f2b-wplogin.php 

