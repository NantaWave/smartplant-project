<nav class="navbar navbar-expand content-menu font d-flex align-items-start">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav flex-column ">
        <li class="nav-item">
          <a href="/dashboard">
            <img src="/images/analyze.png" class="logo-menu"></br>
          </a>
          <a class="nav-link btn-menu rounded-4 font-menu" href="/dashboard">Dashboard</a>
        </li>
        @if(Session::get('keyEmail'))
        <li class="nav-item ">
          <a href="/watering">
            <img src="/images/watering.png" class="logo-menu"></br>
          </a>
          <a class="nav-link btn-menu rounded-4 font-menu" href="/watering">Watering</a>
        </li>

        <li class="nav-item">
          <a href="/planting">
            <img src="/images/planting.png" class="logo-menu"></br>
          </a>
          <a class="nav-link btn-menu rounded-4 font-menu" href="/planting">Planting</a>
        </li>

        <li class="nav-item" style="margin-top:20px;">
          @if(Session::get('keyEmail') && in_array(Session::get('keyEmail'), $authAd->toArray()))
          <a href="/fetchData">
            <i class="bi bi-info-circle-fill icon-info"></i>
          </a>
          <a class="nav-link btn-menu rounded-4 font-menu" href="/fetchData">Counter Info</a>
          @endif
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>
