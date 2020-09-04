<?php

class Site {



	function itens(){

		$arquivo = file_get_contents('db.json');
        $json = json_decode($arquivo);

        foreach($json->produtos as $key => $p):
            echo '
            <div class="card" style="width: 18rem;">
                <img src="'.$p->image.'" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">'.$p->title.'</h5>
                <p class="card-text">'.$p->small_description.'</p>
                <button class="btn btn-primary" onclick="setCookie(\'itens\', '.$p->code.', 30)">Create cookie.</button>
                </div> 
            </div>';
        endforeach;
    }
    
    function item() {
        $arquivo = file_get_contents('db.json');
        $json = json_decode($arquivo);
        
        echo '
        <li class="clearfix" >
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item1.jpg" alt="item1" />
        <span class="item-name">Sony DSC-RX100M III</span>
        <span class="item-price">$849.99</span>
        <span class="item-quantity">Quantity: 01</span>
        </li>
        ';
    }

    

}
