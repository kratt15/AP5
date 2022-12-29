<?php 
namespace tutoriel\HTML;
/**
 * classform
 * elle permet de generer rapidement et simplement un formulaire 
 * 
 * 
 */
class Form{
/**@var array donneées utiliser par le formulaire
 * 
 */
private $data ;
 /**@var string permet de recevoir des balises */
public $surround='p';

/**@param $data
 * eelle est utliser par le formulaire
 * elle permet d'instancier des objets
 */
public function __construct($data=array()){  
    $this->data=$data;


}
/**@param $html a entourer
 * @return string 
 * permet de mettre des balises a coté du code html */
private function surround($html){
  return "<{$this->surround}>{$html}</{$this->surround}>";
}



// public function getData(){
//     return $this->data;
// }

/**@param string $index les valeur issu d'un tableau associatif
 * @return 
 */

public  function getValue($index){
    // if (isset($this->data[$index])){
    //    return  $this->data[$index];   
    // }

     return isset($this->data[$index]) ? $this->data[$index] :null;
}
/**@param $name array  un champ de saisie
 * @return string
 * 
 */
public function input($name){

return $this->surround('<input type="text" name="'.$name.'" value="'. $this->getValue($name).'">'
    );
}
/**@return un boutton pour le formulaire */
public function submit(){
    return $this->surround('<button type="submit">Envoyer</button>');
}



































}











?>