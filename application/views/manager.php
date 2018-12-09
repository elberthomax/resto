<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Comelo - Smart Restaurant</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/manager-style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<div class="wrapper">

    <div class="container-fluid">
        <div class="row">

            <div class="col-9" id="left">

                <div id="menuList" class="row menu-list">
                </div>
            </div>

            <div class="col-3" id="right">

                <div class="row h-auto">
                    <div class="comelo text-center">
                        <h1 class="comelo">
                            comelo
                        </h1>
                    </div>
                </div>

                <div id="category" class="row h-75 menu-category-list">
                </div>

                <div class="row">
                    <div class="col-lg-12 footer-button">
                        <div class="card">
                            <div class="container-fluid h-25">
                                <div class="row">
                                    <div class="col-4" >
                                        <div class="row">
                                            <button class="edit-btn btn" data-target="#addCategory" data-toggle="modal">
                                                <h4 onclick = "openAddCategory()" >Add</h4>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="col-4" >
                                        <div class="row">
                                            <button class="edit-btn btn" data-target="#editCategory" data-toggle="modal">
                                                <h4 onclick = "openUpdateCategory()">Edit</h4>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="row">
                                            <button class="edit-btn btn" data-target="#deleteMenu" data-toggle="modal">
                                                <h4 onclick ="openDeleteCategory()">Delete</h4>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Modal Edit-->
            <div class="modal" tabindex="-1" id="editMenu">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit</h4>
                            <button class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" placeholder="Nama Menu" id="editNama">
                                </div>

                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input type="text" class="form-control" placeholder="Link Gambar Menu" id="editGambar">
                                </div>

                                <div class="form-group">
                                    <label>Kategori</label>
                                    <div class="dropdown">
                                        <select name="kategori" id="editKategori" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="text" class="form-control" placeholder="Harga Menu" id="editHarga">
                                </div>

                            </form>
                        </div>

                        <div class="modal-footer">
                            <button id="editButton" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>

            <!--Delete Menu Modal-->
            <div class="modal" tabindex="-1" id="deleteMenu">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add</h4>
                            <button class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <div class="modal-body">
                            <p>Yakin ingin menghapus?</p>
                        </div>

                        <div class="modal-footer">
                            <button id="deleteButton" class="btn btn-danger" data-dismiss="modal">Ya</button>
                            <button class="btn btn-primary" data-dismiss="modal">Tidak</button>
                        </div>
                    </div>
                </div>
            </div>

            <!--Modal Add Menu-->
            <div class="modal" tabindex="-1" id="addNewMenu">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add</h4>
                            <button class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" placeholder="Nama Menu" id="inputNama" required>
                                </div>

                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input type="text" class="form-control" placeholder="Link Gambar Menu" id="inputGambar" required>
                                </div>

                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="text" class="form-control" placeholder="Harga Menu" id="inputHarga" required>
                                </div>

                            </form>
                        </div>

                        <div class="modal-footer">
                            <button onclick="addMenu()" class="btn btn-primary" data-dismiss="modal" type="submit">Save</button>
                        </div>
                    </div>
                </div>
            </div>

            <!--Add Category Modal-->
            <div class="modal" tabindex="-1" id="addCategory">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add</h4>
                            <button class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" placeholder="Nama Kategori" id="addCategoryName">
                                </div>

                            </form>
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-primary" onClick="addCategory()">Add</button>
                        </div>
                    </div>
                </div>
            </div>

            <!--Edit Category Modal-->
            <div class="modal" tabindex="-1" id="editCategory">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit</h4>
                            <button class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" placeholder="Nama Kategori" id="editCategoryName">
                                </div>

                            </form>
                        </div>

                        <div class="modal-footer">
                            <button id="editCategoryButton" class="btn btn-primary">Edit</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<script type="text/javascript">
    let url = {
        "addMenu" : "http://localhost/resto/index.php/manager/add_menu",
        "updateMenu" : "http://localhost/resto/index.php/manager/update_menu",
        "deleteMenu" : " http://localhost/resto/index.php/manager/delete_menu",
        "addCategory" : "http://localhost/resto/index.php/manager/add_category",
        "updateCategory" : "http://localhost/resto/index.php/manager/update_category",
        "deleteCategory" : "http://localhost/resto/index.php/manager/delete_category"
    }
    let list = <?php echo json_encode($dataMenu); ?>;
    let modal = document.getElementById('myModal');
    let selected = "";

    function sendPost(url, data, callback){
        let xhr = new XMLHttpRequest();
        xhr.open("POST", url, true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                callback(JSON.parse(xhr.responseText));
            }
        };
        xhr.send(JSON.stringify(data));
    }

    function initialize(){
        kateList = <?php echo json_encode($dataKate); ?>;
        let text = '';
        let text1 = '';
        kateList.forEach(function (item){
			text += `<h3 id="${item["id"]}" onclick="select(${item["id"]})" style = "text-align:center; width:100%">${item["name"]}</h3>\n`;
			text1 += `<option value="${item["id"]}">${item["name"]}</option>`;
        });
        document.getElementById("category").innerHTML = text;
        document.getElementById("editKategori").innerHTML = text1;
        select(kateList[0]["id"]);
    }

    function select(categoryId){
        if(selected !== categoryId){
            if(selected !== ""){
                document.getElementById(selected).setAttribute("class","");
            }
            selected = categoryId;
            selectedObj = document.getElementById(categoryId);
            selectedObj.setAttribute("class","selected");
            categoryName = selectedObj.innerHTML;
            let text = '';
            list.forEach(function(item, index){
                if(item["category"] == categoryName){
                    text +=`
                        <div class="col-6" >
                            <div class="card">
                                <img class="card-img-top h-75"  src="${item["image_url"]}" alt="${item["name"]}">
                                <div class="container h-25">
                                    <div class="row">
                                        <div class="col-3" >
                                            <div class="row">
                                                <button class="edit-btn btn" data-target="#editMenu" data-toggle="modal" onclick="openUpdate(${index})">
                                                    <h4>Edit</h4>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="row text-center">
                                                <h3>${item["name"]}</h3>
                                            </div>
                                        </div>

                                        <div class="col-3" >
                                            <div class="row">
                                                <button class="delete-btn btn" data-target="#deleteMenu" data-toggle="modal" onclick="openDelete(${index})">
                                                    <h4>Delete</h4>
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>`;

                    // text += `
                    // <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
                    // <a onclick="openUpdate(${index})">
                    // <img src="${item["image_url"]}" class="img-responsive">
                    // <h3 class="work-title">${item["name"]}</h3>
                    // <p id="Harga">Rp. ${item["price"]}</p>
                    // </a>
                    // </div>`;
                }
            });
            text += `
            <div class="col-6" onclick="openAdd()">
                <div class="card">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <button class="add-btn btn btn-primary btn-sm" data-target="#addNewMenu" data-toggle="modal">
                                                +
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>`;
            document.getElementById("menuList").innerHTML = text;
        }
    }

    function openAdd(){
        document.getElementById("addNewMenu").style.display = "block";
    }
    function openUpdate(index){
        document.getElementById('editGambar').value = list[index]["image_url"];
        document.getElementById('editNama').value = list[index]["name"];
        document.getElementById('editHarga').value = list[index]["price"];
        document.getElementById('editKategori').value = selected;
        document.getElementById('editButton').setAttribute("onclick",`updateMenu(${index})`);
        document.getElementById("editMenu").style.display = "block";
    }

    function openDelete(index){
        document.getElementById('deleteButton').setAttribute("onclick",`deleteMenu(${index})`);
        document.getElementById("deleteMenu").style.display = "block";
    }

    function openAddCategory(){
        document.getElementById("addCategory").style.display = "block";
    }

    function openUpdateCategory(){
        selectedValue = document.getElementById(selected).innerHTML;
        document.getElementById('editCategoryName').value = selectedValue;
        document.getElementById('editCategoryButton').setAttribute("onclick",`updateCategory()`);
        document.getElementById("editCategory").style.display = "block";
    }
    function openDeleteCategory(){
        document.getElementById('deleteButton').setAttribute("onclick",`deleteCategory()`);
        document.getElementById("deleteMenu").style.display = "block";
    }


    function addCategory(){
        let data = {"category":document.getElementById("addCategoryName").value};
        checkFullyFilled(data,function(){
            sendPost(url["addCategory"], data, function(response){
                alert("add success");
                location.reload();
            });
        });
    }
    function updateCategory(){
        let data = {
            "id":selected,
            "name":document.getElementById("editCategoryName").value
        };
        checkFullyFilled(data,function(){
            sendPost(url["updateCategory"], data, function(response){
                alert("update success");
                location.reload();
            });
        });
    }
    function deleteCategory(){
        let data = {"id":selected};
        sendPost(url["deleteCategory"], data, function(response){
            if(response["status"] === "fail")
                alert("gagal menghapus, kategori tidak kosong");
            else{
                alert("delete success");
                location.reload();
            }
        });
    }

    function updateMenu(index){
        data = {
            "id": list[index]["id"],
            "name": document.getElementById('editNama').value,
            "category_id": document.getElementById('editKategori').value,
            "price": document.getElementById('editHarga').value,
            "image_url": document.getElementById('editGambar').value
        };
        checkFullyFilled(data, function(data){
                sendPost(url["updateMenu"], data, function(response){
                    alert("update success");
                    location.reload();
                });
            }
        );
    }
    function addMenu(index){
        data = {
            "name": document.getElementById('inputNama').value,
            "category_id": selected,
            "image_url": document.getElementById('inputGambar').value,
            "price": document.getElementById('inputHarga').value
        };
        console.log(data);
        checkFullyFilled(data, function(){
                sendPost(url["addMenu"], data, function(response){
                    alert("add success");
                    location.reload();
                });
            }
        );
    }

    function deleteMenu(index){
        data = {
            "id": list[index]["id"]
        };
        sendPost(url["deleteMenu"], data, function(response){
            alert("delete success");
            location.reload();
        });
    }
    function checkFullyFilled(data, callback){
        let fullyFilled = true;
        for(var key in data){
            if(data[key] === ""){
                fullyFilled = false;
                break;
            }
        };
        if(fullyFilled){
            callback(data);
        }else{
            alert("data tidak lengkap");
        }
    }


    // When the user clicks anywhere outside of the modal, close it
    initialize();
    // window.onclick = function(event) {
    //     if (event.target == modal) {
    //         modal.style.display = "none";
    //     }else if (event.target == modalKate) {
    //         modalKate.style.display = "none";
    //     }
    // }
</script>
</body>
</html>