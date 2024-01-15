<!-- 
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
 che name sia più lungo di 3 caratteri, che mail contenga un punto e
 una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->
<?php

$grantedMessage = 'Access granted';
$denialMessage = 'Access denied';

if (empty($_GET['name']) && empty($_GET['email']) && empty($_GET['age'])) {
    echo $denialMessage;
} else {
    if (
        strlen($_GET['name']) > 3
        && str_contains($_GET['email'], '.')
        && str_contains($_GET['email'], '@')
        && is_numeric($_GET['age'])
    ) {
        echo $grantedMessage;
    } else {
        echo $denialMessage;
    }
}
?>


<form action="../snack-2/index.php" method="get">
    <div>
        <label for="name">Insert name</label>
        <input type="text" id="name" name="name">
    </div>

    <div>
        <label for="mail">Insert mail</label>
        <input type="text" id="mail" name="mail">
    </div>

    <div>
        <label for="age">Insert age</label>
        <input type="text" id="age" name="age">
    </div>
    <button type="submit">Send it</button>
</form>