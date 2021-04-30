function onglet(event){
    let myAccount = document.getElementById('myAccount')
    let infoShop = document.getElementById('infoShop')
    let user = document.getElementById('user')
    let shop = document.getElementById('shop')
    let divP = event.target.parentNode.parentNode
    let changeData = document.getElementById('changeData')
    let changeUser = document.getElementById('changeUser')
    let changeCard = document.getElementById('changeCard')
    let changePayment = document.getElementById('changePayment')

    console.log(divP);
    
    if(divP == myAccount){
        user.style.display = "flex";
        shop.style.display = "none";
        changeData.style.display = "none";
        changePayment.style.display = "none";
        myAccount.style.backgroundColor = 'white'
        infoShop.style.backgroundColor = 'silver'        
        
    }else if(divP == infoShop){
        shop.style.display = "flex";
        user.style.display = "none";
        changeData.style.display = "none";
        changePayment.style.display = "none";
        myAccount.style.backgroundColor = 'silver'
        infoShop.style.backgroundColor = 'white'

    }else if(divP == changeUser){
        changeData.style.display = "flex";
        user.style.display = "none";
        shop.style.display = "none";
        changePayment.style.display = "none";
        myAccount.style.backgroundColor = 'white'
        infoShop.style.backgroundColor = 'silver'

    }else if(divP == changeCard){
        changePayment.style.display = "flex";
        user.style.display = "none";
        shop.style.display = "none";
        changeData.style.display = "none";
        myAccount.style.backgroundColor = 'silver'
        infoShop.style.backgroundColor = 'white'
    }

}

for(link of document.getElementsByTagName('a')){
    link.addEventListener('click', ()=> {
        onglet(event)
    })
}