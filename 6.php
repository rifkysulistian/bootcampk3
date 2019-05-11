<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Data Programmers</title>
</head>

<body>
    <div class="card">
        <div class="card-body">
            <div class="jumbotron">
                <h3>Data Programmers</h3>
                <hr class="my-4">
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <div class="card bg-default">
                            <div class="card-header">Input Programmers</div>
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control">
                                    </div>
                            </div>
                            <div class="card-footer">
                                <input type="submit" name="tmbhProg" class="btn btn-primary text-right" value="Tambah" />
                            </div>
                            </form>

                            <?php

                            if (isset($_POST['tmbhProg'])) {
                                $name = $_POST['nama'];

                                $koneksi = mysqli_connect("localhost", "root", "", "data_programmer");

                                $result = mysqli_query($koneksi, "INSERT INTO users(id,name) VALUES('','$name')");
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                    $koneksi = mysqli_connect("localhost", "root", "", "data_programmer");
                    $show = mysqli_query($koneksi, "SELECT * FROM users");

                    while ($data = mysqli_fetch_assoc($show)) {
                        ?>
                        <div class="col-md-12 mb-3">
                            <div class="card bg-default">
                                <div class="card-header"><?php echo $data["name"]; ?></div>
                                <div class="card-body">
                                    <div class="col-xs-12">
                                        <form method="post">
                                            <div class="form-group">
                                                <?php
                                                $id_user = $data["id"];
                                                $show2 = mysqli_query($koneksi, "SELECT name from skills where user_id=$id_user");
                                                ?>
                                                <label>Skill :</label>
                                                <?php
                                                foreach ($show2 as $data2) :
                                                    echo '<b>' . $data2["name"] . '&nbsp</b>';
                                                endforeach; ?>
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" name="user_id" value="<?php echo $data["id"]; ?>">
                                                <input type="text" name="skill" class="form-control" placeholder="Masukan skill anda">
                                                <button type="submit" name="tSkill" class="btn btn-primary form-control mt-2">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php
                    try {
                        if (isset($_POST['tSkill'])) {
                            $user_id = $_POST['user_id'];
                            $name = $_POST['skill'];

                            $koneksi = mysqli_connect("localhost", "root", "", "data_programmer");

                            $result = mysqli_query($koneksi, "INSERT into skills (id,name,user_id) VALUES ('','$name','$user_id')");

                            echo '<script> location.replace("6.php"); </script>'; //redirect
                        }
                    } catch (Exception $e) {
                        echo 'Pesan:' . $e->getMessage();
                    }
                    ?>
                </div>
                <hr class="my-4">
            </div>
        </div>
    </div>
</body>

</html>