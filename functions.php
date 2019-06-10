<?php

class Register {

    public function __construct() {
        require_once ("includes/config.php");
        $db = new DbConnect();
        $this->dbConn = $db->connect();
    }

    public function insert($post) {
        $stmt = $this->dbConn->prepare("INSERT INTO product(p_name,in_stock,phone_no,is_booking,b_open,b_close,cond,sell_price,actual_sell_price,quantity1,offer_price,quantity2,description,metal_details,product_info,diamond_info,services) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->execute([$post['pname'],$post["in_stock"],$post["phone_no"], $post["is_booking"], $post["b_open"], $post["b_close"], $post['cond'], $post['sp'], $post['asp'], $post['q1'], $post['op'], $post['q2'], $post['desc'], $post['md'], $post['pi'], $post['di'], $post['ser']]);

        @$p_id = $this->dbConn->lastInsertId();

        @$total = count($_FILES['file']['name']);

        for ($i = 0; $i < $total; $i++) {
            $tmpFilePath = $_FILES['file']['tmp_name'][$i];

            if ($tmpFilePath != "") {
                $newFilePath = "product/" . $_FILES['file']['name'][$i];
                $q = "insert into images (pid,img) values(?,?)";
                $stmt1 = $this->dbConn->prepare($q);
                @$stmt1->execute([$p_id, $newFilePath]);
                move_uploaded_file($tmpFilePath, $newFilePath);
            }
        }
    }

    public function login($post) {
        //echo $_POST['eml'];
        //echo $_POST['pwd'];
        //die;
        $sql = "select * from admin where username=? and password=?";
        $stmt = $this->dbConn->prepare($sql);
        $stmt->execute([$post['username'], $post['password']]);

        $row = $stmt->rowCount();

        if ($row > 0) {
            $res = $stmt->fetch();

            $_SESSION['x'] = $_REQUEST['username'];
            header('location:dashboard.php');
        } else {
            echo "LOGIN FAILED!!!!!!!";
        }
    }

    public function fetch_data() {
        $stmt = $this->dbConn->prepare("SELECT * FROM product ORDER BY actual_sell_price DESC");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function fetch_product($id) {
        $stmt = $this->dbConn->prepare("select * from product where pid=?");
        $stmt->execute([$id]);
        return $stmt->fetchAll();
    }

    public function image($id) {
        $stmt = $this->dbConn->prepare("select * from images where pid=? LIMIT 1");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function all_images($id) {
        $sql = "select * from images where pid=?";
        $stmt = $this->dbConn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetchAll();
    }

    public function getUpdate($id) {
        $sql = "select * from product where pid=?";
        $stmt = $this->dbConn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function update($post, $id) {

        $sql = "update product set p_name=?,in_stock=?,phone_no=?,is_booking=?,b_open=?,b_close=?,cond=?,sell_price=?,actual_sell_price=?,quantity1=?,offer_price=?,quantity2=?,description=?,metal_details=?,product_info=?,diamond_info=?,services=? where pid=?";
        $stmt = $this->dbConn->prepare($sql);
        $stmt->execute([$post['pname'],$post["in_stock"],$post["phone_no"], $post["is_booking"], $post["b_open"], $post["b_close"], $post['cond'], $post['sp'], $post['asp'], $post['q1'], $post['op'], $post['q2'], $post['desc'], $post['md'], $post['pi'], $post['di'], $post['ser'], $id]);
       
        $arr =$_FILES['file']['name'];           
        $q = "delete  from images  where pid=?";
        $stmt2 = $this->dbConn->prepare($q);
        @$stmt2->execute([$id]);
        if ($arr[0] != NULL)
        {
            $total = count($_FILES['file']['name']);

            // for new files
            for ($i = 0; $i < $total; $i++) {
                if (isset($_FILES['file']['name'][$i])) {
                    $tmp_File_Path = $_FILES['file']['tmp_name'][$i];
                    if ($_FILES['file']['name'][$i] != '') {
                        $new_File_Path = "product/" . $_FILES['file']['name'][$i];
                    }

                    $que = "insert into images set img=?,pid=?";
                    $stmt2 = $this->dbConn->prepare($que);
                    move_uploaded_file($tmp_File_Path, $new_File_Path);
                    @$stmt2->execute([$new_File_Path, $id]);
                }
            }
        }


        // for old files

        if (isset($_POST["hide_img1"])) {
            $total = count($_POST["hide_img1"]);

            for ($i = 0; $i < $total; $i++) {
                $que = "insert into images set img=?,pid=?";
                $stmt2 = $this->dbConn->prepare($que);
                @$stmt2->execute([$_POST["hide_img1"][$i], $id]);
            }
        }
    
    }

    public function delete($id) {
        $sql = "delete product, images from product join images ON product.pid = images.pid where product.pid=?";
        $stmt = $this->dbConn->prepare($sql);
        $stmt->execute([$id]);
        header('location:dashboard.php?page=view_product');
    }

    public function delete_img($id) {
        $q = "delete from images where id=?";
        $stmt4 = $this->dbConn->prepare($q);
        if ($stmt4->execute([$id]))
            echo 1;
        else
            echo 2;
    }

}

?>