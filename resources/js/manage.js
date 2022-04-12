const categories =
{
  "ACCESSRORIES": ["Belts & Suspenders", "Dog Accessories", "Eyewear", "Face Masks", "Gloves", "Hats", "Jewelry", "Keychains", "Pocket Squares & Tie Bars", "Scarves", "Socks", "Tech", "Ties", "Umbrellas", "Wallets & Card Holders", "Watches"],
  "BAGGS": ["Backpacks", "Briefcases", "Duffle Bags", "Messenger Bags", "Pouches & Document Holders", "Tote Bags", "Travel Bags"],
  "CLOTHING": ["Jackets & Coats", "Jeans", "Pants", "Shirts", "Shorts", "Suits & Blazers", "Sweaters", "Swimwear", "Tops", "Underwear & Loungewear"],
  "SHOES": ["Boat Shoes & Moccasins", "Boots", "Espadrilles", "Lace Ups & Oxfords", "Monkstraps", "Sandals", "Slippers & Loafers2", "Sneakers"],
};

//選択されたジャンルを受け取って処理をする -- [4]
function createMenu(selectGenre) {
    let categories = document.getElementById("categories2");
    categories.disabled = false;
    categories.innerHTML = "";
    let option = document.createElement("option");
    option.innerHTML = "料理を選択してください";
    option.defaultSelected = true;
    option.disabled = true;
    categories.appendChild(option);

    categories[selectGenre].forEach((menu) => {
        let option = document.createElement("option");
        option.innerHTML = menu;
        categories.appendChild(option);
    });
}