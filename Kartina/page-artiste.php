<?php
$style = './assets/style//artiste/artiste.css';
$title = 'Page Artiste';

require './partials/header.php'
?>
    <section class="page-artiste">

        <div class="description">
            <h1>Aurélien Villette</h1>
            <h4>France</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem dolorem exercitationem in repudiandae minus soluta quae culpa modi doloremque vitae tenetur quia sapiente quas voluptatem, dicta architecto praesentium delectus corporis.
            Magni sequi et fugiat a nulla. Illum a culpa blanditiis ipsam sapiente id, tempora eligendi ex tenetur iusto assumenda voluptatibus nihil eveniet, quo deserunt architecto modi consequatur temporibus velit vero?
            Dignissimos obcaecati ea quaerat nihil modi consequuntur harum est incidunt saepe, dolor temporibus minima culpa, amet praesentium suscipit libero et ducimus accusamus blanditiis nesciunt porro voluptate? Labore quaerat placeat in.
            Ducimus fugit ab sequi dolores officiis nemo cumque, earum, sint veniam enim voluptatibus, suscipit aut dolorem quasi tempora consectetur itaque velit quia obcaecati nostrum accusantium. Sequi itaque iure culpa odio.
            Possimus autem nam ullam hic vero commodi, officia, quis eum deleniti distinctio necessitatibus eligendi dolorum culpa excepturi, accusamus amet impedit facere tempore incidunt explicabo animi! Ea accusamus obcaecati nesciunt vero.</p>
        </div>

        <div class="reseau_sociaux">
            <div class="twitter">
                <a href="#">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
            </div>
            <div class="facebook">
                <a href="#">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
            </div>
            <div class="googlePlus">
                <a href="#">
                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                </a>
            </div>
            <div class="pinterest">
                <a href="#">
                <i class="fa fa-pinterest" aria-hidden="true"></i>    
                </a>
            </div>
        </div>

        <div class="galerie">
            <div class="photo">
                <figure>
                    <img src="./assets/image/page-artiste/photo1.jpg" alt="">
                    <figcaption>
                        <div class="titre_photo">
                            Verticalite Volute II Pologne
                        </div> 
                        <div class="prix_photo">
                            A partir de 89,00€
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
    
<?php
require './partials/footer.php'
?>