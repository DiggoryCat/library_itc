<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html"><img src="./src/assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title fs-3">Menu</li>

                <li class="sidebar-item active ">
                    <a href="index.php" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Bảng điều khiển</span>
                    </a>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Quản lí sách</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="index.php?controller=book">Tất cả sách</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="index.php?controller=book&action=importbooks">Nhập thêm sách</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item  has-sub ">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-puzzle"></i>
                        <span>Quản lí hoạt động</span>
                    </a>
                    <ul class=" submenu ">
                        <li class=" submenu-item ">
                            <a href=" index.php?controller=history">Trả sách</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="component-alert.html">Đăng kí mượn</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>