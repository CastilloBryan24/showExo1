<section class="container mt-5">
    <table class="table table-bordered table-dark">
        <thead>
          <tr>
            <th scope="col">Nom</th>
            <th scope="col">KG</th>
            <th scope="col">Plus d'info</th>
            <th scope="col">supprimer</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($ingredients as $item)    
            <tr>
              <td>{{$item->name}}</td>
              <td>{{$item->weight}}</td>
              <td><a href="/ingredient-show/{{$item->id}}" class="btn btn-danger">Show</a></td>
              <td>
                <form action="/delete-ingredient/{{$item->id}}" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
</section>