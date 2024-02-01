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

            <h1>Users</h1>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">
                Tambah
            </button>
            <!-- Modal -->

            <div class="modal fade" id="tambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="tambahLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form method="post" action="/adminuser">
                        @csrf
                        <div class="modal-content">

                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="tambahLabel">Tambah User</h1>
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
                                    <input type="text" class="form-control" name="username" id="username">
                                    <label for="username">Username</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="password" name="password">
                                    <label for="password">Password</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="email" id="email">
                                    <label for="email">Email</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="phone" id="phone">
                                    <label for="phone">Phone</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="address" id="address">
                                    <label for="address">Address</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="role" id="role">
                                    <label for="role">Role</label>
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
                    <form method="post" action="" id="edit-form">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="admin-id" name="admin-id">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="editLabel">Edit User</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="admin-name" name="admin-name">
                                    <label for="admin-name">Nama</label>
                                    @error('admin-name')
                                        <p class="text-danger">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="admin-username"
                                        id="admin-username">
                                    <label for="admin-username">Username</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="admin-password"
                                        name="admin-password">
                                    <label for="admin-password">Password</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="admin-email" id="admin-email">
                                    <label for="admin-email">Email</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="admin-phone" id="admin-phone">
                                    <label for="phone">Phone</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="admin-address"
                                        id="admin-address">
                                    <label for="address">Address</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="admin-role" id="admin-role">
                                    <label for="role">Role</label>
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
                        <th scope="col">Nama</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nomor Handphone</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $u)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $u->name }}</td>
                            <td>{{ $u->username }}</td>
                            <td>{{ $u->email }}</td>
                            <td>{{ $u->phone }}</td>
                            <td>{{ $u->address }}</td>
                            <td>{{ $u->role }}</td>
                            <td>
                                <button type="button" class="btn btn-primary editbtn" data-bs-toggle="modal"
                                    data-admin-name="{{ $u->name }}" data-admin-id="{{ $u->id }}"
                                    data-admin-password="{{ $u->password }}"
                                    data-admin-username="{{ $u->username }}" data-admin-email="{{ $u->email }}"
                                    data-admin-phone="{{ $u->phone }}" data-admin-address="{{ $u->address }}"
                                    data-admin-role="{{ $u->role }}" data-bs-target="#edit">
                                    Edit
                                </button>
                                @section('name')
                                @endsection

                                <form action="/adminuser/{{ $u->id }}" method="post" class="d-inline">
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

                var id = $(e.relatedTarget).data('admin-id');
                var name = $(e.relatedTarget).data('admin-name');
                var password = $(e.relatedTarget).data('admin-password');
                var username = $(e.relatedTarget).data('admin-username');
                var email = $(e.relatedTarget).data('admin-email');
                var phone = $(e.relatedTarget).data('admin-phone');
                var address = $(e.relatedTarget).data('admin-address');
                var role = $(e.relatedTarget).data('admin-role');

                $('#edit-form').attr("action", "/adminuser/" + id);
                $('#admin-id').attr("value", id);
                $('#admin-name').attr("value", name);
                $('#admin-password').attr("value", password);
                $('#admin-username').attr("value", username);
                $('#admin-email').attr("value", email);
                $('#admin-phone').attr("value", phone);
                $('#admin-address').attr("value", address);
                $('#admin-role').attr("value", role);

            })
            $('#edit').on('hidden.bs.modal', function(e) {
                $(this).find('form').trigger('reset');

            })
        });
    </script>
</body>
</body>

</html>
