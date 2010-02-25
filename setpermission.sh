#!/bin/sh

chown -R $1:www-data cache files store images/avatars/upload config.php

chmod 640 config.php
chmod -R 774 cache files store images/avatars/upload
chmod 700 setpermission.sh
chmod 644 cache/.htaccess cache/index.htm files/index.htm images/avatars/upload/.htaccess images/avatars/upload/index.htm store/index.htm store/index.htm
