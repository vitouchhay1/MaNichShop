@extends('layout.admin-index') 
<!-- Menu left categories -->
@section('catmenu')
<ul class="main-menu">
    <li class="active">
        <a href="index.html"><i class="zmdi zmdi-home"></i> Home</a>
    </li>
    <li class="sub-menu">
        <a href=""><i class="zmdi zmdi-view-compact"></i> Headers</a>

        <ul>
            <li><a href="textual-menu.html">Textual menu</a></li>
            <li><a href="image-logo.html">Image logo</a></li>
            <li><a href="top-mainmenu.html">Mainmenu on top</a></li>
        </ul>
    </li>
    <li><a href="typography.html"><i class="zmdi zmdi-format-underlined"></i> Typography</a></li>
    <li class="sub-menu">
        <a href=""><i class="zmdi zmdi-widgets"></i> Widgets</a>

        <ul>
            <li><a href="widget-templates.html">Templates</a></li>
            <li><a href="widgets.html">Widgets</a></li>
        </ul>
    </li>
    <li class="sub-menu">
        <a href=""><i class="zmdi zmdi-view-list"></i> Tables</a>

        <ul>
            <li><a href="{{URL::to('product')}}">Products</a></li>
            <li><a href="{{URL::to('category')}}">Categories</a></li>
        </ul>
    </li>
    <li class="sub-menu">
        <a href=""><i class="zmdi zmdi-collection-text"></i> Forms</a>

        <ul>
            <li><a href="form-elements.html">Basic Form Elements</a></li>
            <li><a href="form-components.html">Form Components</a></li>
            <li><a href="form-examples.html">Form Examples</a></li>
            <li><a href="form-validations.html">Form Validation</a></li>
        </ul>
    </li>
    <li class="sub-menu">
        <a href=""><i class="zmdi zmdi-swap-alt"></i>User Interface</a>
        <ul>
            <li><a href="colors.html">Colors</a></li>
            <li><a href="animations.html">Animations</a></li>
            <li><a href="box-shadow.html">Box Shadow</a></li>
            <li><a href="buttons.html">Buttons</a></li>
            <li><a href="icons.html">Icons</a></li>
            <li><a href="alerts.html">Alerts</a></li>
            <li><a href="preloaders.html">Preloaders</a></li>
            <li><a href="notification-dialog.html">Notifications & Dialogs</a></li>
            <li><a href="media.html">Media</a></li>
            <li><a href="components.html">Components</a></li>
            <li><a href="other-components.html">Others</a></li>
        </ul>
    </li>
    <li class="sub-menu">
        <a href=""><i class="zmdi zmdi-trending-up"></i>Charts</a>
        <ul>
            <li><a href="flot-charts.html">Flot Charts</a></li>
            <li><a href="other-charts.html">Other Charts</a></li>
        </ul>
    </li>
    <li><a href="calendar.html"><i class="zmdi zmdi-calendar"></i> Calendar</a></li>
    <li class="sub-menu">
        <a href=""><i class="zmdi zmdi-image"></i>Photo Gallery</a>
        <ul>
            <li><a href="photos.html">Default</a></li>
            <li><a href="photo-timeline.html">Timeline</a></li>
        </ul>
    </li>

    <li><a href="generic-classes.html"><i class="zmdi zmdi-layers"></i> Generic Classes</a></li>
    <li class="sub-menu">
        <a href=""><i class="zmdi zmdi-collection-item"></i> Sample Pages</a>
        <ul>
            <li><a href="profile-about.html">Profile</a></li>
            <li><a href="list-view.html">List View</a></li>
            <li><a href="messages.html">Messages</a></li>
            <li><a href="pricing-table.html">Pricing Table</a></li>
            <li><a href="contacts.html">Contacts</a></li>
            <li><a href="wall.html">Wall</a></li>
            <li><a href="invoice.html">Invoice</a></li>
            <li><a href="login.html">Login and Sign Up</a></li>
            <li><a href="lockscreen.html">Lockscreen</a></li>
            <li><a href="404.html">Error 404</a></li>
        </ul>
    </li>
    <li class="sub-menu">
        <a href="form-examples.html"><i class="zmdi zmdi-menu"></i> 3 Level Menu</a>

        <ul>
            <li><a href="form-elements.html">Level 2 link</a></li>
            <li><a href="form-components.html">Another level 2 Link</a></li>
            <li class="sub-menu">
                <a href="form-examples.html">I have children too</a>

                <ul>
                    <li><a href="">Level 3 link</a></li>
                    <li><a href="">Another Level 3 link</a></li>
                    <li><a href="">Third one</a></li>
                </ul>
            </li>
            <li><a href="form-validations.html">One more 2</a></li>
        </ul>
    </li> 
</ul>
@stop 
@section('contents')   
    @if(isset($datas)&& $datas['result']=='product')
        {!!View("products.home")->with('data',$datas)!!}
    @elseif(isset($datas) && $datas['result']=='productadd')
        {!!View("products.add")->with('data',$datas)!!}
    @elseif(isset($datas) && $datas['result']=='productedit')
        {!!View("products.edit")->with('data',$datas)!!}
    @elseif(isset($datas) && $datas['result']=='category') 
        @include('categories.home',$datas)
    @elseif(isset($datas) && $datas['result']=='catadd')  
        @include('categories.add',$datas)
    @elseif(isset($datas) && $datas['result']=='catedit')
        {!!View("categories.edit")->with('data',$datas)!!}
    @else
        {!!View("elements.home")!!}
    @endif
@stop
