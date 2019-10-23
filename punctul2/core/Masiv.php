<?
class Masiv {
    public $arr = null;

    public function __construct() 
    {
        if(isset($_SESSION['nums'])){
            $_SESSION['nums'] = array();
        }
        $this->updateArr();
    }

    public function updateArr()
    {
        $this->arr = $_SESSION['nums'];
    }

    public function add($number)
    {
        array_push( $_SESSION['nums'], $number);  
    }

    public function show($id)
    {
        return $_SESSION['nums'][$id];
    }

    public function showAll()
    {
        return $_SESSION['nums'];             
    }

    public function delete($id)
    {
        unset($_SESSION['nums'][$id]);
    }

}

?>