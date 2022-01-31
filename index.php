<?php
require_once __DIR__ . '/Beauty.php';
require_once __DIR__ . '/Book.php';
require_once __DIR__ . '/Electronics.php';
require_once __DIR__ . '/Shoes.php';
require_once __DIR__ . '/Toy.php';
require_once __DIR__ . '/Costumer.php';

$vichy_cream = new Beauty(90870, 'Vichy', 'Beauty', 25.90, 'Crema', 'Viso');

$inferno_book = new Book(10450, 'Mondadori', 'Libri', 15.50, 'Inferno', 'Dante');

$samsung_smartphone = new Electronics(80430, 'Samsung', 'Elettronica', 699.00, 'Smartphone');

$adidas_shoes = new Shoes(20770, 'Adidas', 'Scarpe', 78.90, 'Maschile', 43);

$hasbro_game = new Toy(50970, 'Hasbro', 'Giocattoli', 29.50, 9);

$costumer_99 = new Costumer('Marco', 'Antonioli', 'marco.ant@gmail.com');
$costumer_99->addProduct($vichy_cream);
$costumer_99->addProduct($inferno_book);
$costumer_99->addProduct($samsung_smartphone);
$costumer_99->addProduct($adidas_shoes);
$costumer_99->addProduct($hasbro_game);
$costumer_99_cart = $costumer_99->getCart();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon Shop</title>
    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Amazon Shop</h1>

    <h2>Benvenuto <?php echo $costumer_99->getFullName(); ?> questo è il tuo carrello:</h2>

    <?php foreach($costumer_99_cart as $product) { ?>

        <div class="cart">
            <ul>
                <li>
                    Codice ID: <?php echo $product->id_code; ?>
                </li>
                <li>
                    Marca: <?php echo $product->brand; ?> 
                </li>
                <li>
                    Categoria: <?php echo $product->category; ?>
                </li>

                <?php if(isset($product->classification)) { ?>
                    <li>Classificazione: <?php echo $product->classification; ?></li>
                <?php } ?>

                <?php if(isset($product->use)) { ?>
                    <li>Uso: <?php echo $product->use; ?></li>
                <?php } ?>

                <?php if(isset($product->title)) { ?>
                    <li>Titolo: <?php echo $product->title; ?></li>
                <?php } ?>

                <?php if(isset($product->author)) { ?>
                    <li>Autore: <?php echo $product->author; ?></li>
                <?php } ?>

                <?php if(isset($product->type)) { ?>
                    <li>Tipologia: <?php echo $product->type; ?></li>
                <?php } ?>

                <?php if(isset($product->gender)) { ?>
                    <li>Genere: <?php echo $product->gender; ?></li>
                <?php } ?>

                <?php if(isset($product->number)) { ?>
                    <li>Numero: <?php echo $product->number; ?></li>
                <?php } ?>

                <?php if(isset($product->age)) { ?>
                    <li>Età: <?php echo $product->age; ?>+</li>
                <?php } ?>

                <li class="price">
                    Prezzo: <?php echo $product->price; ?> €</div>
                </li>
            </ul>
        </div>
    <?php } ?>

    <h3 class="total">Totale carrello: <?php echo $costumer_99->getCartTotal(); ?> €</h3>
    
</body>
</html>