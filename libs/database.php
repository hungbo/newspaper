<?php 
/**
 * @author kane
 */
class database
{

	protected $hostname = "localhost";
	protected $dbname = "newspaper";
	protected $username = "root";
	protected $password = "hungbo";

	private $table = '';

	protected $db;
	
	function __construct()
	{
		$this->connect();
	}

	public function connect()
	{
		if ($this->db == null) {
			try {
				// $this->db = new PDO("mysql:host=$this->hostname;dbname=$this->dbname", $this->username, $this->password);
				$this->db = new PDO("mysql:host=$this->hostname;dbname=$this->dbname",$this->username);
				$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $this->db;
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}
		return $this->db;
	}

	public function disConnect()
	{
		$this->db = null;
	}

	public function query($sql)
	{
		$this->db->query($sql)->fetch(PDO::FETCH_ASSOC);
	}

	public function getBy($table,$data = [])
	{
		foreach ($data as $key => $value) {
			if ($key === 'column') {
				$sql = "SELECT $value FROM $table";
			}
			if ($key === 'id') {
				$sql .= " WHERE id=$value";
			}
		}

		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(':id', $value, PDO::PARAM_INT);
		$stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_ASSOC);

		return $result;
	}

	public function getAll($table)
	{
		$result = array();
		$sql = "SELECT * FROM $table";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$result[] = $row;
		}
		return $result;
	}

	public function add()
	{
		# code...
	}

	public function update($table,$data = [],$where = [])
	{
		$changeValue = '';
		$post_id = '';
		$values = [];
		foreach ($where as $item => $id) {
			$post_id .= $item."=:id";
		}
		foreach ($data as $key => $value) {
			$changeValue .= $key.'="'.$value.'",';
			$values[] = $value;
		}
		// var_dump($changeValue);
		$sql = "UPDATE $table SET ".rtrim($changeValue,',')." WHERE ".$post_id;
		$stmt = $this->db->prepare($sql);
		foreach ($values as $value) {
			// $stmt->bindParam(":$value", $value);
		}

		$stmt->bindParam(':id', $id);
		$stmt->execute();
		// return $this->table;

	}

	public function delete($table, $where = [])
	{
		$id = 0;
		foreach ($where as $key => $value) {
			$id = $value;
		}
		$sql = "DELETE FROM $table WHERE $key=:id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);

		$stmt->execute();

		return $this->table;
	}
}
?>