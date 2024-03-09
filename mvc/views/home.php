<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food</title>
    <link rel="stylesheet" href="./public/css/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karma:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/responsive.css">
    <!-- <script defer src="./public/js/main.js"></script> -->
</head>
<body>
    <header>
        <nav class="menu">
            <div class="menu__icon" onclick="handleMenuOpen()" >
                <svg width="30px" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="none">
                    <path fill="#000000" fill-rule="evenodd" d="M19 4a1 1 0 01-1 1H2a1 1 0 010-2h16a1 1 0 011 1zm0 6a1 1 0 01-1 1H2a1 1 0 110-2h16a1 1 0 011 1zm-1 7a1 1 0 100-2H2a1 1 0 100 2h16z"/>
                </svg>
            </div>
            <div class="menu__nav">
                <div class="menu__icon" onclick="handleMenuClose()">
                    <svg fill="#000000" height="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1792 1792" xml:space="preserve"> <path d="M1082.2,896.6l410.2-410c51.5-51.5,51.5-134.6,0-186.1s-134.6-51.5-186.1,0l-410.2,410L486,300.4 c-51.5-51.5-134.6-51.5-186.1,0s-51.5,134.6,0,186.1l410.2,410l-410.2,410c-51.5,51.5-51.5,134.6,0,186.1 c51.6,51.5,135,51.5,186.1,0l410.2-410l410.2,410c51.5,51.5,134.6,51.5,186.1,0c51.1-51.5,51.1-134.6-0.5-186.2L1082.2,896.6z"/> </svg>
                </div>
                <ul class="menu__nav--list">
                    <li class="menu__nav--item">
                        <a href="#">
                            Home
                        </a>
                    </li>
                    <li class="menu__nav--item">
                        <a href="#">
                            Food
                        </a>
                    </li>
                    <li class="menu__nav--item">
                        <a href="#">
                            Chef
                        </a>
                    </li>
                    <li class="menu__nav--item">
                        <a href="#">
                            Email
                        </a>
                    </li>
                </ul>  
            </div>
        </nav>
        <div class="brand">
            <h1>My Food</h1>
        </div>
        <div class="contact">
            <h1>Mail</h1>
        </div>
    </header>
    <main>
        <div class="content">
            <ul class="content__list">
                <li class="content__items">
                    <div class="img">
                        <img src="./public/images/sandwich.jpg" alt="image sandwich">
                    </div>
                    <h1 class="title">
                        The Perfect Sandwich, A Real NYC Classic
                    </h1>
                    <p class="context">
                        Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.
                    </p>
                </li>
                <li class="content__items">
                    <div class="img">
                        <img src="./public/images/steak.jpg" alt="image steak">
                    </div>
                    <h1 class="title">
                        Let Me Tell You About This Steak
                    </h1>
                    <p class="context">
                        Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.
                    </p>
                </li>
                <li class="content__items">
                    <div class="img">
                        <img src="./public/images/cherries.jpg" alt="image cherries">
                    </div>
                    <h1 class="title">
                        Cherries, interrupted
                    </h1>
                    <p class="context">
                        Lorem ipsum text praesent tincidunt ipsum lipsum. What else?
                    </p>
                </li>
                <li class="content__items">
                    <div class="img">
                        <img src="./public/images/wine.jpg" alt="image wine">
                    </div>
                    <h1 class="title">
                        Once Again, Robust Wine and Vegetable Pasta
                    </h1>
                    <p class="context">
                        Lorem ipsum text praesent tincidunt ipsum lipsum.
                    </p>
                </li>
                <li class="content__items">
                    <div class="img">
                        <img src="./public/images/popsicle.jpg" alt="image popsicle">
                    </div>
                    <h1 class="title">
                        All I Need Is a Popsicle
                    </h1>
                    <p class="context">
                        Lorem ipsum text praesent tincidunt ipsum lipsum.
                    </p>
                </li>
                <li class="content__items">
                    <div class="img">
                        <img src="./public/images/sandwich.jpg" alt="image sandwich">
                    </div>
                    <h1 class="title">
                        The Perfect Sandwich, A Real Classic
                    </h1>
                    <p class="context">
                        Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.
                    </p>
                </li>
                <li class="content__items">
                    <div class="img">
                        <img src="./public/images/salmon.jpg" alt="image salmon">
                    </div>
                    <h1 class="title">
                        Salmon For Your Skin
                    </h1>
                    <p class="context">
                        Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.
                    </p>
                </li>
                <li class="content__items">
                    <div class="img">
                        <img src="./public/images/croissant.jpg" alt="image croissant">
                    </div>
                    <h1 class="title">
                        Le French
                    </h1>
                    <p class="context">
                        Lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.
                    </p>
                </li>
            </ul>
            <ul class="page__list">
                <a href="#">
                    <div class="arrow__left">
                        <svg width="30px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg"> <g id="layer1"> <path d="M 11 3.2910156 L 10.646484 3.6464844 L 4.2910156 10 L 10.646484 16.353516 L 11 16.708984 L 11.708984 16 L 11.353516 15.646484 L 5.7089844 10 L 11.353516 4.3535156 L 11.708984 4 L 11 3.2910156 z M 15 3.2910156 L 14.646484 3.6464844 L 8.2910156 10 L 14.646484 16.353516 L 15 16.708984 L 15.708984 16 L 15.353516 15.646484 L 9.7089844 10 L 15.353516 4.3535156 L 15.708984 4 L 15 3.2910156 z " style="fill:#222222; fill-opacity:1; stroke:none; stroke-width:0px;"/></g></svg>
                    </div>
                </a>
                <li class="page__item"><a href="#">1</a></li>
                <li class="page__item"><a href="#">2</a></li>
                <li class="page__item"><a href="#">3</a></li>
                <li class="page__item"><a href="#">4</a></li>
                <a href="#">
                    <div class="arrow__right">
                        <svg width="30px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg"> <g id="layer1"> <path d="M 5 3.2910156 L 4.2910156 4 L 4.6464844 4.3535156 L 10.291016 10 L 4.6464844 15.646484 L 4.2910156 16 L 5 16.708984 L 5.3535156 16.353516 L 11.708984 10 L 5.3535156 3.6464844 L 5 3.2910156 z M 9 3.2910156 L 8.2910156 4 L 8.6464844 4.3535156 L 14.291016 10 L 8.6464844 15.646484 L 8.2910156 16 L 9 16.708984 L 9.3535156 16.353516 L 15.708984 10 L 9.3535156 3.6464844 L 9 3.2910156 z " style="fill:#222222; fill-opacity:1; stroke:none; stroke-width:0px;"/></g></svg>
                    </div>
                </a>
            </ul>
        </div>
        <div class="about">
            <h1 class="title">About Me, The Food Man</h1>
            <div class="chef">
                <img src="./public/images/chef.jpg" alt="image chef">
            </div>
            <p><strong>I am Who I Am!</strong></p>
            <p><i>With Passion For Real, Good Food</i></p>
            <p class="context">
                Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of lorem ipsum and mauris neque quam blog. I want to share my world with you. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.
            </p>
        </div>
    </main>
    <footer>
        <div class="author">
            <h1>FOOTER</h1>
            <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
            <p>Powered by Noobnx</p>
        </div>
        <div class="blog">
            <h1>BLOG POSTS</h1>
            <div class="post">
                <div class="post__img">
                    <img src="./public/images/workshop.jpg" alt="image workshop">
                </div>
                <div class="post__context">
                    <h2>Lorem</h2>
                    <p>Sed mattis nunc</p>
                </div>
            </div>
            <div class="post">
                <div class="post__img">
                    <img src="./public/images/gondol.jpg" alt="image gondol">
                </div>
                <div class="post__context">
                    <h2>Ipsum</h2>
                    <p>Praes tinci sed</p>
                </div>
            </div>
        </div>
        <div class="tags">
            <h1>POPULAR TAGS</h1>
            <ul class="country__list">
                <li class="country__item">
                    <p>Travel</p>
                </li>
                <li class="country__item">
                    <p>VietNam</p>
                </li>
                <li class="country__item">
                    <p>NewYork</p>
                </li>
                <li class="country__item">
                    <p>Dimer</p>
                </li>
                <li class="country__item">
                    <p>Salmon</p>
                </li>
                <li class="country__item">
                    <p>France</p>
                </li>
                <li class="country__item">
                    <p>Drinks</p>
                </li>
                <li class="country__item">
                    <p>Ideas</p>
                </li>
                <li class="country__item">
                    <p>Ideas</p>
                </li>
                <li class="country__item">
                    <p>Flavors</p>
                </li>
                <li class="country__item">
                    <p>Cuisine</p>
                </li>
                <li class="country__item">
                    <p>Chicken</p>
                </li>
                <li class="country__item">
                    <p>Dressing</p>
                </li>
                <li class="country__item">
                    <p>Fried</p>
                </li>
                <li class="country__item">
                    <p>Fish</p>
                </li>
                <li class="country__item">
                    <p>Duck</p>
                </li>
            </ul>
        </div>
    </footer>
    <script src="./public/js/main.js"></script>
</body>
</html>