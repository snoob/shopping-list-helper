# Shopping list helper

## Requirements

* Docker compose
* PHP 7.4
* Symfony CLI : curl -sS https://get.symfony.com/cli/installer | bash
* Taskfile = https://taskfile.dev/#/installation
* Yarn

## Installation & Run

```
task start
```

Implement your own fixtures and you are ready to go

## Features

* Sort your shopping list by category

## TODO

### Features

* Normalize input & output style
* Save your shopping list
* Convert g to unit
* Copy/paste button for output (using stimulus clipboard)
* Menu helper
  * Add recipe management
  * Add season management for vegetable and fruit
  * Add multiple providers

### Code design

* Make start indempotent
