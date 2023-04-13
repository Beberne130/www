<?php session_start();
// Déconnecter l'utilisateur
if (isset($_POST['logout'])) {
    // Détruire la session
    session_destroy();
	header("Refresh:0");
    // Rediriger l'utilisateur vers la page de connexion s'il se situe sur la page personnelle
	if (basename($_SERVER['PHP_SELF']) == "personal.php") {
		header('Location: /pages/login.php');
		exit;
	}
}
?>



<nav class="navbar navbar-expand-lg navbar-light bg-light pb-2">
	<div class="container">
		<a class="navbar-brand me-2" href="/index.php">
			<img src="/img/icon/android-chrome-512x512.png" height="30" alt="Logo Sparkless" loading="lazy" style="margin-top: -1px" />
		</a>
		<button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fas fa-bars"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarButtonsExample">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="/index.php">Accueil</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/pages/ressources.php">Information</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="">Acheter</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="">Contact</a>
				</li>
			</ul>
			<?php if(isset($_SESSION['email'])): ?>
				<div class="d-flex align-items-center">
					<a href="/pages/personal.php"><button type="button" class="btn btn-primary px-3 me-2">Ma page</button></a>
					<form method="post">
						<input type="submit" name="logout" class="btn btn-danger px-3 me-2" value="Déconnexion">
					</form>
				</div>
			<?php else: ?>
				<div class="d-flex align-items-center">
					<a href="/pages/login.php"><button type="button" class="btn btn-link text-warning px-3 me-2">Connexion</button></a>
					<a href="/pages/register.php"><button type="button" class="btn btn-warning me-3">Inscription</button></a>
				</div>
			<?php endif; ?>
		</div>
	</div>
</nav>
