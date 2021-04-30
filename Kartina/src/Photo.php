<?php

namespace Src;

class Photo{
    public $url;
    public $artist;
    public $artist_id;
    public $theme_id;
    public $price;
    public $title;
    public $id;
    public $devise;

    public function __construct($photo){
        $this->url = $photo->url;
        $this->artist_id = $photo->artiste_id;
        $this->theme_id = $photo->theme_id;
        $this->artist = mb_ucfirst($photo->prenom) . ' '. mb_ucfirst($photo->nom);
        $this->title = mb_ucfirst($photo->titre);
        $this->price = number_format($photo->prix, 2);
        $this->devise = '€';
        $this->id = $photo->id;
    }

    public function view(){


        return '        
            <article>
                <figure>
                    <div>
                        <img src="'.$this->url.'"alt="'.$this->title.'">
                    </div>
                    <figcaption>
                        <div>
                            <div>
                                <p><span><a href="">'.$this->artist.',</a></span> <span><a href="page-produit.php"> '.$this->title.'</a></span></p>
                                <p>Edition limitée</p>
                            </div>
                                <div><span>à partir de </span><span>'.$this->price. $this->devise.'</span></div>
                        </div>
                    </figcaption>
                </figure>
            </article>
        ';
    }
}