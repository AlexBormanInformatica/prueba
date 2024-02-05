<?php
include('admin-password.php');
class AdminUser extends AdminPassword
{
    private $_pdo;

    function __construct($pdo)
    {
        parent::__construct();

        $this->_pdo = $pdo;
    }

    private function get_user_hash($user)
    {
        try {
            $stmt = $this->_pdo->prepare('SELECT departamentos_idDepartamento, trabajadores_idtrabajadores, username, password FROM departamentos_has_trabajadores 
            WHERE (departamentos_idDepartamento=10 OR departamentos_idDepartamento=6) AND username = :user');
            $stmt->execute(array('user' => $user));

            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo '<p class="text-danger">' . $e->getMessage() . '</p>';
        }
    }

    public function login($user, $password, $conn)
    {
        include('AES.php');
        $rows = $this->get_user_hash($user);
        if ($rows != false || $rows != null) {
            foreach ($rows as $row) {
                // if (PHP_AES_Cipher::encrypt($password) ==  $row->password) {
                $_SESSION['admin_user'] = $row->username;
                $_SESSION['ID'] = $row->trabajadores_idtrabajadores;
                $_SESSION['user_type'] = ($row->departamentos_idDepartamento == 10 ? "COMERCIAL" : "ADMIN");
                $_SESSION['loggedin'] = true;

                return true;
                // } else {
                //     echo "Contraseña incorrecta.";
                //     $_SESSION['admin_user'] = "";
                //     $_SESSION['ID'] = "";
                //     $_SESSION['loggedin'] = false;
                // }
            }
        } else {
            echo "Usuario incorrecto.";
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
