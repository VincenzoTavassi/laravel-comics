<header>
    <nav>
      <div class="container">
        <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="Logo" />
        <ul>
      @vite('resources/js/app.js')
          @foreach ($header_links as $link)
          <li class="{{$link['active'] ? 'active' : ''}}">
            <a :href="{{$link['link']}}">{{ $link["text"] }}</a>
          </li>
          @endforeach
        </ul>
      </div>
    </nav>
  </header>