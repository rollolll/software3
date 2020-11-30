<?php
class Empresa
{

    // Connection
    private $conn;

    // Table
    private $db_table = "datos_empresa";

    // Columns
    public $Nit;
    public $Nombre_emp;
    public $Telefono;
    public $Direccion;
    public $Ciudad;


    // Db connection
    public function __construct($db)
    {
        $this->conn = $db;
    }

    // GET ALL
    public function getEmpresas()
    {
        $sqlQuery = "SELECT Nit,Nombre_emp, Telefono, Direccion, Ciudad FROM " . $this->db_table . "";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        return $stmt;
    }

    // CREATE
    public function createEmpresa()
    {
        $sqlQuery = "INSERT INTO
                        " . $this->db_table . "
                    SET
                        Nombre_emp = :Nombre_emp, 
                        Telefono = :Telefono, 
                        Direccion = :Direccion, 
                        Ciudad = :Ciudad";


        $stmt = $this->conn->prepare($sqlQuery);

        // sanitize
        $this->Nombre_emp = htmlspecialchars(strip_tags($this->Nombre_emp));
        $this->Telefono = htmlspecialchars(strip_tags($this->Telefono));
        $this->Direccion = htmlspecialchars(strip_tags($this->Direccion));
        $this->Ciudad = htmlspecialchars(strip_tags($this->Ciudad));


        // bind data
        $stmt->bindParam(":Nombre_emp", $this->Nombre_emp);
        $stmt->bindParam(":Telefono", $this->Telefono);
        $stmt->bindParam(":Direccion", $this->Direccion);
        $stmt->bindParam(":Ciudad", $this->Ciudad);


        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // UPDATE
    public function getSingleEmpresa()
    {
        $sqlQuery = "SELECT
                        Nit, 
                        Nombre_emp, 
                        Telefono, 
                        Direccion, 
                        Ciudad
                       
                      FROM
                        " . $this->db_table . "
                    WHERE 
                       Nit = ?
                    LIMIT 0,1";

        $stmt = $this->conn->prepare($sqlQuery);

        $stmt->bindParam(1, $this->Nit);

        $stmt->execute();

        $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->Nombre_emp = $dataRow['Nombre_emp'];
        $this->Telefono = $dataRow['Telefono'];
        $this->Direccion = $dataRow['Direccion'];
        $this->Ciudad = $dataRow['Ciudad'];
    }

    // UPDATE
    public function updateEmpresas()
    {
        $sqlQuery = "UPDATE
                        " . $this->db_table . "
                    SET
                        Nombre_emp = :Nombre_emp, 
                        Telefono = :Telefono, 
                        Direccion = :Direccion, 
                        Ciudad = :Ciudad 
                        
                    WHERE 
                        Nit = :Nit";

        $stmt = $this->conn->prepare($sqlQuery);

        $this->Nombre_emp = htmlspecialchars(strip_tags($this->Nombre_emp));
        $this->Telefono = htmlspecialchars(strip_tags($this->Telefono));
        $this->Direccion = htmlspecialchars(strip_tags($this->Direccion));
        $this->Ciudad = htmlspecialchars(strip_tags($this->Ciudad));

        $this->Nit = htmlspecialchars(strip_tags($this->Nit));

        // bind data
        $stmt->bindParam(":Nombre_emp", $this->Nombre_emp);
        $stmt->bindParam(":Telefono", $this->Telefono);
        $stmt->bindParam(":Direccion", $this->Direccion);
        $stmt->bindParam(":Ciudad", $this->Ciudad);

        $stmt->bindParam(":Nit", $this->Nit);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // DELETE
    function deleteEmpresa()
    {
        $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE Nit = ?";
        $stmt = $this->conn->prepare($sqlQuery);

        $this->Nit = htmlspecialchars(strip_tags($this->Nit));

        $stmt->bindParam(1, $this->Nit);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
