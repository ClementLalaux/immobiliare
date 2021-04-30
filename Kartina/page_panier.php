<?php

$style = './assets/style/page-panier/page-panier.css';

require './partials/header.php';

?>

    <section class="page-panier">
        <h1>Panier</h1>
        <div id="description">
            <div class="photo">
                <img src="./assets/img/photo1.jpg" alt="">
            </div>
            <div class="artiste">
                <div class="artist-name">juliette jourdain</div>
                <div class="produit-name">the wonders arna</div>
                <div class="ed-limite">Photographe montée sur aluminium édition limitée 500 exemplaires</div>
            </div>
            <div class="caracteristique">
                <div class="format">Format :</div>
                <div class="f-detail">Grand - 60 x 75 cm</div>
                <div class="finition">Finition :</div>
                <div class="fi-detail">TIRAGE SUR PAPIER PHOTO</div>
                <div class="cadre">Cadre :</div>
                <div class="c-detail">Sans encadrement</div>
            </div>
            <div class="quantite">
                <div class="title">Quantité</div>
                <input type="number" name="" id="">
                <div id="delete">
                    <a href="">
                        <span class="icone_x">×</span> <span>Supprimer</span>
                    </a>
                </div>
            </div>
            <div class="prix">
                110,00 €
            </div>
        </div>
        <div class="lien_code">
            <div class="lien-achat">
                <a href="#">
                    ◄ Continuer mes achats
                </a>
            </div>
            <div class="code_promo">
                <div class="form">
                    <form action="" method="post">
                        <input type="checkbox" name="code" id="code" value="code" onclick="check(this)">
                        <label for="code">J'ai une carte cadeau / un code promo</label>
                        <div id="enter_code">
                            <input type="text">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="total">
            <div class="total_group">
                <div class="titre_total">total</div>
                <div class="prix_tva">
                    <div class="prix">
                        110,00€
                    </div>
                    <div class="tva">
                        dont TVA 20% : 18,33€
                    </div>
                </div>
            </div>
        </div>
        <div class="lien_valider">
            <a href="#">Valider ma commande</a>
        </div>
        <div class="paiement_secure">
            <div class="titre_secure">
                <div class="secure">
                    Paiement sécurisé 
                </div>
                <div class="icone_cadenna"><img src="./assets/img/icone/padlock.png" alt="">
                </div>
            </div>
        </div>
        <div class="icone_secure">
            <div class="icone_paiement">
                <div><img class="cb-icone" src="./assets/img/icone/cb.png" alt=""></div>
                <div><img class="paypal-icone" src="./assets/img/icone/pay-pal.png" alt=""></div>
                <div><img class="visa-icone" src="./assets/img/icone/VISA.png" alt=""></div>
                <div><img class="mc-icone" src="./assets/img/icone/ms.png" alt=""></div>
                <div><img class="ae-icone" src="./assets/img/icone/cb-amex.png" alt=""></div>
            </div>
        </div>
    </section>

<script src="./assets/js/page_panier.js"></script>
<?php require './partials/footer.php'; ?>
