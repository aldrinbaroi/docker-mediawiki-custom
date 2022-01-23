FROM mediawiki:stable
ADD  --chown=www-data:www-data ./TabberNeue/ /var/www/html/extensions/TabberNeue
ADD  --chown=www-data:www-data ./TreeAndMenu/ /var/www/html/extensions/TreeAndMenu
ADD  --chown=www-data:www-data ./Tabs/ /var/www/html/extensions/Tabs
ADD  --chown=www-data:www-data ./DisplayTitle/ /var/www/html/extensions/DisplayTitle
COPY --chown=www-data:www-data ./ExtensionsSetup.php /var/www/html/
COPY move_TreeAndMenu.js /
RUN  cat /move_TreeAndMenu.js >> /var/www/html/resources/src/mediawiki.base/mediawiki.base.js && rm /move_TreeAndMenu.js

#::END::
