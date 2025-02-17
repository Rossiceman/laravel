<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

    <!--
    <li class="nav-item">
      <a href="/admin/prize/list" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
          獎項
        </p>
      </a>
    </li>-->

    <li class="nav-item{{ Request::is('admin/news/*') ? " menu-open" : "" }}"">
            <a href=" #" class="nav-link{{ Request::is('admin/news/*') ? " active" : ""}}">
      <i class="nav-icon fas fa-copy"></i>
      <p>
        最新消息
        <i class="right fas fa-angle-left"></i>
      </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="/admin/news/type/list" class="nav-link{{ Request::is("admin/news/type/list") ? " active" : ""}}">
            <i class="far fa-circle nav-icon"></i>
            <p>類別管理</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin/news/list" class="nav-link{{ Request::is("admin/news/list") ? " active" : ""}}"">
                  <i class=" far fa-circle nav-icon"></i>
            <p>最新消息</p>
          </a>
        </li>
        </li>
      </ul>
    </li>

    <li class="nav-item{{ Request::is('admin/about/*') ? " menu-open" : "" }}"">
            <a href=" #" class="nav-link{{ Request::is('admin/about/*') ? " active" : ""}}">
      <i class="nav-icon fas fa-copy"></i>
      <p>
        關於我們
        <i class="right fas fa-angle-left"></i>
      </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="/admin/about/title/list" class="nav-link{{ Request::is("admin/about/title/list") ? " active" : ""}}">
            <i class="far fa-circle nav-icon"></i>
            <p>標籤管理</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin/about/about/list/2" class="nav-link{{ Request::is("admin/about/about/2/*") ? " active" : ""}}"">
                  <i class=" far fa-circle nav-icon"></i>
            <p>關於</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin/about/about/list/3" class="nav-link{{ Request::is("admin/about/advance/3/*") ? " active" : ""}}"">
                  <i class=" far fa-circle nav-icon"></i>
            <p>優勢</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin/about/event/list" class="nav-link{{ Request::is("admin/about/events/*") ? " active" : ""}}"">
                  <i class=" far fa-circle nav-icon"></i>
            <p>記事</p>
          </a>
        </li>
        </li>
      </ul>
    </li>
    
    <li class="nav-item">
      <a href="/banner/list" class="nav-link{{ Request::is("banner/*") ? " active" : "" }}">
        <i class="nav-icon far fa-image"></i>
        <p>
          廣告管理
        </p>
      </a>
    </li>
    <li class="nav-item{{ Request::is('admin/product/*') ? " menu-open" : "" }}"">
            <a href=" #" class="nav-link{{ Request::is('admin/product/*') ? " active" : ""}}">
      <i class="nav-icon fas fa-copy"></i>
      <p>
        產品管理
        <i class="right fas fa-angle-left"></i>
      </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="/admin/product/layer1/list" class="nav-link{{ Request::is("admin/product/layer1/list") ? " active" : ""}}">
            <i class="far fa-circle nav-icon"></i>
            <p>大類別管理</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin/product/layer2/list" class="nav-link{{ Request::is("admin/product/layer2/list") ? " active" : ""}}">
            <i class="far fa-circle nav-icon"></i>
            <p>中類別管理</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin/product/layer3/list" class="nav-link{{ Request::is("admin/product/layer3/list") ? " active" : ""}}">
            <i class="far fa-circle nav-icon"></i>
            <p>小類別管理</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin/product/store/list" class="nav-link{{ Request::is("admin/product/store/list") ? " active" : ""}}"">
                  <i class=" far fa-circle nav-icon"></i>
            <p>商店管理</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin/product/list" class="nav-link{{ Request::is("admin/product/list") ? " active" : ""}}"">
                  <i class=" far fa-circle nav-icon"></i>
            <p>商品管理</p>
          </a>
        </li>
        </li>
      </ul>
    </li>


    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-chart-pie"></i>
        <p>
          Charts
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="pages/charts/chartjs.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>ChartJS</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/charts/flot.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Flot</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/charts/inline.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Inline</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/charts/uplot.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>uPlot</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-tree"></i>
        <p>
          UI Elements
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="pages/UI/general.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>General</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/UI/icons.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Icons</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/UI/buttons.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Buttons</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/UI/sliders.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Sliders</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/UI/modals.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Modals & Alerts</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/UI/navbar.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Navbar & Tabs</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/UI/timeline.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Timeline</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/UI/ribbons.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Ribbons</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-edit"></i>
        <p>
          Forms
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="pages/forms/general.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>General Elements</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/forms/advanced.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Advanced Elements</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/forms/editors.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Editors</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/forms/validation.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Validation</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-table"></i>
        <p>
          Tables
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="pages/tables/simple.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Simple Tables</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/tables/data.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>DataTables</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/tables/jsgrid.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>jsGrid</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-header">EXAMPLES</li>
    <li class="nav-item">
      <a href="pages/calendar.html" class="nav-link">
        <i class="nav-icon far fa-calendar-alt"></i>
        <p>
          Calendar
          <span class="badge badge-info right">2</span>
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="pages/gallery.html" class="nav-link">
        <i class="nav-icon far fa-image"></i>
        <p>
          Gallery
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="pages/kanban.html" class="nav-link">
        <i class="nav-icon fas fa-columns"></i>
        <p>
          Kanban Board
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon far fa-envelope"></i>
        <p>
          Mailbox
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="pages/mailbox/mailbox.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Inbox</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/mailbox/compose.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Compose</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/mailbox/read-mail.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Read</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-book"></i>
        <p>
          Pages
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="pages/examples/invoice.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Invoice</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/examples/profile.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Profile</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/examples/e-commerce.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>E-commerce</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/examples/projects.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Projects</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/examples/project-add.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Project Add</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/examples/project-edit.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Project Edit</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/examples/project-detail.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Project Detail</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/examples/contacts.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Contacts</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/examples/faq.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>FAQ</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/examples/contact-us.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Contact us</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon far fa-plus-square"></i>
        <p>
          Extras
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>
              Login & Register v1
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/examples/login.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Login v1</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/examples/register.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Register v1</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/examples/forgot-password.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Forgot Password v1</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/examples/recover-password.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Recover Password v1</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>
              Login & Register v2
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/examples/login-v2.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Login v2</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/examples/register-v2.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Register v2</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/examples/forgot-password-v2.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Forgot Password v2</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/examples/recover-password-v2.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Recover Password v2</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="pages/examples/lockscreen.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Lockscreen</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/examples/legacy-user-menu.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Legacy User Menu</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/examples/language-menu.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Language Menu</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/examples/404.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Error 404</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/examples/500.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Error 500</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/examples/pace.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Pace</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/examples/blank.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Blank Page</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="starter.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Starter Page</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-search"></i>
        <p>
          Search
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="pages/search/simple.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Simple Search</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/search/enhanced.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Enhanced</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-header">MISCELLANEOUS</li>
    <li class="nav-item">
      <a href="iframe.html" class="nav-link">
        <i class="nav-icon fas fa-ellipsis-h"></i>
        <p>Tabbed IFrame Plugin</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="https://adminlte.io/docs/3.1/" class="nav-link">
        <i class="nav-icon fas fa-file"></i>
        <p>Documentation</p>
      </a>
    </li>
    <li class="nav-header">MULTI LEVEL EXAMPLE</li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="fas fa-circle nav-icon"></i>
        <p>Level 1</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-circle"></i>
        <p>
          Level 1
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Level 2</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>
              Level 2
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-dot-circle nav-icon"></i>
                <p>Level 3</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-dot-circle nav-icon"></i>
                <p>Level 3</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-dot-circle nav-icon"></i>
                <p>Level 3</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Level 2</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="fas fa-circle nav-icon"></i>
        <p>Level 1</p>
      </a>
    </li>
    <li class="nav-header">LABELS</li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon far fa-circle text-danger"></i>
        <p class="text">Important</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon far fa-circle text-warning"></i>
        <p>Warning</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon far fa-circle text-info"></i>
        <p>Informational</p>
      </a>
    </li>
  </ul>
</nav>