<!--begin::Body-->
  <body class="lockscreen bg-body-secondary">
    <div class="lockscreen-wrapper">
      <div class="lockscreen-logo">
        <a href="../index2.html"><b>Admin</b>LTE</a>
      </div>

      <div class="lockscreen-name">John Doe</div>

      <div class="lockscreen-item">
        <div class="lockscreen-image">
          <img
  src="{{ asset('dist/assets/img/user1-128x128.jpg') }}"
  alt="Product Image"
  class="img-size-50"
/>
        </div>

        <form class="lockscreen-credentials">
          <div class="input-group">
            <input type="password" class="form-control shadow-none" placeholder="password" />
            <div class="input-group-text border-0 bg-transparent px-1">
              <button type="button" class="btn shadow-none">
                <i class="bi bi-box-arrow-right text-body-secondary"></i>
              </button>
            </div>
          </div>
        </form>
      </div>

      <div class="help-block text-center">Enter your password to retrieve your session</div>
      <div class="text-center">
        <a href="login.html" class="text-decoration-none">Or sign in as a different user</a>
      </div>
      <div class="lockscreen-footer text-center">
        Copyright © 2014-2026 &nbsp;
        <b
          ><a
            href="https://adminlte.io"
            class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
            >AdminLTE.io</a
          ></b
        >
        <br />
        All rights reserved
      </div>
    </div>

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
  </body>
  <!--end::Body-->
</html>