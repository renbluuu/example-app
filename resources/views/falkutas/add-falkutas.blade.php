<x-layout title="Add-Falkutas">
    <!-- As a link -->
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
  </div>
</nav>
    <h1>Add Falkutas</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error )
        <li>{{ $error }}</li>
        @endforeach
      </ul>   
    </div>
    @endif
      

    <form action="/falkutas" method="post">
      @csrf
      <div class="form-group">
        <input name="name_falkutas" 
        type="text"
        class="form-control" 
        value="{{ old('name_falkutas') }}" 
        placeholder="Nama Falkutas">
      </div>

         <div class="form-group">
        <input 
        name="name_dekan" 
        type="text" 
        class="form-control" 
        value="{{ old('name_dekan') }}" 
        placeholder="Nama Dekan">
      </div>

      <button type="submit" class="btn btn-primary">
        Simpan
      </button>
    </form>
    
</x-layout>