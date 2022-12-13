<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
  <!-- css -->
  <link rel="stylesheet" href="style.css">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

  <!-- 
    Creare una variabile con un paragrafo di testo a vostra scelta.
    Stampare a schermo il paragrafo e la sua lunghezza.
    Una parola da censurare viene passata dall'utente tramite un form con metodo GET.
    Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. 
  -->
  
  <?php
    $paragraph_uncensored = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo fugit nihil facilis dolor a officiis recusandae quam consectetur, laudantium sint beatae maxime perferendis earum, et ab excepturi assumenda velit corrupti.
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo fugit nihil facilis dolor a officiis recusandae quam consectetur, laudantium sint beatae maxime perferendis earum, et ab excepturi assumenda velit corrupti.
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo fugit nihil facilis dolor a officiis recusandae quam consectetur, laudantium sint beatae maxime perferendis earum, et ab excepturi assumenda velit corrupti.
    ';
    $uncensored_length = strlen($paragraph_uncensored);
    $censure = $_GET['censure'];
    $paragraph_censored = str_ireplace(trim($censure), '***', $paragraph_uncensored);
    // il "trim" va fatto qua e non dove facciamo il _GET perchè là non lo prende
    $censored_length = strlen($paragraph_censored);
  ?>

  <div class="container">
    <h1>TESTO NON CENSURATO</h1>
    <!-- Metodo con l'"=", senza "php echo" e con virgolette e graffe per concatenare più semplicemente le variabili e stringhe -->
    <p class="text"><?= "${paragraph_uncensored}"?></p>
    <p class="letter-number">Numero caratteri: <span class="number"><?= $uncensored_length ?></span></p> 
    <!-- Metodo diretto con l'"=", senza "php echo" e senza virgolette e/o graffe -->


    <div class="censure">
      <h2 class="danger">A NOI NON PIACE QUESTA PAROLA!!</h2>

      <form action="" method="get">
        <label for="censure_word"></label>
        <input type="text" placeholder="Scrivi la parola che vuoi censurare" name="censure" id="censure_word">
        <button>CENSURA!!</button>
      </form>

        <h2>** TESTO CENSURATO **</h2>
        <!-- Metodo con l'"=", con "php echo" e  senza virgolette e/o graffe -->
        <p class="text"><?php echo $paragraph_censored ?></p>
        <p class="letter-number">Numero caratteri: <span class="number"><?php echo "${censored_length}" ?></span></p>
        <!-- Metodo con l'"=", con "php echo" e con virgolette e graffe per concatenare più semplicemente le variabili e stringhe -->
    </div>
  </div>

</body>
</html>