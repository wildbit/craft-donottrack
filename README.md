# Do Not Track plugin for Craft CMS

Helpers for respecting [Do Not Track headers](https://allaboutdnt.com) sent by browsers.

Brought to you by [Wildbit](https://wildbit.com)

## Installation

To install Do Not Track, follow these steps:

1. Download & unzip the file and place the `donottrack` directory into your `craft/plugins` directory
2.  -OR- do a `git clone https://github.com/wildbit/craft-donottrack.git` directly into your `craft/plugins` folder.  You can then update it with `git pull`
3. Install plugin in the Craft Control Panel under Settings > Plugins
4. **The plugin folder should be named `donottrack` for Craft to see it.**  GitHub recently started appending `-master` (the branch name) to the name of the folder for zip file downloads.

Do Not Track works on Craft 2.4.x and Craft 2.5.x.

## Using Do Not Track

You can use the `doNotTrack.isEnabled` variable to check whether DNT is enabled in the user’s browser from your twig templates.

```twig
{% if craft.doNotTrack.isEnabled %}
  Do Not Track is enabled.
{% endif %}
```
