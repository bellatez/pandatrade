<section class="sidebar">
 
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    
    <li class="@yield('transactions')">
      <a href="/gtrade/transactions">
        <i class="fa fa-cc-mastercard"></i> <span>Transactions</span>
        <span class="pull-right-container">
        </span>
      </a>
    </li>
    <li class="@yield('products')">
      <a href="/gtrade/products">
        <i class="fa fa-cart-arrow-down"></i> <span>Items</span>
        <span class="pull-right-container">
        </span>
      </a>
    </li>
   
    <li class="@yield('debts')"> 
      <a href="/gtrade/debts">
        <i class="fa fa-user"></i> <span>Debts</span>
        <span class="pull-right-container">
        </span>
      </a>
    </li>
    <li class="@yield('analysis')">
      <a href="/gtrade/analysis">
        <i class="fa fa-bar-chart"></i> <span>Balance Sheet</span>
        <span class="pull-right-container">
        </span>
      </a>
    </li>
    <li class="header">EXTRAS</li>
    <li class="@yield('calendar')">
      <a href="/gtrade/calendar">
        <i class="fa fa-calendar"></i> <span>Calendar</span>
        <span class="pull-right-container">
        </span>
      </a>
    </li>
    <li class="@yield('documentation')">
      <a href="/gtrade/documentation">
        <i class="fa fa-file-text"></i> <span>Documentation</span>
        <span class="pull-right-container">
        </span>
      </a>
    </li>  
    <li>
      <a class="fa fa-sign-out" 
          href="{{ route('logout') }}"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();"> Sign out
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
      </form>
    </li>  
</section>