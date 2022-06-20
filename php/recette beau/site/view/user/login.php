<?php 

$postData = $_POST;

if (isset($postData['email']) &&  isset($postData['password'])) {
    foreach ($users as $user) {
        if (
            $user['email'] === $postData['email'] &&
            $user['password'] === $postData['password']
        ) {
            $loggedUser = [
                'email' => $user['email'],
            ];
            $nameUser = [
                'full_name' => $user['full_name'],
            ];

            /**
             * Cookie qui expire dans un an
             */
            setcookie(
                'LOGGED_USER',
                $loggedUser['email'],
                [
                    'expires' => time() + 365*24*3600,
                    'secure' => true,
                    'httponly' => true,
                ]
            );



            $_SESSION['LOGGED_USER'] = $loggedUser['email'];
        } else {
            $errorMessage = sprintf('Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
                $postData['email'],
                $postData['password']
            );
        }
    }
}



// Si le cookie ou la session sont présentes
if (isset($_COOKIE['LOGGED_USER']) || isset($_SESSION['LOGGED_USER'])) {
    $loggedUser = [
        'email' => $_COOKIE['LOGGED_USER'] ?? $_SESSION['LOGGED_USER'],
    ];
}
?>


    <?php if(!isset($loggedUser)):  //si pas encor connecter alor envoie au formulaire ?>
        <h1>connectez vous</h1>
        
        <form action="connexion.php" method="post">

    <!--si forme affiche erreur-->
    <?php if (isset($errorMessage)):?>
        <h6 class=errorMessage>
            <?php echo ($errorMessage); ?>
        </h6>
    <?php endif; ?>

    <!--formuaire-->
    <div class="mb-3">
	    <label for="email">Votre adresse email:<br></label>
        <input type="email" id="email" name="email" aria-describedby="email-help" placeholder="you@exemple.com" autofocus required><br><br>
        <div id="email-help" class="form-text">L'email utilisé lors de la création de compte.</div>

        <label for="password">Mot de passe:<br></label>
        <input type="password" id="password" name="password"     placeholder="********"  required><br><br>
    </div>
        <button type="submit" >Connecte moi</button>
</form>
 


<!--Si utilisateur bien connectée on affiche un message de succès-->
<?php else: ?>
    
    <h5>Bonjour <?php echo($loggedUser['email']); ?> ! Vous etes connectee.</h5>
<?php endif; 


?>
