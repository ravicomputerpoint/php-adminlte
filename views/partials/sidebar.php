 <?php
  $sidebar = require_once 'config/adminlte.php';
  $items = $sidebar['sidebar'];
?>
 <!--begin::Sidebar-->
      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="?page=dashboard" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="public/assets/img/AdminLTELogo.png"
              alt="AdminLTE Logo"
              class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">AdminLTE 4</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <?php foreach ($items as $item): ?>
                    <?php if ($item['type'] === 'link'): ?>
                        <li class="nav-item">
                            <a href="<?= $item['url'] ?>" class="nav-link <?= $item['active'] ? 'active' : '' ?>">
                                <i class="nav-icon <?= $item['icon'] ?>"></i>
                                <p><?= $item['text'] ?></p>
                            </a>
                        </li>
                    <?php elseif ($item['type'] === 'header'): ?>
                        <li class="nav-header"><?= $item['text'] ?></li>
                    <?php elseif ($item['type'] === 'treeview'): ?>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon <?= $item['icon'] ?>"></i>
                                <p>
                                    <?= $item['text'] ?>
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <?php foreach ($item['submenu'] as $sub): ?>
                                    <li class="nav-item">
                                        <a href="<?= $sub['url'] ?>" class="nav-link">
                                            <i class="nav-icon <?= $sub['icon'] ?>"></i>
                                            <p><?= $sub['text'] ?></p>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
      <!--end::Sidebar-->