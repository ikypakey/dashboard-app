<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Bootstrap Homepage</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        {{-- <a class="navbar-brand" href="#">Homepage</a> --}}
        <div class="collapse navbar-collapse">
            <div class="navbar-nav ml-auto">
                <button class="btn btn-outline-danger" type="button"
                    onclick="window.location.href='{{ route('welcome') }}'">Exit</button>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-4">
        <!-- Header -->
        <h1 class="display-2">Manajemen Background</h1>

        <!-- Buttons -->
        <div class="row mt-3 mb-3">
            <div class="col">
                <button class="btn btn-primary btn-block" id="addBackground">Tambah Background</button>
            </div>
            <div class="col">
                <button class="btn btn-secondary btn-block" id="chooseBackground">Pilih Background Dashboard</button>
            </div>
        </div>

        <!-- Table -->
        <table class="table mt-4" id="backgroundTable">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Background</th>
                    <th scope="col">Gambar Background</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Table rows can be added here -->
            </tbody>
        </table>
    </div>

    {{-- modal --}}
    <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadModalLabel">Upload Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="uploadForm">
                        @csrf
                        <div class="form-group">
                            <label for="imageName">Image Name</label>
                            <input type="text" class="form-control" id="imageName" name="imageName" required>
                            <p class="text-muted">Nama harus diisi sebelum upload</p>
                        </div>
                        <div class="form-group">
                            <label for="imageFile">Image File</label>
                            <input type="file" class="form-control-file" id="imageFile" name="imageFile" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="uploadButton" disabled>Upload</button>
                </div>
            </div>
        </div>
    </div>

    {{-- edit modal --}}
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Background</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editForm" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="editImageName">Image Name</label>
                            <input type="text" class="form-control" id="editImageName" name="editImageName" required>
                        </div>
                        <div class="form-group">
                            <label for="editImageFile">Image File</label>
                            <input type="file" class="form-control-file" id="editImageFile" name="editImageFile">
                            <img id="previewImage" src="" height="100" class="mt-2" />
                        </div>
                        <input type="hidden" id="editBackgroundId" name="backgroundId">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="deleteButton">Delete</button>
                    <button type="button" class="btn btn-primary" id="saveEditButton">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    {{-- set background modal --}}
    <div class="modal fade" id="chooseBackgroundModal" tabindex="-1" role="dialog"
        aria-labelledby="chooseBackgroundModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="chooseBackgroundModalLabel">Choose Dashboard Background</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <select class="form-control" id="backgroundDropdown" disabled>
                        <option value="">Select background</option>
                    </select>
                    <img id="backgroundPreview" src="" height="100" class="mt-2 d-none" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="setBackgroundButton">Set</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap JS and jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

<script>
    $(document).ready(function() {

        // check if localStorage login is true, if not, show an alert and redirect to homepage
        if (localStorage.getItem('login') !== 'true') {
            alert('Anda tidak memiliki akses ke halaman ini!');
            window.location = '{{ route('welcome') }}';
        }

        window.onunload = function() {
            localStorage.clear();
        };

        var backgrounds = []; // Define backgrounds in a broader scope

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // enable upload button when all required fields are filled
        $('#imageName, #imageFile').on('keyup change', function() {
            if ($('#imageName').val() == '' || $('#imageFile').val() == '') {
                $('#uploadButton').prop('disabled', true);
            } else {
                $('#uploadButton').prop('disabled', false);
            }
        });

        var table = $('#backgroundTable').DataTable({
            "processing": true
            , "serverSide": true
            , "ajax": {
                "url": "background-get"
                , "type": "GET"
                , "dataSrc": "data"
            }
            , "columns": [{
                "data": "DT_RowIndex"
            }, {
                "data": "background_name"
            }, {
                "data": "background_image"
                , "render": function(data) {
                    return '<img src="' + data + '" height="100" />';
                }
            }, {
                "data": "status"
            }, {
                "data": "background_id"
                , "render": function(data) {
                    return '<button class="btn btn-primary btn-edit" data-id="' + data +
                        '">Edit</button>';
                }
            }]
        });

        $('#addBackground').click(function() {
            $('#uploadModal').modal('show');
        });

        $('#uploadModal').on('show.bs.modal', function() {
            $('#uploadForm')[0].reset();
        });

        $('#uploadButton').click(function() {
            var formData = new FormData($('#uploadForm')[0]);
            $.ajax({
                url: '{{ route('create_background') }}', // Adjust the URL to your route
                type: 'POST'
                , data: formData
                , contentType: false
                , processData: false
                , success: function(response) {
                    $('#uploadModal').modal('hide');
                    swal("Sukses!", "Berhasil menambahkan gambar!", "success");
                    table.ajax.reload();
                }
                , error: function(response) {
                    swal("Gagal!", "Gagal menambahkan gambar!", "error");
                }
            });
        });

        $('#backgroundTable').on('click', '.btn-edit', function() {
            var backgroundId = $(this).data('id');
            $.ajax({
                url: '{{ route('get_one_background') }}', // Adjust the URL to your route
                type: 'GET'
                , data: {
                    background_id: backgroundId
                }
                , success: function(data) {
                    console.log(data);
                    $('#editImageName').val(data.background_name);
                    $('#previewImage').attr('src', data.background_image);
                    $('#editBackgroundId').val(backgroundId);
                    $('#editModal').modal('show');
                }
                , error: function() {
                    alert('Error fetching background data');
                }
            });
        });

        $('#saveEditButton').click(function() {
            var formData = new FormData($('#editForm')[0]);
            formData.append('_method', 'PUT'); // Laravel hack to simulate PUT request
            $.ajax({
                url: '{{ route('update_background') }}', // Adjust the URL to your route
                type: 'POST'
                , data: formData
                , contentType: false
                , processData: false
                , success: function(response) {
                    $('#editModal').modal('hide');
                    swal("Sukses!", "Berhasil mengubah gambar!", "success");
                    table.ajax.reload();
                }
                , error: function(response) {
                    swal("Gagal!", "Gagal mengubah gambar!", "error");
                }
            });
        });


        $('#deleteButton').click(function() {
            var backgroundId = $('#editBackgroundId').val();
            $.ajax({
                url: '{{ route('delete_background') }}', // Adjust the URL to your route
                type: 'DELETE'
                , data: {
                    background_id: backgroundId
                }
                , success: function(response) {
                    $('#editModal').modal('hide');
                    swal("Sukses!", "Berhasil menghapus gambar!", "success");
                    table.ajax.reload();
                }
                , error: function(response) {
                    swal("Gagal!", "Gagal menghapus gambar!", "error");
                }
            });
        });

        $('#chooseBackground').click(function() {
            $('#chooseBackgroundModal').modal('show');
        });

        $('#chooseBackgroundModal').on('show.bs.modal', function() {
            $('#backgroundDropdown').empty().append('<option value="">Select background</option>');
            $('#backgroundPreview').addClass('d-none').attr('src', '');
            $.ajax({
                url: '{{ route('get_background_dropdown') }}', // Adjust the URL to your route
                type: 'GET'
                , success: function(response) {
                    backgrounds = response; // Assign response to backgrounds
                    backgrounds.forEach(function(background) {
                        // Ensure that background_id is treated as a string in the Option constructor
                        $('#backgroundDropdown').append(new Option(background
                            .background_name, String(background
                                .background_id)));
                    });
                    $('#backgroundDropdown').prop('disabled', false);
                }
            });
        });

        $('#chooseBackgroundModal').on('hidden.bs.modal', function() {
            $('#backgroundDropdown').prop('disabled', true).empty();
            $('#backgroundPreview').addClass('d-none').attr('src', '');
        });

        $('#backgroundDropdown').change(function() {
            var backgroundId = $(this).val();
            var selectedBackground = backgrounds.find(bg => String(bg.background_id) === backgroundId);
            if (selectedBackground) {
                $('#backgroundPreview').removeClass('d-none').attr('src', selectedBackground
                    .background_image);
            }
        });

        $('#setBackgroundButton').click(function() {
            var selectedBackgroundId = $('#backgroundDropdown').val();
            if (selectedBackgroundId) {
                $.ajax({
                    url: '{{ route('set_background') }}'
                    , type: 'PUT'
                    , data: {
                        'background_id': selectedBackgroundId
                    }
                    , success: function() {
                        swal("Sukses!", "Berhasil mengubah background!", "success");
                        $('#chooseBackgroundModal').modal('hide');
                        table.ajax.reload();
                    }
                    , error: function() {
                        swal("Gagal!", "Gagal mengubah background!", "error");
                    }
                });
            } else {
                swal("Gagal!", "Gagal mengubah background!", "error");
            }
        });
    });

</script>

</html>