$requete->bindParam(':numstagiaire',$numstag);
$requete->bindParam(':matricule',$matr);
$requete->bindParam(':codeserv',$codserv);
$requete->bindParam(':nom',$nomstag);
$requete->bindParam(':prenom',$prenomstag);
$requete->bindParam(':sexe',$sexe);
$requete->bindParam(':datenais',$datenais);
$requete->bindParam(':debutstage',$debutstage);
$requete->bindParam(':finstage',$finstage);
$requete->bindParam(':photo',$photo));








$requete->execute(array('numstagiaire'=>$numstag,
                        'matricule'=>$matr,
                        'codeserv'=>$codserv,
                        'nom'=>$nomstag,
                        'prenom'=>$prenomstag,
                        'sexe'=>$sexe,
                        'datenais'=>$datenais,
                        'debutstage'=>$debutstage,
                        'finstage'=>$finstage,
                        'photo'=>$photo));