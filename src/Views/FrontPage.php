<?php

namespace Src\Views;

class FrontPage {

    public function index($hello) {
        include("Partials/Header.php");
        ?>

        


 <div class="container">
  <div class="col-1">flex item 1</div>
  <div class="col-1">flex item 2</div>
  <div class="col-2">flex item 3</div> 
  <div class="col-3">flex item 3</div>   
  <div class="col-4">flex item 3</div>   
</div>

        <?php
    }

}
