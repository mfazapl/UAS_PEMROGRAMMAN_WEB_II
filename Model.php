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
                echo "<a class=\"btn btn-primary\" href='FormCakeOrder.php?id=" . $row['id_order'] . "'>edit</a>";
                echo " | ";
                echo "<a class=\"btn btn-primary\" href='CakePage.php?function=1&id=" . $row['id_order'] . "' onclick=\"return confirm('Are You Sure to Delete?')\">Delete</a>";
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
            "update cake_order set order_date='" . $order_date . "', name='" . $name . "', cake_name='" . $cake_name . "', order_status='" . $order_status . "' where id_order=" . $id_order
        );
        $result = $pdo_statement->execute();
        if (!empty($result)) {
            header('location: CakePage.php');
        }
    }

    function DeleteCOrder($id_order) {
        $stmt = koneksi()->prepare("delete from cake_order where id_order=" . $id_order);
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

    function ShowCustomer() {
        $stmt = koneksi()->prepare("SELECT * FROM pelanggan");
        $stmt->execute();
        $result = $stmt->fetchAll();

        if (!empty($result)) {
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row['cust_name'] . "</td>";
                echo "<td>" . $row['cust_number'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row["regis"] . "</td>";
                echo "<td>";
                echo "<a class=\"btn btn-primary\" href='FormPelanggan.php?id=" . $row['id_customer'] . "'>edit</a>";
                echo " | ";
                echo "<a class=\"btn btn-primary\" href='Page.php?function=1&id=" . $row['id_customer'] . "' onclick=\"return confirm('Are You Sure to Delete?')\">Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
        }
    }

    
    function AddCustomer($cust_name, $cust_number, $address) {
        $sql = "INSERT INTO `pelanggan` ( `cust_name`, `cust_number`, `address`) VALUES (:cust_name,:cust_number,:address)";
        $stmt = koneksi()->prepare($sql);
        $result = $stmt->execute(array(':cust_name' => $cust_name, ':cust_number' => $cust_number, ':address' => $address));
        if (!empty($result)) {
            header('location: Page.php');
        }
    }

    function EditCustomer() {
        $stmt = koneksi()->prepare("SELECT * FROM pelanggan where id_customer=" . $_GET["id_customer"]);
        $stmt->execute();
        $GLOBALS['result'] = $stmt->fetchAll();
    }

    function UpdateCustomer($id_customer, $cust_name, $cust_number, $address) {
        $pdo_statement = koneksi()->prepare(
            "update pelanggan set cust_name='" . $cust_name . "', cust_number='" . $cust_number . "', address='" . $address . "' where id_customer=" . $id_customer);
        $result = $pdo_statement->execute();
        if (!empty($result)) {
            header('location: Page.php');
        }
    }

    function DeleteCustomer($id_customer) {
        $stmt = koneksi()->prepare("delete from pelanggan where id_customer=" . $id_customer);
        $result = $stmt->execute();
    }

function ShowBread() {
        $stmt = koneksi()->prepare("SELECT * FROM roti");
        $stmt->execute();
        $result = $stmt->fetchAll();

        if (!empty($result)) {
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['jenis'] . "</td>";
                echo "<td>" . $row['harga'] . "</td>";
                echo "<td>";
                echo "<a class=\"btn btn-primary\" href='FormBread.php?id=" . $row['id'] . "'>edit</a>";
                echo " | ";
                echo "<a class=\"btn btn-primary\" href='BreadPage.php?function=1&id=" . $row['id'] . "' onclick=\"return confirm('Are You Sure to Delete?')\">Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
        }
    }

    function AddBread($nama, $jenis, $harga) {
        $sql = "INSERT INTO `roti` ( `nama`, `jenis`, `harga`) VALUES (:nama,:jenis,:harga)";
        $stmt = koneksi()->prepare($sql);
        $result = $stmt->execute(array(':nama' => $nama, ':jenis' => $jenis, ':harga' => $harga));
        if (!empty($result)) {
            header('location: BreadPage.php');
        }
    }

    function EditBread() {
        $stmt = koneksi()->prepare("SELECT * FROM roti where id=" . $_GET["id"]);
        $stmt->execute();
        $GLOBALS['result'] = $stmt->fetchAll();
    }

    function UpdateBread($id, $nama, $jenis, $harga) {
        $pdo_statement = koneksi()->prepare(
            "update roti set nama='" . $nama . "', jenis='" . $jenis . "', harga='" . $harga . "' where id=" . $id);
        $result = $pdo_statement->execute();
        if (!empty($result)) {
            header('location: BreadPage.php');
        }
    }

    function DeleteBread($id) {
        $stmt = koneksi()->prepare("delete from roti where id=" . $id);
        $result = $stmt->execute();
    }
