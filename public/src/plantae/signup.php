<!-- Main -->
<section id="main-content">
	<main role="main">
        <div class="container">
            <form class="form-signin" method="POST" action="./php/adduser.php">
                <h2 class="form-signin-heading">Inscription</h2>

				<label for="pseudo" class="sr-only">Pseudonyme</label>
                <input style="margin-bottom: 1rem;" type="text" id="pseudo" name="pseudo" class="form-control" placeholder="Pseudonyme" required autofocus>

                <label for="login" class="sr-only">Adresse mail</label>
                <input type="email" id="login" name="login" class="form-control" placeholder="Adresse mail" required>
				<small style="margin-bottom: 1rem;" id="emailHelp" class="form-text text-muted">Nous n'allons jamais partager votre adresse mail.</small>

                <label for="password" class="sr-only">Mot de passe</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Mot de passe" required>
                <label for="confirm" class="sr-only">Confirm - Mot de passe</label>
                <input type="password" id="confirm" name="confirm" class="form-control" placeholder="Confirmer le mot de passe" required>
				<small id="passHelp" class="form-text text-muted">Attention ! Pour le moment ce site n'est pas très sécurisé.</small>

                <br>
                <button class="btn btn-success btn-block" href="./signin.php" type="submit">Confirmer</button>
            </form>
        </div>
	</main>
</section>