<?php



class dataBase {

    private static $instancia = null;
    private $conn;

    private $host = "mysql-ignaciojordi.alwaysdata.net";
    private $user = "ignaciojordi";
    private $pass = "6B+jordi";
    private $name = "ignaciojordi_php_login";
     
    
    
    private function __construct()
    {
      $this->conn = new PDO("mysql:host={$this->host};
      dbname={$this->name}", $this->user,$this->pass,
      array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    }
    
    public static function getInstancia()
    {
      if(!self::$instancia)
      {
        self::$instancia = new dataBase();
      }
     
      return self::$instancia;
    }
    
    public function getConnection()
    {
      return $this->conn;
    }
class registro extends dataBase {


    protected function setUsuario ($nombreUsuario,$apellidoUsuario,$userUsuario,$mailUsuario,$contraseñaUsuario){
        $dataBase=dataBase::getInstancia();
        $conn=$dataBase->getConnection();
        $stmt = $conn->prepare('INSERT INTO usuaris (nombre, apellido, user, mail, pasw) VALUES(?,?,?,?,?)');

        $contraCifrada = password_hash($contraseñaUsuario, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($nombreUsuario,$apellidoUsuario,$userUsuario,$mailUsuario,$contraCifrada))){
            $stmt = null;
            header('Location: https://ignaciojordi.alwaysdata.net/p44/registre.php?cm=2');
            exit();
        }
        $stmt = NULL;
    }

    protected function usuarioMailExistente ($userUsuario,$mailUsuario){
        $dataBase=dataBase::getInstancia();
        $conn=$dataBase->getConnection();
        $stmt = $conn->prepare('SELECT user FROM usuaris WHERE user = ? OR mail =?;');

        
        if(!$stmt->execute(array($userUsuario,$mailUsuario))){
            $stmt = null;
            header('Location: https://ignaciojordi.alwaysdata.net/p44/registre.php?cm=2');
            exit();
        }

        $resultadoComprobacion=true;
        if($stmt->rowCount() > 0){
            $resultadoComprobacion=false;
        }else{
            $resultadoComprobacion=true;
        }

        return $resultadoComprobacion;
    }
}

class controlRegistro extends registro { 

   

    private $nombreUsuario;
    private $apellidoUsuario;
    private $userUsuario;
    private $mailUsuario;
    private $contraseñaUsuario;

   


    public function __construct($nombreUsuario,$apellidoUsuario,$userUsuario,$mailUsuario,$contraseñaUsuario){
        $this->nombreUsuario = $nombreUsuario;
        $this->apellidoUsuario = $apellidoUsuario;
        $this->userUsuario = $userUsuario;
        $this->mailUsuario = $mailUsuario;
        $this->contraseñaUsuario = $contraseñaUsuario;
    }

    

    public function añadirUsuario(){
        if($this->camposVacios1() == false){
            header('Location: https://ignaciojordi.alwaysdata.net/p44/registre.php?cm=1');
            exit();
        }

        elseif($this->comprobarUsuario()==false){
            header('Location: https://ignaciojordi.alwaysdata.net/p44/registre.php?cm=3');
            exit();
        }

        $this->setUsuario($this->nombreUsuario,$this->apellidoUsuario,$this->userUsuario,$this->mailUsuario,$this->contraseñaUsuario);
    }

    

    private function camposVacios1(){
        $result=true;
        if(empty($this->nombreUsuario) || empty($this->apellidoUsuario) || empty($this->userUsuario) || empty($this->mailUsuario) ||empty($this->contraseñaUsuario)){
            $result = false;
        }else{
            $result=true;
        }
        return $result;
    }

   
    
    private function comprobarUsuario(){
        $result=true;
        if(!$this->usuarioMailExistente($this->userUsuario,$this->mailUsuario)){
            $result=false;
        }else{
            $result=true;
        }
        return $result;
    }
}


$nombreuser=$_POST['nombr'];
$apellidouser=$_POST['apell'];
$mailuser=$_POST['correo'];
$usuario=$_POST['user'];
$password=$_POST['contra'];


$nuevoUser= new controlRegistro($nombreuser,$apellidouser,$usuario,$mailuser,$password);

$nuevoUser->añadirUsuario();
header('Location: https://ignaciojordi.alwaysdata.net/p44/index.php?exito=1');


?>