# How To Use the Joomla!X ORM on Joomla!3

## Installation

 1. Install Joomla! 3 as usual.
 2. Add a `composer.json` file:
    ```json
    {
      "minimum-stability": "stable",
      "require": {
        "joomla-x/orm-joomla3": "dev-master",
    
        "joomla-x/entities-joomla3": "dev-master",
        "joomla-x/orm": "dev-master",
        "joomla-x/event": "3.0.x-dev",
        "joomla-x/di": "3.0.x-dev"
      }
    }
    ```
    Once the `joomla-x` packages have stable releases, only the the first entry, `"joomla-x/orm-joomla3": "dev-master"`, will be needed. In the current state, the other lines allow to use the development versions although minimum stability is set to `stable` for all other dependencies.

## Using the ORM in a Component

