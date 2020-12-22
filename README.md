# MediaWiki Google Tag Manager

Future home of Google Tag Manager for MediaWiki reboot. See https://www.mediawiki.org/w/index.php?oldid=3310474 for current unsupported version.

To Do

1. <strike>Update to support current extension loading with `extension.json`</strike>
2. <strike>Switch to `OutputPage::prependHTML ( $text )`</strike>
3. Add to TranslateWiki for automated localisation
4. 

## Download

Download a copy...

Alternatively, use git to clone into your MediaWiki extension directory....

## Setup

Once the extension is in your `/extension` directory.

Add to your `LocalSetting.php` file `wfLoadExtension( 'GoogleTagManager' );`

Set you Google Tag Manager ID for your Tag with `$wgGoogleTagManagerContainerID='GTM-xxxxx';`

### Alternative Setting

Cookie scripts are usually have documentation on how to block the firing of a Google Tag without cookie consent. Others, allow or block the execution of a `<script>` which may add more cookies. These use a data type element attached to the `<script>`

Example `<script type="plain/text" data-cookiescript="accepted" data-cookiecategory="performance">`

To set the data element(s) use 

`$wgGoogleTagManagerData = 'data-cookiescript="accepted" data-cookiecategory="performance"';` or if you use `"` make sure you escape the `"`'s needed.

`$wgGoogleTagManagerData = "data-cookiescript=\"accepted\" data-cookiecategory=\"performance\"";`
