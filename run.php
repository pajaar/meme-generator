<?php
// memegen.link scraper
// github.com/pajaar

echo '<form method="POST">
<input type="text" name="ats" placeholder="hello">
<input type="text" name="bwh" placeholder="world">
<select name="bg">';

// get template name
$lol = json_decode(file_get_contents("https://api.memegen.link/images/"));

foreach($lol as $res){
$x = explode("templates/", $res->template);
// echo $x[1]."<br>";
echo '<option value="'.$x[1].'">'.$x[1].'</option>';
}

echo '</select>
<input type="submit" name="pjr">
</form>';

// show result
if(isset($_POST['pjr'])){	
echo '<img src="https://api.memegen.link/images/'.$_POST['bg'].'/'.$_POST['ats'].'/'.$_POST['bwh'].'.png" width="400px">';
}
?>
