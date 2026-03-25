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
                <h3 class="mb-0">Introduction</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Docs</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Introduction</li>
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
            <h2 id="quick-start">Quick start</h2>
            <p>There are multiple ways to install AdminLTE.</p>
            <h3 id="download--changelog">Download &amp; Changelog:</h3>
            <p>
              Always Recommended to download from GitHub latest release
              <a href="https://github.com/ColorlibHQ/AdminLTE/releases/latest">AdminLTE 4</a> for
              bug free and latest features.<br />
              Visit the <a href="https://github.com/ColorlibHQ/AdminLTE/releases">releases</a> page
              to view the changelog.<br />
              Legacy Releases are
              <a href="https://github.com/ColorlibHQ/AdminLTE/releases/tag/v3.2.0">AdminLTE 3</a> /
              <a href="https://github.com/ColorlibHQ/AdminLTE/releases/tag/v2.4.18">AdminLTE 2</a> /
              <a href="https://github.com/ColorlibHQ/AdminLTE/releases/tag/1.3.1">AdminLTE 1</a>.
            </p>
            <h2 id="stable-release">Stable release</h2>
            <h3 id="grab-from-jsdelivr-cdn">
              Grab from <a href="https://www.jsdelivr.com/package/npm/admin-lte">jsdelivr</a> CDN:
            </h3>
            <p>
              <em
                ><strong>Important Note</strong>: You needed to add separately cdn links for plugins
                in your project.</em
              >
            </p>
            <pre
              class="astro-code dark-plus"
              style="background-color: #1e1e1e; color: #d4d4d4; overflow-x: auto"
              tabindex="0"
              data-language="html"
            ><code><span class="line"><span style="color:#808080">&lt;</span><span style="color:#569CD6">script</span></span>
<span class="line"><span style="color:#9CDCFE">  src</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;https://cdn.jsdelivr.net/npm/admin-lte@4.0.0-rc3/dist/js/adminlte.min.js&quot;</span></span>
<span class="line"><span style="color:#9CDCFE">  crossorigin</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;anonymous&quot;</span></span>
<span class="line"><span style="color:#808080">&gt;&lt;/</span><span style="color:#569CD6">script</span><span style="color:#808080">&gt;</span></span></code></pre>
            <pre
              class="astro-code dark-plus"
              style="background-color: #1e1e1e; color: #d4d4d4; overflow-x: auto"
              tabindex="0"
              data-language="html"
            ><code><span class="line"><span style="color:#808080">&lt;</span><span style="color:#569CD6">link</span></span>
<span class="line"><span style="color:#9CDCFE">  rel</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;stylesheet&quot;</span></span>
<span class="line"><span style="color:#9CDCFE">  href</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;https://cdn.jsdelivr.net/npm/admin-lte@4.0.0-rc3/dist/css/adminlte.min.css&quot;</span></span>
<span class="line"><span style="color:#9CDCFE">  crossorigin</span><span style="color:#D4D4D4">=</span><span style="color:#CE9178">&quot;anonymous&quot;</span></span>
<span class="line"><span style="color:#808080">/&gt;</span></span></code></pre>
            <h3 id="using-the-command-line">Using The Command Line:</h3>
            <p>
              <em
                ><strong>Important Note</strong>: To install it via npm/Yarn, you need at least
                Node.js 14 or higher.</em
              >
            </p>
            <h4 id="via-npm">Via npm</h4>
            <pre
              class="astro-code dark-plus"
              style="background-color: #1e1e1e; color: #d4d4d4; overflow-x: auto"
              tabindex="0"
              data-language="bash"
            ><code><span class="line"><span style="color:#DCDCAA">npm</span><span style="color:#CE9178"> install</span><span style="color:#CE9178"> admin-lte@4.0.0-rc3</span><span style="color:#569CD6"> --save</span></span></code></pre>
            <h4 id="via-yarn">Via Yarn</h4>
            <pre
              class="astro-code dark-plus"
              style="background-color: #1e1e1e; color: #d4d4d4; overflow-x: auto"
              tabindex="0"
              data-language="bash"
            ><code><span class="line"><span style="color:#DCDCAA">yarn</span><span style="color:#CE9178"> add</span><span style="color:#CE9178"> admin-lte@4.0.0-rc3</span></span></code></pre>
            <h4 id="via-composer">Via Composer</h4>
            <pre
              class="astro-code dark-plus"
              style="background-color: #1e1e1e; color: #d4d4d4; overflow-x: auto"
              tabindex="0"
              data-language="bash"
            ><code><span class="line"><span style="color:#DCDCAA">composer</span><span style="color:#CE9178"> require</span><span style="color:#CE9178"> &quot;almasaeed2010/adminlte=4.0.0-rc3&quot;</span></span></code></pre>
            <h4 id="via-git">Via Git</h4>
            <pre
              class="astro-code dark-plus"
              style="background-color: #1e1e1e; color: #d4d4d4; overflow-x: auto"
              tabindex="0"
              data-language="bash"
            ><code><span class="line"><span style="color:#DCDCAA">git</span><span style="color:#CE9178"> clone</span><span style="color:#CE9178"> https://github.com/ColorlibHQ/AdminLTE.git</span></span></code></pre>
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->
      <footer class="app-footer">
        <!--begin::To the end-->
        <div class="float-end d-none d-sm-inline">Anything you want</div>
        <!--end::To the end-->
        <!--begin::Copyright-->
        <strong>
          Copyright &copy; 2014-2026&nbsp;
          <a href="https://adminlte.io" class="text-decoration-none">AdminLTE.io</a>.
        </strong>
        All rights reserved.
        <!--end::Copyright-->
      </footer>
      <!--end::Footer-->
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