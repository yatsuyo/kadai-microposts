@if (count($errors) > 0)
    <ul class="alert alert-danger" role="alert">
        @foreach ($errors->all() as $error)
            <li class="ml-4">{{ $error }}</li>
        @endforeach
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
        <li>{!! link_to_route('signup.get', 'Signup', [], ['class' => 'nav-link']) !!}</li>
        <li><a href="#">Login</a></li>
    </ul>
                
@endif