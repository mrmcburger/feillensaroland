<?php
    include 'db.ini';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $request = "SELECT * FROM auth WHERE nickname='$username' AND password='$password'";

    try
    {
        $pdo = new PDO("mysql:dbname=$dbname;host=$dbhost", $dbuser, $dbpassword);
    }
    catch (PDOException $e)
    {
        echo 'Erreur de connection : ' . $e->getMessage();
        exit();
    }

    $prepared_request = $pdo->prepare($request);
    $prepared_request ->execute();

    if($prepared_request->rowCount())
    {
        # Successfull auth
        session_start();
        $_SESSION['connected'] = true;
        header('Location: index.php');
    }
    else
    {
        echo 'Mauvaise combinaison login/mot de passe';
?>
<br /><br />
<form id="loginForm" method="post">
    <div class="controls">
        <label for="username">Nom d'utilisateur</label>
        <input id="username" type="text" name="username" placeholder="Nom d'utilisateur">
    </div>
    <div class="controls">
        <label for="password">Mot de passe</label>
        <input id="password" type="password" name="password" placeholder="Mot de passe">
    </div>
    <div class="controls">
        <button class="btn-flat btn-flat-blue" type="submit">Login</button>
    </div>
</form>
<?php
    }
?>
