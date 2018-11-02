# Blueprint Builder Plugin

The **Blueprint Builder** Plugin is for [Grav CMS](http://github.com/getgrav/grav). GUI for creating blueprint yaml files

## Installation

Installing the Blueprint Builder plugin can be done in one of two ways. The GPM (Grav Package Manager) installation method enables you to quickly and easily install the plugin with a simple terminal command, while the manual method enables you to do so via a zip file.

### GPM Installation (Preferred)

The simplest way to install this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's terminal (also called the command line).  From the root of your Grav install type:

    bin/gpm install blueprint-builder

This will install the Blueprint Builder plugin into your `/user/plugins` directory within Grav. Its files can be found under `/your/site/grav/user/plugins/blueprint-builder`.

### Manual Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `blueprint-builder`. You can find these files on [GitHub](https://github.com/andrewscofield/grav-plugin-blueprint-builder) or via [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

    /your/site/grav/user/plugins/blueprint-builder
	
> NOTE: This plugin is a modular component for Grav which requires [Grav](http://github.com/getgrav/grav) and the [Error](https://github.com/getgrav/grav-plugin-error) and [Problems](https://github.com/getgrav/grav-plugin-problems) to operate.

### Admin Plugin

If you use the admin plugin, you can install directly through the admin plugin by browsing the `Plugins` tab and clicking on the `Add` button.

## Configuration

## Usage

Currently exploring syntax ideas for creating blueprints programatically. 

All classes would be namespaced to `\BlueprintBuilder`


### I think there should be 2 ways of creating new fields 

A simple method:
```php
//Simple Method
$blueprint = new Blueprint('Test Blueprint');

$blueprint->addText('PLUGIN_ADMIN.TITLE')
  ->placeholder('Post Title')
  ->key('header.title');

$blueprint->addText('Subtitle')
  ->placeholder('Post Subtitle')
  ->help('If your post has a subtitle, enter it here');

$blueprint->addTextarea('Excerpt');
```

An advanced method:
```php
//Advcaned Method
$title = new TextField('header.title');
$title->label = 'PLUGIN_ADMIN.TITLE';
$title->placeholder = 'Post Title';

$subtitle = new TextField();
$subtitle->label = 'Subtitle';
$subtitle->helper = 'If your post has a subtitle, enter it here';
$subtitle->placeholder = 'Post Subtitle';

$excerpt = new TextareaField();
$excerpt->label = 'Excerpt';

$blueprint = new Blueprint('Test Blueprint');

$blueprint->add($title);
$blueprint->add($subtitle);
$blueprint->add($excerpt);

//You could also add multiple fields at once as an array
$blueprint->add([$title, $subtitle, $excerpt]);
```

The advanced method would allow for having premade fields configured and ready to be reused in different blueprints. 

The simple method would be better for simpler use-cases. Maybe not all attributes would be exposed to keep it simple?

You could of course combine both.

Both simple and advanced methods would result in the following yaml
```yaml
title: Test Blueprint

form:
  fields:
    header.title:
      type: text
      label: PLUGIN_ADMIN.TITLE
      placeholder: 'Post Title'
    header.subtitle:
      type: text
      label: Subtitle
      placeholder: 'Post Subtitle'
      help: 'If your post has a subtitle, enter it here'
    header.excerpt:
      type: textarea
      label: Excerpt
```

### Ideas for tabs
```php
$blueprint = new Blueprint('Test Blueprint');

$tabs = [
  $blueprint->tab('Content', $content_fields),
  $blueprint->tab('Options', $options_fields),
  $blueprint->tab('Advanced', $advanced_fields),
];


$blueprint->addTabs($tabs);
```

That would probably require creating fields using the advanced method. 

Maybe then it would be best to have a class for groups of fields? Since quite a few fields actualy accept fields as a value (tab, sections, list, etc).

```php
$blueprint = new Blueprint('Test Blueprint');
$content_fields = new BlueprintFields();

$content_fields
  ->addText('PLUGIN_ADMIN.TITLE')
  ->placeholder('Post Title')
  ->key('header.title');

$content_fields
  ->addText('Subtitle')
  ->placeholder('Post Subtitle')
  ->help('If your post has a subtitle, enter it here');

$content_fields
  ->addTextarea('Excerpt');

$blueprint->addTabs()
  ->addTab('Content', $content_fields);
```

Which would also make it more convenient for making 'sets' of fields

```php
class BlogFields extends BlueprintFields 
{

  public function init(){
    parent::init();

    $this
      ->addText('PLUGIN_ADMIN.TITLE')
      ->placeholder('Post Title')
      ->key('header.title');

    $this
      ->addText('Subtitle')
      ->placeholder('Post Subtitle')
      ->help('If your post has a subtitle, enter it here');

    $this
      ->addTextarea('Excerpt');

    $this->addTabs()
      ->addTab('Content', $content_fields);

  }

}

$blog_fields = new BlogFields();
$blueprint = new Blueprint('Blog');
$blueprint->add($blueFields);
```

## To Do

- [ ] Decide on syntax

