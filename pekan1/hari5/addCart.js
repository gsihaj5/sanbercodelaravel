var count = 0;
function addCart(){
    count++
    setCartValue()

}

function setCartValue(){
    var cartCount = document.querySelector(".cartCount")
    cartCount.innerHTML = `(${count})`
}

setCartValue()
