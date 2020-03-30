<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      {{-- <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Link 1 <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/link2">Link 2</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Mas link
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/link3">Link 3</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/link4">Link 4</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/link5">Link 5</a>
          </div>
        </li>
      </ul> --}}
      <ul class="navbar-nav mr-auto">
        {{-- recorremos el arreglo menu que pasamos desde el provider --}}
        @foreach ($menu as $item => $it)

            {{-- Esto funciona cuando tenemos subelementos como el dropdown --}}
            @if (is_array($it['child']) )
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{ $it['btn'] }}
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  
                  @foreach ($it['child'] as $ch)
                      <a class="dropdown-item" href="/{{ $ch['route'] }}"> @lang($ch['btn']) </a>
                  
                      <div class="dropdown-divider"></div>
                  @endforeach
              </div>
          </li>
            @else
                {{-- si no tiene seria un link normal --}}
                <li class="nav-item">
                    <a class="nav-link" href="/{{ $it['route'] }}">{!! $it['btn'] !!}</a>
                </li>
            @endif

        @endforeach
    </ul>
    </div>
  </nav>