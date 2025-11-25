<?

require_once 'classeMamifero.php';

class Cachorro extends Mamifero
{
    public function enterrarOsso()
    {
        echo "enterrando osso";
    }
    public function abanarRabo()
    {
        echo "Abanando rabo";
    }
}