<link rel="stylesheet" href="../css/header.css">
<header>
    <div class="left">
        <?php
            if(isset($_GET['id']))
            {
                echo '<a href="accueil.php?id='.$_GET['id'].'">
                    <img src="../img/sun.png" alt="">
                    </a>';
            }
            else
            {
                echo '<img src="../img/sun.png" alt="">';
            }
        ?>
    </div>
    <div class="right">
        <?php
            if(isset($_GET['id']))
            {
                echo '<div class="logos">
                <a href="profil.php?id="><img src="../svg/person-svgrepo-com.svg" alt=""></a>
                <a href="favoris.php?id="><img src="../svg/black-heart-svgrepo-com.svg" alt=""></a>
                <a href="rechercher.php?id="><img src="../svg/icons8-search.svg" alt=""></a>
                <a href="panier.php?id="><img src="../svg/shopping-cart-outline-svgrepo-com.svg" alt=""></a>
                <a href="index.php"><img src="../svg/exit-svgrepo-com.svg" alt=""></a>
                </div>';
            }
        ?>
    </div>
</header>