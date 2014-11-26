Adsense-Blocker
===============

Stops spam clicks on your adsense ads

How to use
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
