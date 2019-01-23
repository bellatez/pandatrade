@extends('layout.documentation')

@section('content')

  <div class="callout callout-info lead">
    <h4>Notice!</h4>
    <p>
      It's important to read the documentation first before you start using this application inorder to be effiective and acquinted with the environment.
      <b><a href="/gtrade/analysis">Get Started</a></b>.
    </p>
  </div>
 
  <section id="introduction">
    <h2 class="page-header"><a href="#introduction">Introduction</a></h2>
    <p class="lead">
      <b>Panda Trade</b>  is a web based application software, which is intended to help manage both large scale and small scale sales businesses. This application is meant for managing business related activities.
    </p>
  </section>


  <section id="requirements">
    <h2 class="page-header"><a href="#requirements">Requirements</a></h2>
    <p class="lead">
      To be able to use this software, you'll need;
    </p>

    <ul>
      <li><b><a href="#">The Android/Desktop application: </a></b> It is used to access the online site and can be downloaded on playstore and {the website to be created}.</li>
      <li><b>Internet Connection: </b> The application has an online version, so an internet connection is needed to be able to use this app.</li>
      <li><b>An Active Email Address: </b> An active email address is needed to register and activate your account and to able to retrieve a forgotten password.</li>
      <li><b>A supported Device: </b>An android supported device or a personal computer is required to be able to use the application</li>
    </ul>
  </section>

  <section id="login">
    <h2 class="page-header"><a href="#login">Login and Registration</a></h2>
    <p class="lead">
      This is the first page that loads when you first access the application. It is the <b>login page. </b>It consists of:
      <ul>
        <li><b>2 input fields</b>, the "username" and "password" field used when logging in.</li>
        <li><b>"forgot password" link</b> which is used when a user cannot remember his password. <p><b>Note: </b> this link can only be useful if a valid email was submitted during the registration.</p></li>
        <li><b>"Register new Membership" link</b> this link goes to the registration form.
          <p><b>Note: </b>To register you will need a valid password which can be used when the password is forgotten.</p>
        </li>
      </ul>
    </p>
  </section>

  <section id="profile">
    <h2 class="page-header"><a href="#profile">Profile</a></h2>
    <p class="lead">
      The user can edit his profile on this page. It consists of 2 major sections;
      <ul>
        <li><b>Personal </b>section: this section deals with the users personal information, email, password, contact, profile photo etc.</li>
        <li><b>Business </b>section: this section deals with the users business information like business name, location, contact etc.</li>
       <b><a href="/gtrade/profile">See the profile page</a></b>
      </ul>
      <p>All the above information can be changed when you click on the edit button on the various sections.</p>
    </p>

  </section>

  <section id="features" data-spy="scroll" data-target="#scrollspy-features">
   <h2 class="page-header"><a href="#features">Features</a></h2>
   <h3 id="features-transactions">Transactions</h3>
    <p class="lead">Daily sales and expenditures are registered here. It consists of; 
      <ul>
        <li>A <b>"table"</b> where all the transactions registered can be seen with their dates registered.</li>
        <li>A <b>"new"</b> button at the top right corner of the table which when clicked takes you to a form where new transactions can be registered.</li>
      </ul>
      <b><a href="/gtrade/transactions">See the transactions page</a></b>
      <p><b>Note: </b>It is important to register both income and expenditure for each day inorder for easy generation of a balance sheet</p>
    </p>

   <h3 id="features-products">Items</h3> 
    <p class="lead">Items on sale are registered here. It consists of; 
      <ul>
        <li>A <b>"table"</b> where all the items registered can be seen with their respective quantities and unitprices.</li>
        <li>A <b>"new"</b> button at the top right corner of the table which when clicked takes you to a form where new items can be registered.</li>
        <li>An <b>"Exhausted Items"</b> button which takes you to the exhausted items table where all items which are finished or almost finished are stored. items to add to stock can also be registered here.</li>
        <li>An <b>"edit and delete"</b> button on each item registered which can be used to modify registered items and delete respectively</li>
          <li>An <b>"exhausted"</b> button on each item registered which is used to send items to the exhausted table when the item is finished or almost finished in stock</li>
      </ul>
      <b><a href="/gtrade/products">See the products page</a></b>
    </p>

   <h3 id="features-debts">Debts</h3>
    <p class="lead">All debts can be registered here. It consists of; 
      <ul>
        <li>A <b>"table"</b> where all the debts registered can be seen with their dates registered.</li>
        <li>A "new" button at the top right corner of the table which when clicked takes you to a form where new debts can be registered.</li>
      </ul>
      <p><b>Note: </b>Only items registered can be seen on the list of items to choose from in the new debt form no extra item can be added there so if an item needs to be added which is not in the list, it should be added on the products table.</p>
      <b><a href="/gtrade/debts">See the debts page</a></b>
    </p>

   <h3 id="features-analysis">Balance sheet</h3>
    <p class="lead">The summary of all the activities can be seen here. It consists of: 
      <ul>
        <li>Four(4) boxes of different colors which represent the various tables and the number of items registered on each table.</li>
        <li>Beneath it is a form called <b>"Generate Balance sheet"</b> with 2 date fields called "from" and "to".
          <ul>
            <li>The "from" field takes the date on which the balance sheet should start calculating from.</li>
            <li>the "to" field takes the date on which the calculation should end.</li>
          </ul>
          The balance sheet is generated using the range of dates giving. The balance sheet produced can be printed if needed.
        </li>
      </ul>
      <b><a href="/gtrade/analysis">See the Balance sheet page</a></b>
    </p>

  </section> 
  <section>
    <a class="btn btn-primary btn-block" href="/gtrade/analysis"><i class="fa fa-play"></i><b> &nbsp;Get Started</b></a>
  </section>

@endsection