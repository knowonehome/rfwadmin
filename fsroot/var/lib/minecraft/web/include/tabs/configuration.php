<h1>server.properties</h1>
<p>
See the Minecraft Wiki's <a href="http://www.minecraftwiki.net/wiki/Server.properties">explanation of the settings</a>.
</p>

<form method="post" action="index.php?page=action" target="_blank">
<?php
$html = $mc->properties->to_html();
echo $html;
?>

  <input type="submit" name="save_properties" value="save" >
  <input type="hidden" name="input_complete" value="1" />
</form>
