Adsense-Blocker
===============

Stops spam clicks on your adsense ads

How to use

Create a MySQL table called "ads" 

```SQL
CREATE TABLE IF NOT EXISTS `ads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;
```

In your page.php add 
```HTML
<script src="AdsenseBlocker/adBlock.js"></script>
<?php include_once("/AdsenseBlocker/adInfo.php"); ?>
```
near the top

and wrap your ad with a if statment checking if 
```php
$showAd
```
is true.
So your finished code should look like this
```HTML
<script src="AdsenseBlocker/adBlock.js"></script>
<?php include_once("/AdsenseBlocker/adInfo.php"); ?>

<?php
if($showAd)
{
?>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<ins class="adsbygoogle"
	style="display:inline-block;width:xxxpx;height:xxxpx"
	data-ad-client="ca-pub-xxxxxxxx"
	data-ad-slot="xxxxxxxxx"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
<?php
}
?>
```
