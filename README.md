# A Bunch Of Livewire Components

[![Latest Version on Packagist](https://img.shields.io/packagist/v/justinbyrne/a-bunch-of-livewire-components.svg?style=flat-square)](https://packagist.org/packages/justinbyrne/a-bunch-of-livewire-components)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/justinbyrne/a-bunch-of-livewire-components/run-tests?label=tests)](https://github.com/justinbyrne/a-bunch-of-livewire-components/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/justinbyrne/a-bunch-of-livewire-components/Check%20&%20fix%20styling?label=code%20style)](https://github.com/justinbyrne/a-bunch-of-livewire-components/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/justinbyrne/a-bunch-of-livewire-components.svg?style=flat-square)](https://packagist.org/packages/justinbyrne/a-bunch-of-livewire-components)

As the title suggests it, this is a bunch of Livewire components that can be reused in any Laravel app.

## Requirements

- Laravel 9.x
- Tailwind CSS
- Tailwind CSS Forms plugin
- Alpine.js

## Installation

You can install the package via composer:

```bash
composer require justinbyrne/a-bunch-of-livewire-components
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="a-bunch-of-livewire-components-config"
```

The tailwind config will either need the vendor dir config file added of the published one.

```js
// tailwind.config.js
module.exports = {
  content: {
    "./vendor/justinbyrne/a-bunch-of-livewire-components/config/a-bunch-of-livewire-components.php",
    // ...
  },
}
```

## Components

### Autocomplete

<img src="https://raw.githubusercontent.com/JustinByrne/resources/main/a-bunch-of-livewire-components/autocomplete.jpg" style="width: 100%;" />

```php
@livewire('abulc-autocomplete', ['model' => 'App\Models\User'])
```

| parameter | Value type                                     | default  |
| --------- | ---------------------------------------------- | -------- |
| model     | model class e.g. `App\Models\User`             | `null`   |
| name      | form input name parameter vaule e.g. `user_id` | `null`   |
| display   | the value from the model to display            | `name`   |
| value     | the value from the model to save               | `id`     |
| label     | the input box label text                       | `Search` |