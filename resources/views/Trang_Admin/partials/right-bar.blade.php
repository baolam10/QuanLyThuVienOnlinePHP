<div class="right-bar">
    <div class="rightbar-title">
        <a href="javascript:void(0);" class="right-bar-toggle float-right">
            <i class="mdi mdi-close"></i>
        </a>
    </div>
    <div class="slimscroll-menu">
        <!-- User box -->
        <div class="user-box">
            <div class="user-img">
                <img src="{{ asset('assets/images/users/user-1.jpg') }}" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
            </div>
            @if (Auth::check())
            {{ Auth::user()->ho_ten }}
            @endif
            <h5><a href="javascript: void(0);"></a> </h5>
            <p class="text-muted mb-0"><small>Quản trị Viên</small></p>
        </div>

        
    </div> <!-- end slimscroll-menu-->
</div>