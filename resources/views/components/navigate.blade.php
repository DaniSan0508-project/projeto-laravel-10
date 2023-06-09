<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
          <li class="nav-item">
              <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="/">
                  <span data-feather="home" class="align-text-bottom"></span>
                  Dashboard
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link {{ request()->is('vendas*') ? 'active' : '' }}" href="{{ route('venda.index') }}">
                  <span data-feather="file" class="align-text-bottom"></span>
                  Vendas
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link {{ request()->is('produtos*') ? 'active' : '' }}" href="{{ route('produto.index') }}">
                  <span data-feather="shopping-cart" class="align-text-bottom"></span>
                  Produtos
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link {{ request()->is('clientes*') ? 'active' : '' }}" href="{{ route('cliente.index') }}">
                  <span data-feather="users" class="align-text-bottom"></span>
                  Clientes
              </a>
          </li>
      </ul>
  </div>
</nav>
