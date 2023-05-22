<?php
    // Formulário de login
    session_start();

    if(!isset($_POST['btn_submit']))
    {
        showForm();
    }
    else{
        RegProduct();
    }

    function ShowForm(){
        //Product Form
        echo '<form class="form" id="form" method="POST" action="form.php" enctype="multipart/form-data">
                <p>Insira os dados do produto</p><br>
                Nome: <input type="text" size="20" name="name_product"><br><br>
                Tipo:
                <select name="type_product" id="type">
                    <option>Produto</option>
                    <option>Telemovel</option>
                    <option>Acessorio</option>
                </select><br><br>
                Marca: 
                <select name="brand_product" id="brand">
                    <option>Marca</option>
                    <option>Apple</option>
                    <option>Samsung</option>
                    <option>Xiaomi</option>
                </select><br><br>
                Modelo: <input type="text" name="model_product"><br><br>
                Preço: <input type="text" name="price_product"><br><br>
                Cor: 
                <select name="color_product" id="color">
                    <option>Cor</option>
                    <option>Preto</option>
                    <option>Branco</option>
                    <option>Outro</option>
                </select><br><br>
                Desconto: <input type="number" name="discount_product"><br><br>
                Imagem: <input type="file" name="image_product"><br><br>
                Descrição: <br><textarea row="10" cols="95" name="desc_product"></textarea><br><br>
                <input type="submit" name="btn_submit" value="Submeter">
                <input type="button" onclick="Reset()"value="Limpar">
                </form>
                <script>
                    function Reset() {
                    document.getElementById("form").reset();
                    }
                </script>
            ';
    }

    function RegProduct()
    {
        //executes the necessary operation to add the product to the database
        $name = $_POST['name_product'];
        $type = $_POST['type_product'];
        $brand = $_POST['brand_product'];
        $model = $_POST['model_product'];
        $price = $_POST['price_product'];
        $color = $_POST['color_product'];
        $discount = $_POST['discount_product'];
        $img = $_FILES['image_product'];
        $description = $_POST['desc_product'];
        $error = false;

        //Check for errors
        if($name == "" || $type == "Produto" || $brand == "Marca" || $model == "" || $price = "" || $color == "Cor" || $discount == "" || $description == "") {
            echo '<div>Não foram preenchidos os campos necessários.</div>';
            $error = true;
        }

        if($error)
        {
            ShowForm();
            exit; 
        }

        include 'config.php';
        $connect = new PDO("mysql:dbname=$database;host=$host", $user, $password);

        //Adds the product to the smartphone table 
        if ($type == "Telemovel") {
            //Checks if the product already exists
            $motor = $connect->prepare("SELECT NameTitle FROM smartphones WHERE NameTitle = ?");
            $motor->bindParam(1, $name, PDO::PARAM_STR);
            $motor->execute();

            if($motor->rowCount() != 0)
            {
                //Error - The product alreadfy exists in the database
                echo '<div>O produto já se encontra na base de dados</div>';
                $connect = null;
                ShowForm();
                exit;
            }
            else {
                //Add new product
                $motor = $connect->prepare("SELECT MAX(SmartphoneId) AS MaxId FROM smartphones");
                $motor->execute();
                $temp = $motor->fetch(PDO::FETCH_ASSOC)['MaxId'];
                if($temp == null) {
                $temp = 1;
                }
            else {
                $temp ++;
                }

                $sql = "INSERT INTO smartphones VALUES(:NameTitle, :SmartphoneId, :Model, :Brand, :RawPrice, :Color, :Discount, :MainImg, :Descricao)";
                $motor = $connect->prepare($sql);
                $motor->bindParam(":NameTitle", $name, PDO::PARAM_STR);
                $motor->bindParam(":SmartphoneId", $temp, PDO::PARAM_INT);
                $motor->bindParam(":Model", $model, PDO::PARAM_STR);
                $motor->bindParam(":Brand", $brand, PDO::PARAM_STR);
                $motor->bindParam(":RawPrice", $price, PDO::PARAM_INT);
                $motor->bindParam(":Color", $color, PDO::PARAM_STR);
                $motor->bindParam(":Discount", $discount, PDO::PARAM_INT);
                $motor->bindParam(":MainImg", $img['name'], PDO::PARAM_STR);
                $motor->bindParam(":Descricao", $description, PDO::PARAM_STR);

                $motor->execute();
                $connect = null;

                
                move_uploaded_file($img['tmp_name'],"img/Products/".$img['name']);

                //Add product Sucessful
                echo'<div>Produto inserido na base de dados.</div>';
            }
        }

        //Adds the product to the acessory table
        else if ($type == "Acessorio") {
            //Checks if the product already exists
            $motor = $connect->prepare("SELECT nome FROM accessories WHERE nome = ?");
            $motor->bindParam(1, $name, PDO::PARAM_STR);
            $motor->execute();

            if($motor->rowCount() != 0)
            {
                //Error - The product alreadfy exists in the database
                echo '<div>O produto já se encontra na base de dados</div>';
                $connect = null;
                ShowForm();
                exit;
            }
            else {
                //Add new product
                $motor = $connect->prepare("SELECT MAX(id) AS MaxId FROM accessories");
                $motor->execute();
                $temp = $motor->fetch(PDO::FETCH_ASSOC)['MaxId'];
                if($temp == null) {
                $temp = 0;
                }
            else {
                $temp ++;
                }

                $sql = "INSERT INTO accessories VALUES(:nome, :id, :modelo, :marca, :preco_cheio, :Cor, :desconto, :image, :descricao)";
                $motor = $connect->prepare($sql);
                $motor->bindParam(":nome", $name, PDO::PARAM_STR);
                $motor->bindParam(":id", $temp, PDO::PARAM_INT);
                $motor->bindParam(":modelo", $model, PDO::PARAM_STR);
                $motor->bindParam(":marca", $brand, PDO::PARAM_STR);
                $motor->bindParam(":preco_cheio", $price, PDO::PARAM_STR);
                $motor->bindParam(":Cor", $color, PDO::PARAM_STR);
                $motor->bindParam(":desconto", $discount, PDO::PARAM_INT);
                $motor->bindParam(":descricao", $description, PDO::PARAM_STR);
                $motor->bindParam(":image", $img['name'], PDO::PARAM_STR);

                $motor->execute();
                $connect = null;

                
                move_uploaded_file($img['tmp_name'],"img/Products/".$img['name']);

                //Add product Sucessful
                echo'<div>Produto inserido na base de dados.</div>';
            }

        }
    }
?>