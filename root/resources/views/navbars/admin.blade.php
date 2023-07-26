<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
            <a href="{{ asset('/home') }}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt" aria-hidden="true"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Menu
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ asset('/brand') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>All Brands</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/our-locations') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>All Locations</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Categories
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ asset('/menus') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>All Menus</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/categories') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>All Categories</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/sub-category') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>All Sub Categories</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Products
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ asset('/our-sizes') }}" class="nav-link">
                        <i class="far fa-envelope nav-icon"></i>
                        <p>All Sizes</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ asset('/products/create') }}" class="nav-link">
                        <i class="nav-icon fas fa-plus"></i>
                        <p>Add Product</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/products') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>All Products</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/product-contacts') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Customer Queries</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/product-info/1/edit') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Product Info</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/product-reviews') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Product Reviews</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    About US
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ asset('/our-aboutus/1/edit') }}" class="nav-link">
                        <i class="far fa-envelope nav-icon"></i>
                        <p>
                            About Us
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/our-services') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            All Services
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/our-testimonials') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Testimonials
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/our-skills') }}" class="nav-link">
                        <i class="far fa-envelope nav-icon"></i>
                        <p>
                            Skills
                        </p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ asset('/our-team') }}" class="nav-link">
                        <i class="far fa-envelope nav-icon"></i>
                        <p>
                            Team
                        </p>
                    </a>
                </li> --}}
            </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Website
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ asset('/partners') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>All Partners</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/our-terms-conditions') }}" class="nav-link">
                        <i class="far fa-envelope nav-icon"></i>
                        <p>
                            Terms & Conditions
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/return-exchange-policy') }}" class="nav-link">
                        <i class="far fa-envelope nav-icon"></i>
                        <p>
                            Return Exchange Policy
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Blogs
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ asset('/blogs-categories') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Blogs Category</p>
                            </a>
                        </li>
                         <li class="nav-item">
                            <a href="{{ asset('/blogs-sub-categories') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Blogs Sub Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset('/our-blogs') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Blogs</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Events
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ asset('/events-categories') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Events Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset('/our-events') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Events</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Training
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ asset('/training-categories') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Training Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset('/our-trainings') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Trainings</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Intructor
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ asset('/intructor') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Instructors</p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="{{ asset('/add-intructor') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Trainings</p>
                            </a>
                        </li> --}}
                    </ul>
                </li>
                
            </ul>
        </li>

        <li class="nav-item">
            <a href="{{ asset('/orders') }}" class="nav-link">
                <i class="fas fa-bell nav-icon"></i>
                <p>
                    Orders
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ asset('/vendors') }}" class="nav-link">
                <i class="fas fa-bell nav-icon"></i>
                <p>
                    Vendors
                </p>
            </a>
        </li>
        <li class="nav-item has-treeview">
            <a href="javascript:void(0)" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Purchases
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ asset('/purchase/create') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Purchase</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/purchase') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>All Purchase</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="{{ asset('/home-settings') }}" class="nav-link">
                <i class="fas fa-cog nav-icon"></i>
                <p>
                    Home Settings
                </p>
            </a>
        </li>
         <li class="nav-item">
            <a href="{{ asset('/blogs-settings') }}" class="nav-link">
                <i class="fas fa-cog nav-icon"></i>
                <p>
                    Blogs Settings
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ asset('/banners') }}" class="nav-link">
                <i class="fas fa-cog nav-icon"></i>
                <p>
                    Home Banners
                </p>
            </a>
        </li>



        <!--<li class="nav-header">ACCOUNTS</li>
<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-copy"></i>
<p>
Projects
<i class="fas fa-angle-left right"></i>
 <span class="badge badge-info right">6</span>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="{{ asset('/categories/create') }}" class="nav-link">
  <i class="nav-icon fas fa-plus"></i>
  <p>Add Project</p>
</a>
</li>
<li class="nav-item">
<a href="{{ asset('/categories') }}" class="nav-link">
  <i class="far fa-circle nav-icon"></i>
  <p>All Projects</p>
</a>
</li>
</ul>
</li>
<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-copy"></i>
<p>
Accounts
<i class="fas fa-angle-left right"></i>

</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="{{ asset('/accounts/create') }}" class="nav-link">
  <i class="nav-icon fas fa-plus"></i>
  <p>Add Account</p>
</a>
</li>
<li class="nav-item">
<a href="{{ asset('/accounts') }}" class="nav-link">
  <i class="far fa-circle nav-icon"></i>
  <p>All Accounts</p>
</a>
</li>
</ul>
</li>

<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-copy"></i>
<p>
Donors
<i class="fas fa-angle-left right"></i>

</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="{{ asset('/donors/create') }}" class="nav-link">
  <i class="nav-icon fas fa-plus"></i>
  <p>Add Donor</p>
</a>
</li>
<li class="nav-item">
<a href="{{ asset('/donors') }}" class="nav-link">
  <i class="far fa-circle nav-icon"></i>
  <p>All Donors</p>
</a>
</li>
</ul>
</li>

<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-copy"></i>
<p>
Payments
<i class="fas fa-angle-left right"></i>

</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="{{ asset('/payments/create') }}" class="nav-link">
  <i class="nav-icon fas fa-plus"></i>
  <p>Add Expense</p>
</a>
</li>
<li class="nav-item">
<a href="{{ asset('/receive/create') }}" class="nav-link">
  <i class="nav-icon fas fa-plus"></i>
  <p>Add Donation</p>
</a>
</li>
</ul>
</li>

<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-copy"></i>
<p>
Donation Slip
<i class="fas fa-angle-left right"></i>

</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="{{ asset('/receive') }}" class="nav-link">
  <i class="far fa-circle nav-icon"></i>
  <p>All Donations</p>
</a>
</li>
<li class="nav-item">
<a href="{{ asset('/payments') }}" class="nav-link">
  <i class="far fa-circle nav-icon"></i>
  <p>All Expenses</p>
</a>
</li>
</ul>
</li>

<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-copy"></i>
<p>
Reports
<i class="fas fa-angle-left right"></i>

</p>
</a>
<ul class="nav nav-treeview">

<li class="nav-item">
<a href="{{ asset('/payment-report/create') }}" class="nav-link">
  <i class="far fa-circle nav-icon"></i>
  <p>Expense Report</p>
</a>
</li>
<li class="nav-item">
<a href="{{ asset('/receive-report/create') }}" class="nav-link">
  <i class="far fa-circle nav-icon"></i>
  <p>Donation Ledger</p>
</a>
</li>
</ul>
</li> -->

        <!-- <li class="nav-header">REGISTRATION</li>
<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-edit"></i>
<p>
Child Registration
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="{{ asset('/registration/create') }}" class="nav-link">
  <i class="nav-icon fas fa-plus"></i>
  <p>Add Registration</p>
</a>
</li>
<li class="nav-item">
<a href="{{ asset('/registration') }}" class="nav-link">
  <i class="far fa-circle nav-icon"></i>
  <p>All Registrations</p>
</a>
</li>
</ul>
</li>

<li class="nav-item has-treeview" style="display: none;">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-edit"></i>
<p>
Stitching Center
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="{{ asset('/stitching-center/create') }}" class="nav-link">
  <i class="nav-icon fas fa-plus"></i>
  <p>Add Stitching</p>
</a>
</li>
<li class="nav-item">
<a href="{{ asset('/stitching-center') }}" class="nav-link">
  <i class="far fa-circle nav-icon"></i>
  <p>All Stitching</p>
</a>
</li>
</ul>
</li>

<li class="nav-item has-treeview" style="display: none;">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-edit"></i>
<p>
Special Child
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="{{ asset('/stitching-center/create') }}" class="nav-link">
  <i class="nav-icon fas fa-plus"></i>
  <p>Add Special Child</p>
</a>
</li>
<li class="nav-item">
<a href="{{ asset('/stitching-center') }}" class="nav-link">
  <i class="far fa-circle nav-icon"></i>
  <p>All Special Childs</p>
</a>
</li>
</ul>
</li>

<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-edit"></i>
<p>
Community Help
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="{{ asset('/community-help/create') }}" class="nav-link">
  <i class="nav-icon fas fa-plus"></i>
  <p>Add HELP</p>
</a>
</li>
<li class="nav-item">
<a href="{{ asset('/community-help') }}" class="nav-link">
  <i class="far fa-circle nav-icon"></i>
  <p>All Helps</p>
</a>
</li>
</ul>
</li>

<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-edit"></i>
<p>
CV
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="{{ asset('/cv/create') }}" class="nav-link">
  <i class="nav-icon fas fa-plus"></i>
  <p>Add CV</p>
</a>
</li>
<li class="nav-item">
<a href="{{ asset('/cv') }}" class="nav-link">
  <i class="far fa-circle nav-icon"></i>
  <p>All CVs</p>
</a>
</li>
</ul>
</li>
<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-edit"></i>
<p>
Salary Form
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="{{ asset('/salary-form/create') }}" class="nav-link">
  <i class="nav-icon fas fa-plus"></i>
  <p>Add Salary Slip</p>
</a>
</li>
<li class="nav-item">
<a href="{{ asset('/salary-form') }}" class="nav-link">
  <i class="far fa-circle nav-icon"></i>
  <p>All Salary Slips</p>
</a>
</li>
</ul>
</li>
<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-edit"></i>
<p>
Character Certificate
<i class="fas fa-angle-left right"></i>
<span class="badge badge-info right">6</span>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="{{ asset('/character-certificate/create') }}" class="nav-link">
  <i class="nav-icon fas fa-plus"></i>
  <p>Add Certificate</p>
</a>
</li>
<li class="nav-item">
<a href="{{ asset('/character-certificate') }}" class="nav-link">
  <i class="far fa-circle nav-icon"></i>
  <p>All Certificates</p>
</a>
</li>
</ul>
</li> -->

        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Users
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ asset('/roles/create') }}" class="nav-link">
                        <i class="nav-icon fas fa-plus"></i>
                        <p>Add User</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/roles') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>All Users</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Accounts
                    <i class="fas fa-angle-left right"></i>
                    <!-- <span class="badge badge-info right">6</span> -->
                </p>
            </a>
            <ul class="nav nav-treeview">
                <!---
<li class="nav-item">
<a href="{{ asset('/categories/create') }}" class="nav-link">
  <i class="nav-icon fas fa-plus"></i>
  <p>Add Categories</p>
</a>
</li>---->
                <li class="nav-item">
                    <a href="{{ asset('/account-group') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Account Group</p>
                    </a>
                </li>
                <!----
<li class="nav-item">
<a href="{{ asset('/sub-category/create') }}" class="nav-link">
  <i class="nav-icon fas fa-plus"></i>
  <p>Add Sub Categories</p>
</a>
</li>--->
                <li class="nav-item">
                    <a href="{{ asset('accounts') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Accounts</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('purchase') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Purchase</p>
                    </a>
                </li>
            </ul>
        </li>

        <!-- <li class="nav-item">
<a href="{{ asset('/categories') }}" class="nav-link">
<i class="nav-icon fas fa-users"></i>
<p>
Categories
</p>
</a>
</li>
<li class="nav-item">
<a href="{{ asset('/accounts') }}" class="nav-link">
<i class="nav-icon fas fa-users"></i>
<p>
Accounts
</p>
</a>
</li> -->
        <!--  <li class="nav-item">
<a href="{{ asset('/donors') }}" class="nav-link">
<i class="nav-icon fas fa-users"></i>
<p>
Donors
</p>
</a>
</li>
<li class="nav-item">
<a href="pages/widgets.html" class="nav-link">
<i class="nav-icon fas fa-th"></i>
<p>
Widgets
<span class="right badge badge-danger">New</span>
</p>
</a>
</li> -->
        <!--  <li class="nav-header">Donors</li>
<li class="nav-item">
<a href="{{ asset('/donors/create') }}" class="nav-link">
<i class="nav-icon fas fa-plus"></i>
<p>Register Donor</p>
</a>
</li>
<li class="nav-item">
<a href="{{ asset('/donors') }}" class="nav-link">
<i class="nav-icon fas fa-users"></i>
<p>All Donors</p>
</a>
</li>

<li class="nav-header">Expenses</li>
<li class="nav-item">
<a href="{{ asset('/payments/create') }}" class="nav-link">
<i class="nav-icon fas fa-plus"></i>
<p>Add Expense</p>
</a>
</li>
<li class="nav-item">
<a href="{{ asset('/payment-report/create') }}" class="nav-link">
<i class="nav-icon fas fa-users"></i>
<p>Expense Report</p>
</a>
</li>

<li class="nav-header">Receive</li>
<li class="nav-item">
<a href="{{ asset('/receive/create') }}" class="nav-link">
<i class="nav-icon fas fa-plus"></i>
<p>Receive</p>
</a>
</li>
<li class="nav-item">
<a href="{{ asset('/receive-report/create') }}" class="nav-link">
<i class="nav-icon fas fa-users"></i>
<p>Donor Ledgers</p>
</a>
</li>

<li class="nav-header">Registration</li>
<li class="nav-item">
<a href="{{ asset('/registration/create') }}" class="nav-link">
<i class="nav-icon fas fa-plus"></i>
<p>New Registration</p>
</a>
</li>
<li class="nav-item">
<a href="{{ asset('/registration') }}" class="nav-link">
<i class="nav-icon fas fa-users"></i>
<p>All Registrations</p>
</a>
</li> -->





    </ul>
</nav>
