<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Quantumm Laundry</title>

    <!-- Box Icons  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- Styles  -->
    <link rel="shortcut icon" href="assets/img/kxp_fav.png" type="image/x-icon">
    <link rel="stylesheet" href="{!! asset('assets/css/admin.css') !!}">
</head>

<body>
    <div class="sidebar close">
        <!-- ========== Logo ============  -->
        <a href="#" class="logo-box">
            <i class='bx bxl-xing'></i>
            <div class="logo-name">Quantum Laundry</div>
        </a>

        <!-- ========== List ============  -->
        <ul class="sidebar-list">
            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="{{ url('/') }}" class="link">
                        <i class='bx bx-grid-alt'></i>
                        <span class="name">Dashboard</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="{{ url('/') }}" class="link submenu-title">Dashboard</a>
                    <!-- submenu links here  -->
                </div>
            </li>

            <li>
                <div class="title">
                    <a href="{{ url('/adminservice') }}" class="link">
                        <i class='bx bx-history'></i>
                        <span class="name">Layanan</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="{{ url('/adminservice') }}" class="link submenu-title">Layanan</a>
                    <!-- submenu links here  -->
                </div>
            </li>

            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="{{ url('/adminuser') }}" class="link">
                        <i class='bx bx-history'></i>
                        <span class="name">Users</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="{{ url('/adminuser') }}" class="link submenu-title">User</a>
                    <!-- submenu links here  -->
                </div>
            </li>

            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="{{ url('/adminpackage') }}" class="link">
                        <i class='bx bx-history'></i>
                        <span class="name">Paket</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="{{ url('/adminpackage') }}" class="link submenu-title">Paket</a>
                    <!-- submenu links here  -->
                </div>
            </li>

            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="{{ url('/logout') }}" class="link">
                        <i class='bx bx-cog'></i>
                        <span class="name">Log Out</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="{{ url('/logout') }}" class="link submenu-title">Log Out</a>
                    <!-- submenu links here  -->
                </div>
            </li>
        </ul>
    </div>

    <!-- ============= Home Section =============== -->
    <section class="home">
        <div class="toggle-sidebar">
            <i class='bx bx-menu'></i>
            <div class="text"></div>
        </div>
        <div class="container">
            <h1>Paket</h1>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">
                Tambah
            </button>
            <!-- Modal -->
            <div class="modal fade" id="tambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="tambahLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form method="post" action="/adminpackage" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="tambahLabel">Tambah Paket</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="name" name="name">
                                    <label for="name">Nama</label>
                                    @error('name')
                                        <p class="text-danger">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="description" name="description">
                                    <label for="description">Deskripsi</label>
                                </div>

                                <div class="mb-3">
                                    <label for="image" class="form-label">Gambar</label>
                                    <input type="file" name="image" id="image" class="form-control"
                                        placeholder="image">
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="price" name="price">
                                    <label for="price">Harga</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="time" name="time">
                                    <label for="time">Waktu Pengerjaan</label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!--  EditModal -->

            <div class="modal fade" id="edit" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form method="post" action="" id="edit-form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="package-id" name="package-id">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="editLabel">Edit Paket</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="package-name"
                                        name="package-name">
                                    <label for="package-name">Nama</label>
                                    @error('package-name')
                                        <p class="text-danger">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="package-description"
                                        name="package-description">
                                    <label for="package-description">Deskripsi</label>
                                </div>

                                @foreach ($package as $p)
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Gambar</label>
                                        <input type="file" name="package-image" id="package-image"
                                            class="form-control">
                                        <img src="{{ asset('uploads/package/' . $p->image) }}" width="70px"
                                            height="70px" alt="package-image">
                                    </div>
                                @endforeach

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="package-price"
                                        name="package-price">
                                    <label for="package-price">Harga</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="package-time"
                                        name="package-time">
                                    <label for="package-time">Waktu</label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <br>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Paket</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Waktu</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($package as $p)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $p->name }}</td>
                            <td>{{ $p->description }}</td>
                            <td>Rp. {{ $p->price }}</td>
                            <td>{{ $p->time }} Hari</td>
                            <td>
                                <img src="{{ asset('uploads/package/' . $p->image) }}" width="70px" height="70px"
                                    alt="package-image">
                            </td>

                            <td>
                                <button type="button" class="btn btn-primary editbtn" data-bs-toggle="modal"
                                    data-package-name="{{ $p->name }}" data-package-id="{{ $p->id }}"
                                    data-package-description="{{ $p->description }}"
                                    data-package-price="{{ $p->price }}" data-package-time="{{ $p->time }}"
                                    data-package-image="{{ $p->image }}" data-bs-target="#edit">
                                    Edit
                                </button>
                                {{-- <a href="{{ url('adminpackage/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a> --}}
                                @section('name')
                                @endsection

                                <form action="/adminpackage/{{ $p->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Apakah anda serius dengan menghapusnya?')">Delete</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

    <!-- Link JS -->
    <script type="text/javascript" src="{!! asset('assets/js/main.js') !!}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#edit').on('show.bs.modal', function(e) {

                var id = $(e.relatedTarget).data('package-id');
                var name = $(e.relatedTarget).data('package-name');
                var description = $(e.relatedTarget).data('package-description');
                var price = $(e.relatedTarget).data('package-price');
                var time = $(e.relatedTarget).data('package-time');
                var image = $(e.relatedTarget).data('package-image');

                $('#edit-form').attr("action", "/adminpackage/" + id);
                $('#package-id').attr("value", id);
                $('#package-name').attr("value", name);
                $('#package-description').attr("value", description);
                $('#package-price').attr("value", price);
                $('#package-time').attr("value", time);
                $('#package-image').attr("value", image);

            })

            $('#edit').on('hidden.bs.modal', function(e) {
                $(this).find('form').trigger('reset');

            })
        });
    </script>
</body>
</body>

</html>
