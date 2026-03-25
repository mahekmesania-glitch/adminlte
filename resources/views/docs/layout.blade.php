@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6">
                <h3 class="mb-0">Layout</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Docs</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Layout</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <div class="container-fluid">
            <div class="callout callout-info mb-4">
              <h5 class="fw-bold">Tips</h5>
              <p>
                The
                <a
                  href="/starter.html"
                  target="_blank"
                  rel="noopener noreferrer"
                  class="callout-link"
                >
                  starter page
                </a>
                is a good place to start building your app if you’d like to start from scratch.
              </p>
            </div>

            <p>The layout consists of five major parts:</p>
            <ul>
              <li>Wrapper <code>.app-wrapper</code> . A div that wraps the whole site.</li>
              <li>Main Header <code>.app-header</code> . Contains the logo and navbar.</li>
              <li>
                Main Sidebar <code>.app-sidebar</code> . Contains the sidebar user panel and menu.
              </li>
              <li>Content <code>.app-main</code> . Contains the page header and content.</li>
              <li>Main Footer <code>.app-footer</code> . Contains the footer.</li>
            </ul>

            <h4>Layout Options</h4>
            <p>
              AdminLTE v4 provides a set of options to apply to your main layout. Each one of these
              classes can be added to the
              <code>body</code> tag to get the desired goal.
            </p>
            <ul>
              <li>
                Fixed Sidebar: use the class <code>.layout-fixed</code> to get a fixed sidebar.
              </li>
              <li>
                Mini Sidebar on Toggle: use the class
                <code>.sidebar-expand-* .sidebar-mini</code>
                to have a collapsed sidebar upon loading.
              </li>
              <li>
                Collapsed Sidebar: use the class
                <code>.sidebar-expand-* .sidebar-mini .sidebar-collapse</code> to have a collapsed
                sidebar upon loading.
              </li>
            </ul>
          </div>
          <!-- /.container-fluid -->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script
      src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
      crossorigin="anonymous"
    ></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="../js/adminlte.js"></script>
    <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
      const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
      const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave',
        scrollbarClickScroll: true,
      };
      document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);

        // Disable OverlayScrollbars on mobile devices to prevent touch interference
        const isMobile = window.innerWidth <= 992;

        if (
          sidebarWrapper &&
          OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined &&
          !isMobile
        ) {
          OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
              theme: Default.scrollbarTheme,
              autoHide: Default.scrollbarAutoHide,
              clickScroll: Default.scrollbarClickScroll,
            },
          });
        }
      });
    </script>
    <!--end::OverlayScrollbars Configure-->
    <!--end::Script-->
  </body>
  <!--end::Body-->
</html>
@endsection