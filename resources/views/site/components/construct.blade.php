      <section class="welcome">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-5 p-0">
              <div class="welcome-img"><img src="{{ asset($construction->image) }}" alt="{{ $construction->title }}"></div>
            </div>
            <div class="col-md-7">
              <div class="welcome-content">
                <h2>{{ $construction->title }}</h2>
                <p>{!! $construction->description !!}</p>
                <div class="service-box">
                  <h4>{{ $feature->title }}  </h4>
                  <ul> 
                     @foreach ($features as $feat)
                        <li><i class="bi bi-hand-index-thumb"> </i>
                            <p> {{$feat->name}}</p>
                        </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>