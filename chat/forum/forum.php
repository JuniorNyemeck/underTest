<?php

   /*  namespace App\Chat\Forum; 

    require '../chat.php';

    use App\Chat;
    use App\Chat\User as ChatUser;
use Faker\Provider\UserAgent;

    class Forum extends Chat\Chat
    {
        public User[] $listUser;

    }

    

    class User
    {
        use ChatUser;


    }

    trait ListUser
    {

    }
 */
$email = "junior@gmail.com";
 $_POST["email"] = "junior@gmail.com";
 $_POST["password"] = "jnhuiok";
 $hash = password_hash('junior', PASSWORD_DEFAULT);

if ($email == $_POST["email"]) {
    echo "email trouvé <br>";
    if (password_verify($_POST["password"], $hash)) {
        echo "ok";
    }
    else {
        echo "erreur";
    }
}
else {
    echo "erreur";
}





?>