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

Set you Google Tag Manager ID for you Tag with `$wgGoogleTagManagerContainerID='GTM-xxxxx';`

### Alternative Setting

Some cookie scripts for allowing or blocking the execution of a `<script>` which may add more cookies use a data type element attached to the `<script>`

Example `<script type="plain/text" data-cookiescript="accepted" data-cookiecategory="performance">`

To set the data element(s) use 

`$wgGoogleTagManagerData = 'data-cookiescript="accepted" data-cookiecategory="performance"';` or if you use `"` make sure you escape the `"`'s needed.

`$wgGoogleTagManagerData = "data-cookiescript=\"accepted\" data-cookiecategory=\"performance\"";`
