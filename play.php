<?php
include "hippo.php";
include "perso.php";
include "fight.php";

$hippo = new Hippo(array('name'=>'Hippo1', 'strengh'=> 10, 'vitesse'=> 30));
$perso = new Perso(array('name'=>'Perso1', 'strengh'=> 10, 'vitesse'=> 10));

$fight = new Fight($hippo->hippo,$perso->perso);

echo $fight->round();





// if($this->joueur1['vitesse'] > $this->joueur2['vitesse'])
// {   
// if($critique == $i)
// {
//     // $this->part_1($critique,$i,$fatality_hipo);
//     if($critique == 1)  $this->joueur2['stamina']= $this->joueur2['stamina']-$this->joueur1['strengh'];
//     $this->joueur2['stamina']=  $this->joueur2['stamina'] - $this->joueur2['stamina'] ;
//     return "Attaque spécial : ".$this->hippo_attack[$fatality_hipo][0]." round critique : $critique , round actuel : $i Coup Critique fait par ".$this->joueur1['name']." aux Joueur ".$this->joueur2["name"]." stamina restant est ".$this->joueur2["stamina"]."\n";
// }else{
//     $this->part_2();
    
// }

// }else{
// if($critique == $i)
// {
//     if($critique == 1)  $this->joueur1['stamina']=$this->joueur1['stamina']-$this->joueur2['strengh'];
//     $this->joueur1['stamina']= $this->joueur1['stamina']- $this->joueur1['stamina'];
//     return "Attaque spécial : ".$this->perso_attack[$fatality_perso][0]." round critique : $critique , round actuel : $i Coup Critique fait par ".$this->joueur2['name']." aux Joueur ".$this->joueur1["name"]." stamina restant est ".$this->joueur1["stamina"]."\n";

// }else{
//     $this->part_4();
// }

// }
// if($this->joueur2['stamina'] == 0) return "Attaque spécial : ".$this->hippo_attack[$fatality_hipo][0]." Le gagnant des ".$round." round est ".$this->joueur1['name']." stamina restant est du joueur ".$this->joueur2['name']." est de ".$this->joueur2['stamina']."\n";
// if($this->joueur1['stamina'] == 0) return " Attaque spécial : ".$this->perso_attack[$fatality_perso][0]." Le gagnant du ".$round." eme round est ".$this->joueur2['name']." stamina restant est de ".$this->joueur1['name']." est de ".$this->joueur1['stamina']."\n";
