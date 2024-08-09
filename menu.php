<?php
class Menu{
        protected $enlaces=array();
        protected $titulos=array();
        public function cargar($en, $tit) {
            $this->enlaces[] = $en;
            $this->titulos[] = $tit;
        }
        public function mostrar(){
            ?>
            <div class="btn-group">
            <?php
            foreach($this->enlaces as $key=> $url){
                ?>
                <button type="button" class="btn btn-primary" onclick="window.location.href='<?php echo $url; ?>'">
                    <?php echo $this->titulos[$key]; ?>
                </button>
                <?php
            }
            ?>
            </div>
         <?php
        }
}
?>