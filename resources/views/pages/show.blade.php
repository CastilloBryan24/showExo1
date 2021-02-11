<section class="container mt-5">
    <div class="card" style="width: 18rem;">
        <img src="{{asset('img/'.$show->src)}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$show->name}}</h5>
          <h5 class="card-title">{{$show->weight}}kg</h5>
        </div>
      </div>
</section>