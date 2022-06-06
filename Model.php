<?php
    require("Koneksi.php");
    
    //Function Cake
    function ShowCake() {
        $stmt = koneksi()->prepare("SELECT * FROM cake");
        $stmt->execute();
        $result = $stmt->fetchAll();

        if (!empty($result)) {
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row['cake_name'] . "</td>";
                echo "<td>" . $row['cake_shape'] . "</td>";
                echo "<td>" . $row['cake_size'] . "</td>";
                echo "<td>" . $row["cake_date"] . "</td>";
                echo "<td>";
                echo "<a class=\"btn btn-primary\" href='FormCake.php?id=" . $row['id'] . "'>edit</a>";
                echo " | ";
                echo "<a class=\"btn btn-primary\" href='CakePage.php?function=1&id=" . $row['id'] . "' onclick=\"return confirm('Are You Sure to Delete?')\">Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
        }
    }

    function AddCake($cake_name, $cake_shape, $cake_size, $cake_date) {
        $sql = "INSERT INTO `cake` ( `cake_name`, `cake_shape`, `cake_size`, `cake_date`) VALUES (:nama,:cake_shape,:cake_size,:cake_date)";
        $stmt = koneksi()->prepare($sql);
        $result = $stmt->execute(array(':nama' => $cake_name, ':cake_shape' => $cake_shape, ':cake_size' => $cake_size, ':cake_date' => $cake_date));
        if (!empty($result)) {
            header('location: CakePage.php');
        }
    }

    function EditCake() {
        $stmt = koneksi()->prepare("SELECT * FROM cake where id=" . $_GET["id"]);
        $stmt->execute();
        $GLOBALS['result'] = $stmt->fetchAll();
    }

    function UpdateCake($id, $cake_name, $cake_shape, $cake_size, $cake_date) {
        $pdo_statement = koneksi()->prepare(
            "update cake set cake_name='" . $cake_name . "', cake_shape='" . $cake_shape . "', cake_size='" . $cake_size . "', cake_date='" . $cake_date . "' where id=" . $id);
        $result = $pdo_statement->execute();
        if (!empty($result)) {
            header('location: CakePage.php');
        }
    }

    function DeleteCake($id) {
        $stmt = koneksi()->prepare("delete from cake where id=" . $id);
        $result = $stmt->execute();
    }

    //Function Cake Order
    function ShowCOrder() {
        $stmt = koneksi()->prepare("SELECT * FROM cake_order");
        $stmt->execute();
        $result = $stmt->fetchAll();

        if (!empty($result)) {
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row['order_date'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['cake_name'] . "</td>";
                echo "<td>" . $row["order_status"] . "</td>";
                echo "<td>";
                echo "<a class=\"btn btn-primary\" href='FormCakeOrder.php?id=" . $row['id'] . "'>edit</a>";
                echo " | ";
                echo "<a class=\"btn btn-primary\" href='CakePage.php?function=1&id=" . $row['id'] . "' onclick=\"return confirm('Are You Sure to Delete?')\">Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
        }
    }

    
    function AddCOrder($order_date, $name, $cake_name, $order_status) {
        $sql = "INSERT INTO `cake_order` ( `order_date`, `name`, `cake_name`, `order_status`) VALUES (:order_date,:name,:cake_name,:order_status)";
        $stmt = koneksi()->prepare($sql);
        $result = $stmt->execute(array(':order_date' => $order_date, ':name' => $name, ':cake_name' => $cake_name, ':order_status' => $order_status));
        if (!empty($result)) {
            header('location: CakePage.php');
        }
    }

    function EditCOrder() {
        $stmt = koneksi()->prepare("SELECT * FROM cake_order where id_order=" . $_GET["id_order"]);
        $stmt->execute();
        $GLOBALS['result'] = $stmt->fetchAll();
    }

    function UpdateCOrder($id_order, $order_date, $name, $cake_name, $order_status) {
        $pdo_statement = koneksi()->prepare(
            "update cake set order_date='" . $order_date . "', name='" . $name . "', cake_name='" . $cake_name . "', order_status='" . $order_status . "' where id_order=" . $id_order
        );
        $result = $pdo_statement->execute();
        if (!empty($result)) {
            header('location: CakePage.php');
        }
    }

    function DeleteCOrder($id_order) {
        $stmt = koneksi()->prepare("delete from cake where id_order=" . $id_order);
        $result = $stmt->execute();
    }

    function GetAllDataMember($pdo) {
        $con ="SELECT * FROM member";
        $stmt = $pdo->prepare($con);
        $stmt->execute();
        $members = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $pdo = null;
        return $members;
    }

    function AddMember($email, $user, $pass) {
        $sql = "INSERT INTO `member` (`email`, `user`, `pass`) VALUES (:email,:user,:pass)";
        $stmt= Koneksi()->prepare($sql);
        $result = $stmt->execute([':email' => $email, ':user' => $user, ':pass' => $pass]);
        if (!empty($result)) {
            header('Location: FormLogin.php');
            exit();
        }
    }