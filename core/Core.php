<?php
class Core {

    public function run() {

       $url = '/';                                  //variavel da url
       if(isset($_GET['url'])) {                    //se a url foi enviada
            $url .= $_GET['url'];                   // concatena com o que foi enviado
        }

        $params = array();                          //definição do parametro de array vazio

        if(!empty($url) && $url != '/') {            //verificação se alguma coisa foi enviada
            $url = explode('/', $url);                  //dividir controller, action e parametros
            array_shift($url);                          //remove o primeiro registro do array

            $currentController = $url[0].'Controller';  //se foi preenchido o primeiro elemento da url é o controller
            array_shift($url); 

            if(isset($url[0]) && !empty($url[0])) {      //verificação se está setado e  preenchido 
                $currentAction = $url[0];               // se existe, define
                array_shift($url);                
            } else {                                    //caso contrario    
                $currentAction = 'index';               //preenche a action padrão que é a index
            }

            if(count($url) >0) {                        //se houver parametros
                $params = $url;                         //definir e apresentar na variavel 
            }

        } else {
            $currentController = 'homeController';      //configura controller padrão
            $currentAction = 'index';                   //configura action padrão
        }

        $c = new $currentController();                  //instancia a variavel dinamica do controller utilizado
        call_user_func_array(array($c, $currentAction), $params);    //função php que chama a action dentro de uma class e os parametros junto

       
    }

}