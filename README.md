Adsense-Blocker
===============

Stops spam clicks on your adsense ads

How to use

Create a MySQL table called "ads" 
Have:
"id" int AUTO_INCREMENT
"ip" text
"date" timestamp

```SQL
CREATE TABLE IF NOT EXISTS `ads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;
```


```HTML
<script src="adblocker/adBlock.js"></script>
<?php include_once("/adblocker/adInfo.php"); ?>

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
