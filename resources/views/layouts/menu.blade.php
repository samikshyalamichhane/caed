<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link c-active" href="{{ route('dashboard') }}">
        <i class="c-sidebar-nav-icon cil-home"></i>Dashboard
    </a>
    @can('View Role')
    <a class="c-sidebar-nav-link" href="{{ route('role.index') }}">
        <i class="c-sidebar-nav-icon cib-microsoft"></i>Role
    </a>
    @endcan
    @can('View User')
    <a class="c-sidebar-nav-link" href="{{ route('user.index') }}">
        <i class="c-sidebar-nav-icon cil-user-follow"></i>User
    </a>
    @endcan
    @can('View Site')
    <a class="c-sidebar-nav-link" href="{{ route('site.index') }}">
        <i class="c-sidebar-nav-icon fab fa-battle-net"></i>Site Settings
    </a>
    @endcan
    @can('View Aboutus')
    <a class="c-sidebar-nav-link" href="{{ route('aboutus.index') }}">
        <i class="c-sidebar-nav-icon fab fa-battle-net"></i>About Us
    </a>
    @endcan
    @can('View Aboutus')
    <a class="c-sidebar-nav-link" href="{{ route('aboutus.homePage') }}">
        <i class="c-sidebar-nav-icon fab fa-battle-net"></i>HomePage
    </a>
    @endcan
    
    @can('View Slider')
    <a class="c-sidebar-nav-link" href="{{ route('slider.index') }}">
        <i class="c-sidebar-nav-icon cib-microsoft"></i>Slider
    </a>
    @endcan

    @can('View Testimonial')
    <a class="c-sidebar-nav-link" href="{{ route('approach.index') }}">
        <i class="c-sidebar-nav-icon fas fa-quote-left"></i>Approach
    </a>
    @endcan

    @can('View Vacancy')
    <a class="c-sidebar-nav-link" href="{{ route('vacancy.index') }}">
        <i class="c-sidebar-nav-icon fas fa-quote-left"></i>Vacancy
    </a>
    @endcan
<!-- 
    @can('View Testimonial')
    <a class="c-sidebar-nav-link" href="{{ route('projectreport.index') }}">
        <i class="c-sidebar-nav-icon fas fa-quote-left"></i>Projectreport
    </a>
    @endcan -->
    <!-- @can('View Publication')
    <a class="c-sidebar-nav-link" href="{{ route('publication.index') }}">
        <i class="c-sidebar-nav-icon fas fa-quote-left"></i>Publication
    </a>
    @endcan -->
    @can('View Page')
    <a class="c-sidebar-nav-link" href="{{ route('page.index') }}">
        <i class="c-sidebar-nav-icon fas fa-quote-left"></i>Page
    </a>
    @endcan
    @can('View Publication')
    <a class="c-sidebar-nav-link" href="{{ route('resource.index') }}">
        <i class="c-sidebar-nav-icon fas fa-quote-left"></i>Resources
    </a>
    @endcan
    @can('View Partner')
    <a class="c-sidebar-nav-link" href="{{ route('partner.index') }}">
        <i class="c-sidebar-nav-icon fas fa-quote-left"></i>Partner
    </a>
    @endcan
    @can('View Gallery')
    <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="c-sidebar-nav-icon cib-microsoft"></i>Gallery
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li>
                    <a class="c-sidebar-nav-link" href="{{route('gallery.index')}}">Image Gallery</a>
                </li>
            </ul>
        </li>
    @endcan
    @can('View Contactus')
    <a class="c-sidebar-nav-link" href="{{ route('contactus.index') }}">
        <i class="c-sidebar-nav-icon fas fa-id-card-alt"></i>Contact Us
    </a>
    @endcan

    @can('View Team')
    <a class="c-sidebar-nav-link" href="{{ route('team.index') }}">
        <i class="c-sidebar-nav-icon fas fa-award"></i>Teams
    </a>
    @endcan
    
    @can('View NewsEvent')
    <a class="c-sidebar-nav-link" href="{{route('newsevent.index')}}">
        <i class="c-sidebar-nav-icon fas fa-quote-left"></i>News/Events
    </a>
    @endcan
    @can('View DevelopmentProject')
        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="c-sidebar-nav-icon cib-microsoft"></i>Project
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li>
                    <a class="c-sidebar-nav-link" href="{{route('ProjectCategory.index')}}"> Category</a>
                </li>
            <li>
                <a class="c-sidebar-nav-link" href="{{route('project.index')}}">Projects</a>
            </li>
            </ul>
        </li>
    @endcan
    

