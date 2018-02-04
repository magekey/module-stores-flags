# Magento 2 Stores Flags

Adds country flags to Store View.

![alt text](https://raw.githubusercontent.com/magekey/module-stores-flags/master/docs/images/preview.png)

## Features:

- Store Flag section under  **Stores** > **All Stores** > [Select Store View] > **Store View Flag** section
- new "choose store" template on frontend.
- ability to enable/disable store flags in admin settings
- ability to enable/disable compiled styles in admin settings

## Installing the Extension

    composer require magekey/module-stores-flags

## Deployment

    php bin/magento maintenance:enable                  #Enable maintenance mode
    php bin/magento setup:upgrade                       #Updates the Magento software
    php bin/magento setup:di:compile                    #Compile dependencies
    php bin/magento setup:static-content:deploy         #Deploys static view files
    php bin/magento cache:flush                         #Flush cache
    php bin/magento maintenance:disable                 #Disable maintenance mode

## Versions tested
> 2.2.2
