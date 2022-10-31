# A Bunch Of Livewire Components

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

<img src="https://raw.githubusercontent.com/JustinByrne/resources/main/a-bunch-of-livewire-components/autocomplete.jpg" width="100%" />

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