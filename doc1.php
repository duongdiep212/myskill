
////////////////////////// M2E ///////////////////////////////////
Hello Stephan,
As I mentioned in my previous email, I am integrating the m2e with our module.
You can download my integration package below and install it on your server, please visit link below to refer how to config it :
https://drive.google.com/file/d/0B90hrFQe0LX2Z25mTm5rWDk3T2M/view

Regards,
Kai.
////////////////////////// M2E ///////////////////////////////////





////////////////////////// DEbug /////////////////////////////
Hello David,
Please download my package below and install it your server.
then you can visit link below to refer how to use it : https://drive.google.com/file/d/0B90hrFQe0LX2ZWNCQ1d6dDNzd2c/view
https://docs.google.com/spreadsheets/d/1qTVPYxDrsM3DKQhAyyqCH4AmKiAg6sibUFCcMiAFG9k/edit#gid=747129087
////////////////////////// DEbug /////////////////////////////




////////////////////////// API ////////////////////////////////////
Please try with this link below :  your_site_link/api/rest/products
-> this api above is  default api from magento, if this link is also return 404 -> So, please enable your API rewrite to use API on your server.

You can visit link below to refer :   https://magento.stackexchange.com/questions/29936/rest-api-returns-404

Also, please check the .htaccess file and ensure that you added some line below into this file : 

############################################
## uncomment next line to enable light API calls processing

#    RewriteRule ^api/([a-z][0-9a-z_]+)/?$ api.php?type=$1 [QSA,L]

############################################
## rewrite API2 calls to api.php (by now it is REST only)

 RewriteRule ^api/rest api.php?type=rest [QSA,L]

Regards,
Kai.
////////////////////////// API ////////////////////////////////////


https://stackoverflow.com/questions/13857981/error-while-using-rest-api-in-magento
https://www.magestore.com/magento/error-while-using-rest-api-in-magento.html/


/plugins/magestore/general/inventoryintegrate

http://prntscr.com/fu8v1x



php /usr/bin/notepadqq
html /usr/bin/notepadqq
xml /usr/bin/notepadqq
phtml /usr/bin/notepadqq
txt /usr/bin/notepadqq
js /usr/bin/notepadqq
log /usr/bin/notepadqq
css /usr/bin/notepadqq
bak  /usr/bin/notepadqq
.htaccess  /usr/bin/notepadqq


bak /usr/bin/libreoffice
. /usr/bin/libreoffice

https://belvg.com/blog/dynamic-settings-array-in-magento-2-0.html


https://securityforall.wordpress.com/2012/05/30/sql-injection-tutorials-huong-dan-day-du-ve-sql-injection/




https://docs.google.com/viewer?url=https://www.magestore.com/media/productfile/u/s/userguide_inventory_ultimate.pdf


http://olympiavn.org/forum/index.php?topic=24725.0



