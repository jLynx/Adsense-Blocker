Adsense-Blocker
===============

Stops spam clicks on your adsense ads
<br />
Once an ad is clicked, it will take 5 days before the ad is showen making it so people cant spam click ads on your website getting your account banned

**How to use**

Create a MySQL table called "ads" 

```SQL
CREATE TABLE IF NOT EXISTS `ads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;
```
In  blocker.php make sure you have configued your connection to your MySQL Database
In your page.php add 
```HTML
<script src="AdsenseBlocker/eventHandler.js"></script>
<?php include_once("/AdsenseBlocker/adValidator.php"); ?>
```
near the top

And wrap your ad with a if statment checking if 
```php
$showAd
```
Is true.
So your finished code should look like this<br />
P.S make sure you have connected your page.php to the database
```HTML
<script src="AdsenseBlocker/eventHandler.js"></script>
<?php include_once("/AdsenseBlocker/adValidator.php"); ?>

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
