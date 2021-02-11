<section class="container mt-5">
    <form action="/ingredient-store" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Nom de l'ingrédient</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">KG</label>
          <input type="text" name="weight" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Image</label>
          <input type="text" name="src" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</section>