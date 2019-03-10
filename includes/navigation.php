<div class="nav-wrapper">
	<div class="container">
		
		<div class="pull-left logo">
			<a href="index.php"><img src="img/logo.svg" alt="Logo" class="hide-on-mobile"></a>
			<a href="index.php"><img src="img/logo-klein.svg" alt="Logo" class="show-on-mobile"></a>
		</div>
		
	  <nav class="navigation pull-right">
	    <a href="index.php" <?=($page_name=="Home"?'class="active"':'')?>>Home</a> <!-- Aktiv-Setzung inaktiv -->
	    <!-- <a href="team.php" <?=($page_name=="Ihr Team"?'class="active"':'')?>>Ihr Team</a> -->
	    <a href="infos.php" <?=($page_name=="Informationen"?'class="active"':'')?>>Informationen</a>
	    <a href="kontakt.php" <?=($page_name=="Kontakt"?'class="active"':'')?>>Kontakt</a>
	    <a href="#modal-nav" class="navbar-toggle uk-navbar-content" data-modal-toggle="#modal-nav"></a>
	  </nav>
	</div>
</div>

<div class="clear"></div>
<!--

<a href="buchen.php" id="buchen">Buchen</a>
<a href="login.php" class="login<?=($page_name=="Login"?' active':'')?>">Login</a>

-->