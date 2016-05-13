# About Originalapp_MoroccanSahara Module

The Western Sahara is indisputably a Moroccan territory and no need to have it in the countries list.

If you have a single doubt, you only need to refer to history books and geopolitical cards archives, you will then realize that all the fuss was caused by a bunch of separatists, greedy for money and power.

"Those who are waiting for any other concession on Morocco's part are deceiving themselves. Indeed, Morocco has given all there was to give," the king said.

# Install

1. Go to Magento2 root folder

2. Enter following commands to install module:

    ```bash
    composer config repositories.originalappmoroccansahara git https://github.com/aelmizeb/Originalapp_MoroccanSahara.git
    composer require originalapp/moroccansahara:dev-master
    ```
   Wait while dependencies are updated.

3. Enter following commands to enable module:

    ```bash
    php bin/magento module:enable Originalapp_MoroccanSahara --clear-static-content
    php bin/magento setup:upgrade
    ```

