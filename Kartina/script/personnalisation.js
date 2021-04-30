function openPerso(event) {

    let format = document.getElementById("format");
    let finition = document.getElementById("finition");
    let cadre = document.getElementById("cadre");
    
    let btnFormat = document.getElementById("btn_format");
    let btnFinition = document.getElementById("btn_finition");
    let btnPanier = document.getElementById("btn_panier");
    let btnReturn = document.getElementById("btn_return");
    let btnReturn2 = document.getElementById("btn_return2");

    let titreFormat = document.getElementById("titre-format");
    let titreFinition = document.getElementById("titre-finition");
    let titreCadre = document.getElementById("titre-cadre");

    if(event.currentTarget.dataset.type === "format"){

        format.style.display = "block";
        finition.style.display = "none";
        cadre.style.display = "none";
        btnFormat.style.display = "block";
        btnFinition.style.display = "none";
        btnPanier.style.display = "none";
        btnReturn.style.display = "none";
        btnReturn2.style.display = "none";
        titreFormat.style.borderBottom = "4px black solid";
        titreFinition.style.borderBottom = "none";
        titreCadre.style.borderBottom = "none";

    }else if(event.currentTarget.dataset.type === "finition"){

        format.style.display = "none";
        finition.style.display = "block";
        cadre.style.display = "none";
        btnFormat.style.display = "none";
        btnFinition.style.display = "block";
        btnPanier.style.display = "none";
        btnReturn.style.display = "block";
        btnReturn2.style.display = "none";
        titreFormat.style.borderBottom = "none";
        titreFinition.style.borderBottom = "4px black solid";
        titreCadre.style.borderBottom = "none";

    }else if (event.currentTarget.dataset.type === "cadre"){

        format.style.display = "none";
        finition.style.display = "none";
        cadre.style.display = "block";
        btnFormat.style.display = "none";
        btnFinition.style.display = "none";
        btnPanier.style.display = "block";
        btnReturn.style.display = "none";
        btnReturn2.style.display = "block";
        titreFormat.style.borderBottom = "none";
        titreFinition.style.borderBottom = "none";
        titreCadre.style.borderBottom = "4px black solid";
    }


    //-------------------\\

    
    if(event.currentTarget.dataset.btn === "btn_format"){

        format.style.display = "none";
        finition.style.display = "block";
        cadre.style.display = "none";
        btnFormat.style.display = "none";
        btnFinition.style.display = "block";
        btnReturn.style.display = "block";
        titreFormat.style.borderBottom = "none";
        titreFinition.style.borderBottom = "4px black solid";
        titreCadre.style.borderBottom = "none";
        
    
    }else if(event.currentTarget.dataset.btn === "btn_finition"){

        format.style.display = "none";
        finition.style.display = "none";
        cadre.style.display = "block";
        btnFormat.style.display = "none";
        btnFinition.style.display = "none";
        btnPanier.style.display = "block";
        btnReturn.style.display = "none";
        btnReturn2.style.display = "block";
        titreFormat.style.borderBottom = "none";
        titreFinition.style.borderBottom = "none";
        titreCadre.style.borderBottom = "4px black solid";
        
    }else if (event.currentTarget.dataset.btn === "btn_panier"){

        format.style.display = "none";
        finition.style.display = "none";
        cadre.style.display = "block";
        btnFormat.style.display = "none";
        btnFinition.style.display = "none";
        btnPanier.style.display = "block";
        btnReturn.style.display = "block";
        btnReturn2.style.display = "block";
    }


    //------------------\\


    if(event.currentTarget.dataset.btn === "btn_return1"){
        format.style.display = "block";
        finition.style.display = "none";
        cadre.style.display = "none";
        btnFormat.style.display = "none";
        btnFinition.style.display = "block";
        btnPanier.style.display = "none";
        btnReturn.style.display = "none";
        titreFormat.style.borderBottom = "4px black solid";
        titreFinition.style.borderBottom = "none";
        titreCadre.style.borderBottom = "none";
        
    }else if (event.currentTarget.dataset.btn === "btn_return2"){
        format.style.display = "none";
        finition.style.display = "block";
        cadre.style.display = "none";
        btnFormat.style.display = "none";
        btnFinition.style.display = "block";
        btnPanier.style.display = "none";
        btnReturn.style.display = "block";
        btnReturn2.style.display = "none";
        titreFormat.style.borderBottom = "none";
        titreFinition.style.borderBottom = "4px black solid";
        titreCadre.style.borderBottom = "none";
    }

}


//---------------\\


let perso = {
    "format": {
      "collector": {
        "3": [
          "1",
          "2",
          "3",
          "4",
          "5"
        ],
        "4": [
          "1",
          "2",
          "3",
          "4",
          "5"
        ],
        "5": "[]"
      },
      "géant": {
        "3": [
          "1",
          "2",
          "3",
          "4",
          "5"
        ],
        "4": [
          "1",
          "2",
          "3",
          "4",
          "5"
        ],
        "5": "[]"
      },
      "grand": {
        "3": [
          "1",
          "2",
          "3",
          "4",
          "5"
        ],
        "4": [
          "1",
          "2",
          "3",
          "4",
          "5"
        ],
        "5": "[]"
      },
      "classique": {
        "blackout": {
          "cadre": [
            "6",
            "7",
            "8",
            "9"
          ]
        },
        "whiteout": {
          "cadre": [
            "6",
            "7",
            "8",
            "9"
          ]
        }
      }
    }
  }


let myPerso = JSON.parse(perso, function(name, value) {
  if (name === "classique") {
    value = "blackout"
  }
})



    


