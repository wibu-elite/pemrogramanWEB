const createNav = () => {
    let nav = document.querySelector('.navbar')

    nav.innerHTML = `
    <nav class="navbar">
    <div class="nav">
        <img src="img/dark-logo.png" class="brand-logo" alt="">
        <div class="nav-items">
            <div class="search">
                <input type="text" class="search-box" placeholder="search product">
                <button class="search-btn">search</button>
            </div>
            <a href="#"><img src="img/user.png" alt=""></a>
            <a href="#"><img src="img/cart.png" alt=""></a>
        </div>
    </div>
</nav>
<ul class="links-container">
    <li class="link-item"><a href="#" class="link">Home</a></li>
    <li class="link-item"><a href="#" class="link">Accessories</a></li>
    <li class="link-item"><a href="#" class="link">Smartphone</a></li>
    <li class="link-item"><a href="#" class="link">Appliances</a></li>
    <li class="link-item"><a href="#" class="link">About Us</a></li>
</ul>  
    `;

 
}
createNav();