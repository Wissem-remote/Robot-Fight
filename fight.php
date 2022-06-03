<?php

class Fight{
                            public $joueur1=[];
                            public $joueur2=[];
                            public $hippo_attack;
                            public $perso_attack;
                            
                            public function __construct(array $joueur1,$joueur2)
                            {
                                $this->joueur1=$joueur1;
                                $this->joueur2=$joueur2;
                                $this->perso_attack= array(
                                    array('Jab', 20),
                                    array('Crochet', 15),
                                    array('Enchainement',30)
                                );
                                $this->hippo_attack = array(
                                    array('Smash', 0),
                                    array('Uppercut', 30),
                                    array('Gazelle',30),
                                    array('Dempsey Roll',50)
                                );
                            }
                            // Fonction Round qui prend les attack spécial challangeur et le round 
                            public function round($power=0,$round = 10){
                                // on check le round passé si il est inferieur à zero
                                if($round <= 0) return " Le nombre de round est bas !";
                                // on initialise notre round critique
                                $critique = rand(1,$round+3);
                                // on appelle notre fonction turn qui lance les round
                                return $this->turn($power,$critique, $round);
                            }

                            
                            public function turn($fatality_perso,  $critique, $rounds  )
                            {
                                // on selection un attack spécial par défaut 
                                $fatality_hipo=rand(0,3);
                                //on donner l'attack spécial à Hippo sur force 
                                $this->joueur1['strengh'] = $this->joueur1['strengh']+ $this->hippo_attack[$fatality_hipo][1];
                                //on donner l'attack spécial à Perso sur force
                                $this->joueur2['strengh'] = $this->joueur2['strengh']+ $this->perso_attack[$fatality_perso][1];
                                
                                // on initier nos vitesse
                                $vitesse1 = $this->joueur1['vitesse'];
                                $vitesse2 = $this->joueur2['vitesse'];
                                // on lance notre round en bouclant 
                                $resultat = "";
                                $i=1;
                                // boucle le round
                                while($i <= $rounds)
                                {   
                                        // on check la vitesse
                                        $resultat= $vitesse1 > $vitesse2 ? $this->critique_hippo($critique,$i) : $this->critique_person($critique,$i,$fatality_perso);
                                        // on check si la stamina du joueur 1 est zero en revoie le resulta
                                        if($this->joueur1['stamina'] <= 0) break;
                                        //  on check si la stamina du joueur 2 est zero en revoie le resulta
                                        if($this->joueur2['stamina'] <= 0) break;
                                        // so le round critique est églale aux round actuel on renvoie le resultat
                                        if($critique == $i) break; 
                                        $i++;
                                }
                                
                                // on retourne le resultat
                                return $resultat;
                            }
                            public function critique_hippo($critique,$i,$fatality_hipo = 0)
                            {
                                // on deduit la stamina moin la force
                                $this->joueur2['stamina']= $this->joueur2['stamina']-$this->joueur1['strengh'];
                                // on met la stamina à Zéro si le round actuel est Critique
                                if($critique == $i) $this->joueur2['stamina']= $this->joueur2['stamina']-$this->joueur2['stamina'];
                                // on test la stamina est inferieur à zero  on la met à Zéro
                                if($this->joueur2['stamina'] <= 0) $this->joueur2['stamina']=0;
                                // on retourne le resultat
                                return "Le round critique est : ".$critique." Le round Actuel : ".$i." Le Gagnant est Hippo,  Coup Fatal :".$this->hippo_attack[$fatality_hipo][0]."La stamina restante du Perso est : ".$this->joueur2['stamina']."\n";
                                
                            }
                            public function critique_person($critique,$i,$fatality_perso = 0)
                            {
                                // on deduit la stamina moin la force
                                $this->joueur1['stamina']= $this->joueur1['stamina']-$this->joueur1['strengh'];
                                // on met la stamina à Zéro si le round actuel est Critique
                                if($critique == $i) $this->joueur1['stamina']= $this->joueur1['stamina']-$this->joueur1['stamina'];
                                // on test la stamina est inferieur à zero  on la met à Zéro
                                if($this->joueur1['stamina'] <= 0) $this->joueur1['stamina']=0;
                                // on retourne le resultat
                                return  "Le round critique est : ".$critique." Le round Actuel : ".$i." Le Gagnant est Person, Coup Fatal : ".$this->perso_attack[$fatality_perso][0]." La stamina restante du Perso est : ".$this->joueur1['stamina']."\n";
                            }
                            
            
            }

    
