<?php include_once 'cnx.php'; $_GET['current_page'] = "inscription";?>
<link rel="stylesheet" href="../css/common.css">

<?php
    if(isset($_GET['nom']) && isset($_GET['email']) && isset($_GET['password']))
    {
        $name = $_GET['nom'];
        $mail = $_GET['email'];
        $pwd = $_GET['password'];
        $account = $cnx->query("SELECT * FROM account WHERE nom = '".$name."' OR email = '".$mail."'");
        $account = $account->fetchAll(PDO::FETCH_ASSOC);
        if(count($account) <= 0){
            $addUser = $cnx->query("INSERT INTO account (nom,email,password) VALUES ('".$name."','".$mail."','".$pwd."')");
            header("Location:accueil.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Shop - Inscription</title>
    <link rel="stylesheet" href="../css/inscription.css">
</head>
<?php include 'header.php'; ?>
<body>
    <h1 class="title">S'inscrire</h1>
    <form action="inscription.php">
        <div class="input-field">
            <label for="">Nom</label>
            <input type="text" name="nom" placeholder="Nom" required>
        </div>
        <div class="input-field">
            <label for="">Adresse email</label>
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="input-field">
            <label for="">Mot de passe</label>
            <input type="password" name="password" placeholder="Mot de passe" required>
        </div>
        <button type="submit">S'inscrire</button>
    </form>
    <script>
        <?php
            if(isset($_GET['nom']) && isset($_GET['email']) && isset($_GET['password']))
            {
                if(count($account) > 0)
                {
                    echo "alert('Name or email already used');";
                }
            }
        ?>
    </script>
</body>
<?php include 'footer.php'; ?>
</html>