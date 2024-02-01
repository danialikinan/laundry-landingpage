<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Dropdown Menu | Korsat X Parmaga</title>

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
                    <a href="{{ url('/adminservice') }}" class="link">
                        <i class='bx bx-grid-alt'></i>
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
                    <a href="{{ url('/') }}" class="link">
                        <i class='bx bx-cog'></i>
                        <span class="name">Log Out</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="{{ url('/') }}" class="link submenu-title">Log Out</a>
                    <!-- submenu links here  -->
                </div>
            </li>
        </ul>
    </div>

    <!-- ============= Home Section =============== -->
    <section class="home">
        <div class="toggle-sidebar">
            <i class='bx bx-menu'></i>
            <div class="text">Toggle</div>
        </div>
        <div class="container">
            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
            <h1>Layanan</h1>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">
                Tambah
            </button>
            <!-- Modal -->

            <div class="modal fade" id="tambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="tambahLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form method="post" action="/adminservice" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-content">

                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="tambahLabel">Tambah Layanan</h1>
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
                        <input type="hidden" id="service-id" name="service-id">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="editLabel">Edit Layanan</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="service-name"
                                        name="service-name">
                                    <label for="service-name">Nama</label>
                                    @error('service-name')
                                        <p class="text-danger">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="service-description"
                                        name="service-description">
                                    <label for="service-description">Deskripsi</label>
                                </div>

                                @foreach ($service as $s)
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Gambar</label>
                                        <input type="file" name="service-image" id="service-image"
                                            class="form-control">
                                        <img src="{{ asset('uploads/service/' . $s->image) }}" width="70px"
                                            height="70px" alt="service-image">
                                    </div>
                                @endforeach

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
                        <th scope="col">Nama Layanan</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($service as $s)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $s->name }}</td>
                            <td>{{ $s->description }}</td>
                            <td><img src="{{ asset('uploads/service/' . $s->image) }}" width="70px" height="70px"
                                    alt="service-image"></td>
                            <td>
                                <button type="button" class="btn btn-primary editbtn" data-bs-toggle="modal"
                                    data-service-name="{{ $s->name }}" data-service-id="{{ $s->id }}"
                                    data-service-description="{{ $s->description }}"
                                    data-bs-image="{{ $s->image }}" data-bs-target="#edit">
                                    Edit
                                </button>
                                @section('name')
                                @endsection

                                <form action="/adminservice/{{ $s->id }}" method="post" class="d-inline">
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

                var id = $(e.relatedTarget).data('service-id');
                var name = $(e.relatedTarget).data('service-name');
                var description = $(e.relatedTarget).data('service-description');
                var image = $(e.relatedTarget).data('service-image');

                $('#edit-form').attr("action", "/adminservice/" + id);
                $('#service-name').attr("value", name);
                $('#service-id').attr("value", id);
                $('#service-description').attr("value", description);
                $('#service-image').attr("value", image);

            })
            $('#edit').on('hidden.bs.modal', function(e) {
                $(this).find('form').trigger('reset');

            })
        });
    </script>
</body>
</body>

</html>
