<div class="header py-4">
  <div class="container">
    <div class="d-flex">
      @include('tabler::layouts.main-header.right-logo.logo')

      <div class="d-flex order-lg-2 ml-auto">
        @include('tabler::layouts.main-header.navbar-right-menu.notification')

        @include('tabler::layouts.main-header.navbar-right-menu.user-menu')
      </div>
      <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
        <span class="header-toggler-icon"></span>
      </a>
    </div>
  </div>
</div>
@include('tabler::layouts.main-header.navbar-right-menu.search')
