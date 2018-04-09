<?PHP


class VacancyDataMapper{
    public function __construct(){

    }

    public function Save($Vacancy,$Conn,$Comm,$jobTitle,$jobDescription){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->InsertVacancy);
            $stmt->bindParam(1 , $Vacancy->jobTitle , PDO::PARAM_STR);
            $stmt->bindParam(2 , $Vacancy->jobDescription  , PDO::PARAM_STR);
            $stmt->execute();
            $num = $stmt -> rowCount();
            if($num > 0){
                return true;
            }else{
                return false;
            }


           
        }catch(PDOException $e){
            echo 'ERROR: ' ."<br>" . $e->getMessage();
            return false;
            
       }
    }

    public function GetJobs($Conn, $Comm){
        try{
           $stmt = $Conn->Connect()->prepare($Comm->SelectAllVacancy);
           $stmt->execute();
           return $stmt->fetchAll();
        }catch(PDOException $e){
            return null;
        }

        
    }

    public function job($Conn,$Comm,$username){
             try{
                $stmt = $Conn->Connect()->prepare($Comm->SelectCustomer);
                $stmt->bindParam(1, $username, PDO::PARAM_STR);
                $stmt->execute();
                return $stmt->fetchAll();
                return true;

             }catch(PDOException $e){
                echo 'ERROR: ' ."<br>" . $e->getMessage();
                return false;
             }          
    }

    public function description($Conn, $Comm,$vacancyId){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->SelectjobDescription);
            $stmt->bindParam(1, $vacancyId, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll();

        }catch(PDOExecption $e){
            return null;

        }
    }

    public function send($JOB,$Conn,$Comm,$jobAppId,$vacancyId,$CustomerId,$cv){
        try{
            $stmt = $Conn->Connect()->prepare($Comm->Insertjob_aplication);
            $stmt->bindParam(1 ,$JOB->$jobAppId , PDO::PARAM_STR);
            $stmt->bindParam(2 ,$JOB->$vacancyId, PDO::PARAM_STR);
            $stmt->bindParam(3 ,$JOB->$CustomerId , PDO::PARAM_STR);
            $stmt->bindParam(4 ,$JOB->$cv , PDO::PARAM_STR);
            $stmt->execute();
            $num = $stmt -> rowCount();
            if($num > 0){
                return true;
            }else{
                return false;
            }


           
        }catch(PDOException $e){
            echo 'ERROR: ' ."<br>" . $e->getMessage();
            return false;
            
       }
    }
}

?>
