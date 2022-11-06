<div class="mt-5">
    <h3 class="text-center text-uppercase pb-5">thêm sách vào kho</h3>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#csv">CSV</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#form">Form</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane container active" id="csv">
            <form method="post" action="index.php?controller=book&action=importbooks_action" enctype="multipart/form-data">
                <input type="file" name="file" />
                <input type="submit" name="submit_file" value="Submit" />
            </form>
        </div>
        <div class="tab-pane container fade" id="form">...</div>
    </div>
</div>