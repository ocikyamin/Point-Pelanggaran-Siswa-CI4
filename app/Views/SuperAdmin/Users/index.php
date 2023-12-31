<?= $this->extend('SuperAdmin/Layouts') ?>
<?= $this->section('content') ?>
<nav aria-label="breadcrumb" class="mb-1">
<ol class="breadcrumb border border-info px-3 py-2 rounded">
<li class="breadcrumb-item">
<a href="#" class="text-info d-flex align-items-center"><i class="ti ti-layout-dashboard fs-4"></i></a>
</li>
<li class="breadcrumb-item active text-info font-medium" aria-current="page">
Users
</li>
</ol>
</nav>

<!-- ---------------------
start Custom Icon Tab
---------------- -->
<div class="card">
<div class="card-body">
<div class="mb-2">
<h5 class="mb-0">User Management</h5>
</div>

<div>
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
<li class="nav-item">
<a
class="nav-link d-flex active"
data-bs-toggle="tab"
href="#gurus"
role="tab"
>
<span
><i class="ti ti-users fs-4"></i>
</span>
<span class="d-none d-md-block ms-2">Akun Guru</span>
</a>
</li>
<li class="nav-item">
<a
class="nav-link d-flex"
data-bs-toggle="tab"
href="#eksekutif"
role="tab"
>
<span
><i class="ti ti-user fs-4"></i>
</span>
<span class="d-none d-md-block ms-2">Super User</span>
</a>
</li>

</ul>
<!-- Tab panes -->
<div class="tab-content">
<div class="tab-pane active" id="gurus" role="tabpanel">
<div class="p-3">
<div class="alert alert-info">
Pengaturan Akun Guru
</div>
<div id="guru-list"></div>
</div>
</div>
<div class="tab-pane p-3" id="eksekutif" role="tabpanel">

<div class="alert alert-info">
Pengaturan Akun
</div>
<div id="user-list"></div>
</div>

</div>
</div>
</div>
</div>
<!-- ---------------------
end Custom Icon Tab
---------------- -->




<script>
    function GuruList() {
    $.ajax({
        url: "<?=base_url('admin/users/guru')?>",
        data: "data",
        dataType: "json",
        success: function (response) {
            $('#guru-list').html(response.guru_table)
        }
    });
}
function UserList() {
    $.ajax({
        url: "<?=base_url('admin/users/super')?>",
        data: "data",
        dataType: "json",
        success: function (response) {
            $('#user-list').html(response.user_table)
        }
    });
}



$(document).ready(function () {
    UserList()
    GuruList()
});
</script>

<?= $this->endSection() ?>