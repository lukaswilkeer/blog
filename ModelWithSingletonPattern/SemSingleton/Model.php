<?php 
class Model
{
    var $db = "test";
    var $user = "localhost";
    var $password = "";
    var $con;
    
    function __construct()
    {
        $this->con = mysql_connect("localhost",$this->user,$this->password);
        mysql_select_db($this->db,$this->con);
        $this->gravaLog();
    }
    
    function gravaLog()
    {
        $sql = "INSERT INTO tb_log (log_data) values(NOW())";
        $q = mysql_query($sql);
    }
}

?>
