
<?php
class Galleta
{
    // Atributos
    private $sabor;
    private $color;

    // Constructor
    public function __construct($sab, $col)
    {
        $this->sabor = $sab;
        $this->color = $col;
    }

    // Métodos
    public function servir()
    {
        ?>
        <div style="background-color: <?php echo $this->color; ?>;">
            <?php echo $this->sabor; ?>
        </div>
        <?php
    }
}
 $gengibre= new Galleta('Gengibre','#8e422b');
 $gengibre->servir();
?>
