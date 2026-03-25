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
                <h3 class="mb-0">Browser Support</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Docs</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Browser Support</li>
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
          <!--begin::Container-->
          <div class="container-fluid">
            <p>AdminLTE comes with the same browser support as Bootstrap 5.</p>
            <blockquote>
              <h5 id="excerpt-from-bootstraps-official-documentation">
                Excerpt from Bootstrap’s official Documentation!
              </h5>
              <p>
                Bootstrap supports the <strong>latest, stable releases</strong> of all major
                browsers and platforms.
              </p>
              <p>
                For more details
                <a
                  href="https://getbootstrap.com/docs/5.0/getting-started/browsers-devices/#supported-browsers"
                  >look here</a
                >.
              </p>
            </blockquote>
            <p>
              You can find our supported range of browsers and their versions in
              <a href="https://github.com/ColorlibHQ/AdminLTE/blob/master/.browserslistrc"
                >our .browserslistrc file</a
              >:
            </p>
            <pre
              class="astro-code dark-plus"
              style="background-color: #1e1e1e; color: #d4d4d4; overflow-x: auto"
              tabindex="0"
              data-language="plaintext"
            ><code><span class="line"><span># https://github.com/browserslist/browserslist#readme</span></span>
<span class="line"><span></span></span>
<span class="line"><span>&gt;= 0.5%</span></span>
<span class="line"><span>last 2 major versions</span></span>
<span class="line"><span>not dead</span></span>
<span class="line"><span>Chrome &gt;= 60</span></span>
<span class="line"><span>Firefox &gt;= 60</span></span>
<span class="line"><span>Firefox ESR</span></span>
<span class="line"><span>iOS &gt;= 12</span></span>
<span class="line"><span>Safari &gt;= 12</span></span>
<span class="line"><span>not Explorer &lt;= 11</span></span></code></pre>
          </div>
          <!--end::Container-->
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