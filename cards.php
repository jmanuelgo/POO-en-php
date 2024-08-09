<?php
    class cards{
       protected $rutaimg=array();
        protected $titulocard=array();
        protected $contenido=array();
        protected $tituloboton=array();
        protected $enlaceboton=array();
        public function cargar($rutaimg,$tilcard,$cont,$tilboton,$urlboton){
            $this->rutaimg[]=$rutaimg;
            $this->titulocard[]=$tilcard;
            $this->contenido[]=$cont;
            $this->tituloboton[]=$tilboton;
            $this->enlaceboton[]=$urlboton;
        }
        public function mostrar(){
            ?>
                <div class="card" style="width: 18rem;">
                    <?php
                    foreach($this->enlaceboton as $key=> $url){
                    ?>
                    <img class="card-img-top" src="<?php echo $this->rutaimg [$key];?>">
                    <div class="card-body">
                    <h5 class="card-title"><?php echo $this->titulocard[$key]; ?></h5>
                    <p class="card-text"> <?php echo $this->contenido[$key];?> </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                </div>
                <?php
                    }
        }

    }
?>