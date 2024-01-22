<?php 
class dbConnect{
        private $conn = null;
        private $host = '127.0.0.1'; 
        private $dbname = 'spotifyclone';
        private $username = 'root';
        private $password = '';

        public function connectDB(){ 
            try {
            $this->conn= new PDO("mysql:host=$this->host;dbname=$this->dbname",
            $this->username,$this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION)."<br/>";
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC)."<br/>";

        }catch(PDOException$pdoe) {
            die("Nuk mund të lidhet me bazën e të dhënave{$this->dbname}:".$pdoe->getMessage());
        }
      return$this->conn;
    }
}
?>