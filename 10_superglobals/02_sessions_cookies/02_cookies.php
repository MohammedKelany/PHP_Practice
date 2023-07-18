<?php
setcookie("Cookie_2", "This_is_a_Cookie_for_test", time() + 15, '/');
// Explain what is cookie
echo '<pre>';
echo "                  Cookies are some thing that allow
                    the website to track user action and
                    make the browser now information about 
                    user interests
";
echo '<br>';
var_dump($_COOKIE);
echo '</pre>';
