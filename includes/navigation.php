<nav class="container">
	<a href="index.php" <?=($page_name=="#"?'class="active"':'')?>>Home</a> <!-- Aktiv-Setzung inaktiv -->
	<a href="team.php" <?=($page_name=="Ihr Team"?'class="active"':'')?>>Ihr Team</a>
	<a href="infos.php" <?=($page_name=="Informationen"?'class="active"':'')?>>Infos <span class="hide-on-mobile">(zu Ihrer Übernachtung)</span></a>
	<a href="kontakt.php" <?=($page_name=="Kontakt"?'class="active"':'')?>>Kontakt</a>
</nav>