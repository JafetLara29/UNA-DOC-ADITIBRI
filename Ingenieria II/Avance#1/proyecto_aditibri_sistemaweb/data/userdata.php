<?php
include_once 'data.php';
include '../domain/user.php';
class UserData extends Data
{

    public function validateUsernamePassword($user)
    {

        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tbuser;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);

        while ($row = mysqli_fetch_array($result)) {
            if ($row['tbuserusername'] == $user->getUsernameTBUser() && $row['tbuserpassword'] == $user->getPasswordTBUser()) {
                return true;
            }
        }
        return false;
    }
}
