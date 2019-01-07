# About

Adds the ability to have a Mac Notes app like UX for adding notes to any record in OctoberCMS.

# Installation

To install from the [Marketplace](https://octobercms.com/plugin/captive-notes), click on the "Add to Project" button and then select the project you wish to add it to before updating the project to pull in the plugin.

To install from the backend, go to **Settings -> Updates & Plugins -> Install Plugins** and then search for `Captive.Notes`.

To install from [the repository](https://github.com/captive/oc-notes-plugin), clone it into **plugins/captive/notes** and then run `composer update` from your project root in order to pull in the dependencies.

To install it with Composer, run `composer require captive/oc-notes-plugin` from your project root.

# Documentation

Simply add the `notes` MorphMany relationship to your model and add a field with a type of `notes` to your fields.yaml to get started.

Example `fields.yaml`:

```yaml
fields:
    name:
        label: Name
        span: full

tabs:
    fields:
        notes: # The name of the relationship the FormWidget will use
            label: ''
            tab: Notes
            type: notes
            span: full
            # autosaveDelay: 2000 # The amount of milliseconds to delay after typing stops to trigger an autosave
            # dateFormat: 'Y-m-d H:i:s' # the php date format for updated_at column
```

Example MorphMany Relationship definition:

```php
public $morphMany = [
    'notes' => [\Captive\Notes\Models\Note::class, 'name' => 'target']
];
```
