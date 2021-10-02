 <nav class="shift">
    <ul>
      <li><a href="{{route('home')}}">HOME</a></li>
      <li><a href="{{route('dashbord')}}">DASHBORD</a></li>
      <li><a href="{{route('login')}}">LOGIN</a></li>
      <li><a href="{{route('register')}}">REGISTER</a></li>
      <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout').submit();" style="color:brown">LOGOUT</a></li>
      <form id="logout" action="{{route('logout')}}" method="POST">
          @csrf
      </form> 
    </ul>
  </nav>
