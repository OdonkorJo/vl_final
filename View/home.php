<?php
include "../Settings/core.php";
isLoggedIn();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="../css/home.css">
</head>

<body>
    <header>
        <div class="container">
            <h1>Welcome to The Vineyard Lodge</h1>
            <nav>
                <a href="../action/order_action.php" name="cart">Cart</a>
                <a href="login.php" name="logout">Logout</a>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <section class="welcome">
                <h2>The Vineyard Lodge</h2>
                <p>Discover a world of fresh and delicious juices made from the finest fruits and ingredients.</p>
            </section>
            <section class="juices">
                <h2>Our Juices</h2>
                    <ul>
                        <li>
                            <img src="../JuiceImages/orange.jpg" width=150 alt="Orange Juice">
                            <a href="#"><b>Orange Juice</b> GHS 10.50</a>
                            <form name="orangeJuiceForm" action="../action/order_action.php" method="post">
                                <input type="hidden" name="juiceName" value="Orange Juice">
                                <input type="hidden" name="juicePrice" value="10.50">
                                <button type="submit" name="order">Order</button>
                            </form>
                        </li>

                        <li>
                            <img src="../JuiceImages/apple.jpg" width=150 alt="Apple Juice">
                            <a href="#"><b>Apple Juice</b> GHS 9.25</a>
                            <form name="appleJuiceForm" action="../action/order_action.php" method="post">
                                <input type="hidden" name="juiceName" value="Apple Juice">
                                <input type="hidden" name="juicePrice" value="9.25">
                                <button type="submit" name="order">Order</button>
                            </form>
                        </li>


                        <li>
                            <img src="../JuiceImages/pineapple.jpg" width=150 alt="Pineapple Juice">
                            <a href="#"><b>Pineapple Juice</b> GHS 11.75</a>
                            <form name="pineappleJuiceForm" action="../action/order_action.php" method="post">
                                <input type="hidden" name="juiceName" value="Pineapple Juice">
                                <input type="hidden" name="juicePrice" value="11.75">
                                <button type="submit" name="order">Order</button>
                            </form>
                        </li>

                        <li>
                            <img src="../JuiceImages/grape.jpg" width=150 alt="Grape Juice">
                            <a href="#"><b>Grape Juice</b> GHS 12.00</a>
                            <form name="grapeJuiceForm" action="../action/order_action.php" method="post">
                                <input type="hidden" name="juiceName" value="Grape Juice">
                                <input type="hidden" name="juicePrice" value="12.00">
                                <button type="submit" name="order">Order</button>
                            </form>
                        </li>

                        <li>
                            <img src="../JuiceImages/mango.jpg" width=150 alt="Mango Juice">
                            <a href="#"><b>Mango Juice</b> GHS 13.50</a>
                            <form name="mangoJuiceForm" action="../action/order_action.php" method="post">
                                <input type="hidden" name="juiceName" value="Mango Juice">
                                <input type="hidden" name="juicePrice" value="13.50">
                                <button type="submit" name="order">Order</button>
                            </form>
                        </li>
                        <li>
                            <img src="../JuiceImages/strawberry.jpg" width=150 alt="Strawberry Juice">
                            <a href="#"><b>Strawberry Juice</b> GHS 14.25</a>
                            <form name="strawberryJuiceForm" action="../action/order_action.php" method="post">
                                <input type="hidden" name="juiceName" value="Strawberry Juice">
                                <input type="hidden" name="juicePrice" value="14.25">
                                <button type="submit" name="order">Order</button>
                            </form>
                        </li>

                        <li>
                            <img src="../JuiceImages/watermelon.jpg" width=150 alt="Watermelon Juice">
                            <a href="#"><b>Watermelon Juice</b> GHS 10.75</a>
                            <form name="watermelonJuiceForm" action="../action/order_action.php" method="post">
                                <input type="hidden" name="juiceName" value="Watermelon Juice">
                                <input type="hidden" name="juicePrice" value="10.75">
                                <button type="submit" name="order">Order</button>
                            </form>
                        </li>

                        <li>
                            <img src="../JuiceImages/banana.jpg" width=150 alt="Banana Juice">
                            <a href="#"><b>Banana Juice</b> GHS 9.75</a>
                            <form name="bananaJuiceForm" action="../action/order_action.php" method="post">
                                <input type="hidden" name="juiceName" value="Banana Juice">
                                <input type="hidden" name="juicePrice" value="9.75">
                                <button type="submit" name="order">Order</button>
                            </form>
                        </li>

                        <li>
                            <img src="../JuiceImages/peach.jpg" width=150 alt="Peach Juice">
                            <a href="#"><b>Peach Juice</b> GHS 11.50</a>
                            <form name="peachJuiceForm" action="../action/order_action.php" method="post">
                                <input type="hidden" name="juiceName" value="Peach Juice">
                                <input type="hidden" name="juicePrice" value="11.50">
                                <button type="submit" name="order">Order</button>
                            </form>
                        </li>

                        <li>
                            <img src="../JuiceImages/passionfruit.jpg" width=150 alt="Passionfruit Juice">
                            <a href="#"><b>Passionfruit Juice</b> GHS 15.00</a>
                            <form name="passionfruitJuiceForm" action="../action/order_action.php" method="post">
                                <input type="hidden" name="juiceName" value="Passionfruit Juice">
                                <input type="hidden" name="juicePrice" value="15.00">
                                <button type="submit" name="order">Order</button>
                            </form>
                        </li>

                        <li>
                            <img src="../JuiceImages/lemon.jpg" width=150 alt="Lemon Juice">
                            <a href="#"><b>Lemon Juice</b> GHS 8.50</a>
                            <form name="lemonJuiceForm" action="../action/order_action.php" method="post">
                                <input type="hidden" name="juiceName" value="Lemon Juice">
                                <input type="hidden" name="juicePrice" value="8.50">
                                <button type="submit" name="order">Order</button>
                            </form>
                        </li>

                        <li>
                            <img src="../JuiceImages/ginger.jpg" width=150 alt="Ginger Juice">
                            <a href="#"><b>Ginger Juice</b> GHS 16.25</a>
                            <form name="gingerJuiceForm" action="../action/order_action.php" method="post">
                                <input type="hidden" name="juiceName" value="Ginger Juice">
                                <input type="hidden" name="juicePrice" value="16.25">
                                <button type="submit" name="order">Order</button>
                            </form>
                        </li>

                        <li>
                            <img src="../JuiceImages/guava.jpg" width=150 alt="Guava Juice">
                            <a href="#"><b>Guava Juice</b> GHS 12.75</a>
                            <form name="guavaJuiceForm" action="../action/order_action.php" method="post">
                                <input type="hidden" name="juiceName" value="Guava Juice">
                                <input type="hidden" name="juicePrice" value="12.75">
                                <button type="submit" name="order">Order</button>
                            </form>
                        </li>

                        <li>
                            <img src="../JuiceImages/papaya.jpg" width=150 alt="Papaya Juice">
                            <a href="#"><b>Papaya Juice</b> GHS 10.25</a>
                            <form name="papayaJuiceForm" action="../action/order_action.php" method="post">
                                <input type="hidden" name="juiceName" value="Papaya Juice">
                                <input type="hidden" name="juicePrice" value="10.25">
                                <button type="submit" name="order">Order</button>
                            </form>
                        </li>

                        <li>
                            <img src="../JuiceImages/cranberry.jpg" width=150 alt="Cranberry Juice">
                            <a href="#"><b>Cranberry Juice</b> GHS 17.50</a>
                            <form name="cranberryJuiceForm" action="../action/order_action.php" method="post">
                                <input type="hidden" name="juiceName" value="Cranberry Juice">
                                <input type="hidden" name="juicePrice" value="17.50">
                                <button type="submit" name="order">Order</button>
                            </form>
                        </li>

                        <li>
                            <img src="../JuiceImages/kiwi.jpg" width=150 alt="Kiwi Juice">
                            <a href="#"><b>Kiwi Juice</b> GHS 14.75</a>
                            <form name="kiwiJuiceForm" action="../action/order_action.php" method="post">
                                <input type="hidden" name="juiceName" value="Kiwi Juice">
                                <input type="hidden" name="juicePrice" value="14.75">
                                <button type="submit" name="order">Order</button>
                            </form>
                        </li>

                        <li>
                            <img src="../JuiceImages/carrot.jpg" width=150 alt="Carrot Juice">
                            <a href="#"><b>Carrot Juice</b> GHS 11.25</a>
                            <form name="carrotJuiceForm" action="../action/order_action.php" method="post">
                                <input type="hidden" name="juiceName" value="Carrot Juice">
                                <input type="hidden" name="juicePrice" value="11.25">
                                <button type="submit" name="order">Order</button>
                            </form>
                        </li>

                        <li>
                            <img src="../JuiceImages/tomato.jpg" width=150 alt="Tomato Juice">
                            <a href="#"><b>Tomato Juice</b> GHS 9.50</a>
                            <form name="tomatoJuiceForm" action="../action/order_action.php" method="post">
                                <input type="hidden" name="juiceName" value="Tomato Juice">
                                <input type="hidden" name="juicePrice" value="9.50">
                                <button type="submit" name="order">Order</button>
                            </form>
                        </li>

                        <li>
                            <img src="../JuiceImages/lime.jpg" width=150 alt="Lime Juice">
                            <a href="#"><b>Lime Juice</b> GHS 13.25</a>
                            <form name="limeJuiceForm" action="../action/order_action.php" method="post">
                                <input type="hidden" name="juiceName" value="Lime Juice">
                                <input type="hidden" name="juicePrice" value="13.25">
                                <button type="submit" name="order">Order</button>
                            </form>
                        </li>

                        <li>
                            <img src="../JuiceImages/coconut.jpg" width=150 alt="Coconut Juice">
                            <a href="#"><b>Coconut Juice</b> GHS 18.00</a>
                            <form name="coconutJuiceForm" action="../action/order_action.php" method="post">
                                <input type="hidden" name="juiceName" value="Coconut Juice">
                                <input type="hidden" name="juicePrice" value="18.00">
                                <button type="submit" name="order">Order</button>
                            </form>
                        </li>

                    </ul>
            </section>


            <section class="ingredients">
                <h2>Pick from our amazing list of ingredients to make your very own fantastic beverage.</h2>
                <form id="ingredient-form" name="curated_ingredients" method="post">
                    <div class="textbox">
                        <input type="text" name="nameOfJuice" placeholder="Name Your Juice" required></input>
                    </div>
                    <div class="checkbox-group">
                        <input type="checkbox" id="apple" name="ingredient" value="Apple">
                        <label for="apple">Apple</label><br>
                        <input type="checkbox" id="banana" name="ingredient" value="Banana">
                        <label for="banana">Banana</label><br>
                        <input type="checkbox" id="orange" name="ingredient" value="Orange">
                        <label for="orange">Orange</label><br>
                        <input type="checkbox" id="pear" name="ingredient" value="Pear">
                        <label for="pear">Pear</label><br>
                        <input type="checkbox" id="grape" name="ingredient" value="Grape">
                        <label for="grape">Grape</label><br>
                        <input type="checkbox" id="strawberry" name="ingredient" value="Strawberry">
                        <label for="strawberry">Strawberry</label><br>
                        <input type="checkbox" id="blueberry" name="ingredient" value="Blueberry">
                        <label for="blueberry">Blueberry</label><br>
                        <input type="checkbox" id="raspberry" name="ingredient" value="Raspberry">
                        <label for="raspberry">Raspberry</label><br>
                        <input type="checkbox" id="pineapple" name="ingredient" value="Pineapple">
                        <label for="pineapple">Pineapple</label><br>
                        <input type="checkbox" id="watermelon" name="ingredient" value="Watermelon">
                        <label for="watermelon">Watermelon</label><br>
                        <input type="checkbox" id="kiwi" name="ingredient" value="Kiwi">
                        <label for="kiwi">Kiwi</label><br>
                        <input type="checkbox" id="peach" name="ingredient" value="Peach">
                        <label for="peach">Peach</label><br>
                        <input type="checkbox" id="plum" name="ingredient" value="Plum">
                        <label for="plum">Plum</label><br>
                        <input type="checkbox" id="mango" name="ingredient" value="Mango">
                        <label for="mango">Mango</label><br>
                        <input type="checkbox" id="cherry" name="ingredient" value="Cherry">
                        <label for="cherry">Cherry</label><br>
                        <input type="checkbox" id="lemon" name="ingredient" value="Lemon">
                        <label for="lemon">Lemon</label><br>
                        <input type="checkbox" id="lime" name="ingredient" value="Lime">
                        <label for="lime">Lime</label><br>
                        <input type="checkbox" id="grapefruit" name="ingredient" value="Grapefruit">
                        <label for="grapefruit">Grapefruit</label><br>
                        <input type="checkbox" id="cantaloupe" name="ingredient" value="Cantaloupe">
                        <label for="cantaloupe">Cantaloupe</label><br>
                        <input type="checkbox" id="honeydew" name="ingredient" value="Honeydew">
                        <label for="honeydew">Honeydew</label><br>
                        <input type="checkbox" id="pomegranate" name="ingredient" value="Pomegranate">
                        <label for="pomegranate">Pomegranate</label><br>
                        <input type="checkbox" id="coconut" name="ingredient" value="Coconut">
                        <label for="coconut">Coconut</label><br>
                        <input type="checkbox" id="avocado" name="ingredient" value="Avocado">
                        <label for="avocado">Avocado</label><br>
                        <input type="checkbox" id="papaya" name="ingredient" value="Papaya">
                        <label for="papaya">Papaya</label><br>
                        <input type="checkbox" id="apricot" name="ingredient" value="Apricot">
                        <label for="apricot">Apricot</label><br>
                        <input type="checkbox" id="nectarine" name="ingredient" value="Nectarine">
                        <label for="nectarine">Nectarine</label><br>
                        <input type="checkbox" id="fig" name="ingredient" value="Fig">
                        <label for="fig">Fig</label><br>
                        <input type="checkbox" id="passionfruit" name="ingredient" value="Passionfruit">
                        <label for="passionfruit">Passionfruit</label><br>
                        <input type="checkbox" id="guava" name="ingredient" value="Guava">
                        <label for="guava">Guava</label><br>
                        <input type="checkbox" id="cucumber" name="ingredient" value="Cucumber">
                        <label for="cucumber">Cucumber</label><br>
                        <input type="checkbox" id="carrot" name="ingredient" value="Carrot">
                        <label for="carrot">Carrot</label><br>
                        <input type="checkbox" id="tomato" name="ingredient" value="Tomato">
                        <label for="tomato">Tomato</label><br>
                        <input type="checkbox" id="bell-pepper" name="ingredient" value="Bell Pepper">
                        <label for="bell-pepper">Bell Pepper</label><br>
                        <input type="checkbox" id="spinach" name="ingredient" value="Spinach">
                        <label for="spinach">Spinach</label><br>
                        <input type="checkbox" id="broccoli" name="ingredient" value="Broccoli">
                        <label for="broccoli">Broccoli</label><br>
                        <input type="checkbox" id="lettuce" name="ingredient" value="Lettuce">
                        <label for="lettuce">Lettuce</label><br>
                        <input type="checkbox" id="cabbage" name="ingredient" value="Cabbage">
                        <label for="cabbage">Cabbage</label><br>
                        <input type="checkbox" id="celery" name="ingredient" value="Celery">
                        <label for="celery">Celery</label><br>
                        <input type="checkbox" id="kale" name="ingredient" value="Kale">
                        <label for="kale">Kale</label><br>
                        <input type="checkbox" id="zucchini" name="ingredient" value="Zucchini">
                        <label for="zucchini">Zucchini</label><br>
                        <input type="checkbox" id="eggplant" name="ingredient" value="Eggplant">
                        <label for="eggplant">Eggplant</label><br>
                        <input type="checkbox" id="potato" name="ingredient" value="Potato">
                        <label for="potato">Potato</label><br>
                        <input type="checkbox" id="sweet-potato" name="ingredient" value="Sweet Potato">
                        <label for="sweet-potato">Sweet Potato</label><br>
                        <input type="checkbox" id="onion" name="ingredient" value="Onion">
                        <label for="onion">Onion</label><br>
                        <input type="checkbox" id="garlic" name="ingredient" value="Garlic">
                        <label for="garlic">Garlic</label><br>
                        <input type="checkbox" id="ginger" name="ingredient" value="Ginger">
                        <label for="ginger">Ginger</label><br>
                        <input type="checkbox" id="mushroom" name="ingredient" value="Mushroom">
                        <label for="mushroom">Mushroom</label><br>
                        <input type="checkbox" id="asparagus" name="ingredient" value="Asparagus">
                        <label for="asparagus">Asparagus</label><br>
                        <input type="checkbox" id="green-bean" name="ingredient" value="Green Bean">
                        <label for="green-bean">Green Bean</label><br>
                        <input type="checkbox" id="pea" name="ingredient" value="Pea">
                        <label for="pea">Pea</label><br>
                        <input type="checkbox" id="corn" name="ingredient" value="Corn">
                        <label for="corn">Corn</label><br>
                        <input type="checkbox" id="artichoke" name="ingredient" value="Artichoke">
                        <label for="artichoke">Artichoke</label><br>
                        <input type="checkbox" id="brussels-sprout" name="ingredient" value="Brussels Sprout">
                        <label for="brussels-sprout">Brussels Sprout</label><br>
                        <input type="checkbox" id="radish" name="ingredient" value="Radish">
                        <label for="radish">Radish</label><br>
                        <input type="checkbox" id="beet" name="ingredient" value="Beet">
                        <label for="beet">Beet</label><br>
                    </div>
                    <p>Please pick any date 2 weeks after today. Processing time is needed. <span>Thank you very much.</span></p>
                    <div class="DeliveryDate">
                        <input type="date" name="dateOfDelivery" required></input>
                    </div>
                    <button type="submit" name="submit" method="post">BLEND</button>
                </form>
            </section>
        </div>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2024 The Vineyard Lodge. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>