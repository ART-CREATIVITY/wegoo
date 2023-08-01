<div class="destination">
    <div class="card h-100" >
        <div class="card-img-top h-100 w-100 position-relative">
            <img src="{{asset($image)}}" class="" alt="...">
            @if ($mode=='large')
                <div class="position-absolute top-0 app-bg-gradient w-100 h-100 p-3">
                    <div class="d-flex h-100 justify-content-end flex-column">
                        <div class="w-100 d-flex align-items-end justify-content-between">
                            <div class="text-white fw-bold">
                                <p class="mb-0">{{$name}}</p>
                                <span>{{$country}}</span>
                            </div>
                            <div class="text-white">
                                <span class="text-uppercase fw-bold">{{$continent}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif ($mode=='small')
            <div class="position-absolute top-0 w-100 h-100 p-3">
                <div class="d-flex h-100 justify-content-end flex-column">
                    <div class="w-100 d-flex align-items-end">
                        icon
                    </div>
                </div>
            </div>
            @endif
        </div>
        <div class="card-body">
            @if ($mode=='small')
            <div class="w-100 d-flex align-items-center justify-content-between">
                <div class="fw-bold">
                    <p class="mb-0">{{$name}}</p>
                    <span>{{$country}}</span>
                </div>
                <div class="">
                    <span class="fw-bold">{{$continent}}</span>
                </div>
            </div>
            @endif
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>
