
    @extends('layouts.main')

    @section('content')
    <div class="container">
        <header class="hero">
            <h1>Welcome to Game Key Store</h1>
            <p>Your one-stop shop for the best game keys!</p>
        </header>

        <section class="featured-games">
            <h2>Featured Games</h2>
            <div class="game-list">
                <div class="game-item">
                    <img src="path/to/game1.jpg" alt="Game 1">
                    <h3>Game Title 1</h3>
                    <p>Price: $19.99</p>
                    <a href="#" class="btn">Buy Now</a>
                </div>
                <div class="game-item">
                    <img src="path/to/game2.jpg" alt="Game 2">
                    <h3>Game Title 2</h3>
                    <p>Price: $29.99</p>
                    <a href="#" class="btn">Buy Now</a>
                </div>
                <div class="game-item">
                    <img src="path/to/game3.jpg" alt="Game 3">
                    <h3>Game Title 3</h3>
                    <p>Price: $39.99</p>
                    <a href="#" class="btn">Buy Now</a>
                </div>
            </div>
        </section>

        <section class="promotions">
            <h2>Current Promotions</h2>
            <p>Check out our latest discounts and offers!</p>
            <ul>
                <li>10% off on all pre-orders!</li>
                <li>Buy 2 get 1 free on selected titles!</li>
            </ul>
        </section>
    </div>
    @endsection
