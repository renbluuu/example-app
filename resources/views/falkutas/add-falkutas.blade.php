<x-layout>
    <!-- As a link -->
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
  </div>
</nav>
    <h1>Add Falkutas</h1>

    <form action="/falkutas" method="post">
      @csrf
      <div class="form-group">
        <input name="name_falkutas" type="text"class="form-control" placeholder="Nama Falkutas">
      </div>
         <div class="form-group">
        <input 
        name="name_dekan" type="text" class="form-control" placeholder="Nama Dekan">
      </div>
      <button type="submit" class="btn btn-primary">
        Simpan
      </button>
    </form>
    
</x-layout>