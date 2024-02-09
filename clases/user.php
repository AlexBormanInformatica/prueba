<?php
include('Password.php');
class User extends Password
{
    private $_pdo;

    function __construct($pdo)
    {
        parent::__construct();

        $this->_pdo = $pdo;
    }

    private function get_user_hash($email)
    {
        try {
            $stmt = $this->_pdo->prepare('SELECT idfichaempresa, email, marcas_idMarca, password FROM fichaempresametas f
            INNER JOIN marcas_has_fichaempresametas m ON m.fichaempresametas_idfichaempresa = f.idfichaempresa
            WHERE isBloqueado = 0 AND marcas_idMarca = 12 AND email = :email');
            $stmt->execute(array('email' => $email));

            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo '<p class="text-danger">' . $e->getMessage() . '</p>';
        }
    }

    public function login($email, $password, $conn)
    {
        include('AES.php');
        $row = $this->get_user_hash($email);
        if ($row != false || $row != null) {
            foreach ($row as $user) {
                if (PHP_AES_Cipher::encrypt($password) ==  $user->password) {
                    $_SESSION['idfichaempresa'] =  $user->idfichaempresa;
                    $_SESSION['email'] = $user->email;
                    $_SESSION['loggedin'] = true;

                    //Busco el usuario por el email en pertex
                    $sql = "SELECT id FROM usuarios WHERE correo=?";
                    $query = $conn->prepare($sql);
                    $query->bindParam(1,  $email, PDO::PARAM_STR);
                    $query->execute();
                    $_SESSION['ID'] = $query->fetchColumn();

                    if ($_SESSION['ID'] == "") {
                        //Si no existe el usuario en pertex, creo el usuario
                        $sql = "INSERT INTO usuarios (correo, id_fichaempresameta) 
                        VALUES (?, ?)";
                        $query = $conn->prepare($sql);
                        $query->bindParam(1, $email, PDO::PARAM_STR);
                        $query->bindParam(2, $_SESSION['id_fichaempresameta'], PDO::PARAM_INT);
                        $query->execute();
                        $_SESSION['ID'] = $conn->lastInsertId();
                    }
                    return true;
                } else {
                    echo "Contraseña incorrecta.";
                    $_SESSION['email'] = "";
                    $_SESSION['loggedin'] = false;
                }
            }
        } else {
            echo "Email incorrecto.";
        }
    }

    public function logout()
    {
        session_destroy();
    }

    public function is_logged_in()
    {
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            return true;
        }
    }
}
