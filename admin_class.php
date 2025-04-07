<?php
session_start();
ini_set('display_errors', 1);
class Action
{
	private $db;

	public function __construct()
	{
		ob_start();
		include 'db_connect.php';

		$this->db = $conn;
	}
	function __destruct()
	{
		$this->db->close();
		ob_end_flush();
	}

	function login()
	{
		extract($_POST);
		$qry = $this->db->query("SELECT *,concat(firstname,' ',lastname) as name FROM users where email = '" . $email . "' and password = '" . md5($password) . "'  ");
		if ($qry->num_rows > 0) {
			foreach ($qry->fetch_array() as $key => $value) {
				if ($key != 'password' && !is_numeric($key))
					$_SESSION['login_' . $key] = $value;
			}
			return 1;
		} else {
			return 2;
		}
	}
	function logout()
	{
		session_destroy();
		foreach ($_SESSION as $key => $value) {
			unset($_SESSION[$key]);
		}
		header("location:login.php");
	}
	function login2()
	{
		extract($_POST);
		$qry = $this->db->query("SELECT *,concat(lastname,', ',firstname,' ',middlename) as name FROM students where student_code = '" . $student_code . "' ");
		if ($qry->num_rows > 0) {
			foreach ($qry->fetch_array() as $key => $value) {
				if ($key != 'password' && !is_numeric($key))
					$_SESSION['rs_' . $key] = $value;
			}
			return 1;
		} else {
			return 3;
		}
	}
	function save_user()
	{
		extract($_POST);
		$data = "";
		foreach ($_POST as $k => $v) {
			if (!in_array($k, array('id', 'cpass', 'password')) && !is_numeric($k)) {
				if (empty($data)) {
					$data .= " $k='$v' ";
				} else {
					$data .= ", $k='$v' ";
				}
			}
		}
		if (!empty($password)) {
			$data .= ", password=md5('$password') ";
		}
		$check = $this->db->query("SELECT * FROM users where email ='$email' " . (!empty($id) ? " and id != {$id} " : ''))->num_rows;
		if ($check > 0) {
			return 2;
		}
		if (empty($id)) {
			$save = $this->db->query("INSERT INTO users set $data");
		} else {
			$save = $this->db->query("UPDATE users set $data where id = $id");
		}

		if ($save) {
			return 1;
		}
	}
	function signup()
	{
		extract($_POST);
		$data = "";
		foreach ($_POST as $k => $v) {
			if (!in_array($k, array('id', 'cpass')) && !is_numeric($k)) {
				if ($k == 'password') {
					if (empty($v))
						continue;
					$v = md5($v);
				}
				if (empty($data)) {
					$data .= " $k='$v' ";
				} else {
					$data .= ", $k='$v' ";
				}
			}
		}

		$check = $this->db->query("SELECT * FROM users where email ='$email' " . (!empty($id) ? " and id != {$id} " : ''))->num_rows;
		if ($check > 0) {
			return 2;
		}
		if (isset($_FILES['img']) && $_FILES['img']['tmp_name'] != '') {
			$fname = strtotime(date('y-m-d H:i')) . '_' . $_FILES['img']['name'];
			$move = move_uploaded_file($_FILES['img']['tmp_name'], '../assets/uploads/' . $fname);
			$data .= ", avatar = '$fname' ";
		}
		if (empty($id)) {
			$save = $this->db->query("INSERT INTO users set $data");
		} else {
			$save = $this->db->query("UPDATE users set $data where id = $id");
		}

		if ($save) {
			if (empty($id))
				$id = $this->db->insert_id;
			foreach ($_POST as $key => $value) {
				if (!in_array($key, array('id', 'cpass', 'password')) && !is_numeric($key))
					$_SESSION['login_' . $key] = $value;
			}
			$_SESSION['login_id'] = $id;
			return 1;
		}
	}

	function update_user()
	{
		extract($_POST);
		$data = "";
		foreach ($_POST as $k => $v) {
			if (!in_array($k, array('id', 'cpass', 'table')) && !is_numeric($k)) {
				if ($k == 'password')
					$v = md5($v);
				if (empty($data)) {
					$data .= " $k='$v' ";
				} else {
					$data .= ", $k='$v' ";
				}
			}
		}

		if ($_FILES['img']['tmp_name'] != '') {
			$fname = strtotime(date('y-m-d H:i')) . '_' . $_FILES['img']['name'];
			$move = move_uploaded_file($_FILES['img']['tmp_name'], 'assets/uploads/' . $fname);
			$data .= ", avatar = '$fname' ";
		}
		$check = $this->db->query("SELECT * FROM users where email ='$email' " . (!empty($id) ? " and id != {$id} " : ''))->num_rows;
		if ($check > 0) {
			return 2;
		}
		if (empty($id)) {
			$save = $this->db->query("INSERT INTO users set $data");
		} else {
			$save = $this->db->query("UPDATE users set $data where id = $id");
		}

		if ($save) {
			foreach ($_POST as $key => $value) {
				if ($key != 'password' && !is_numeric($key))
					$_SESSION['login_' . $key] = $value;
			}
			if ($_FILES['img']['tmp_name'] != '')
				$_SESSION['login_avatar'] = $fname;
			return 1;
		}
	}

	function save_system_settings()
	{
		extract($_POST);
		$data = '';
		foreach ($_POST as $k => $v) {
			if (!is_numeric($k)) {
				if (empty($data)) {
					$data .= " $k='$v' ";
				} else {
					$data .= ", $k='$v' ";
				}
			}
		}
		$chk = $this->db->query("SELECT * FROM system_settings");
		if ($chk->num_rows > 0) {
			$save = $this->db->query("UPDATE system_settings set $data where id =" . $chk->fetch_array()['id']);
		} else {
			$save = $this->db->query("INSERT INTO system_settings set $data");
		}
		if ($save) {
			foreach ($_POST as $k => $v) {
				if (!is_numeric($k)) {
					$_SESSION['system'][$k] = $v;
				}
			}
			return 1;
		}
	}

	function save_jobs()
	{
		extract($_POST);
		$data = "";
		foreach ($_POST as $k => $v) {
			if (!in_array($k, array('id')) && !is_numeric($k)) {
				if (empty($data)) {
					$data .= " $k='$v' ";
				} else {
					$data .= ", $k='$v' ";
				}
			}
	    }

		if (empty($id)) {
			$save = $this->db->query("INSERT INTO jobs set $data");
		} else {
			$save = $this->db->query("UPDATE jobs set  $data where id=$id");
		}

		if ($save) {

			return 1;
		}
	}

	function delete_jobs()
	{
		extract($_POST);
		$delete = $this->db->query("DELETE FROM jobs where id = $id");
		if ($delete) {
			return 1;
		}
	}

	

	function save_apply_jobs()
{
    extract($_POST);
    $data = "";

    if (!isset($_FILES['resume']) || $_FILES['resume']['error'] !== 0) {
        return 'no_file';
    }

    $file_tmp = $_FILES['resume']['tmp_name'];
    $file_name = $_FILES['resume']['name'];
    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

    if (strtolower($file_ext) !== 'pdf') {
        return 'invalid_file';
    }

    $new_file_name = uniqid() . '_' . $file_name;
    $resume_folder = '../jobportal/resume/'; 
    if (!is_dir($resume_folder)) {
        mkdir($resume_folder, 0777, true);
    }

    $resume_path = $resume_folder . $new_file_name;
    if (!move_uploaded_file($file_tmp, $resume_path)) {
        return 'upload_error';
    }

    $_POST['resume'] = 'resume/' . $new_file_name; 

    
    $check = $this->db->query("SELECT * FROM apply_jobs WHERE job_id = '$job_id' AND email = '$mail'");
    if ($check->num_rows > 0) {
        return 'duplicate';
    }

    
    foreach ($_POST as $k => $v) {
        if (!in_array($k, array('id')) && !is_numeric($k)) {
            $v = addslashes($v);
            $data .= (empty($data)) ? " $k='$v' " : ", $k='$v' ";
        }
    }

    if (empty($id)) {
        $save = $this->db->query("INSERT INTO apply_jobs SET $data");
    } else {
        $save = $this->db->query("UPDATE apply_jobs SET $data WHERE id=$id");
    }

    return $save ? '1' : '0';
}



	function update_status()
{
    extract($_POST);
    $data = "";
    $conn = $this->db;

    foreach ($_POST as $k => $v) {
        if (!in_array($k, array('id')) && !is_numeric($k)) {
            // Sanitize input
            $v = $conn->real_escape_string($v);
            if (empty($data)) {
                $data .= " $k='$v' ";
            } else {
                $data .= ", $k='$v' ";
            }
        }
    }

    // Sanitize key values
    $job_id = $conn->real_escape_string($job_id ?? '');
    $fname = $conn->real_escape_string($fname ?? '');
    $status = $conn->real_escape_string($status ?? '');

    // Update if ID exists (editing)
    if (!empty($job_id) && !empty($fname)) {
        $save = $conn->query("UPDATE apply_jobs SET status = '$status' WHERE job_id = '$job_id' AND fname = '$fname'");
    } else {
        // Optional insert fallback (can be removed if not needed)
        $save = $conn->query("INSERT INTO apply_jobs SET $data");
    }

    if ($save) {
        return 1;
    } else {
        return 0;
    }
}

	
	

}

	









	
	
