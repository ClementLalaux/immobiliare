<?php
$title = 'shop';
$style = './assets/style/catalogue/catalogue.css';
require './partials/header.php';

use Src\Photo;

$limit = 12;

$themes = DB::query('SELECT * FROM theme');
$formats = DB::query('SELECT * from format');
$orientations = DB::query('SELECT * from orientation');

$products = DB::query('SELECT * from photo INNER JOIN artiste ON photo.artiste_id = artiste.id LIMIT ' . $limit);

?>

<section class="shop">

    <div id="navbar" class="navbar">
        <h2>Affiner votre recherche</h2>

        <form action="photographies.php" id="filtrage" class="filtrage">

            <div>
                <label for="NbrProducts">Afficher</label>
                <select name="NbrProducts" id="NbrProducts">
                    <option value="12">12</option>
                    <option value="24">24</option>
                    <option value="48">48</option>
                </select>
                <span>par page</span>
            </div>
            <div>
                <label for="Tri">Trier par</label>
                <select name="Tri" id="Tri">
                    <option value="" selected>--</option>
                    <option value="asc" >Prix croissant</option>
                    <option value="desc">Prix décroissant</option>
                    <option value="AtoZ">De A à Z</option>
                    <option value="ZtoA">De Z à A</option>
                    <option value="stock">En stock</option>
                </select>
                <span>par page</span>
            </div>
            <input type="number" name="offset" id="offset" value = 1 min=1>


            <div class="divTheme">
                <div class="menu">
                    <h3 onclick="openMenu(event)">Thème</h3>
                </div>
                <div id="filtreThème">
                    <ul>
                        <?php foreach ($themes as $theme) { ?>
                            <li class="theme"><input type="radio" name="filters[theme_id]" value="<?= $theme->id ?>" id="theme-<?= $theme->id ?>"><label for="theme-<?= $theme->id ?>"><?= mb_ucfirst($theme->theme) ?></label></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>

            <div class="divFormat">
                <h3 onclick="openMenu(event)">Format</h3>
                <div id="filtreFormat">
                    <ul>
                        <?php foreach ($formats as $format) { ?>
                            <li class="format"><input type="radio" name="filters[format_id]" id="size-<?= $format->id ?>" value="<?= $format->id ?>"><img src="./assets/image/format/size-<?= $format->cover ?>.jpg" alt=""><label for="size-<?= $format->id ?>"><?= mb_ucfirst($format->format); ?></label></li>
                        <?php
                        } ?>
                    </ul>

                </div>
            </div>

            <div class="divOrientation">
                <h3 onclick="openMenu(event)">Orientation</h3>
                <div id="filtreOrientation">
                    <div class="orient" id="orientation">
                        <ul>
                            <?php foreach ($orientations as $orientation) { ?>
                                <li class="orientation"><input type="radio" name="filters[orientation_id]" id="orientation-<?= $orientation->id ?>" value="<?= $orientation->id ?>"><img src="./assets/image/orientation/orient-<?= $orientation->cover ?>.jpg" alt=""><label for="orientation-<?= $orientation->id ?>"><?= mb_ucfirst($orientation->orientation); ?></label></li>
                            <?php
                            } ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="divPrix">
                <h3 onclick="openMenu(event)">Prix</h3>
                <div id="filtrePrix">
                    <ul>
                        <li class="prix"><input type="radio" name="filters[prix]" id="50" value="0-50"><label for="1"> Moins de 50€ </label></li>
                        <li class="prix"><input type="radio" name="filters[prix]" id="100" value="50-100"><label for="2">De 50€ à 100€ </label></li>
                        <li class="prix"><input type="radio" name="filters[prix]" id="200" value="100-200"><label for="3">De 100€ à 200€ </label></li>
                        <li class="prix"><input type="radio" name="filters[prix]" id="500" value="200-500"><label for="3">De 200€ à 500€ </label></li>
                        <li class="prix"><input type="radio" name="filters[prix]" id="1000" value="500-1000"><label for="4">De 500€ à 1000€ </label></li>

                    </ul>
                </div>
            </div>

        </form>

    </div>

    <div id="catalogue" class="catalogue">

        <div class="filtre" id="filtre">
            <h3>Filtre : </h3>

        </div>

        <div id="post-loading" class="loader" hidden>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>

        <div id="photographies" class="photographies">

            <?php foreach ($products as $product) {
                $photo = new Photo($product);
                echo $photo->view();
            } ?>

        </div>

        <div class="loader" id="loadPages" hidden>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
</section>

<script src="./script/shop.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>


<?php require './partials/footer.php'; ?>