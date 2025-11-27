<?php
class User
{
    protected string $email;
    protected string $password;

    public function __construct(){

    }

    public function login() : array {
    	return ["login" => $this->email, "password" => $this->password];
    }
}

class Reader extends User
{
    private array $favoriteBooks = [];

    public function __construct(string $email, string $password){
    	$this->email = $email;
    	$this->password = $password;
    }

    public function addBookToFavorites(string $book): array {
    	$this->favoriteBooks[] = $book;

    	return $this->favoriteBooks;
    }

    public function removeBookFromFavorites(string $book): array {
    	foreach($this->favoriteBooks as $key => $favoriteBook)
    	{
    		if($favoriteBook === $book)
    		{
    			unset($this->favoriteBooks[$key]);
    		}
    	}

    	return $this->favoriteBooks;
    }
}

$lecteur1 = new Reader('lecteur@1.com', 'lecteur');
$books = $lecteur1->addBookToFavorites('Livre1');
$books = $lecteur1->addBookToFavorites('Livre2');

foreach($books as $book){
    echo $book.'<br>';
}

$books = $lecteur1->removeBookFromFavorites('Livre1');

foreach($books as $book){
    echo $book.'<br>';
}

echo $lecteur1->login()['login'].'<br>';
echo $lecteur1->login()['password'];
?>