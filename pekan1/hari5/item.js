var items = [
    [
        "001",
        "Keyboard Logitek",
        60000,
        "Keyboard yang mantap untuk kantoran",
        "logitek.jpg"
    ],
    ["002", "Keyboard MSI", 300000, "Keyboard gaming MSI mekanik", "msi.jpg"],
    [
        "003",
        "Mouse Genius",
        50000,
        "Mouse Genius biar lebih pinter",
        "genius.jpeg"
    ],
    ["004", "Mouse Jerry", 30000, "Mouse yang disukai kucing", "jerry.jpg"]
];

function itemCard(item) {
    return `
    <div class="card col-4" style="width: 18rem;">
        <img src="img/${item[4]}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title" id="${item[1]}">${item[1]}</h5>
            <p class="card-text" id="${item[3]}">${item[3]}</p>
            <p class="card-text">Rp ${item[2]}</p>
            <a href="#" class="btn btn-primary" id="addCart">Tambahkan ke keranjang</a>
        </div>
    </div>`;
}

function fillItems(items, filter){
    var container = document.querySelector("#listBarang")
    container.innerHTML = ""
    if(filter === undefined) filter = ""
    for(let i = 0; i < items.length; i++){
        if(items[i][1].includes(filter)){
            container.innerHTML += itemCard(items[i]);
        }
    }
}

fillItems(items)
