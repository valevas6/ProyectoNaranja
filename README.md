
*Clone the last release*

    git clone (git link)
    
*Go to the project folder*

    ddev start
    
    ddev composer install
    
    ddev exec drush --version
    
*If you have drush 8 you wil need to install drush 9*

    ddev composer require drush/drush
    
*Install the site*

    ddev exec drush si --db-url=mysql://db:db@db/db --existing-config
    
*Import the configuration*

    ddev exec drush cim -y
    
*Import the content default*

    ddev exec drush dcdi
    


