<?

require_once 'classeAnimal.php';
require_once 'classeReptil.php';

class Cobra extends Reptil
{
    public function locomover()
    {
        echo "rastejando";
    }
}