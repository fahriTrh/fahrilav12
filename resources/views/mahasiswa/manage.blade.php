<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="/logo-UINSU.png" width="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/manage-mahasiswa">Manajemen Mahasiwa</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="mt-3 mb-5">Halaman Mahasiswa</h1>

        <div class="row">
            <div class="col-8">
                <h5>Data Mahasiswa</h5>
                <table id="tableMhs" class="table table-dark">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nim</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <h4 class="my-2">Form Tambah Mahasiswa</h4>
                <form id="formMhs" action="">
                    <div class="mb-1">
                        <label for="inputName" class="form-label">Nama</label>
                        <input type="text" id="inputName" class="form-control">
                    </div>
                    <div class="mb-1">
                        <label for="inputNIM" class="form-label">NIM</label>
                        <input type="text" id="inputNIM" class="form-control">
                    </div>

                    <button id="btnSubmit" class="btn btn-primary w-100 mt-3">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    
    <script>
        $('#btnSubmit').on('click', function(e) {
            e.preventDefault()

            let name = $('#inputName').val().trim();
            let nim = $('#inputNIM').val().trim();

            if (name == '' || nim == '') {
                return alert('Masukkan nama dan NIM')
            }

            let lastNo = parseInt($('#tableMhs tbody tr:last td:first').text() || 0);
            let newNo = lastNo + 1;

            $('#tableMhs tbody').append(`
                <tr>
                    <td>${newNo}</td>
                    <td>${name}</td>
                    <td>${nim}</td>
                </tr>
            `)

            $('#inputName').val('');
            $('#inputNIM').val('');
        })
    </script>
</body>

</html>