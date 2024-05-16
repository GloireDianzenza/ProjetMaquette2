<?php include_once 'cnx.php'; $_GET['current_page'] = "connexion";?>
<link rel="stylesheet" href="../css/common.css">

<?php
    if(isset($_GET['email']) && isset($_GET['password']))
    {
        $mail = $_GET['email'];
        $pwd = $_GET['password'];
        $account = $cnx->query("SELECT * FROM account where email = '".$mail."' AND password = '".$pwd."'");
        $account = $account->fetch(PDO::FETCH_ASSOC);
        if($account)
        {
            $id = $account['id'];
            header("Location:accueil.php?id=".$id);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Shop - Connexion</title>
    <link rel="stylesheet" href="../css/connexion.css">
</head>
<?php include 'header.php'; ?>
<body>
    <h1 class="title">Se connecter</h1>
    <form action="connexion.php">
        <div class="input-field">
            <label for="">Adresse email</label>
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="input-field">
            <label for="">Mot de passe</label>
            <input type="password" name="password" placeholder="Mot de passe" required>
        </div>
        <button type="submit">Se connecter</button>
    </form>
    <?php
        if(isset($_GET['email']) && isset($_GET['password']))
        {
            if(!isset($account) || !$account)
            {
                echo "<script>alert('Compte inexistant ou mdp erroné');</script>";
            }
        }
    ?>
</body>
<?php include 'footer.php'; ?>
</html>