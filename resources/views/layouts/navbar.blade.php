{{-- jquery & bootstrap cdn --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<style>
    .cog-icon {
        right: 10px;
        position: absolute;
        top: 10px;
        font-size: 35px;
        color: white;
        /* spin */
        animation: spin 14s linear infinite;
    }

    @keyframe spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

</style>

<div class="row navbar-brand">
    <a style="text-decoration:none" href="/dashboard-app">
        <span class="item-info">IC</span><span class="text-warn">WAREHOUSE</span>
    </a>
    <a href="#" id="settingsButton">
        <i class='bx bxs-cog cog-icon' style="color: black"></i>
    </a>
</div>

{{-- bootstrap modal template --}}
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModallabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 10px">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModallabel">Menu Ganti Background</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" style="outline: none;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="loginModalbody">
                <div class="row container">
                    <label for="menuPassword">Password</label>
                    <input type="password" class="form-control" id="menuPassword">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="outline: none;">Keluar</button>
                <button type="button" class="btn btn-primary" id="loginModalbtn" style="outline: none;" disabled>Masuk</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#settingsButton').click(function() {
            $('#loginModal').modal('show');
        });

        $('#menuPassword').keyup(function() {
            if ($(this).val() == '') {
                $('#loginModalbtn').prop('disabled', true);
            } else {
                $('#loginModalbtn').prop('disabled', false);
            }
        });

        $('#loginModalbtn').click(function() {
            console.log($('#menuPassword').val());
            if ($('#menuPassword').val() == 'icwarehouse') {
                $('#loginModal').modal('hide');
                window.location = '{{ route('background') }}';
                // set localStorage login to true
                localStorage.setItem('login', true);
            } else {
                alert('Password salah!');
            }
        });
    });

</script>
