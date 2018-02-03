# Magento 2 Stores Flags

Adds country flags to Store View.

## Features:

- Store Flag section under  **Stores** > **All Stores** > [Select Store View] > **Store View Flag** section
- new "choose store" template on frontend.

## Installing the Extension

    composer require magekey/module-stores-flags
    
## Use compiled styles

You can use compiled css in your theme

put this code in **app/design/frontend/YourPackage/YourTheme/MageKey_StoresFlags/layout/default.xml**
```
<?xml version="1.0"?>
<page xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:View/Layout/etc/page_configuration.xsd">
    <head>
        <css src="MageKey_StoresFlags::css/styles.css"/>
    </head>
</page>
```

## Deployment

    php bin/magento maintenance:enable                  #Enable maintenance mode
    php bin/magento setup:upgrade                       #Updates the Magento software
    php bin/magento setup:di:compile                    #Compile dependencies
    php bin/magento setup:static-content:deploy         #Deploys static view files
    php bin/magento cache:flush                         #Flush cache
    php bin/magento maintenance:disable                 #Disable maintenance mode

## Versions tested
> 2.2.2
